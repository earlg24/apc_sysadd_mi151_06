<?php

namespace app\controllers;

use Yii;
use app\models\ChecklistRef;
use app\models\ChecklistRefSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChecklistRefController implements the CRUD actions for ChecklistRef model.
 */
class ChecklistRefController extends Controller
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
     * Lists all ChecklistRef models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChecklistRefSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ChecklistRef model.
     * @param integer $id
     * @param integer $checklist_category_id
     * @return mixed
     */
    public function actionView($id, $checklist_category_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $checklist_category_id),
        ]);
    }

    /**
     * Creates a new ChecklistRef model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ChecklistRef();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'checklist_category_id' => $model->checklist_category_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ChecklistRef model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $checklist_category_id
     * @return mixed
     */
    public function actionUpdate($id, $checklist_category_id)
    {
        $model = $this->findModel($id, $checklist_category_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'checklist_category_id' => $model->checklist_category_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ChecklistRef model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $checklist_category_id
     * @return mixed
     */
    public function actionDelete($id, $checklist_category_id)
    {
        $this->findModel($id, $checklist_category_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ChecklistRef model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $checklist_category_id
     * @return ChecklistRef the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $checklist_category_id)
    {
        if (($model = ChecklistRef::findOne(['id' => $id, 'checklist_category_id' => $checklist_category_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
