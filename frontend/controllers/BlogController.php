<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Blog controller
 */
class BlogController extends Controller
{




    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }



    /**
     * article detail show page
     * @author liubin
     */
    public function actionDetail($id){

        echo Url::to(['blog/detail','id'=>$id]);

        echo '<hr>';

        return 'blog - detail - '. $id;

    }



}
