<?php

namespace IronCode\AwsBundle\Service;

use IronCode\AwsBundle\Lambda\LambdaClientInterface;
use IronCode\AwsBundle\Lambda\LambdaInvocation;
use IronCode\AwsBundle\Lambda\LambdaResult;
use IronCode\AwsBundle\Lambda\LambdaResultInterface;

interface LambdaServiceInterface
{
    /**
     * @param LambdaInvocation $invocation
     * @param LambdaClientInterface $lambdaClient
     * @return LambdaResult
     */
    public function invoke(LambdaInvocation $invocation, LambdaClientInterface $lambdaClient = null): LambdaResultInterface;
}