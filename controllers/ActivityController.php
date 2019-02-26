<?php


namespace app\controllers;

use app\base\BaseController;
use app\models\Activity;

class ActivityController extends BaseController
{
    public function actionCreate()
    {
        $activity = new Activity();

//      Заполнение
        $activity->is_blocked = true;
        $activity->title = '1';

/*//      Проверка на валидацию
        if (!$activity->validate()) {
//            echo 'error valid';
//            print_r($activity->getErrors());
//            exit;
        }*/

//      Наполняем значениями
        if (\Yii::$app->request->isPost) {
            $activity->load(\Yii::$app->request->post());

            print_r($activity->getAttributes(['title']));

            $activity->validate();
        }

        return $this->render('create', ['activity' => $activity]);
    }
}