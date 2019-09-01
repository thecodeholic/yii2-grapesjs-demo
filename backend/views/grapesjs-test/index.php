<?php
/**
 * User: TheCodeholic
 * Date: 9/1/2019
 * Time: 9:25 PM
 */
?>

<?php echo \thecodeholic\yii2grapesjs\widgets\GrapesjsWidget::widget([
    'clientOptions' => [
        'storageManager' => [
            'id' => '',
            'type' => 'remote',
            'stepsBeforeSave' => 1,
            'urlStore' => "/grapesjs-test/save?id=$model->id",
            'urlLoad' => "/grapesjs-test/get?id=$model->id",
        ],
        'assetManager' => [
            'upload' => "/grapesjs-test/upload"
        ]
    ]
]) ?>
