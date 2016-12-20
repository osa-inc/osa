<?php

use Osa\Component\Foundation\Routes;
use Illuminate\Contracts\Routing\Registrar;

/**
 * Class RoutesTest
 *
 * @see \Osa\Component\Foundation\Routes
 */
class RoutesTest extends \TestCase
{
    public function testShouldReturnRouteCollectionCount()
    {
        /** @var Registrar|\Illuminate\Routing\Router $router */
        $router = $this->app['router'];
        (new Routes($router))->register();
        /** @var \Illuminate\Routing\RouteCollection $collection */
        $collection = $router->getRoutes();
        $this->assertNotEquals(0, $collection->count());
    }
}
