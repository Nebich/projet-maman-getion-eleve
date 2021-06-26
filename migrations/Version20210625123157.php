<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210625123157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abscence (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, reason VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_BD71CDACB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `group` (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(100) NOT NULL, INDEX IDX_6DC044C5A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE punishment (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, wording LONGTEXT NOT NULL, date DATETIME NOT NULL, INDEX IDX_7B0A4631CB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, student_group_id INT NOT NULL, name VARCHAR(100) NOT NULL, last_name VARCHAR(255) NOT NULL, INDEX IDX_B723AF334DDF95DC (student_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(50) NOT NULL, last_name VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abscence ADD CONSTRAINT FK_BD71CDACB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE punishment ADD CONSTRAINT FK_7B0A4631CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF334DDF95DC FOREIGN KEY (student_group_id) REFERENCES `group` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF334DDF95DC');
        $this->addSql('ALTER TABLE abscence DROP FOREIGN KEY FK_BD71CDACB944F1A');
        $this->addSql('ALTER TABLE punishment DROP FOREIGN KEY FK_7B0A4631CB944F1A');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C5A76ED395');
        $this->addSql('DROP TABLE abscence');
        $this->addSql('DROP TABLE `group`');
        $this->addSql('DROP TABLE punishment');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE user');
    }
}
