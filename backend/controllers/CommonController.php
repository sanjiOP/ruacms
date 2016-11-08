<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Response;
use backend\models\Menu;
use backend\models\Category;
use yii\helpers\ArrayHelper;
use common\helpers\Recursion;

/**
 * Common controller
 */

class CommonController extends BackendController
{


    /**
     * unable CsrfValidation for common actions
     *
     * @author lbaztyy
     */
    public $enableCsrfValidation = false;




    /**
     * 后台站点菜单
     *
     * @return array menu
     * */
    public function actionMenus(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $id = Yii::$app->request->post('id');
        $id = !empty($id) ? $id : 0;
        $menus = Menu::getMenuLevel($id);
        foreach($menus as $k=>$menu){
            $menu->url = Url::to([$menu->url]);
        }
        return ArrayHelper::toArray($menus);
    }


    /**
     * @categorylis
     * */
    public function actionCatelist(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $id = Yii::$app->request->post('id');
        if(empty($id)){
            $list = Category::find()
                ->select(['id','title as text','pid','iconcls as iconCls','level'])
                ->where(['level'=>[1,2]])
                ->asArray()->all();
            foreach ($list as &$c){
                if($c['level'] != 1){
                    $c['state'] = 'closed';
                }
                $c['url'] = Url::to(['document/lists',['id'=>$c['id']]]);
            }
            return Recursion::list_to_tree($list,'id','pid','children');
        }else{
            $list = Category::find()
                ->select(['id','title as text','pid','iconcls as iconCls','level'])
                ->where(['pid'=>$id])
                ->asArray()->all();
            foreach ($list as &$c){
                $c['state'] = 'closed';
                $c['url'] = Url::to(['document/lists',['id'=>$c['id']]]);
            }
            return $list;
        }
    }






    /*
     *
        $web = \Yii::getAlias('@web');
        var_dump($web);
        echo '<hr>';

        $app = \Yii::getAlias('@app');
        var_dump($app);
        echo '<hr>';

        $webroot = \Yii::getAlias('@webroot');
        var_dump($webroot);
        echo '<hr>';

     * */

}
