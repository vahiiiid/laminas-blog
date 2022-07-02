<?php

if (!function_exists('env')) {
    /**
     * This env helper function try to load env file which is imported by .env using dotenv package.
     *
     * @param string $name
     * @param null $defaultValue
     * @return string|null
     */
    function env(string $name, $defaultValue = null)
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->safeLoad();

        return $_ENV[$name] ?? $defaultValue;
    }
}

if (!function_exists('createDateTimeUtc')) {
    /**
     * @TODO Describe createDateTimeUtc
     * @return DateTime
     * @throws Exception
     */
    function createDateTimeUtc(): DateTime
    {
        return new \DateTime('now', new \DateTimeZone('UTC'));
    }
}
