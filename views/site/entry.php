<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Progress;
use yii\bootstrap\Modal;
?>

<?php $form=ActiveForm::begin(); ?>

<?= $form->field($model,'name') ?>
<?= $form->field($model,'email') ?>



<div class="form-group">
	<?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
</div>
<?= Progress::widget([
	'percent' => 90, 
	'label' => 'test',
	'barOptions' => ['class' => 'progress-bar-danger'],
	'options' => ['class' => 'active progress-striped']
	]) 
?>
<?php ActiveForm::end(); ?>


<?php
	Modal::begin([
			'header' => '<h2>Yap Ini Judul Modal</h2>',
			'toggleButton' => ['label' => 'click me'],
			'size' => 'modal-lg',
		]);

	echo 'Say hello!';
	Modal::end();
?>

<div class="alert alert-success alert-block fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
      <i class="icon-remove"></i>
  </button>
  <h4>
      <i class="icon-ok-sign"></i>
      Success!
  </h4>
  <p>Best check yo self, you're not looking too good...</p>
</div>

<a class="btn btn-success" data-toggle="modal" href="#myModal">
  Dialog
</a>

 <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal Tittle</h4>
              </div>
              <div class="modal-body">

                  Body goes here...

              </div>
              <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                  <button class="btn btn-success" type="button">Save changes</button>
              </div>
          </div>
      </div>
  </div>
  <!-- modal -->