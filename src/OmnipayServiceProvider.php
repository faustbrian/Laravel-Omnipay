<?php

/*
 * This file is part of Laravel Omnipay.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Omnipay;

use BrianFaust\ServiceProvider\ServiceProvider as BaseProvider;
use Omnipay\Common\GatewayFactory;

class OmnipayServiceProvider extends BaseProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-omnipay.php' => config_path('laravel-omnipay.php'),
        ], 'config');

        $this->app->singleton('omnipay', function ($app) {
            $defaults = $app['config']->get('laravel-omnipay.defaults', []);

            return new GatewayManager($app, new GatewayFactory(), $defaults);
        });
    }
}
