<?php
namespace backend\controllers;

use Yii;
use backend\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends BackendController
{


    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {

        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post())) {
            if($model->login()){
                $result = ['state'=>1,'info'=>'login success'];
            }else{
                $result = ['state'=>0,'info'=>'login error'];
            }
            return \yii\helpers\Json::encode($result);
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
