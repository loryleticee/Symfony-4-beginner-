<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181106011025 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE note_accord (note_id INT NOT NULL, accord_id INT NOT NULL, INDEX IDX_89E44DD026ED0855 (note_id), INDEX IDX_89E44DD01EDF023F (accord_id), PRIMARY KEY(note_id, accord_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accord_note (accord_id INT NOT NULL, note_id INT NOT NULL, INDEX IDX_1000B94D1EDF023F (accord_id), INDEX IDX_1000B94D26ED0855 (note_id), PRIMARY KEY(accord_id, note_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE note_accord ADD CONSTRAINT FK_89E44DD026ED0855 FOREIGN KEY (note_id) REFERENCES note (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE note_accord ADD CONSTRAINT FK_89E44DD01EDF023F FOREIGN KEY (accord_id) REFERENCES accord (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accord_note ADD CONSTRAINT FK_1000B94D1EDF023F FOREIGN KEY (accord_id) REFERENCES accord (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accord_note ADD CONSTRAINT FK_1000B94D26ED0855 FOREIGN KEY (note_id) REFERENCES note (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA141EDF023F');
        $this->addSql('DROP INDEX IDX_CFBDFA141EDF023F ON note');
        $this->addSql('ALTER TABLE note DROP accord_id, CHANGE nom nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE accord CHANGE type nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE note_accord');
        $this->addSql('DROP TABLE accord_note');
        $this->addSql('ALTER TABLE accord CHANGE nom type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE note ADD accord_id INT DEFAULT NULL, CHANGE nom nom VARCHAR(2) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA141EDF023F FOREIGN KEY (accord_id) REFERENCES accord (id)');
        $this->addSql('CREATE INDEX IDX_CFBDFA141EDF023F ON note (accord_id)');
    }
}
