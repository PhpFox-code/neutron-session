<?php
namespace Phpfox\Session;


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
}