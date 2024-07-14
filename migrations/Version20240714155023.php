<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240714155023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return "";
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            "CREATE TABLE patients (
                    id INT AUTO_INCREMENT NOT NULL,
                    patient_last_name VARCHAR(255) NOT NULL,
                    patient_first_name VARCHAR(255) NOT NULL,
                    patient_middle_name VARCHAR(255) DEFAULT NULL,
                    patient_dob DATE DEFAULT NULL COMMENT '(DC2Type:date_immutable)',
                    patient_gender SMALLINT DEFAULT NULL,
                    PRIMARY KEY(id)
                ) DEFAULT CHARACTER SET utf8mb4
                COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB"
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DROP TABLE patients");
    }
}
