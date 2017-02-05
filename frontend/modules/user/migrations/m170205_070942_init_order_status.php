<?php

use yii\db\Schema;
use yii\db\Migration;

class m170205_070942_init_order_status extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // create tables. note the specific order
        $this->createTable('{{%order_status}}', [
            'id' => Schema::TYPE_PK,
            'status' => Schema::TYPE_STRING . ' not null',
            'status_id' => Schema::TYPE_SMALLINT . ' not null',
        ], $tableOptions);
        // insert role data
        $columns = ['status', 'status_id'];
        $this->batchInsert('{{%order_status}}', $columns, [
            ['open','1'],
            ['taken','2'],
            ['shipping','3'],
            ['close','4'],
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%order_status}}');

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
