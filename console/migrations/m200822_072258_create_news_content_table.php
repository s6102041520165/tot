<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_content}}`.
 */
class m200822_072258_create_news_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%news_content}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->notNull(),
            'banner' => $this->text(),
            'content' => $this->text()->notNull(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->integer(),
            'news_type_id' => $this->integer(),
        ],$tableOptions);

        $this->addForeignKey(
            'fk-news_content-news_type_id',
            'news_content',
            'news_type_id',
            'news_type',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_content}}');
    }
}
