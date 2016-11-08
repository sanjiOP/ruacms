<?php
namespace backend\widget;

use Yii;
use yii\helpers\Url;
use yii\base\Widget;
use backend\models\Menu;
use yii\helpers\ArrayHelper;

/**
 * User: lbaztyy
 * Date: 2016/10/27
 * Time: 16:01
 */
class MenuWidget extends Widget
{

    public $level = 0;

    public $menus;

    public function run()
    {
        $this->menus = ArrayHelper::toArray(Menu::getMenuLevel($this->level));
        $this->parseMenu();
        return $this->view->renderFile( $this->view->theme->basePath. '/widget/menu.php',[
            'menus'=>$this->menus
        ]);
    }


    /**
     * parse menu for active url
     * */
    private function parseMenu(){

        $controller = Yii::$app->controller->id;
        foreach($this->menus as &$menu){
            $menu['url'] = Url::to([$menu['url']]);
            if($menu['name'] == $controller){
                $menu['active'] = 'active';
            }else{
                $menu['active'] = '';
            }
        }
    }

}