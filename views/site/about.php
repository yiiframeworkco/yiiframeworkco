<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '¿Quién está detrás de ... ?';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        YiiFramework.co es un portal que busca integrar la comunidad de habla hispana para que puedan tener acceso a
        noticias, documentación, artículos, ayuda y recursos sobre el framework de desarrollo en PHP Yii.
    </p>

    <div class="media">
        <?= Html::img('https://s.gravatar.com/avatar/df5727d5138b99ca6fa49f1590be7202?s=140',
            ['class' => 'pull-left media-object img-circle']) ?>
        <div class="media-body">
            <p>
                Mi nombre es <strong>Ricardo Obregón</strong>, y soy el fundador y principal patrocinador del portal.
            </p>
            <p>
                Me desempeño como consultor de sistemas y desarrollador por pasión, siendo Yii Framework mi principal
                entorno de desarrollo en PHP y actualmente pertenezco al <?= Html::a('Top 50 de desarrolladores de Yii', 'http://www.yiiframework.com/users/?sort=rank') ?>.
                Adicionalmente, he aportado a la comunidad Yii con varios widgets, extensiones y módulos de código
                abierto que han sido de gran utilidad.
            </p>
            <p>
                Espero aportar mi grano de arena al proyecto Yii Framework a través de portal, y por supuesto a toda la
                comunidad Yii en Español.
            </p>
            <p>
                Me pueden contactar por Twitter (<?= Html::a('@robregonm', 'https://twitter.com/robregonm')?>) o a
                través de <?= Html::a('LinkedIn', 'https://www.linkedin.com/in/ricardoobregon/es') ?>.
            </p>
        </div>
    </div>
</div>
