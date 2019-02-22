<?php

namespace IronCode\AwsBundle\S3;

interface S3ClientInterface
{
    public function abortMultipartUpload(array $args = []): \Aws\Result;

    public function abortMultipartUploadAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function completeMultipartUpload(array $args = []): \Aws\Result;

    public function completeMultipartUploadAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function copyObject(array $args = []): \Aws\Result;

    public function copyObjectAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function createBucket(array $args = []): \Aws\Result;

    public function createBucketAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function createMultipartUpload(array $args = []): \Aws\Result;

    public function createMultipartUploadAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucket(array $args = []): \Aws\Result;

    public function deleteBucketAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketAnalyticsConfiguration(array $args = []): \Aws\Result;

    public function deleteBucketAnalyticsConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketCors(array $args = []): \Aws\Result;

    public function deleteBucketCorsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketEncryption(array $args = []): \Aws\Result;

    public function deleteBucketEncryptionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketInventoryConfiguration(array $args = []): \Aws\Result;

    public function deleteBucketInventoryConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketLifecycle(array $args = []): \Aws\Result;

    public function deleteBucketLifecycleAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketMetricsConfiguration(array $args = []): \Aws\Result;

    public function deleteBucketMetricsConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketPolicy(array $args = []): \Aws\Result;

    public function deleteBucketPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketReplication(array $args = []): \Aws\Result;

    public function deleteBucketReplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketTagging(array $args = []): \Aws\Result;

    public function deleteBucketTaggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteBucketWebsite(array $args = []): \Aws\Result;

    public function deleteBucketWebsiteAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteObject(array $args = []): \Aws\Result;

    public function deleteObjectAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteObjectTagging(array $args = []): \Aws\Result;

    public function deleteObjectTaggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function deleteObjects(array $args = []): \Aws\Result;

    public function deleteObjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketAccelerateConfiguration(array $args = []): \Aws\Result;

    public function getBucketAccelerateConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketAcl(array $args = []): \Aws\Result;

    public function getBucketAclAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketAnalyticsConfiguration(array $args = []): \Aws\Result;

    public function getBucketAnalyticsConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketCors(array $args = []): \Aws\Result;

    public function getBucketCorsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketEncryption(array $args = []): \Aws\Result;

    public function getBucketEncryptionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketInventoryConfiguration(array $args = []): \Aws\Result;

    public function getBucketInventoryConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketLifecycle(array $args = []): \Aws\Result;

    public function getBucketLifecycleAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketLifecycleConfiguration(array $args = []): \Aws\Result;

    public function getBucketLifecycleConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketLocation(array $args = []): \Aws\Result;

    public function getBucketLocationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketLogging(array $args = []): \Aws\Result;

    public function getBucketLoggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketMetricsConfiguration(array $args = []): \Aws\Result;

    public function getBucketMetricsConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketNotification(array $args = []): \Aws\Result;

    public function getBucketNotificationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketNotificationConfiguration(array $args = []): \Aws\Result;

    public function getBucketNotificationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketPolicy(array $args = []): \Aws\Result;

    public function getBucketPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketReplication(array $args = []): \Aws\Result;

    public function getBucketReplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketRequestPayment(array $args = []): \Aws\Result;

    public function getBucketRequestPaymentAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketTagging(array $args = []): \Aws\Result;

    public function getBucketTaggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketVersioning(array $args = []): \Aws\Result;

    public function getBucketVersioningAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getBucketWebsite(array $args = []): \Aws\Result;

    public function getBucketWebsiteAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getObject(array $args = []): \Aws\Result;

    public function getObjectAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getObjectAcl(array $args = []): \Aws\Result;

    public function getObjectAclAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getObjectTagging(array $args = []): \Aws\Result;

    public function getObjectTaggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function getObjectTorrent(array $args = []): \Aws\Result;

    public function getObjectTorrentAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function headBucket(array $args = []): \Aws\Result;

    public function headBucketAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function headObject(array $args = []): \Aws\Result;

    public function headObjectAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listBucketAnalyticsConfigurations(array $args = []): \Aws\Result;

    public function listBucketAnalyticsConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listBucketInventoryConfigurations(array $args = []): \Aws\Result;

    public function listBucketInventoryConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listBucketMetricsConfigurations(array $args = []): \Aws\Result;

    public function listBucketMetricsConfigurationsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listBuckets(array $args = []): \Aws\Result;

    public function listBucketsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listMultipartUploads(array $args = []): \Aws\Result;

    public function listMultipartUploadsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listObjectVersions(array $args = []): \Aws\Result;

    public function listObjectVersionsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listObjects(array $args = []): \Aws\Result;

    public function listObjectsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listObjectsV2(array $args = []): \Aws\Result;

    public function listObjectsV2Async(array $args = []): \GuzzleHttp\Promise\Promise;

    public function listParts(array $args = []): \Aws\Result;

    public function listPartsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketAccelerateConfiguration(array $args = []): \Aws\Result;

    public function putBucketAccelerateConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketAcl(array $args = []): \Aws\Result;

    public function putBucketAclAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketAnalyticsConfiguration(array $args = []): \Aws\Result;

    public function putBucketAnalyticsConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketCors(array $args = []): \Aws\Result;

    public function putBucketCorsAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketEncryption(array $args = []): \Aws\Result;

    public function putBucketEncryptionAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketInventoryConfiguration(array $args = []): \Aws\Result;

    public function putBucketInventoryConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketLifecycle(array $args = []): \Aws\Result;

    public function putBucketLifecycleAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketLifecycleConfiguration(array $args = []): \Aws\Result;

    public function putBucketLifecycleConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketLogging(array $args = []): \Aws\Result;

    public function putBucketLoggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketMetricsConfiguration(array $args = []): \Aws\Result;

    public function putBucketMetricsConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketNotification(array $args = []): \Aws\Result;

    public function putBucketNotificationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketNotificationConfiguration(array $args = []): \Aws\Result;

    public function putBucketNotificationConfigurationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketPolicy(array $args = []): \Aws\Result;

    public function putBucketPolicyAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketReplication(array $args = []): \Aws\Result;

    public function putBucketReplicationAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketRequestPayment(array $args = []): \Aws\Result;

    public function putBucketRequestPaymentAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketTagging(array $args = []): \Aws\Result;

    public function putBucketTaggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketVersioning(array $args = []): \Aws\Result;

    public function putBucketVersioningAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putBucketWebsite(array $args = []): \Aws\Result;

    public function putBucketWebsiteAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putObject(array $args = []): \Aws\Result;

    public function putObjectAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putObjectAcl(array $args = []): \Aws\Result;

    public function putObjectAclAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function putObjectTagging(array $args = []): \Aws\Result;

    public function putObjectTaggingAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function restoreObject(array $args = []): \Aws\Result;

    public function restoreObjectAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function selectObjectContent(array $args = []): \Aws\Result;

    public function selectObjectContentAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function uploadPart(array $args = []): \Aws\Result;

    public function uploadPartAsync(array $args = []): \GuzzleHttp\Promise\Promise;

    public function uploadPartCopy(array $args = []): \Aws\Result;

    public function uploadPartCopyAsync(array $args = []): \GuzzleHttp\Promise\Promise;
}