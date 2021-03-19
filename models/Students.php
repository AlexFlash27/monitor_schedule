<?php

namespace app\models;

use Yii;
use app\models\Classes;
use app\models\AccountStudent;
use app\models\FoodStudentComplex;
use app\models\EducContracts;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "students".
 *
 * @property int $student_id
 * @property string $student_name
 * @property int $class_id
 */
class Students extends ActiveRecord
{
	const STATUS_ACTIVE = 0;
	const STATUS_LEAVE = 1;
	
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
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

	public function getAttendance()
    {
		return $this->hasMany(EducAttendance::className(), ['student_id' => 'student_id']);
    }

	public function getAccount()
    {
        return $this->hasOne(AccountStudent::className(), ['student_id' => 'student_id']);
    }
	
	public function getMenu()
    {
        return $this->hasOne(FoodMenuOrder::className(), ['student_id' => 'student_id']);
    }
	
	public function getStudentComplex()
    {
        return $this->hasOne(FoodStudentComplex::className(), ['student_id' => 'student_id']);
    }
	
	public function getContract()
    {
        return $this->hasOne(EducContracts::className(), ['student_id' => 'student_id']);
    }
	
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'student_name', 'class_id', 'year'], 'required'],
            [['student_id', 'class_id', 'year', 'birthdate', 'netschool_id'], 'integer'],
			['gender', 'in', 'range' => [0, 1]],
            [['student_name', 'firstname', 'middlename', 'lastname'], 'string', 'max' => 255],
			['student_id', 'unique', 'targetAttribute' => ['student_id', "year"]]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => '#',
            'student_name' => 'Имя ученика',
            'class_id' => 'Класс',
			'year' => 'Year',
        ];
    }
}
