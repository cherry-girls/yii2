<?php
/**
 * Created by PhpStorm.
 * User: zhangrong
 * Date: 2020/6/30
 * Time: 11:28
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>哈哈哈，国家真棒</h1>
<ul>
    <?php foreach($countries as $country):?>
        <li>
            <?= Html::encode("{$country->name}($country->code)")?>:
            <?= $country->population ?>
        </li>
    <?php endforeach;?>
</ul>
<?= LinkPager::widget(['pagination'=>$pagination])?>
