<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Connection;

/**
 * This is the model class for table "classes".
 *
 * @property int $classid
 * @property string $classname
 * @property int $parallel
 */
class Classes extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * @return Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->db;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classid', 'classname', 'parallel', 'year'], 'required'],
            [['classid', 'parallel', 'year'], 'integer'],
            [['classname'], 'string', 'max' => 5],
            [['classid'], 'unique'],
        ];
    }
	
	public function getLesson()
    {
       return $this->hasOne(Monitor::className(), ['class_id' => 'classid'])->orderBy("subject_seq DESC");
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'classid' => 'Classid',
            'classname' => 'Класс',
            'parallel' => 'Параллель',
			'year' => 'Year',
        ];
    }
}
