<?php

use yii\db\Migration;

/**
 * Class m240716_025451_veiculo
 */
class m240716_025451_veiculo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('veiculo',[
            'id' => $this->primaryKey(),
            'modelo' => $this->string()->notNull(),
            'marca' =>$this->string()->notNull(),
            'placa' => $this->string()->notNull()->unique(),
            'cliente_id' => $this->integer()->notNull()

        ]);

        $this->addForeignKey(
            'veiculo_cliente_fk',
            'veiculo',
            'cliente_id',
            'cliente',
            'id',
            'cascade' 

        );
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('veiculo_cliente_fk','veiculo');
        $this->dropTable('veiculo');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_025451_veiculo cannot be reverted.\n";

        return false;
    }
    */
}
