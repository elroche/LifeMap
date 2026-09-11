<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260910141537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event CHANGE end_date end_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE framework ADD technology_id INT NOT NULL');
        $this->addSql('ALTER TABLE framework ADD CONSTRAINT FK_9D766E194235D463 FOREIGN KEY (technology_id) REFERENCES technology (id)');
        $this->addSql('CREATE INDEX IDX_9D766E194235D463 ON framework (technology_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE pending_email pending_email VARCHAR(180) DEFAULT NULL, CHANGE email_change_token email_change_token VARCHAR(64) DEFAULT NULL, CHANGE email_change_requested_at email_change_requested_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event CHANGE end_date end_date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE framework DROP FOREIGN KEY FK_9D766E194235D463');
        $this->addSql('DROP INDEX IDX_9D766E194235D463 ON framework');
        $this->addSql('ALTER TABLE framework DROP technology_id');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE pending_email pending_email VARCHAR(180) DEFAULT \'NULL\', CHANGE email_change_token email_change_token VARCHAR(64) DEFAULT \'NULL\', CHANGE email_change_requested_at email_change_requested_at DATETIME DEFAULT \'NULL\', CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE username username VARCHAR(255) DEFAULT \'NULL\'');
    }
}
