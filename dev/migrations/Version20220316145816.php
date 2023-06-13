<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316145816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messier_catalogue (id INT AUTO_INCREMENT NOT NULL, messier VARCHAR(255) NOT NULL, ngc VARCHAR(255) DEFAULT NULL, object_type VARCHAR(255) DEFAULT NULL, season VARCHAR(255) DEFAULT NULL, magnitude INT DEFAULT NULL, constellation_en VARCHAR(255) DEFAULT NULL, constellation_fr VARCHAR(255) DEFAULT NULL, constellation_latin VARCHAR(255) DEFAULT NULL, ra_right_ascension VARCHAR(255) DEFAULT NULL, dec_declinaison VARCHAR(255) DEFAULT NULL, distance_ly_a_l INT DEFAULT NULL, size_dimension VARCHAR(255) DEFAULT NULL, discoverer VARCHAR(255) DEFAULT NULL, year_annee INT DEFAULT NULL, pictures VARCHAR(255) DEFAULT NULL, url_de_limage VARCHAR(255) DEFAULT NULL, constellation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messier_catalogue');
    }
}
