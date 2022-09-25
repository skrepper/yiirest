<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use yii\rest\ActiveController;


class CountryController extends ActiveController
{

    public $modelClass = 'app\models\Country';

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
    }  */

}
