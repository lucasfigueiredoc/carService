<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $id
 * @property int $veiculo_id
 * @property int $funcionario_id
 * @property string $descricao
 * @property string $status
 *
 * @property ServicFuncionario[] $servicFuncionarios
 * @property Veiculo $veiculo
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['veiculo_id', 'funcionario_id', 'descricao'], 'required'],
            [['veiculo_id', 'funcionario_id'], 'integer'],
            [['descricao', 'status'], 'string'],
            [['veiculo_id'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculo::class, 'targetAttribute' => ['veiculo_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'veiculo_id' => 'Veiculo ID',
            'funcionario_id' => 'Funcionario ID',
            'descricao' => 'Descricao',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[ServicFuncionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicFuncionarios()
    {
        return $this->hasMany(ServicFuncionario::class, ['servico_id' => 'id']);
    }

    /**
     * Gets query for [[Veiculo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculo()
    {
        return $this->hasOne(Veiculo::class, ['id' => 'veiculo_id']);
    }
}
