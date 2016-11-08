<?php
namespace backend\widget;

use yii\base\Widget;


/**
 * User: lbaztyy
 * Date: 2016/10/27
 * Time: 16:01
 */
class ConfigjsWidget extends Widget
{

    public function run()
    {
        return $this->view->renderFile( $this->view->theme->basePath. '/widget/configjs.php');
    }

}