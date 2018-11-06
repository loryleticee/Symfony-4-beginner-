<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181105225121 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE note ADD accord_id INT DEFAULT NULL, CHANGE nom nom VARCHAR(2) NOT NULL');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA141EDF023F FOREIGN KEY (accord_id) REFERENCES accord (id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA141EDF023F ON note (accord_id)');
        $this->addSql('ALTER TABLE users CHANGE country country VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE note_accord DROP FOREIGN KEY FK_89E44DD01EDF023F');
        $this->addSql('ALTER TABLE note_accord DROP FOREIGN KEY FK_89E44DD026ED0855');
        $this->addSql('DROP INDEX IDX_89E44DD026ED0855 ON note_accord');
        $this->addSql('DROP INDEX IDX_89E44DD01EDF023F ON note_accord');
        $this->addSql('ALTER TABLE note_accord DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE note_accord ADD id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE note_accord ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA141EDF023F');
        $this->addSql('DROP INDEX IDX_CFBDFA141EDF023F ON note');
        $this->addSql('ALTER TABLE note DROP accord_id, CHANGE nom nom VARCHAR(7) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE note_accord MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE note_accord DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE note_accord DROP id');
        $this->addSql('ALTER TABLE note_accord ADD CONSTRAINT FK_89E44DD01EDF023F FOREIGN KEY (accord_id) REFERENCES accord (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE note_accord ADD CONSTRAINT FK_89E44DD026ED0855 FOREIGN KEY (note_id) REFERENCES note (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_89E44DD026ED0855 ON note_accord (note_id)');
        $this->addSql('CREATE INDEX IDX_89E44DD01EDF023F ON note_accord (accord_id)');
        $this->addSql('ALTER TABLE note_accord ADD PRIMARY KEY (note_id, accord_id)');
        $this->addSql('ALTER TABLE users CHANGE country country VARCHAR(255) DEFAULT \'FRANCE\' NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
