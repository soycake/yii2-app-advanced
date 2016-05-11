<?php

namespace backend\controllers;

use yii\web\Controller;

class ExampleController extends Controller {

    public $layout = 'backend';
    public $defaultAction = 'index';
    
    // EXAMPLE
    public function actionExample(){
        
        // $this->layout = 'backend';
        return $this->render('index');
        
    }

}