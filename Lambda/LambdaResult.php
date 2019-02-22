<?php
/**
 * Copyright (C) 2018 Iron Code Ltd - All Rights Reserved
 *
 * Unauthorised copying strictly prohibited. Proprietary and confidential.
 */

namespace IronCode\AwsBundle\Lambda;

use Aws\Result;

class LambdaResult implements LambdaResultInterface
{
    /** @var Result */
    protected $result;
    /** @var LambdaInvocation */
    protected $invocation;

    protected $_contents;

    public function __construct(Result $result, LambdaInvocation $invocation)
    {
        $this->result = $result;
        $this->invocation = $invocation;
    }

    /**
     * Returns the status code of the invocation.
     * - 200 will be returned on a successful synchronous invocation
     * - 202 will be returned on a successful asynchronous invocation
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->result->get('StatusCode');
    }

    /**
     * Returns true if an error occurred but it was handled by the function.
     * @return bool
     */
    public function hasWarning(): bool
    {
        return $this->result->get('FunctionError') === 'Handled';
    }

    /**
     * Returns true if an unhandled error occurred during the execution of the function. You can use getLog to find out
     * more.
     * @return bool
     */
    public function hasFatalError(): bool
    {
        return $this->result->get('FunctionError') === 'Unhandled';
    }

    /**
     * Returns the log output of the lambda function. This is also available in CloudWatch
     * @return string
     */
    public function getLog(): string
    {
        $logResult = $this->result->get('LogResult');
        return base64_decode($logResult);
    }

    /**
     * Returns the payload stream
     */
    public function getPayload()
    {
        return $this->result->get('Payload');
    }

    /**
     * Reads and returns the stream contents
     * @param bool $decode json_decode the contents. Default is true
     * @return mixed
     */
    public function getContents($decode = true)
    {
        if (!empty($this->_contents)) {
            return $this->_contents;
        }

        if ($decode) {
            return $this->_contents = json_decode((string)$this->getPayload());
        } else {
            return $this->getPayload();
        }
    }

	public function jsonSerialize()
	{
		$obj = new \stdClass();
		$obj->statusCode = $this->getStatusCode();
		$obj->contents = $this->getContents();
		$obj->log = $this->getLog();
		return $obj;
	}

    /**
     * @return bool
     */
    public function ok(): bool
    {
        if ($this->hasFatalError()) {
            return false;
        } else if ($this->hasWarning()) {
            return false;
        } else if (!$this->invocation->isAsync()) {
            return $this->getStatusCode() === 200;
        } else {
            return $this->getStatusCode() === 202;
        }
    }
}