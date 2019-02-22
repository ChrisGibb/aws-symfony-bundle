<?php

namespace IronCode\AwsBundle\S3;

use Aws\Result;

class S3HeadResponse
{
    /** @var Result */
    protected $result;

    public function __construct(Result $result)
    {
        $this->result = $result;
    }

    public function getAcceptRanges()
    {
        $this->result->get('AcceptRanges');
    }
    public function getCacheControl()
    {
        $this->result->get('CacheControl');
    }
    public function getContentDisposition()
    {
        $this->result->get('ContentDisposition');
    }
    public function getContentEncoding()
    {
        $this->result->get('ContentEncoding');
    }
    public function getContentLanguage()
    {
        $this->result->get('ContentLanguage');
    }
    public function getContentLength()
    {
        $this->result->get('ContentLength');
    }
    public function getContentType()
    {
        $this->result->get('ContentType');
    }
    public function getDeleteMarker()
    {
        $this->result->get('DeleteMarker');
    }
    public function getETag()
    {
        $this->result->get('ETag');
    }
    public function getExpiration()
    {
        $this->result->get('Expiration');
    }
    public function getExpires()
    {
        $this->result->get('Expires');
    }
    public function getLastModified()
    {
        $this->result->get('LastModified');
    }
    public function getMetadata()
    {
        $this->result->get('Metadata');
    }
    public function getMissingMeta()
    {
        $this->result->get('MissingMeta');
    }
    public function getPartsCount()
    {
        $this->result->get('PartsCount');
    }
    public function getReplicationStatus()
    {
        $this->result->get('ReplicationStatus');
    }
    public function getRequestCharged()
    {
        $this->result->get('RequestCharged');
    }
    public function getRestore()
    {
        $this->result->get('Restore');
    }
    public function getSSECustomerAlgorithm()
    {
        $this->result->get('SSECustomerAlgorithm');
    }
    public function getSSECustomerKeyMD5()
    {
        $this->result->get('SSECustomerKeyMD5');
    }
    public function getSSEKMSKeyId()
    {
        $this->result->get('SSEKMSKeyId');
    }
    public function getServerSideEncryption()
    {
        $this->result->get('ServerSideEncryption');
    }
    public function getStorageClass()
    {
        $this->result->get('StorageClass');
    }
    public function getVersionId()
    {
        $this->result->get('VersionId');
    }
    public function getWebsiteRedirectLocation()
    {
        $this->result->get('WebsiteRedirectLocation');
    }

}