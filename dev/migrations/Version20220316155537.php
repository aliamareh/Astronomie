<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316155537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE objet_celeste (id INT AUTO_INCREMENT NOT NULL, messier_id INT DEFAULT NULL, code_constellation_id INT DEFAULT NULL, ic_ngc VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, ngc VARCHAR(255) DEFAULT NULL, ic VARCHAR(255) DEFAULT NULL, object_type_abrev VARCHAR(255) DEFAULT NULL, object_type VARCHAR(255) DEFAULT NULL, ra VARCHAR(255) DEFAULT NULL, declinaison VARCHAR(255) DEFAULT NULL, major_axis NUMERIC(6, 2) DEFAULT NULL, minor_axis NUMERIC(6, 2) DEFAULT NULL, position_angle INT DEFAULT NULL, b_mag NUMERIC(5, 2) DEFAULT NULL, v_mag NUMERIC(5, 2) DEFAULT NULL, j_mag NUMERIC(5, 2) DEFAULT NULL, h_mag NUMERIC(5, 2) DEFAULT NULL, k_mag NUMERIC(5, 2) DEFAULT NULL, surface_brigthness NUMERIC(5, 2) DEFAULT NULL, hubble_galaxies VARCHAR(255) DEFAULT NULL, cstar_umag NUMERIC(5, 2) DEFAULT NULL, cstar_bmag NUMERIC(5, 2) DEFAULT NULL, cstar_vmag NUMERIC(5, 2) DEFAULT NULL, cstar_names VARCHAR(255) DEFAULT NULL, identifiers VARCHAR(255) DEFAULT NULL, common_names VARCHAR(255) DEFAULT NULL, ned_notes VARCHAR(255) DEFAULT NULL, openngc_notes VARCHAR(255) DEFAULT NULL, pictures VARCHAR(255) DEFAULT NULL, INDEX IDX_D4036385827AD02 (messier_id), INDEX IDX_D403638544EA4B1E (code_constellation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE objet_celeste ADD CONSTRAINT FK_D4036385827AD02 FOREIGN KEY (messier_id) REFERENCES messier_catalogue (id)');
        $this->addSql('ALTER TABLE objet_celeste ADD CONSTRAINT FK_D403638544EA4B1E FOREIGN KEY (code_constellation_id) REFERENCES constellation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE objet_celeste');
    }
}
