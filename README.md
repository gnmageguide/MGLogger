# MGLogger
Adds Custom Logger Functionality (mageguide.log)

Usage example: 

class MGLoggerExample
{
    /**
     * Logging instance
     */
    protected $_mglogger;

    /**
     * Constructor injection
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
