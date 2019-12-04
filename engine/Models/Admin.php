<?php

namespace Engine\Models;

class Admin
{
    public function __construct()
    {
        Connect::connect();
    }
}