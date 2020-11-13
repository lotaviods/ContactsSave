<?php
use Lotaviods\Contacts\Config\Connection\ConnectBank;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new ConnectBank();
$entityManager = $entityManagerFactory->EntityManager();

return ConsoleRunner::createHelperSet($entityManager);