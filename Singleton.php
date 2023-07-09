<?php

declare(strict_types=1);

trait Singleton
{
    private $instance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (isset(self::$instance)) {
            throw new \LogicException(__CLASS__ . ' instance is already exist');
        }

        self::$instance = new self();
        return self::$instance;
    }
}
