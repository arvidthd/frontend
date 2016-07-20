<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\themes;
use yii\bootstrap\Modal;
use yii\bootstrap\ButtonDropdown;
use	yii\bootstrap\BootstrapWidgetTrait;
?>

<h1>Countries</h1>
<ul>
<?php foreach ($countries as $country): ?>
	<li>
		<?= Html::encode("{$country->name} ({$country->code})") ?>
		<?= $country->population ?>
	</li>
<?php endforeach; ?>
		
</ul>

<?= LinkPager::widget(['pagination'=>$pagination]) ?>



