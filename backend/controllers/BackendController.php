<?php
namespace backend\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;


/**
 * Backend controller
 *
 * @date 20161027
 * @author ruaby
 * -----------------------
 * basecontroller
 *
 */
class BackendController extends Controller
{






    /**
     * @inheritdoc
     *
     * @ login user
     * ? guest user
     *
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'allow' =>true,
                        'roles' =>['@'],
                    ],
                ],
            ],
        ];
    }



    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }






}
