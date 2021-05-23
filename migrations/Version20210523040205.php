<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210523040205 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE orders (id_order INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_box INT NOT NULL, total DOUBLE PRECISION NOT NULL, comment TEXT, is_confirmed TINYINT(1) NOT NULL, date datetime, PRIMARY KEY(id_order)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE `order`');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `order` (id_order INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_box INT NOT NULL, total DOUBLE PRECISION NOT NULL, comment TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, is_confirmed TINYINT(1) NOT NULL, date DATETIME DEFAULT NULL, PRIMARY KEY(id_order)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE orders');
    }
}
