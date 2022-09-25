<?php
namespace app\controllers;

use yii\rest\Controller;
use app\models\User;
use yii\filters\auth\HttpBasicAuth;

class UserController extends Controller
{
    public function actionIndex()
    {
        return User::getAll();
    }

    public function actionElse()
    {
        return User::getAllElse();
    }

    /**
     * @inheritdoc
     */
    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
        ];
    }

  public function behaviors()
  {
    $behaviors = parent::behaviors();
/*    $behaviors['authenticator'] = [
        'class' => HttpBasicAuth::className(),
    ];*/

    return $behaviors;
  }

}
