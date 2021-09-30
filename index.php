<?php

/**
 * The directory to the app files
 * @var unknown
 */
define('APP_DIR', __DIR__ . '/App/');

if(!file_exists(APP_DIR.'../config/inst.php'))
{
    if (!defined('ROOT_FOLDER'))
    {
        define('ROOT_FOLDER', rtrim('/'.pathinfo(__DIR__, PATHINFO_BASENAME), '/').'/');
    }
    
    require_once APP_DIR.'../installation/index.php';
    
    return;
}



require APP_DIR . 'init.php';
