<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Omnipay.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /* The default gateway name */
    'gateway' => 'PayPal_Express',

    /* The default settings, applied to all gateways */
    'defaults' => [
        'testMode' => false,
    ],

    /* Gateway specific parameters */
    'gateways' => [
        'PayPal_Express' => [
            'username'    => '',
            'landingPage' => ['billing', 'login'],
        ],
    ],

];
