<?php
    use yii\helpers\Html;
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html >
<html>
 <head>
  <meta charset="UTF-8"/>
  <?= Html::csrfMetaTags(); ?>
  <title><?= Html::encode($this->title); ?></title>
  <?php $this->head(); ?>
 </head>
 <body>
  <?php $this->beginBody(); ?>
  <?= $content; ?>
  <?php $this->endBody(); ?>
 </body>
</html>
<?php $this->endPage(); ?>
