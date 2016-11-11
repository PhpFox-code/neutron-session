<?php
namespace Phpfox\SessionManager;


/**
 * Class SessionManager
 *
 * @package Phpfox\SessionManager
 */
class SessionManager
{
    /**
     * @var SaveHandlerInterface
     */
    private $saveHandler;

    /**
     * SessionManager constructor.
     *
     * @param SaveHandlerInterface $saveHandler
     */
    public function __construct(SaveHandlerInterface $saveHandler)
    {
        $this->saveHandler = $saveHandler;

        $this->start();
    }

    /**
     * Start session manager
     *
     * @return $this
     */
    public function start()
    {
        if (session_id()) {
            return $this;
        }

        session_set_save_handler($this->saveHandler);

        return $this;
    }

    /**
     * @return SaveHandlerInterface
     */
    public function getSaveHandler()
    {
        return $this->saveHandler;
    }

    /**
     * @param SaveHandlerInterface $saveHandler
     */
    public function setSaveHandler($saveHandler)
    {
        $this->saveHandler = $saveHandler;
    }
}