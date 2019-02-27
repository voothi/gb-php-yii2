<?php


namespace app\controllers\actions;

use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action
{


    public function run()
    {
        /**
         * @var $activity Activity
         * @var $activity BaseYii
         */
        if (\Yii::$app->request->isPost) {


            $activity = \Yii::$app->activity->getModel(\Yii::$app->request->post());

            $activity->validate();
        } else {
            $activity = \Yii::$app->activity->getModel();
        }

        return $this->controller->render('create', ['activity' => $activity]);
    }
}