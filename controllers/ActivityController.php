<?php


namespace app\controllers;

use app\base\BaseController;
use app\models\Activity;
use yii\web\Controller;

class ActivityController extends BaseController
{
    public function actionCreate()
    {
        $activity = new Activity();
        $activity->is_blocked = true;
        $activity->title = 'Заголовок';

        return $this->render('create', ['activity' => $activity]);
    }
}