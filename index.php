<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

// Example of using the Singleton pattern:
use ChdTask\App;
use ChdTask\Singleton;

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if ($singleton1 === $singleton2) {
    echo "Both instances are the same, and it's a Singleton!";
} else {
    echo "Singleton pattern failed!";
}


// Get a single instance of SomeService using the Singleton pattern.
$someService = \ChdTask\Singleton::getInstance();

// Inject the instance into the App class.
$app = new App($someService);

// Run the application.
$app->runApp();
