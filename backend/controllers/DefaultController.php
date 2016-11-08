<?php
namespace backend\controllers;


/**
 * Default controller
 */
class DefaultController extends BackendController
{




    /**
     * index action.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
