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
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240716_031535_servico cannot be reverted.\n";

        $this->dropTable('{{%servico}}');
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
