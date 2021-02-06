<?php


namespace Nicodinus\PhpSupportHelpers;


use Psr\Log\LoggerInterface;

trait ClassHasLoggerTrait
{
    /** @var LoggerInterface */
    private LoggerInterface $logger;

    //

    /**
     * @return LoggerInterface
     */
    protected function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}