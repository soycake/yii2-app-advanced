<?php

namespace frontend\controllers;

use yii\web\Controller;

class ExampleController extends Controller {

    public $layout = 'frontend';
    public $defaultAction = 'index';
    
    // EXAMPLE
    public function actionExample(){
        
        // $this->layout = 'frontend';
        return $this->render('index');
        
    }

}