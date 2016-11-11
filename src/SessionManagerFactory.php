<?php

namespace Phpfox\SessionManager;

/**
 * Class SessionManagerFactory
 *
 * @package Phpfox\SessionManager
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