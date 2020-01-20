<?php

/*
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009 - 2019 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @link       https://isotopeecommerce.org
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */

$path = \dirname(__DIR__);

while (($path = \dirname($path)) && $path !== '/') {
    $script = $path.'/system/initialize.php';

    if (file_exists($script)) {
        require_once($script);
        return;
    }
}

header('HTTP/1.0 500 Internal Server Error');
die('Contao initialize.php was not found');
