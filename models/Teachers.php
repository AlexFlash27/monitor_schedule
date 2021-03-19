<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "teachers".
 *
 * @property int $teacher_id
 * @property string $firstname
 * @property string $secondname
 * @property string $surname
 */
class Teachers extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
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
            [['teacher_id', 'firstname', 'secondname', 'surname'], 'required'],
            [['teacher_id'], 'integer'],
            [['firstname', 'secondname', 'surname'], 'string', 'max' => 255],
            [['teacher_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'firstname' => 'Firstname',
            'secondname' => 'Secondname',
            'surname' => 'Surname',
        ];
    }
}
