<?php


namespace app\controllers;

use app\base\BaseController;
use app\models\Activity;

class ActivityController extends BaseController
{
    public function actionCreate()
    {
        $activity = new Activity();

        if (\Yii::$app->request->isPost) {
            $activity->load(\Yii::$app->request->post());

            $activity->validate();
        }

        return $this->render('create', ['activity' => $activity]);
    }
}