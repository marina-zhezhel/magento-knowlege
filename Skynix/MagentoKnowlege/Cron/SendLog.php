<?php
namespace Skynix\MagentoKnowlege\Cron;

use \Psr\Log\LoggerInterface;

class SendLog
{

    /**
     *
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute()
    {   
        $this->logger->log('Error', 'My knowledge about logging errors in Magento');
        $this->logger->log('Info', 'My knowledge about logging info in Magento');
    }
}