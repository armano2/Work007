<?php

use yii\db\Schema;
use yii\db\Migration;

class m150605_152807_work007a extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'name', Schema::TYPE_STRING);
        $this->addColumn('{{%user}}', 'surname', Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m150605_152807_work007a cannot be reverted.\n";

        return false;
    }

}
