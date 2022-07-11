<?php 

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use \Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__.'/vendor/autoload';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntituManager();

return ConsoleRunner::createHelperSet($entityManager);