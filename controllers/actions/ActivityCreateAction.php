<?php


namespace app\controllers\actions;

use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action
{
    public $my_name;

    public function run()
    {
        $activity = new Activity();

        echo $this->my_name;exit;

        if (\Yii::$app->request->isPost) {
            $activity->load(\Yii::$app->request->post());

            $activity->validate();
        }

        return $this->controller->render('create', ['activity' => $activity]);
    }
}