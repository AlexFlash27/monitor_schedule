<?php

namespace app\models;

use Yii;
use app\models\Classes;

/**
 * This is the model class for table "changes".
 *
 * @property int $id
 * @property string $class_id
 * @property int $status
 * @property int $date
 * @property string $text
 */
class Changes extends \yii\db\ActiveRecord
{
	
	public $date_str;
	
    /**
     * {@inheritdoc}
     */
	public static function getDb(){
        return Yii::$app->db;
    } 
	 
    public static function tableName()
    {
        return 'changes';
    }

	public function getClasses()
    {
        return $this->hasOne(Classes::className(), ['classid' => 'class_id']);
    }
	
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
		    [['date_str', 'text', 'class_id'], 'required'],
		    [['status', 'date'], 'integer'],
			[['date_str'], 'date', 'format' => 'php:Y-m-d'],
			[['status', 'date', 'teacher_id' ], 'safe'],
            [['class_id', 'teacher_id'], 'string', 'max' => 50],
            [['text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
			'teacher_id' => 'Учитель',
            'class_id' => 'Класс',
            'date_str' => 'Дата',
            'text' => 'Сообщение',
        ];
    }
}
