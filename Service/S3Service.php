<?php

namespace IronCode\AwsBundle\Service;

use Aws\S3\S3Client;
use IronCode\AwsBundle\S3\S3GetResponse;
use IronCode\AwsBundle\S3\S3HeadResponse;
use Psr\Http\Message\StreamInterface;

class S3Service implements S3ServiceInterface
{
    /** @var AwsServiceInterface */
    protected $awsService;

    public function __construct(AwsServiceInterface $awsService)
    {
        $this->awsService = $awsService;
    }

    public function getClient(): S3Client
    {
        return $this->awsService->getS3Client();
    }

    /**
     * @param string $bucket
     * @param string $key
     * @param string|StreamInterface $body
     * @param array $options
     * @return S3GetResponse
     */
    public function upload(string $bucket, string $key, $body, $options = []): S3GetResponse
    {
        $options = array_merge([
            'Bucket' => $bucket,
            'Key' => $key,
            'Body' => $body
        ], $options);

        $response = $this->awsService->getS3Client()->putObject($options);

        return new S3GetResponse($response);
    }

    /**
     * @param $bucket
     * @param $key
     * @param array $options
     * @return S3GetResponse
     */
    public function download($bucket, $key, $options = []): S3GetResponse
    {
        $options = array_merge([
            'Bucket' => $bucket,
            'Key' => $key
        ], $options);

        $response = $this->awsService->getS3Client()->getObject($options);

        return new S3GetResponse($response);
    }

    public function exists($bucket, $key): bool
    {
        try {
            $response = $this->head($bucket, $key);
        } catch (\Exception $e) {
            return false;
        }
        return !!$response;
    }

    public function head($bucket, $key, $options = []): S3HeadResponse
    {
        $options = array_merge([
            'Bucket' => $bucket,
            'Key' => $key
        ], $options);

        $response = $this->awsService->getS3Client()->headObject($options);
        return new S3HeadResponse($response);
    }

    public function getObjectPreSigned(string $bucket, string $key, $expiry = '+60 minutes'): string
    {
        $s3Client = $this->awsService->getS3Client();

        $cmd = $s3Client->getCommand('GetObject', [
            'Bucket' => $bucket,
            'Key' => $key
        ]);

        return (string)$s3Client->createPresignedRequest($cmd, $expiry)->getUri();
    }
}