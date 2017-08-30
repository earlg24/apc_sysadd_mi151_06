<?php

namespace app\controllers;

use Yii;
use app\models\HousekeepingLogDetails;
use app\models\HousekeepingLogDetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HousekeepingLogDetailsController implements the CRUD actions for HousekeepingLogDetails model.
 */
class HousekeepingLogDetailsController extends Controller
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
     * Lists all HousekeepingLogDetails models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HousekeepingLogDetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HousekeepingLogDetails model.
     * @param integer $id
     * @param integer $housekeeping_log_id
     * @param integer $housekeeping_log_room_id
     * @param integer $housekeeping_log_room_room_type_id
     * @param integer $housekeeping_log_employee_id
     * @return mixed
     */
    public function actionView($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id),
        ]);
    }

    /**
     * Creates a new HousekeepingLogDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HousekeepingLogDetails();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'housekeeping_log_id' => $model->housekeeping_log_id, 'housekeeping_log_room_id' => $model->housekeeping_log_room_id, 'housekeeping_log_room_room_type_id' => $model->housekeeping_log_room_room_type_id, 'housekeeping_log_employee_id' => $model->housekeeping_log_employee_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing HousekeepingLogDetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $housekeeping_log_id
     * @param integer $housekeeping_log_room_id
     * @param integer $housekeeping_log_room_room_type_id
     * @param integer $housekeeping_log_employee_id
     * @return mixed
     */
    public function actionUpdate($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id)
    {
        $model = $this->findModel($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'housekeeping_log_id' => $model->housekeeping_log_id, 'housekeeping_log_room_id' => $model->housekeeping_log_room_id, 'housekeeping_log_room_room_type_id' => $model->housekeeping_log_room_room_type_id, 'housekeeping_log_employee_id' => $model->housekeeping_log_employee_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HousekeepingLogDetails model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $housekeeping_log_id
     * @param integer $housekeeping_log_room_id
     * @param integer $housekeeping_log_room_room_type_id
     * @param integer $housekeeping_log_employee_id
     * @return mixed
     */
    public function actionDelete($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id)
    {
        $this->findModel($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HousekeepingLogDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $housekeeping_log_id
     * @param integer $housekeeping_log_room_id
     * @param integer $housekeeping_log_room_room_type_id
     * @param integer $housekeeping_log_employee_id
     * @return HousekeepingLogDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $housekeeping_log_id, $housekeeping_log_room_id, $housekeeping_log_room_room_type_id, $housekeeping_log_employee_id)
    {
        if (($model = HousekeepingLogDetails::findOne(['id' => $id, 'housekeeping_log_id' => $housekeeping_log_id, 'housekeeping_log_room_id' => $housekeeping_log_room_id, 'housekeeping_log_room_room_type_id' => $housekeeping_log_room_room_type_id, 'housekeeping_log_employee_id' => $housekeeping_log_employee_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
