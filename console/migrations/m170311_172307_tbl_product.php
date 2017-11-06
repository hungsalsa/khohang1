<?php

use yii\db\Migration;

class m170311_172307_tbl_product extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tbl_product}}', [
            'proID' => $this->primaryKey(11),
            'productName' => $this->string()->notNull(),
            'price' => $this->integer(),
            'saleOf' => $this->integer(),
            'startSale' => $this->integer(),
            'endSale' => $this->integer(),
            'priceSale' => $this->integer(),
            'quanlity' => $this->integer(),
            'size' => $this->integer(),
            'color' => $this->integer(),
            'evaluation' => $this->integer(),
            'image' => $this->string(),
            'keyword' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            'groups' => $this->integer()->notNull(),
            'cateID' => $this->integer()->notNull(),
            'suppliresID' => $this->integer(),
            'userID' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tbl_product}}');
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
