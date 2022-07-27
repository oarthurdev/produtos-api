<?php

use yii\db\Migration;

/**
 * Class m220727_122611_produtos
 */
class m220727_122611_produtos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('produto', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string()->notNull(),
            'quantity' => $this->integer(),
            'category_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('produto');
    }
}
