<?php

use yii\db\Migration;

/**
 * Class m240716_031535_servico
 */
class m240716_031535_servico extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('servico',[
            'id' => $this->primaryKey(),
            'veiculo_id' => $this->integer()->notNull(),
            'funcionario_id' => $this->integer()->notNull(),
            'descricao' => $this->text()->notNull(),
            'status' => "ENUM('Pronto', 'Em Trabalho') NOT NULL DEFAULT 'Em Trabalho'", // adicionando a coluna status
        ]);

        $this->addForeignKey(
            'servico_veiculo_fk',
            'servico',
            'veiculo_id',
            'veiculo',
            'id',
            'cascade'

        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeingKey('servico_veiculo_fk', 'servico');
        $this->dropTable('servico');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_031535_servico cannot be reverted.\n";

        return false;
    }
    */
}
