<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225134300 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, participation SMALLINT NOT NULL, civilite VARCHAR(10) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, metier VARCHAR(255) DEFAULT NULL, adresse1 VARCHAR(255) DEFAULT NULL, address2 LONGTEXT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, cp VARCHAR(10) DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, mobile VARCHAR(255) DEFAULT NULL, groupe VARCHAR(255) DEFAULT NULL, connexion VARCHAR(255) DEFAULT NULL, droit SMALLINT DEFAULT NULL, is_valide TINYINT(1) DEFAULT \'0\' NOT NULL, fist_co SMALLINT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, remarques LONGTEXT DEFAULT NULL, conditions TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE users');
    }
}
