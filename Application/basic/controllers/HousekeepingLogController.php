<?php

namespace app\controllers;

use Yii;
use app\models\HousekeepingLog;
use app\models\HousekeepingLogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HousekeepingLogController implements the CRUD actions for HousekeepingLog model.
 */
class HousekeepingLogController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all HousekeepingLog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HousekeepingLogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HousekeepingLog model.
     * @param integer $id
     * @param integer $room_id
     * @param integer $room_room_type_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionView($id, $room_id, $room_room_type_id, $employee_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $room_id, $room_room_type_id, $employee_id),
        ]);
    }

    /**
     * Creates a new HousekeepingLog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HousekeepingLog();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'room_id' => $model->room_id, 'room_room_type_id' => $model->room_room_type_id, 'employee_id' => $model->employee_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HousekeepingLog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $room_id
     * @param integer $room_room_type_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionUpdate($id, $room_id, $room_room_type_id, $employee_id)
    {
        $model = $this->findModel($id, $room_id, $room_room_type_id, $employee_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'room_id' => $model->room_id, 'room_room_type_id' => $model->room_room_type_id, 'employee_id' => $model->employee_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HousekeepingLog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $room_id
     * @param integer $room_room_type_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionDelete($id, $room_id, $room_room_type_id, $employee_id)
    {
        $this->findModel($id, $room_id, $room_room_type_id, $employee_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HousekeepingLog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $room_id
     * @param integer $room_room_type_id
     * @param integer $employee_id
     * @return HousekeepingLog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $room_id, $room_room_type_id, $employee_id)
    {
        if (($model = HousekeepingLog::findOne(['id' => $id, 'room_id' => $room_id, 'room_room_type_id' => $room_room_type_id, 'employee_id' => $employee_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
