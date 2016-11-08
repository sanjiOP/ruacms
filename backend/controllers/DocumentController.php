<?php
namespace backend\controllers;

use Yii;
use yii\web\Response;
use backend\models\Category;
use backend\models\Document;

/**
 * @Content controller
 * @author lbaztyy
 * @date
 *
 */
class DocumentController extends CommonController
{

    /**
     * 栏目数据
     * */
    public $category = null;

    /**
     * 文档数据
     * */
    public $documents = null;



    /**
     * index action.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }



    /**
     * 文档列表
     *
     * */
    public function actionLists()
    {
        $this->layout = false;
        $nodeparam = Yii::$app->request->get('1');
        $cid = $nodeparam['id'];

        if(is_null($this->category)){
            $this->category = Category::find()->where('id=:cid',[':cid'=>$cid])->one();
        }

        return $this->render('lists',[
            'cid'=>$cid,
            'category'=>$this->category,
        ]);

    }



    /**
     * 获取table数据
     * */
    public function actionDoclist(){
        $this->layout = false;
        Yii::$app->response->format = Response::FORMAT_JSON;
        $cid = Yii::$app->request->get('cid');
        if(is_null($this->documents)){
            $this->documents = Document::find()
                ->select('id,uid,title,category_id,created_at,status')
                ->where('category_id=:cid',[':cid'=>$cid])
                ->all();
        }
        return $this->documents;

    }






}
