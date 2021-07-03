<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Integración';
?>
<div class="site-index">
    <br/>
    <p class="text bold">
        Proyecto de integración autónoma entre sistema Iquique y E-Commerce Magento<br/>
    </p>
    <p>
        Entregables del proyecto:
    </p>
    <ul>
        <li><a target="_blank" href="https://www.dropbox.com/sh/u8i114bvlbpp5i4/AACvsUUjC5LQrKD4zzUtyneQa?dl=0">Videotutoriales</a></li>
        <li><a href="<?=Url::to(["site/source"])?>">Códigos fuentes</a></li>
        <li><a href="<?=Url::to(["site/design"])?>">Documento de diseño</a></li>
    </ul>
</div>
<style>
.text{
    font-size: large;
}
.bold{
    font-weight: bold;
}
</style>
