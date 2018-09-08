<?php

use yii\db\Migration;

/**
 * Class m180908_223925_create_Sessao
 */
class m180908_223925_create_Sessao extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Sessao',[
            'id' => $this->primaryKey()->notNull(),
            'descricao' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Sessao');
    }
}
