<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210413165327 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE klasa (id INT AUTO_INCREMENT NOT NULL, nazwa VARCHAR(10) NOT NULL, specjalnosc VARCHAR(30) DEFAULT NULL, id_nauczyciela VARCHAR(5) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nauczyciele (id INT AUTO_INCREMENT NOT NULL, imie VARCHAR(20) NOT NULL, nazwisko VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oceny (id INT AUTO_INCREMENT NOT NULL, id_ucznia INT NOT NULL, id_przedmiotu VARCHAR(10) NOT NULL, ocena INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE przedmioty (id INT AUTO_INCREMENT NOT NULL, nazwa_przedmiotu VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skala_ocen (id INT AUTO_INCREMENT NOT NULL, ocena INT NOT NULL, ocena_slowna VARCHAR(14) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE uczen (id INT AUTO_INCREMENT NOT NULL, imie VARCHAR(25) NOT NULL, nazwisko VARCHAR(30) NOT NULL, data_urodzenia DATE NOT NULL, miejsce_urodzenia VARCHAR(30) NOT NULL, imiona_rodzicow VARCHAR(50) NOT NULL, miejsce_zamieszkania VARCHAR(50) NOT NULL, dojezdza TINYINT(1) NOT NULL, mieszka INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE uczy (id INT AUTO_INCREMENT NOT NULL, id_nauczyciela VARCHAR(5) NOT NULL, id_przedmiotu VARCHAR(10) NOT NULL, klasa VARCHAR(10) NOT NULL, ile_godzin INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE klasa');
        $this->addSql('DROP TABLE nauczyciele');
        $this->addSql('DROP TABLE oceny');
        $this->addSql('DROP TABLE przedmioty');
        $this->addSql('DROP TABLE skala_ocen');
        $this->addSql('DROP TABLE uczen');
        $this->addSql('DROP TABLE uczy');
    }
}
