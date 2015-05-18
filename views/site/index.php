<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Comunidad de soporte de Yii Framework en español';
?>
<div class="site-index">

    <div class="jumbotron">
        <?= Html::img(['@web/img/yii.png'], ['alt' => 'Comunidad de soporte de Yii Framework en español']) ?>
        <h1>Latinoamérica</h1>

        <p class="lead">Comunidad de soporte de Yii Framework en español</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 class="text-center"><i class="fa fa-fw fa-newspaper-o fa-4x text-muted"></i><br>Yii Noticias</h2>

                <p>
                    Manténgase informado de lo que sucede alrededor del framework Yii, 100% en español.
                </p>

                <p><?= Html::a('Blog &raquo;', [''], ['class' => 'btn btn-default disabled']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2 class="text-center">
                    <i class="fa fa-fw fa-question-circle fa-4x text-muted"></i>
                    <br>Yii Preguntas
                </h2>

                <p>
                    Una comunidad se basa en compartir sus experiencias con quienes tienen preguntas.
                </p>

                <p><?= Html::a('Yii Preguntas &raquo;', ['/qa/default/index'], ['class' => 'btn btn-default']) ?></p>
            </div>
            <div class="col-lg-4">
                <h2 class="text-center"><i class="fa fa-fw fa-life-ring fa-4x text-muted"></i><br>Soporte Comercial</h2>

                <p>
                    Muy pronto tendremos una sección que ofrecerá soporte comercial, consultoría, capacitaciones y demás
                    a toda la comunidad de habla hispana.
                </p>

            </div>
        </div>
    </div>
    <div class="row">
        <h3 class="page-header">Donaciones</h3>
        <div class="col-md-3">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="B2PX2WTSEP2G6">
                <input type="hidden" name="on0" value="Donar">
                <div class="form-group">
                    <select name="os0" class="form-control">
                        <option value="Un comienzo">Un comienzo con $5.00 USD</option>
                        <option value="Me gusta">Me gusta por $10.00 USD</option>
                        <option value="Apoyo">Apoyo con $20.00 USD</option>
                        <option value="Me comprometo">Me comprometo con $50.00 USD</option>
                        <option value="Por la comunidad">Por la comunidad $100.00 USD</option>
                        <option value="Para los servidores">Para los servidores $500.00 USD</option>
                        <option value="Quiero lo mejor">Quiero lo mejor $1,000.00 USD</option>
                    </select>
                </div>
                <input type="hidden" name="currency_code" value="USD">
                <?= Html::submitButton('Donar a través de Paypal', ['class' => 'btn btn-success']) ?>
                <img border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
        <div class="col-md-1 col-md-offset-8">
            <?= Html::a(Html::img('http://api.flattr.com/button/flattr-badge-large.png'),'https://flattr.com/submit/auto?user_id=robregonm&url=http://yiiframework.co&title=Yii+en+espanol&language=es&tags=yiico&category=software') ?>
        </div>
    </div>
</div>
