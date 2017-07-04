<?php

use yii\db\Migration;

class m170703_133933_add_date_to_comment extends Migration
{
    public function Up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function Down()
    {
        $this->dropColumn('comment','date');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170703_133933_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
