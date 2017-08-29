<?php

namespace app\controllers;

use Yii;
use app\models\ChecklistItems;
use app\models\ChecklistItemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChecklistItemsController implements the CRUD actions for ChecklistItems model.
 */
class ChecklistItemsController extends Controller
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
     * Lists all ChecklistItems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChecklistItemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ChecklistItems model.
     * @param integer $id
     * @param integer $checklist_ref_id
     * @param integer $room_type_id
     * @return mixed
     */
    public function actionView($id, $checklist_ref_id, $room_type_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $checklist_ref_id, $room_type_id),
        ]);
    }

    /**
     * Creates a new ChecklistItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ChecklistItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'checklist_ref_id' => $model->checklist_ref_id, 'room_type_id' => $model->room_type_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ChecklistItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $checklist_ref_id
     * @param integer $room_type_id
     * @return mixed
     */
    public function actionUpdate($id, $checklist_ref_id, $room_type_id)
    {
        $model = $this->findModel($id, $checklist_ref_id, $room_type_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'checklist_ref_id' => $model->checklist_ref_id, 'room_type_id' => $model->room_type_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ChecklistItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $checklist_ref_id
     * @param integer $room_type_id
     * @return mixed
     */
    public function actionDelete($id, $checklist_ref_id, $room_type_id)
    {
        $this->findModel($id, $checklist_ref_id, $room_type_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ChecklistItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $checklist_ref_id
     * @param integer $room_type_id
     * @return ChecklistItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $checklist_ref_id, $room_type_id)
    {
        if (($model = ChecklistItems::findOne(['id' => $id, 'checklist_ref_id' => $checklist_ref_id, 'room_type_id' => $room_type_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
