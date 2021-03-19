<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "school_years".
 *
 * @property int $id
 * @property int $active
 * @property int $year_id
 * @property int $start
 * @property int $end
 */
class SchoolYears extends ActiveRecord
{
	const CLOSE = 0;
	const ACTIVE = 1;	
	
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'school_years';
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
            [['active', 'year_id', 'start', 'end'], 'integer'],
            [['year_id', 'start', 'end'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Active',
            'year_id' => 'Year ID',
            'start' => 'Start',
            'end' => 'End',
        ];
    }
}
