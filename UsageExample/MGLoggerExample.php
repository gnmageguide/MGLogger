<?php
namespace MageGuide\MGLogger\UsageExample;

class MGLoggerExample
{
    /**
     * Logging instance
     * @var \MageGuide\MGLogger\Logger\Logger
     */
    protected $_mglogger;

    /**
     * Constructor
     * @param \MageGuide\MGLogger\Logger\Logger $mglogger
     */
    public function __construct(
        \MageGuide\MGLogger\Logger\Logger $mglogger
    ) {
        $this->_mglogger = $mglogger;
    }

    /* Some function to call logger */
    public function doSomething()
    {
        $this->_mglogger->info('Info Test');
        $this->_mglogger->alert('Alert Test');
        $this->_mglogger->critical('Critical Test');
        $this->_mglogger->emergency('Emergency Test');
        $this->_mglogger->error('Error Test');
        $this->_mglogger->notice('Notice Test');
        $this->_mglogger->warning('Warning Test');
    }
}