<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\Router;

Router::plugin(
    'Settings',
    ['path' => '/settings'],
    function (RouteBuilder $routes) {
        $routes->get('/', ['controller' => 'Settings', 'action' => 'index']);
        $routes->get('/edit', ['controller' => 'Settings', 'action' => 'edit']);
        $routes->post('/edit', ['controller' => 'Settings', 'action' => 'edit']);
        $routes->fallbacks(DashedRoute::class);
    }
);