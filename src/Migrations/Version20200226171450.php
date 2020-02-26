<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200226171450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event CHANGE opt_accueil opt_accueil TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_actualites opt_actualites TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_hebergement opt_hebergement TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_infoprat opt_infoprat TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_presse opt_presse TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_contact opt_contact TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_inscription opt_inscription TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_activites opt_activites TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE opt_transport opt_transport TINYINT(1) DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event CHANGE opt_accueil opt_accueil TINYINT(1) NOT NULL, CHANGE opt_actualites opt_actualites TINYINT(1) NOT NULL, CHANGE opt_hebergement opt_hebergement TINYINT(1) NOT NULL, CHANGE opt_infoprat opt_infoprat TINYINT(1) NOT NULL, CHANGE opt_presse opt_presse TINYINT(1) NOT NULL, CHANGE opt_contact opt_contact TINYINT(1) NOT NULL, CHANGE opt_inscription opt_inscription TINYINT(1) NOT NULL, CHANGE opt_activites opt_activites TINYINT(1) NOT NULL, CHANGE opt_transport opt_transport TINYINT(1) NOT NULL');
    }
}
