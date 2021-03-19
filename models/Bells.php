<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "bells".
 *
 * @property int $id
 * @property int $type
 * @property int $time_begin
 * @property int $time_end
 * @property int $housing
 */
class Bells extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
	public static function getDb(){
        return Yii::$app->db;
    } 
	 
    public static function tableName()
    {
        return 'bells';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			['housing', 'in', 'range' => [1, 2, 3, 4]],
            [['type', 'time_begin', 'time_end', 'housing'], 'required'],
			[['type', 'time_begin', 'time_end', 'housing'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип',
            'time_begin' => 'Начало урока',
            'time_end' => 'Окончание урока',
            'housing' => 'Корпус',
        ];
    }
}
