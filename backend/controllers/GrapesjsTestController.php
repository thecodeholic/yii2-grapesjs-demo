<?php
/**
 * User: TheCodeholic
 * Date: 9/1/2019
 * Time: 9:19 PM
 */

namespace backend\controllers;


use thecodeholic\yii2grapesjs\models\Content;
use yii\web\Controller;

/**
 * Class GrapesjsTestController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package backend\controllers
 */
class GrapesjsTestController extends Controller
{
    public function actions()
    {
        return array_merge(parent::actions(), [
            'get' => \thecodeholic\yii2grapesjs\actions\GetAction::class,
            'save' => \thecodeholic\yii2grapesjs\actions\SaveAction::class,
            'upload' => \thecodeholic\yii2grapesjs\actions\UploadAction::class
        ]);
    }

    public function actionIndex()
    {
        $model = Content::find()->one();
        return $this->render('index',[
            'model' => $model
        ]);
    }
}
