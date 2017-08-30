<?php

namespace app\controllers;

use Yii;
use app\models\Room2;
use app\models\Room2Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Room2Controller implements the CRUD action s for Room2 model.
 */
class Room2Controller extends Controller
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
     * Lists all Room2 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Room2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Room2 model.
     * @param integer $id
     * @param integer $room_type_id
     * @return mixed
     */
    public function actionView($id, $room_type_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $room_type_id),
        ]);
    }

    /**
     * Creates a new Room2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Room2();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'room_type_id' => $model->room_type_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Room2 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $room_type_id
     * @return mixed
     */
    public function actionUpdate($id, $room_type_id)
    {
        $model = $this->findModel($id, $room_type_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'room_type_id' => $model->room_type_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Room2 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $room_type_id
     * @return mixed
     */
    public function actionDelete($id, $room_type_id)
    {
        $this->findModel($id, $room_type_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Room2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $room_type_id
     * @return Room2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $room_type_id)
    {
        if (($model = Room2::findOne(['id' => $id, 'room_type_id' => $room_type_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
