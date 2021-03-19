<?php

namespace app\models;

use Yii;
use app\models\Students;
use app\models\AccountStudent;

/**
 * This is the model class for table "parent_child".
 *
 * @property int $id
 * @property int $parent_id
 * @property int $student_id
 */
class ParentChild extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parent_child';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->db;
    }

	public function getStudent()
    {
		return $this->hasOne(Students::className(), ['student_id' => 'student_id']);
    }
	
	public function getParent()
    {
		return $this->hasOne(Users::className(), ['user_id' => 'parent_id']);
    }		
		
	public function getAccount()
    {
        return $this->hasOne(AccountStudent::className(), ['student_id' => 'student_id']);
    }
	
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'student_id'], 'required'],
            [['parent_id', 'student_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'student_id' => '#',
        ];
    }
}
