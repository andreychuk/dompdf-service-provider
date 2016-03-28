<?php

namespace Silex\Tests\Provider;

use Silex\Application;
use Silex\Provider\DompdfServiceProvider;

/**
 * Class DompdfServiceProviderTest
 *
 * @package Silex\Tests\Provider
 */
class DompdfServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Application();
        $app->register(new DompdfServiceProvider());

        $this->assertInstanceOf("\\Dompdf\\Dompdf", $app['dompdf']);
    }
}