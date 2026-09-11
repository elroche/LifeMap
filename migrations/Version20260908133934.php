<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260908133934 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event_technology (event_id INT NOT NULL, technology_id INT NOT NULL, INDEX IDX_AC8D8B6271F7E88B (event_id), INDEX IDX_AC8D8B624235D463 (technology_id), PRIMARY KEY (event_id, technology_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_tool (event_id INT NOT NULL, tool_id INT NOT NULL, INDEX IDX_3F38727A71F7E88B (event_id), INDEX IDX_3F38727A8F7B22CC (tool_id), PRIMARY KEY (event_id, tool_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_skill (event_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_1F26555B71F7E88B (event_id), INDEX IDX_1F26555B5585C142 (skill_id), PRIMARY KEY (event_id, skill_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_framework (event_id INT NOT NULL, framework_id INT NOT NULL, INDEX IDX_1BE3502471F7E88B (event_id), INDEX IDX_1BE3502437AECF72 (framework_id), PRIMARY KEY (event_id, framework_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_database (event_id INT NOT NULL, database_id INT NOT NULL, INDEX IDX_8FBFEFFE71F7E88B (event_id), INDEX IDX_8FBFEFFEF0AA09DB (database_id), PRIMARY KEY (event_id, database_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_api (event_id INT NOT NULL, api_id INT NOT NULL, INDEX IDX_BCCA1DDC71F7E88B (event_id), INDEX IDX_BCCA1DDC54963938 (api_id), PRIMARY KEY (event_id, api_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_project_management (event_id INT NOT NULL, project_management_id INT NOT NULL, INDEX IDX_29C826E971F7E88B (event_id), INDEX IDX_29C826E954448A08 (project_management_id), PRIMARY KEY (event_id, project_management_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE event_library (event_id INT NOT NULL, library_id INT NOT NULL, INDEX IDX_24D7311371F7E88B (event_id), INDEX IDX_24D73113FE2541D7 (library_id), PRIMARY KEY (event_id, library_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE event_technology ADD CONSTRAINT FK_AC8D8B6271F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_technology ADD CONSTRAINT FK_AC8D8B624235D463 FOREIGN KEY (technology_id) REFERENCES technology (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_tool ADD CONSTRAINT FK_3F38727A71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_tool ADD CONSTRAINT FK_3F38727A8F7B22CC FOREIGN KEY (tool_id) REFERENCES tool (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_skill ADD CONSTRAINT FK_1F26555B71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_skill ADD CONSTRAINT FK_1F26555B5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_framework ADD CONSTRAINT FK_1BE3502471F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_framework ADD CONSTRAINT FK_1BE3502437AECF72 FOREIGN KEY (framework_id) REFERENCES framework (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_database ADD CONSTRAINT FK_8FBFEFFE71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_database ADD CONSTRAINT FK_8FBFEFFEF0AA09DB FOREIGN KEY (database_id) REFERENCES `database` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_api ADD CONSTRAINT FK_BCCA1DDC71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_api ADD CONSTRAINT FK_BCCA1DDC54963938 FOREIGN KEY (api_id) REFERENCES api (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_project_management ADD CONSTRAINT FK_29C826E971F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_project_management ADD CONSTRAINT FK_29C826E954448A08 FOREIGN KEY (project_management_id) REFERENCES project_management (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_library ADD CONSTRAINT FK_24D7311371F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_library ADD CONSTRAINT FK_24D73113FE2541D7 FOREIGN KEY (library_id) REFERENCES library (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD event_type_id INT DEFAULT NULL, CHANGE end_date end_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7401B253C FOREIGN KEY (event_type_id) REFERENCES event_type (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7401B253C ON event (event_type_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE pending_email pending_email VARCHAR(180) DEFAULT NULL, CHANGE email_change_token email_change_token VARCHAR(64) DEFAULT NULL, CHANGE email_change_requested_at email_change_requested_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_technology DROP FOREIGN KEY FK_AC8D8B6271F7E88B');
        $this->addSql('ALTER TABLE event_technology DROP FOREIGN KEY FK_AC8D8B624235D463');
        $this->addSql('ALTER TABLE event_tool DROP FOREIGN KEY FK_3F38727A71F7E88B');
        $this->addSql('ALTER TABLE event_tool DROP FOREIGN KEY FK_3F38727A8F7B22CC');
        $this->addSql('ALTER TABLE event_skill DROP FOREIGN KEY FK_1F26555B71F7E88B');
        $this->addSql('ALTER TABLE event_skill DROP FOREIGN KEY FK_1F26555B5585C142');
        $this->addSql('ALTER TABLE event_framework DROP FOREIGN KEY FK_1BE3502471F7E88B');
        $this->addSql('ALTER TABLE event_framework DROP FOREIGN KEY FK_1BE3502437AECF72');
        $this->addSql('ALTER TABLE event_database DROP FOREIGN KEY FK_8FBFEFFE71F7E88B');
        $this->addSql('ALTER TABLE event_database DROP FOREIGN KEY FK_8FBFEFFEF0AA09DB');
        $this->addSql('ALTER TABLE event_api DROP FOREIGN KEY FK_BCCA1DDC71F7E88B');
        $this->addSql('ALTER TABLE event_api DROP FOREIGN KEY FK_BCCA1DDC54963938');
        $this->addSql('ALTER TABLE event_project_management DROP FOREIGN KEY FK_29C826E971F7E88B');
        $this->addSql('ALTER TABLE event_project_management DROP FOREIGN KEY FK_29C826E954448A08');
        $this->addSql('ALTER TABLE event_library DROP FOREIGN KEY FK_24D7311371F7E88B');
        $this->addSql('ALTER TABLE event_library DROP FOREIGN KEY FK_24D73113FE2541D7');
        $this->addSql('DROP TABLE event_technology');
        $this->addSql('DROP TABLE event_tool');
        $this->addSql('DROP TABLE event_skill');
        $this->addSql('DROP TABLE event_framework');
        $this->addSql('DROP TABLE event_database');
        $this->addSql('DROP TABLE event_api');
        $this->addSql('DROP TABLE event_project_management');
        $this->addSql('DROP TABLE event_library');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7401B253C');
        $this->addSql('DROP INDEX IDX_3BAE0AA7401B253C ON event');
        $this->addSql('ALTER TABLE event DROP event_type_id, CHANGE end_date end_date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE pending_email pending_email VARCHAR(180) DEFAULT \'NULL\', CHANGE email_change_token email_change_token VARCHAR(64) DEFAULT \'NULL\', CHANGE email_change_requested_at email_change_requested_at DATETIME DEFAULT \'NULL\', CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE username username VARCHAR(255) DEFAULT \'NULL\'');
    }
}
