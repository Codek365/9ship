<?php
use yii\db\Schema;

use yii\db\Migration;

class m170205_070826_init_order extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // create tables. note the specific order
        $this->createTable('{{%order}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' not null',
            'content' => Schema::TYPE_TEXT . ' not null',
            'from' => Schema::TYPE_STRING . ' not null',
            'to' => Schema::TYPE_STRING . ' not null',
            'price' => Schema::TYPE_INTEGER . ' not null',
            'fee' => Schema::TYPE_INTEGER . ' not null',
            'shop_id' => Schema::TYPE_INTEGER . ' not null',
            'shipper_id' => Schema::TYPE_INTEGER . ' not null',
            'status' => Schema::TYPE_SMALLINT . ' not null',
            'created_at' => Schema::TYPE_TIMESTAMP . ' null',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%order}}');

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
