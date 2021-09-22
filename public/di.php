<?php declare(strict_types=1);

namespace MichaelKeiluweit\ProjectName;


use MichaelKeiluweit\ProjectName\Application\Authentication\Authentication;
use MichaelKeiluweit\ProjectName\Application\Container\ContainerFactory;

require_once '../bootstrap.php';


$container = ContainerFactory::getInstance()->getContainer();
//dump($container);

/** @var Authentication $authentication */
$authentication = $container->get(Authentication::class);
