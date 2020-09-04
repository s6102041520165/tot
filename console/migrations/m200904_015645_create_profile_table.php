<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%profile}}`.
 */
class m200904_015645_create_profile_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Add column to user table.
        $this->addColumn('{{%user}}', 'profile_id', $this->integer());

        //Created proifle table.
        $this->createTable('{{%profile}}', [
            'id' => $this->primaryKey(),
            'f_name' => $this->string(100)->notNull(),
            'l_name' => $this->string(100)->notNull(),
            'picture' => $this->string(100),
        ]);

        $this->addForeignKey(
            'fk-user-profile_id',
            '{{%user}}',
            'profile_id',
            '{{%profile}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-user-profile_id', '{{%user}}');
        $this->dropColumn('{{%user}}', 'profile_id');
        $this->dropTable('{{%profile}}');
    }
}
