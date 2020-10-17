<?php

use \yii\db\Migration;

class m190124_110200_add_verification_token_column_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'verification_token', $this->string()->defaultValue(null));

        /**Default Password is '12345678' */
        $this->insert('{{%user}}',[
            'id' => 1,
            'username' => 'admin',
            'auth_key' => 'm8eWBevxYMZ91cnkENB1Q9Yu4lG6-rnW',
            'password_hash' => '$2y$13$ceIxJih.YNQ8tSyFcat4qODLkAk/nq5c2Jysyk7m.TkhODtEaAfXG',
            'password_reset_token' => null,
            'email' => 'email@example.com',
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
            'verification_token' => '4BidtxwJcWLKZKpIDwi7AetU35Q_lxsL_1602897476'
        ]);
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'verification_token');
    }
}
