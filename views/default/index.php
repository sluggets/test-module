<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Alert;
?>
<?= "MyModule: Hello World!"; ?>
<?php $widget = Alert::begin([
        'options' => [
                'class' => 'alert-warning',
        ],
]);
?>
<p>This is an alert example</p>
<?php
$widget->end();
?>
