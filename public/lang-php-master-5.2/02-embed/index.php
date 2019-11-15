<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Create and configure app */
$app->useURL = true;

/** Run app */
$app->run();