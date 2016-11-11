<?php

namespace Phpfox\Session;

/**
 * Class SessionManagerFactory
 *
 * @package Phpfox\Session
 */
class SessionManagerFactory
{
    /**
     * @return SessionManager
     */
    public function factory()
    {
        return new SessionManager(null);
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}