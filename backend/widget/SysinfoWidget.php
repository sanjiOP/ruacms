<?php
/**
 * Created by PhpStorm.
 * User: Gezlife
 * Date: 2016/10/27
 * Time: 16:01
 */

namespace backend\widget;

use yii\base\Widget;
use yii\helpers\Html;

class SysinfoWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}