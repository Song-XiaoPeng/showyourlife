<?php

use yii\db\Migration;

class m170804_093559_add_id_to_blog extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170804_093559_add_id_to_blog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170804_093559_add_id_to_blog cannot be reverted.\n";

        return false;
    }
    */
}
