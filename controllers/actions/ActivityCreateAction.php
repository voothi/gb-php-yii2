<?php


namespace app\controllers\actions;

use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action
{
    public function run()
    {
        $activity = \Yii::$app->activity->getModel();

        if (\Yii::$app->request->isPost) {
            $activity->load(\Yii::$app->request->post());

            $activity->validate();
        }

        return $this->controller->render('create', ['activity' => $activity]);
    }
}