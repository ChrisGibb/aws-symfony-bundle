<?php

namespace IronCode\AwsBundle\Service;

use Aws\Lambda\LambdaClient;
use Aws\S3\S3Client;

interface AwsServiceInterface
{
    /**
     * @return S3Client
     */
    public function getS3Client(): S3Client;

    /**
     * @return LambdaClient
     */
    public function getLambdaClient(): LambdaClient;

}