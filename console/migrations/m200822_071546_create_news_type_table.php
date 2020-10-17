<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_type}}`.
 */
class m200822_071546_create_news_type_table extends Migration
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

        $this->createTable('{{%news_type}}', [
            'id' => $this->primaryKey(),
            'name_type' => $this->string(255)->notNull()->unique(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'mode' => $this->integer()->defaultValue(0)
        ],$tableOptions);
        
        $this->insert('news_type', [
            'id' => 1,
            'name_type' => 'ข่าวประชาสัมพันธ์องค์กร',
            'created_at' => time(),
            'updated_at' => time(),
            'created_by' => 1,
            'updated_by' => 1
        ]);
        $this->insert('news_type',[
            'id' => 2,
            'name_type' => 'ข่าวทั่วไป',
            'created_at' => time(),
            'updated_at' => time(),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $this->insert('news_type',[
            'id' => 3,
            'name_type' => 'ข่าวธุรกิจ',
            'created_at' => time(),
            'updated_at' => time(),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $this->insert('news_type',[
            'id' => 4,
            'name_type' => 'ข่าว CSR',
            'created_at' => time(),
            'updated_at' => time(),
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }

    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_type}}');
    }
}
