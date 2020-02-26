<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200226170820 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, creation DATE NOT NULL, description LONGTEXT DEFAULT NULL, date_in DATETIME DEFAULT NULL, date_out DATETIME DEFAULT NULL, opt_accueil TINYINT(1) NOT NULL, opt_actualites TINYINT(1) NOT NULL, opt_hebergement TINYINT(1) NOT NULL, opt_infoprat TINYINT(1) NOT NULL, opt_presse TINYINT(1) NOT NULL, opt_contact TINYINT(1) NOT NULL, opt_inscription TINYINT(1) NOT NULL, opt_activites TINYINT(1) NOT NULL, opt_transport TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE site_accueil (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, pic_accueil VARCHAR(255) DEFAULT NULL, txt_accueil_st TINYTEXT DEFAULT NULL, txt_accueil_t_edito LONGTEXT DEFAULT NULL, txt_accueil_edito LONGTEXT DEFAULT NULL, nb_blocs INT DEFAULT NULL, nb_slides INT DEFAULT NULL, titre_blocs VARCHAR(255) DEFAULT NULL, titre_1 LONGTEXT DEFAULT NULL, pic_1 VARCHAR(255) DEFAULT NULL, txt_1 LONGTEXT DEFAULT NULL, slider_1 VARCHAR(255) DEFAULT NULL, titre_2 LONGTEXT DEFAULT NULL, pic_2 VARCHAR(255) DEFAULT NULL, txt_2 LONGTEXT DEFAULT NULL, titre_3 LONGTEXT DEFAULT NULL, pic_3 VARCHAR(255) DEFAULT NULL, txt_3 LONGTEXT DEFAULT NULL, titre_4 LONGTEXT DEFAULT NULL, pic_4 VARCHAR(255) DEFAULT NULL, txt_4 LONGTEXT DEFAULT NULL, titre_5 LONGTEXT DEFAULT NULL, pic_5 VARCHAR(255) DEFAULT NULL, txt_5 LONGTEXT DEFAULT NULL, titre_6 LONGTEXT DEFAULT NULL, pic_6 VARCHAR(255) DEFAULT NULL, txt_6 LONGTEXT DEFAULT NULL, slider_2 VARCHAR(255) DEFAULT NULL, slider_3 VARCHAR(255) DEFAULT NULL, slider_4 VARCHAR(255) DEFAULT NULL, slider_5 VARCHAR(255) DEFAULT NULL, slider_6 VARCHAR(255) DEFAULT NULL, titre_7 LONGTEXT DEFAULT NULL, pic_7 VARCHAR(255) DEFAULT NULL, txt_7 LONGTEXT DEFAULT NULL, titre_8 LONGTEXT DEFAULT NULL, pic_8 VARCHAR(255) DEFAULT NULL, txt_8 LONGTEXT DEFAULT NULL, titre_9 LONGTEXT DEFAULT NULL, pic_9 VARCHAR(255) DEFAULT NULL, txt_9 LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_F93DAE7571F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, participation SMALLINT NOT NULL, civilite VARCHAR(10) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, metier VARCHAR(255) DEFAULT NULL, adresse1 VARCHAR(255) DEFAULT NULL, address2 LONGTEXT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, cp VARCHAR(10) DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, mobile VARCHAR(255) DEFAULT NULL, groupe VARCHAR(255) DEFAULT NULL, connexion VARCHAR(255) DEFAULT NULL, droit SMALLINT DEFAULT NULL, is_valide TINYINT(1) DEFAULT \'0\' NOT NULL, fist_co SMALLINT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, remarques LONGTEXT DEFAULT NULL, conditions TINYINT(1) DEFAULT \'0\' NOT NULL, roles JSON NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE site_accueil ADD CONSTRAINT FK_F93DAE7571F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE site_accueil DROP FOREIGN KEY FK_F93DAE7571F7E88B');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE site_accueil');
        $this->addSql('DROP TABLE users');
    }
}
