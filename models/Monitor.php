<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "monitor".
 *
 * @property int $lesson_id
 * @property string $class_id
 * @property int $parallel
 * @property int $subject_seq
 * @property int $week_day
 * @property string $subject_name
 * @property string $teacher_id
 * @property string $room_id
 */
class Monitor extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

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
            [['lesson_id', 'class_id', 'parallel', 'subject_seq', 'week_day', 'subject_name', 'teacher_id'], 'required'],
            [['class_id', 'lesson_id', 'parallel', 'subject_seq', 'week_day'], 'integer'],
            [['subject_name', 'teacher_id', 'room_id'], 'string', 'max' => 255],
        ];
    }

    public function getClasses()
    {
        return $this->hasOne(Classes::className(), ['classid' => 'class_id'])->one();
    }

    public function getRooms()
    {
        return $this->hasOne(Rooms::className(), ['room_id' => 'room_id'])->one();
    }

    public function getTeachers()
    {
        return $this->hasOne(Teachers::className(), ['teacher_id' => 'teacher_id']);
    }

    public function getClassName()
    {
        if ($classes = $this->getClasses()) {
            return $classes->classname;
        }
        return 'Not set';
    }

    public function getRoomNumber()
    {
        if ($rooms = $this->getRooms()) {
            return $rooms->room_name;
        }
        return '';
    }

     /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lesson_id' => 'Lesson ID',
            'class_id' => 'Class ID',
            'parallel' => 'Parallel',
            'subject_seq' => 'Номер урока',
            'week_day' => 'День недели',
            'subject_name' => 'Название урока',
            'teacher_id' => 'Teacher ID',
            'room_id' => 'Room ID',
            'classesName' => 'Класс',
            'roomName' => 'Номер кабинета',
        ];
    }
}
