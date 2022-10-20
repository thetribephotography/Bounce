<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%allcars}}`.
 */
class m220317_202542_create_allcars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%allcars}}', [
            'id' => $this->primaryKey(),
            'product_name'=> $this->string(length: 30)->notNull(),
            'selling_price'=>$this->integer(length: 100)->notNull,
            'buying_price'=>$this->integer(length: 100)->notNull,
            'description'=>$this->strng(length: 40)->notNull,

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%allcars}}');
    }
}
