<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'YiiFramework.co',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Blog', 'url' => ['/blog/default/index']],
                    ['label' => 'Yii Preguntas', 'url' => ['/qa/default/index']],
                    ['label' => 'Registrarme', 'url' => ['/auth/default/signup'], 'visible' => Yii::$app->user->isGuest],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Inicio de Sesión', 'url' => ['/auth/default/login']] :
                        ['label' => 'Cerrar sesión',
                            'url' => ['/auth/default/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
        <div class="container text-center">
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2569261466123593" data-ad-slot="6179218685" data-ad-format="auto"></ins>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">
                &copy; <a href="http://obregon.co">Obregón.co</a> <?= date('Y') ?> -
                <?= Html::a('¿Quién está detrás de YiiFramework.co?', ['site/about']) ?>
            </p>
            <p class="pull-right">Desarrollado con Yii Framework v.2.0</p>
        </div>
    </footer>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
