<?php

namespace App\Controller;

use System\Controller;

final class Home extends Controller
{
    public function __construct($container)
    {
        parent::__construct($container, 'Home', 'home');
        $this->template['index'] = 'index.twig';
    }
}