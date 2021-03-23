<?php

namespace app\controllers;

use Yii;
use app\models\Monitor;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MonitorController implements the CRUD actions for Monitor model.
 */
class MonitorController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Monitor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'math';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('index', ['lessons' => $lessons]);
    }

    public function actionInsert_math()
    {
        return $this->renderPartial('insert_math');
    }

    public function actionInsert_pe()
    {
        return $this->renderPartial('insert_pe');
    }

    public function action1307()
    {
        $this->layout = 'horiz_math';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('mathematics/1307', ['lessons' => $lessons]);
    }

    public function action1311()
    {
        $this->layout = 'math';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('mathematics/1311', ['lessons' => $lessons]);
    }

    public function action1312()
    {
        $this->layout = 'math';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('mathematics/1312', ['lessons' => $lessons]);
    }

    public function action1315()
    {
        $this->layout = 'it';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('1315', ['lessons' => $lessons]);
    }

    public function action1317()
    {
        $this->layout = 'pe';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('pe/1317', ['lessons' => $lessons]);
    }

    public function action1322()
    {
        $this->layout = 'pe';

        $conditions = ['week_day' => date('w'),];
        $lessons = Monitor::find()->where($conditions)->orderBy('subject_seq')->all();

        return $this->render('pe/1322', ['lessons' => $lessons]);
    }

    /**
     * Displays a single Monitor model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Monitor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Monitor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->lesson_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Monitor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->lesson_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Monitor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Monitor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Monitor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Monitor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
