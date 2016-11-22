<?php
namespace Phpfox\Session;


/**
 * Class SessionManager
 *
 * @package Phpfox\Session
 */
class SessionManager
{
    /**
     * @var SaveHandlerInterface
     */
    private $saveHandler = "files";

    public function __construct()
    {
        if (session_id()) {
            return;
        }

        // skip session storage
        if (PHP_SAPI == 'cli') {
            $this->saveHandler = new NullSaveHandler();
            return;
        }

        $adapter = config('session.adapter');

        if ($adapter['driver'] != 'files') {
            $driver = config('session.drivers', $adapter['driver']);
            $this->saveHandler = new $driver($adapter);
        }
    }

    /**
     * Start session manager
     *
     * @return bool always true.
     */
    public function start()
    {
        if (session_id()) {
            return false;
        }

        session_set_save_handler($this->saveHandler);

        @session_start();

        return true;
    }
}