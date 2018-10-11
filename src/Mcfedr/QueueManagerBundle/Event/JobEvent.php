<?php

declare(strict_types=1);

namespace Mcfedr\QueueManagerBundle\Event;

use Mcfedr\QueueManagerBundle\Queue\Job;
use Symfony\Component\EventDispatcher\Event;

abstract class JobEvent extends Event
{
    /**
     * @var Job
     */
    private $job;

    /**
     * @var bool
     */
    private $internal;

    /**
     * @param Job  $job
     * @param bool $internal
     */
    public function __construct(Job $job, bool $internal)
    {
        $this->job = $job;
        $this->internal = $internal;
    }

    /**
     * @return Job
     */
    public function getJob(): Job
    {
        return $this->job;
    }

    /**
     * @return bool
     */
    public function isInternal(): bool
    {
        return $this->internal;
    }
}
