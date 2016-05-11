<?php

use yii\helpers\Html;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode($this->title); ?></title>
        <?php $this->head(); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
            <!-- Content -->
            <?php echo $content; ?>
            <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <p class="pull-left">&copy; Modify by <?php echo \Yii::$app->params['modifyby']; ?> <?php echo date('Y'); ?></p>
                    <p class="pull-right"><?php echo Yii::powered(); ?></p>
                </div>
            </footer>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>