<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Monitor;
use app\models\Classes;
use app\models\Rooms;

/**
 * MonitorSearch represents the model behind the search form of `app\models\Monitor`.
 */
class MonitorSearch extends Monitor
{
    public $classesName;
    public $roomName;

    public function rules()
    {
        return [
            [['lesson_id', 'class_id', 'parallel', 'subject_seq', 'week_day'], 'integer'],
            [['subject_name', 'teacher_id', 'room_id', 'classesName', 'roomName'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Monitor::find();

        // add conditions that should always apply here
        $query->joinWith(['classes']);
        $query->joinWith(['rooms']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['classesName'] = [
            'asc' => [Classes::tableName().'.classname' => SORT_ASC],
            'desc' => [Classes::tableName().'.classname' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['roomName'] = [
            'asc' => [Rooms::tableName().'.room_name' => SORT_ASC],
            'desc' => [Rooms::tableName().'.room_name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lesson_id' => $this->lesson_id,
            'class_id' => $this->class_id,
            'parallel' => $this->parallel,
            'subject_seq' => $this->subject_seq,
            'week_day' => $this->week_day,
        ]);

        $query->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', 'teacher_id', $this->teacher_id])
            ->andFilterWhere(['like', 'room_id', $this->room_id])
            ->andFilterWhere(['like', Classes::tableName().'.classname', $this->classesName])
            ->andFilterWhere(['like', Rooms::tableName().'.room_name', $this->roomName]);

        return $dataProvider;
    }
}
