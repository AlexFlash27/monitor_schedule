<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "rooms".
 *
 * @property int $id
 * @property int $room_id
 * @property string $room_name
 */
class Rooms extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
	public static function getDb(){
        return Yii::$app->db;
    }
	 
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id'], 'integer'],
            [['room_name'], 'required'],
            [['room_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_id' => 'Room ID',
            'room_name' => 'Room Name',
        ];
    }
}
