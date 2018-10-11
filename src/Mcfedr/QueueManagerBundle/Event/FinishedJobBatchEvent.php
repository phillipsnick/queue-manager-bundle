<?php

declare(strict_types=1);

namespace Mcfedr\QueueManagerBundle\Event;

use Mcfedr\QueueManagerBundle\Queue\Job;
use Symfony\Component\EventDispatcher\Event;

class FinishedJobBatchEvent extends Event
{
    /**
     * @var Job[]
     */
    private $oks;

    /**
     * @var Job[]
     */
    private $retries;

    /**
     * @var Job[]
     */
    private $fails;

    /**
     * FinishedJobBatchEvent constructor.
     *
     * @param Job[] $oks
     * @param Job[] $fails
     * @param Job[] $retries
     */
    public function __construct(array $oks, array $retries, array $fails)
    {
        $this->oks = $oks;
        $this->retries = $retries;
        $this->fails = $fails;
    }

    /**
     * @return Job[]
     */
    public function getOks(): array
    {
        return $this->oks;
    }

    /**
     * @return Job[]
     */
    public function getRetries(): array
    {
        return $this->retries;
    }

    /**
     * @return Job[]
     */
    public function getFails(): array
    {
        return $this->fails;
    }
}
