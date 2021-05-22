<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210522092153 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE box CHANGE id_box id_box INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE employee CHANGE id_employee id_employee INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE `order` CHANGE id_order id_order INT AUTO_INCREMENT NOT NULL, CHANGE comment comment TEXT, CHANGE date date datetime');
        $this->addSql('ALTER TABLE user CHANGE id_user id_user INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE box CHANGE id_box id_box INT NOT NULL');
        $this->addSql('ALTER TABLE employee CHANGE id_employee id_employee INT NOT NULL');
        $this->addSql('ALTER TABLE `order` CHANGE id_order id_order INT NOT NULL, CHANGE comment comment TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE id_user id_user INT NOT NULL');
    }
}
