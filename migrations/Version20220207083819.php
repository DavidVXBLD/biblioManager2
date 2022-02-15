<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207083819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE books (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, author VARCHAR(100) NOT NULL, summary VARCHAR(400) NOT NULL, release_date DATE NOT NULL, category VARCHAR(50) NOT NULL, for_child TINYINT(1) NOT NULL, available TINYINT(1) DEFAULT NULL, client_id INT DEFAULT NULL, INDEX FK_client_id (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE books_clients (books_id INT NOT NULL, clients_id INT NOT NULL, INDEX IDX_9BAA8E77DD8AC20 (books_id), INDEX IDX_9BAA8E7AB014612 (clients_id), PRIMARY KEY(books_id, clients_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE borrow (id INT AUTO_INCREMENT NOT NULL, books_id INT DEFAULT NULL, clients_id INT DEFAULT NULL, date_loan DATETIME NOT NULL, date_rendered DATETIME DEFAULT NULL, date_rendered_max DATETIME NOT NULL, INDEX IDX_55DBA8B07DD8AC20 (books_id), INDEX IDX_55DBA8B0AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, birth_date DATE NOT NULL, adress VARCHAR(95) NOT NULL, city VARCHAR(35) NOT NULL, mail VARCHAR(65) NOT NULL, phone VARCHAR(15) NOT NULL, UNIQUE INDEX mail (mail), UNIQUE INDEX phone (phone), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE books_clients ADD CONSTRAINT FK_9BAA8E77DD8AC20 FOREIGN KEY (books_id) REFERENCES books (id)');
        $this->addSql('ALTER TABLE books_clients ADD CONSTRAINT FK_9BAA8E7AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE borrow ADD CONSTRAINT FK_55DBA8B07DD8AC20 FOREIGN KEY (books_id) REFERENCES books (id)');
        $this->addSql('ALTER TABLE borrow ADD CONSTRAINT FK_55DBA8B0AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE books_clients DROP FOREIGN KEY FK_9BAA8E77DD8AC20');
        $this->addSql('ALTER TABLE borrow DROP FOREIGN KEY FK_55DBA8B07DD8AC20');
        $this->addSql('ALTER TABLE books_clients DROP FOREIGN KEY FK_9BAA8E7AB014612');
        $this->addSql('ALTER TABLE borrow DROP FOREIGN KEY FK_55DBA8B0AB014612');
        $this->addSql('DROP TABLE books');
        $this->addSql('DROP TABLE books_clients');
        $this->addSql('DROP TABLE borrow');
        $this->addSql('DROP TABLE clients');
    }
}
