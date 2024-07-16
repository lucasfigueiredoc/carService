<?php

use yii\db\Migration;

/**
 * Class m240716_095558_servic_funcionario
 */
class m240716_095558_servic_funcionario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('servic_funcionario',[
            'servico_funcionario' => $this->primaryKey()->notNull(),
            'funcionario_id' => $this->integer()->notNull(),
            'servico_id' => $this->integer()->notNull()
        ]);

        $this->addForeignKey(
            'fk-servic-funcionario-funcionario_id',
            'servic_funcionario',
            'funcionario_id',
            'funcionario',
            'id',
            'cascade'
        );

        $this->addForeignKey(
            'fk-servic-servico-servico_id',
            'servic_funcionario',
            'servico_id',
            'servico',
            'id',
            'cascade'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_095558_servic_funcionario cannot be reverted.\n";
        $this->dropForeignKey('fk-servic-funcionario-funcionario_id','servic_funcionario');
        $this->dropForeignKey('fk-servic-funcionario-servico_id','servic_funcionario');
        $this->dropTable('servic-funcionario');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_095558_servic_funcionario cannot be reverted.\n";

        return false;
    }
    */
}
