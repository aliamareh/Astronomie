<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316142832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE constellation (id INT AUTO_INCREMENT NOT NULL, observation_season VARCHAR(255) DEFAULT NULL, code_constellation VARCHAR(255) NOT NULL, latin_name VARCHAR(255) DEFAULT NULL, french_name VARCHAR(255) DEFAULT NULL, english_name VARCHAR(255) DEFAULT NULL, area_in_square_degrees NUMERIC(10, 3) DEFAULT NULL, dec_declinaison VARCHAR(255) DEFAULT NULL, ra_right_ascension VARCHAR(255) DEFAULT NULL, principal_star VARCHAR(255) DEFAULT NULL, area_celestial_sphere VARCHAR(255) DEFAULT NULL, zone_celestial_equator VARCHAR(255) DEFAULT NULL, zone_ecliptic VARCHAR(255) DEFAULT NULL, zone_milky_way VARCHAR(255) DEFAULT NULL, quad VARCHAR(255) DEFAULT NULL, name_origin VARCHAR(255) DEFAULT NULL, pictures VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE constellation');
    }
}
