<?php

/**
 * This file is part of the authbucket/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\HttpFoundation\Request;

// Hello World!!
$app->get('/', function (Request $request) use ($app) {
    return 'Hello World!!';
});

require __DIR__ . '/routing_auth.php';
require __DIR__ . '/routing_client.php';
require __DIR__ . '/routing_resource.php';
