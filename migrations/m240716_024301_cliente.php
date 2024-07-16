<?php

use yii\db\Migration;

/**
 * Class m240716_024301_cliente
 */
class m240716_024301_cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cliente',[
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'cpf' => $this->string()->notNull()->unique(),
            'endereco' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_024301_cliente cannot be reverted.\n";
        $this->dropTable('{{%cliente}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240716_024301_cliente cannot be reverted.\n";

        return false;
    }
    */
}
