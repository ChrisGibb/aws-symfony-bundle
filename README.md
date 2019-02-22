# IronCode\AwsBundle

This bundle acts as a wrapper around the AWS PHP SDK. It provides a number of services and helper classes which we can
use to make writing code using the AWS SDK a little bit easier.

*Note*: AWS has 'services' (e.g. Lambda, S3, EC2 etc), and symfony has 'services'. To differentiate between the two 
categories of 'service' we shall refer to AWS' services as `AWS service(s)` and symfony's as `service(s)`.  

# Installation

## 1) Copy Source

Extract the contents of the bundle into `src/IronCode/AwsBundle`.


## 2) Update AppKernel.php

Update the bundles array in `AppKernel.php` 

```php
$bundles = [
    ...,
    new IronCode\AwsBundle\IronCodeAwsBundle(),
]
``` 

## 3) Composer

Update `composer.json`

```json
{
    ...
    "autoload": {
        "psr-4": {
            ...
            "IronCode\\": "src/IronCode"
        },
        ...
    }
    ...
}
```

Once you have updated this file run `composer dump-autoload`. This will update the `vendor/autoload.php` correctly

## Services

This bundle provides the following `services`:

**AwsService**

A service that provides methods for returning clients for accessing `AWS services`. The returned clients will already 
be setup to use some credentials. 

The `AwsService` requires a few parameters `region`, and `key` and `token`. 

`key` and `token` are optional. If you pass empty `key` and `token` value the credentials of the user will be used. This 
requires that you have a `~/.aws/credentials` file present on your system. This method of authentication is handy during 
development. For more information about setting up your system credentials file see [here](https://docs.aws.amazon.com/cli/latest/userguide/cli-chap-getting-started.html).

You should have the follow parameters setup in your `parameters.yml`:

- aws_user_key: foo
- aws_user_secret: foo
- aws_region: foo

These parameters will be used by AwsBundle to configure the credentials.

In future versions of this bundle we will: 

- supply the parameters via the `config.yml` file - like bundles are supposed to do. This means you won't be forced into
using these names for your parameters.
- allow the `AwsService` to assume an AWS role. This is a better way of handling authentication in AWS as key/tokens do not
need to be managed/rotated etc.  

**S3Service**

The `S3Service`, as the name suggests gives us access to S3 functionality. At the moment this is limited to `get`, `put`
and `head` operations. S3 offers much more. If you want to access functionality that is not available from `S3Service`, 
you should call `getS3Client()` in `AwsService` to get an instance of the native `S3Client`, then you can do what ever 
you want.

The `S3Service`'s methods return `S3SomethingResponse` objects. These objects make it easier to extract information from
the results objects. If you're accessing functionality directly from the native `S3Client` you should use these helper
classes. If a helper class doesn't exist for your use case, you should create one and add it to this lib.

**LambdaService**

The `LambdaService`, as the name suggests gives us access to invoking Lambda functionality. At the moment this is 
limited simply invoking a lambda. If you want to access functionality that is not available from `S3Service`, 
you should call `getLambdaClient()` in `AwsService` to get an instance of the native `LambdaClient`, then you can do 
what ever you want.

Lambda functions can be invoked either synchronously or asynchronously.

An example of invoking a function synchronously:

```php
$result = $this->lambdaService->invoke(new LambdaInvocation($functionName, [
    'param0' => 'foo',
    'param1' => 'bar'
]));
 
```    

An example of invoking a function asynchronously:

```php
$result = $this->lambdaService->invoke(new LambdaInvocation($functionName, [
    'param0' => 'foo',
    'param1' => 'bar'
], true));   <---- we pass in true here to specify this an an asynchronous call
 
```    

If you are invoking the lambda function asynchronously you will need to have a mechanism for obtaining the result, this 
is outside the scope of this service and really depends on what you're doing e.g. the lambda may deposit its result
in an predetermined location, or you might poll it for an update or something else entirely.

The return type of the `invoke` method is `LambdaResult`. Note that the methods it provides really only work when 
invoking the lambda function synchronously. The `LambdaResult` class provides you with easy access to obtaining 
the status code of the invocation, the `body` that was returned (it will by default json_decode this for you for 
convenience), and, amongst other things, return for you the log that was generated during the lambda's execution - very
handy for debugging. you're welcome ;)  

## Usage

To make use of the `services` from this bundle you can inject them into your `commands`, `controllers` and `services` 
thusly:

in your `services.yml`

```yaml
services:
    AppBundle\Service\MyCommandControllerOrService:
        arguments:
            $awsService: '@IronCode\AwsBundle\Service\AwsService'
            $lambdaService: '@IronCode\AwsBundle\Service\LambdaService'
            $s3Service: '@IronCode\AwsBundle\Service\S3Service'

```