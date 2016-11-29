<?php

namespace Neutron\Session;


class SampleSessionFactory
{
    public function factory()
    {
        return new SessionManager([
            'driver'   => 'files',
            'lifetime' => 86400,
        ]);
    }
}