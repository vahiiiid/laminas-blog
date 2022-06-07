<?php

declare(strict_types=1);

namespace Blog;

/**
 * @TODO Describe Module
 *
 * @copyright CHECK24 Vergleichsportal Hotel GmbH
 */
class Module
{
    /**
     * @return array|string
     */
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * @return string
     */
    public function getModuleSrcDirectory(): string
    {
        return __DIR__;
    }
}
