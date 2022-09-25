<?php

namespace app\controllers;

use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;

class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';

/*    public function actions(): array 
    {
        $actions = parent::actions();
        $actions['index'] = [
            'class' => 'yii\rest\IndexAction',
            'modelClass' => $this->modelClass,
            'prepareDataProvider' => fn() => new ActiveDataProvider(
                [
                    'query' => $this->modelClass::find(),
                    'pagination' => false,
                ]
            ),
        ];

        return $actions;
    }*/

  public function behaviors()
  {
    // https://stackoverflow.com/questions/35359365/yii2-rest-angular-cross-domain-cors
    $behaviors = parent::behaviors();

    $behaviors = parent::behaviors();

    // remove authentication filter
    $auth = $behaviors['authenticator'];
    unset($behaviors['authenticator']);

    // add CORS filter
    $behaviors['corsFilter'] = [
        'class' => \yii\filters\Cors::className(),
    ];

    // re-add authentication filter
    $behaviors['authenticator'] = $auth;
    // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
    $behaviors['authenticator']['except'] = ['options'];

    return $behaviors;
  } 
}  
