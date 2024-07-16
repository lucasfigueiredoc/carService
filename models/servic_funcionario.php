<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servic_funcionario".
 *
 * @property int $servico_funcionario
 * @property int $funcionario_id
 * @property int $servico_id
 *
 * @property Funcionario $funcionario
 * @property Servico $servico
 */
class servic_funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servic_funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['funcionario_id', 'servico_id'], 'required'],
            [['funcionario_id', 'servico_id'], 'integer'],
            [['funcionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::class, 'targetAttribute' => ['funcionario_id' => 'id']],
            [['servico_id'], 'exist', 'skipOnError' => true, 'targetClass' => Servico::class, 'targetAttribute' => ['servico_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'servico_funcionario' => 'Servico Funcionario',
            'funcionario_id' => 'Funcionario ID',
            'servico_id' => 'Servico ID',
        ];
    }

    /**
     * Gets query for [[Funcionario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFuncionario()
    {
        return $this->hasOne(Funcionario::class, ['id' => 'funcionario_id']);
    }

    /**
     * Gets query for [[Servico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServico()
    {
        return $this->hasOne(Servico::class, ['id' => 'servico_id']);
    }
}
