<?php
/* @var $this AgendaProteseController */
/* @var $model AgendaProtese */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agenda_tipo'); ?>
		<?php echo $form->textField($model,'agenda_tipo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_tipo_r'); ?>
		<?php echo $form->textField($model,'form_tipo_r'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paciente_r'); ?>
		<?php echo $form->textField($model,'paciente_r'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Procurar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->