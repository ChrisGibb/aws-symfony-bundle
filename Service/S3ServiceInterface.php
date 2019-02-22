<?php

namespace IronCode\AwsBundle\Service;

use Aws\S3\S3Client;
use IronCode\AwsBundle\S3\S3GetResponse;
use IronCode\AwsBundle\S3\S3HeadResponse;
use Psr\Http\Message\StreamInterface;

interface S3ServiceInterface
{
    /**
     * @return S3Client
     */
    public function getClient(): S3Client;

    /**
     * @param string $bucket
     * @param string $key
     * @param string|StreamInterface $body
     * @param array $options
     * @return S3GetResponse
     */
    public function upload(string $bucket, string $key, $body, $options = []): S3GetResponse;

    /**
     * @param $bucket
     * @param $key
     * @param array $options
     * @return S3GetResponse
     */
    public function download($bucket, $key, $options = []): S3GetResponse;

    /**
     * @param $bucket
     * @param $key
     * @return bool
     */
    public function exists($bucket, $key): bool;

    /**
     * @param $bucket
     * @param $key
     * @param array $options
     * @return S3HeadResponse
     */
    public function head($bucket, $key, $options = []): S3HeadResponse;

    /**
     * @param string $bucket
     * @param string $key
     * @param string $expiry
     * @return string
     */
    public function getObjectPreSigned(string $bucket, string $key, $expiry = '+60 minutes'): string;
}