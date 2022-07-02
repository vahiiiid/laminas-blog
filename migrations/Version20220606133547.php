<?php

declare(strict_types=1);

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * In this migration file we are creating a table for posts!
 */
final class Version20220606133547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $schema->createTable('posts');
    }

    public function down(Schema $schema): void
    {

    }
}
