<?php

namespace app\models;

use Yii;
use app\models\Classes;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "teacher_child".
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $class_id
 */
class TeacherChild extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher_child';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->db;
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
            [['teacher_id', 'class_id'], 'required'],
            [['teacher_id', 'class_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'teacher_id' => 'Teacher ID',
            'class_id' => 'Class ID',
        ];
    }
}
