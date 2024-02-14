<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209161631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6ABD34C29E');
        $this->addSql('DROP INDEX IDX_E01FBE6ABD34C29E ON images');
        $this->addSql('ALTER TABLE images DROP attached_product_id');
        $this->addSql('ALTER TABLE product ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD3DA5256D FOREIGN KEY (image_id) REFERENCES images (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D34A04AD3DA5256D ON product (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD3DA5256D');
        $this->addSql('DROP INDEX UNIQ_D34A04AD3DA5256D ON product');
        $this->addSql('ALTER TABLE product DROP image_id');
        $this->addSql('ALTER TABLE images ADD attached_product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6ABD34C29E FOREIGN KEY (attached_product_id) REFERENCES product (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E01FBE6ABD34C29E ON images (attached_product_id)');
    }
}
