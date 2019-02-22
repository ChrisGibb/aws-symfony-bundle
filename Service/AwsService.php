<?php

namespace IronCode\AwsBundle\Service;

use Aws\Credentials\CredentialProvider;
use Aws\Lambda\LambdaClient;
use Aws\S3\S3Client;

/**
 * The purpose of this class is to simplify the use of the AWS cloud services from within our symfony project.
 *
 * The responsibility of the class is to return instances of various AWS service clients with their credentials already
 * prepared.
 *
 * @package AppBundle\Service
 */
class AwsService implements AwsServiceInterface
{
    /** @var string */
    protected $region;
    /** @var CredentialProvider */
    protected $credentialsProvider;

    public function __construct(string $region)
    {
        $this->region = $region;
        $this->credentialsProvider = CredentialProvider::defaultProvider();
    }

    /**
     * @return S3Client
     */
    public function getS3Client(): S3Client
    {
        return new S3Client([
            'region' => $this->region,
            'version' => '2006-03-01',
            'credentials' => $this->credentialsProvider
        ]);
    }

	/**
	 * @return LambdaClient
	 */
	public function getLambdaClient(): LambdaClient
	{
		return new LambdaClient([
			'version' => '2015-03-31',
			'region' => $this->region,
			'credentials' => $this->credentialsProvider
		]);
	}
}