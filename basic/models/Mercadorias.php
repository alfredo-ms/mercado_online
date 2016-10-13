<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mercadorias".
 *
 * @property integer $codigo
 * @property string $tipo_mercadoria
 * @property string $nome
 * @property integer $quantidade
 * @property string $preco
 * @property string $tipo_negocio
 */
class Mercadorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mercadorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_mercadoria', 'nome', 'preco'], 'required'],
            [['quantidade'], 'integer'],
            [['preco'], 'number'],
            [['tipo_mercadoria'], 'string', 'max' => 50],
            [['nome'], 'string', 'max' => 100],
            [['tipo_negocio'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Código da Mercadoria',
            'tipo_mercadoria' => 'Tipo da Mercadoria',
            'nome' => 'Nome da Mercadoria',
            'quantidade' => 'Quantidade',
            'preco' => 'Preço',
            'tipo_negocio' => 'Tipo do Negócio',
        ];
    }
}
