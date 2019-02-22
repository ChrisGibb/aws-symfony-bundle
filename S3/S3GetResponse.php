<?php

namespace IronCode\AwsBundle\S3;

use \Aws\Result;
use Psr\Http\Message\StreamInterface;

class S3GetResponse
{
    /** @var Result */
    protected $result;

    public function __construct(Result $result)
    {
        $this->result = $result;
    }

    /**
     * @return Result
     */
    public function getResult(): Result
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->result->get('@metadata')['statusCode'];
    }

    /**
     * @return StreamInterface
     */
    public function getBody(): StreamInterface
    {
        return $this->result->get('Body');
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->getBody()->getContents();
    }
}