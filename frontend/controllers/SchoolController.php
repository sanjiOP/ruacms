<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Blog controller
 */
class SchoolController extends Controller
{




    public function init(){

        if(Yii::$app->user->isGuest){
            $this->redirect('site/login');
        }

    }



    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        echo 'school';
        //return $this->render('index');
    }





}
