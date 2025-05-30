<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250530124520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE kilasy (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, kilasy_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, date_bapteme DATE DEFAULT NULL, date_naissance DATE DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, situation_matrimoniale VARCHAR(255) DEFAULT NULL, occupation VARCHAR(255) DEFAULT NULL, observation LONGTEXT DEFAULT NULL, INDEX IDX_F6B4FB2949602302 (kilasy_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE registre (id INT AUTO_INCREMENT NOT NULL, tonga_rehetra INT NOT NULL, mambra_tonga INT NOT NULL, mpamangy INT DEFAULT NULL, nianatra_impito INT DEFAULT NULL, asa_soa INT DEFAULT NULL, fampianarana_baiboly INT DEFAULT NULL, boky_trakta INT DEFAULT NULL, seminera_kaoferansa INT DEFAULT NULL, alasarona INT DEFAULT NULL, nahavita_famp_taratasy INT DEFAULT NULL, batisa_tami INT DEFAULT NULL, date_registre DATE NOT NULL, asafi INT DEFAULT NULL, nbr_mambra_kilasy INT DEFAULT NULL, fanatitra DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2949602302 FOREIGN KEY (kilasy_id) REFERENCES kilasy (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2949602302');
        $this->addSql('DROP TABLE kilasy');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE registre');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
