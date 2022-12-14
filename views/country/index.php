<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country): ?>
    <li>
        <?= Html::encode("{$country->code} ({$country->name})") ?>:
        <?= $country->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?  //= LinkPager::widget(['pagination' => $pagination]) ?>

<?= LinkPager::widget([

'pagination' => $pagination,
'maxButtonCount' => 5,
'activePageCssClass' => 'active',
'linkContainerOptions' => ['class' => 'page-item'],
'linkOptions' => ['class' => 'page-link'],
'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
]) ?>