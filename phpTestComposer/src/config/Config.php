<?php

namespace Keha\Test\Config;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Config
{
    const DBNAME = "gestion_projet";
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPWD = 'root';
    const ENTITY = 'Keha\Test\Entity\\';
    const CONTROLLER = 'Keha\Test\Controller\\';
    const DEFAULT_CONTROLLER = 'IndexController';
    const DEFAULT_METHOD = 'index';
}
