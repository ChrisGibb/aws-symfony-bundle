<?php
/**
 * Copyright (C) 2018 Iron Code Ltd - All Rights Reserved
 *
 * Unauthorised copying strictly prohibited. Proprietary and confidential.
 */

namespace IronCode\AwsBundle\Lambda;

use GuzzleHttp\Stream\StreamInterface;

interface LambdaResultInterface extends \JsonSerializable
{
    /**
     * Returns the status code of the invocation
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * Returns true if an error occurred but it was handled by the function.
     * @return bool
     */
    public function hasWarning(): bool;

    /**
     * Returns true if an unhandled error occurred during the execution of the function. You can use getLog to find out
     * more.
     * @return bool
     */
    public function hasFatalError(): bool;

    /**
     * Returns the log output of the lambda function. This is also available in CloudWatch
     * @return string
     */
    public function getLog(): string;

    /**
     * Returns the payload stream
     * @return StreamInterface
     */
    public function getPayload(); // : StreamInterface;

    /**
     * Reads and returns the stream contents
     * @param bool $decode json_decode the contents. Default is true
     * @return mixed
     */
    public function getContents($decode = true);

    /**
     * @return mixed
     */
    public function jsonSerialize() ;

    /**
     * @return bool
     */
    public function ok(): bool;
}