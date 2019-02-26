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
    public function getModel()
    {
        return new $this->activity_class;
    }
}