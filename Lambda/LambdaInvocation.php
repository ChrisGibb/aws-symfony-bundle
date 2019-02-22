<?php

namespace IronCode\AwsBundle\Lambda;

class LambdaInvocation
{
    /** @var string */
    protected $function;
    /** @var array */
    protected $payload;
	/** @var bool */
	protected $async;
	/** @var bool */
	protected $logging;

    public function __construct(string $function, $payload = [], $async = false, $logging = true)
    {
        $this->function = $function;
        $this->payload = $payload;
        $this->async = $async;
        $this->logging = $logging;
    }

    /**
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

	/**
	 * @return bool
	 */
	public function isAsync(): bool
	{
		return $this->async;
	}

	public function getInvocationType(): string {
		return $this->isAsync() ? 'Event' : 'RequestResponse';
	}

	public function getLoggingType(): string  {
		return $this->logging ? 'Tail' : 'None';
	}
}