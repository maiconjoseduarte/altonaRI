<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Arquivos`.
 */
class m180908_224501_create_Arquivos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Arquivos', [
            'id' => $this->primaryKey()->notNull(),
            'ano' => $this->date(),
            'data' => $this->date(),
            'descricao' => $this->string(),
            'idSessao' => $this->integer(),
            'dataCadastro' => $this->dateTime(),
            'dataAtualizacao' => $this->dateTime()
        ]);

        $this->addForeignKey('fk_Arquivos_Sessao', 'Arquivos','idSessao', 'Sessao','id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_Arquivos_Sessao', 'Arquivos');

        $this->dropTable('Arquivos');
    }
}
