<?php

use yii\db\Migration;

/**
 * Class m240716_025117_funcionario
 */
class m240716_025117_funcionario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('funcionario',[
           'id' => $this->primaryKey(),
           'nome' => $this->string()->notNull(),
           'funcao'=> $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_025117_funcionario cannot be reverted.\n";
        $this->dropTable('funcionario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_025117_funcionario cannot be reverted.\n";

        return false;
    }
    */
}
