<?php declare(strict_types=1);

namespace MichaelKeiluweit\ProjectName;


use MichaelKeiluweit\ProjectName\Application\Authentication\Authentication;
use MichaelKeiluweit\ProjectName\Application\Container\ContainerFactory;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

define('BASE_PATH', __DIR__ . DIRECTORY_SEPARATOR);


$dotenv = new Dotenv();
$dotenv->loadEnv(BASE_PATH . '.env');


$container = ContainerFactory::getInstance()->getContainer();
//dump($container);

/** @var Authentication $authentication */
$authentication = $container->get(Authentication::class);
