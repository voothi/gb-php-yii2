<?php


namespace app\components;

use app\models\Activity;
use yii\base\Component;

/**
 * Class ActivityComponent
 * @package app\components
 */
class ActivityComponent extends Component
{
    /**
     * @var string class of activity entity
     */
    public $activity_class;

    /**
     * @return Activity
     */
    public function getModel($params=null)
    {
        /**
         * @var Activity $model
         */
        $model =  new $this->activity_class;
        if ($params && is_array($params)) {
            $model->load($params);
        }

        return $model;
    }

    /**
     * @param $model
     * @return bool
     */
    public function createActivity (&$model)
    {
        return $model->validate();
    }
}