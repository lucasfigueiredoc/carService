<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property string $nome
 * @property string $funcao
 *
 * @property ServicFuncionario[] $servicFuncionarios
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'funcao'], 'required'],
            [['nome', 'funcao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'funcao' => 'Funcao',
        ];
    }

    /**
     * Gets query for [[ServicFuncionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicFuncionarios()
    {
        return $this->hasMany(ServicFuncionario::class, ['funcionario_id' => 'id']);
    }
}
