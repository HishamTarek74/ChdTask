<?php

namespace ChdTask;
class Singleton
{
    // Private static variable to hold the single instance of the class.
    private static $instance;

    // Private constructor to prevent instantiation from outside the class.
    private function __construct() {
        // Constructor code here...
    }

    // Method to get the instance of the Singleton class.
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Prevent cloning of the Singleton instance.

    /**
     * @throws Exception
     */
    private function __clone() {
        throw new \Exception("Singleton cannot be cloned.");
    }

    // Prevent unserialization of the Singleton instance.

    /**
     * @throws Exception
     */
    private function __wakeup() {
        throw new \Exception("Singleton cannot be unserialized.");
    }
}


