<?php


namespace app\controllers\actions;

use app\components\ActivityComponent;
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
            /** @var ActivityComponent $comp */
            $comp = \Yii::$app->activity;
            $activity = $comp->getModel(\Yii::$app->request->post());
            $comp->createActivity($activity);
        } else {
            $activity = \Yii::$app->activity->getModel();
        }

        return $this->controller->render('create', ['activity' => $activity]);
    }
}