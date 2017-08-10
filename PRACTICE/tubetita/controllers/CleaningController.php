<?php

namespace app\controllers;

use Yii;
use app\models\Cleaning;
use app\models\CleaningSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CleaningController implements the CRUD actions for Cleaning model.
 */
class CleaningController extends Controller
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
     * Lists all Cleaning models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CleaningSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cleaning model.
     * @param integer $room_id
     * @param integer $employee_id
     * @param integer $checklist_id
     * @return mixed
     */
    public function actionView($room_id, $employee_id, $checklist_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($room_id, $employee_id, $checklist_id),
        ]);
    }

    /**
     * Creates a new Cleaning model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cleaning();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id, 'checklist_id' => $model->checklist_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cleaning model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $room_id
     * @param integer $employee_id
     * @param integer $checklist_id
     * @return mixed
     */
    public function actionUpdate($room_id, $employee_id, $checklist_id)
    {
        $model = $this->findModel($room_id, $employee_id, $checklist_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'room_id' => $model->room_id, 'employee_id' => $model->employee_id, 'checklist_id' => $model->checklist_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cleaning model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $room_id
     * @param integer $employee_id
     * @param integer $checklist_id
     * @return mixed
     */
    public function actionDelete($room_id, $employee_id, $checklist_id)
    {
        $this->findModel($room_id, $employee_id, $checklist_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cleaning model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $room_id
     * @param integer $employee_id
     * @param integer $checklist_id
     * @return Cleaning the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($room_id, $employee_id, $checklist_id)
    {
        if (($model = Cleaning::findOne(['room_id' => $room_id, 'employee_id' => $employee_id, 'checklist_id' => $checklist_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
