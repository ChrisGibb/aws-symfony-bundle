<?php

namespace IronCode\AwsBundle\Service;

use IronCode\AwsBundle\Lambda\LambdaClientInterface;
use IronCode\AwsBundle\Lambda\LambdaInvocation;
use IronCode\AwsBundle\Lambda\LambdaResult;
use IronCode\AwsBundle\Lambda\LambdaResultInterface;

class LambdaService implements LambdaServiceInterface
{
    /** @var AwsServiceInterface */
    protected $awsService;

    public function __construct(AwsServiceInterface $awsService)
    {
        $this->awsService = $awsService;
    }

    /**
     * @param LambdaInvocation $invocation
     * @param LambdaClientInterface $lambdaClient
     * @return LambdaResult
     */
    public function invoke(LambdaInvocation $invocation, LambdaClientInterface $lambdaClient = null): LambdaResultInterface
    {
        if (!$lambdaClient){
            $lambdaClient = $this->awsService->getLambdaClient();
        }

        $result = $lambdaClient->invoke([
            'FunctionName' => $invocation->getFunction(),
            'Payload' => json_encode($invocation->getPayload()),
            'InvocationType' => $invocation->getInvocationType(),
            'LogType' => $invocation->getLoggingType()
        ]);

        return new LambdaResult($result, $invocation);
    }
}