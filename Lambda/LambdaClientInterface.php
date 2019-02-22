<?php

namespace IronCode\AwsBundle\Lambda;

interface LambdaClientInterface
{
    public function addPermission(array $args = []): \Aws\Result;

    public function addPermissionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function createAlias(array $args = []): \Aws\Result;

    public function createAliasAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function createEventSourceMapping(array $args = []): \Aws\Result;

    public function createEventSourceMappingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function createFunction(array $args = []): \Aws\Result;

    public function createFunctionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteAlias(array $args = []): \Aws\Result;

    public function deleteAliasAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteEventSourceMapping(array $args = []): \Aws\Result;

    public function deleteEventSourceMappingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteFunction(array $args = []): \Aws\Result;

    public function deleteFunctionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteFunctionConcurrency(array $args = []): \Aws\Result;

    public function deleteFunctionConcurrencyAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getAccountSettings(array $args = []): \Aws\Result;

    public function getAccountSettingsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getAlias(array $args = []): \Aws\Result;

    public function getAliasAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getEventSourceMapping(array $args = []): \Aws\Result;

    public function getEventSourceMappingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getFunction(array $args = []): \Aws\Result;

    public function getFunctionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getFunctionConfiguration(array $args = []): \Aws\Result;

    public function getFunctionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getPolicy(array $args = []): \Aws\Result;

    public function getPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function invoke(array $args = []): \Aws\Result;

    public function invokeAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function invokeAsyncAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listAliases(array $args = []): \Aws\Result;

    public function listAliasesAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listEventSourceMappings(array $args = []): \Aws\Result;

    public function listEventSourceMappingsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listFunctions(array $args = []): \Aws\Result;

    public function listFunctionsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listTags(array $args = []): \Aws\Result;

    public function listTagsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listVersionsByFunction(array $args = []): \Aws\Result;

    public function listVersionsByFunctionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function publishVersion(array $args = []): \Aws\Result;

    public function publishVersionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putFunctionConcurrency(array $args = []): \Aws\Result;

    public function putFunctionConcurrencyAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function removePermission(array $args = []): \Aws\Result;

    public function removePermissionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function tagResource(array $args = []): \Aws\Result;

    public function tagResourceAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function untagResource(array $args = []): \Aws\Result;

    public function untagResourceAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function updateAlias(array $args = []): \Aws\Result;

    public function updateAliasAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function updateEventSourceMapping(array $args = []): \Aws\Result;

    public function updateEventSourceMappingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function updateFunctionCode(array $args = []): \Aws\Result;

    public function updateFunctionCodeAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function updateFunctionConfiguration(array $args = []): \Aws\Result;

    public function updateFunctionConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;
}