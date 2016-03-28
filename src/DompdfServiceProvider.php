<?php

namespace Silex\Provider;

use Dompdf\Dompdf;
use Silex\Application;
use Silex\ServiceProviderInterface;

class DompdfServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['dompdf'] = $app->share(
            function () use ($app) {
                return new Dompdf();
            }
        );
    }

    public function boot(Application $app)
    {
        // TODO: Implement boot() method.
    }
}
