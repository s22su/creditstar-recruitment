<?php

use yii\db\Schema;
use yii\db\Migration;

class m150901_181235_add_fk extends Migration
{
    public function up()
    {
		$this->addForeignKey('fk_users', 'Loans', 'userId', 'Users', 'userId', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        echo "m150901_181235_add_fk cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
