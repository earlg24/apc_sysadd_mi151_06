<?php

namespace app\controllers;

use Yii;
use app\models\Inspection;
use app\models\InspectionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InspectionController implements the CRUD actions for Inspection model.
 */
class InspectionController extends Controller
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
     * Lists all Inspection models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InspectionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inspection model.
     * @param integer $room_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionView($room_id, $employee_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($room_id, $employee_id),
        ]);
    }

    /**
     * Creates a new Inspection model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Inspection();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Inspection model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $room_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionUpdate($room_id, $employee_id)
    {
        $model = $this->findModel($room_id, $employee_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Inspection model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $room_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionDelete($room_id, $employee_id)
    {
        $this->findModel($room_id, $employee_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Inspection model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $room_id
     * @param integer $employee_id
     * @return Inspection the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($room_id, $employee_id)
    {
        if (($model = Inspection::findOne(['room_id' => $room_id, 'employee_id' => $employee_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
