<?php

namespace app\controllers;

use yii\web\Controller;

class SmthngController extends Controller
{
    // ...������������ ���...

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSay($message = '������')
    {
        return $this->render('say', ['message' => $message]);
    }
}