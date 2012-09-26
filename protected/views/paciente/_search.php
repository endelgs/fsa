<?php
/* @var $this PacienteController */
/* @var $model Paciente */
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
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hc'); ?>
		<?php echo $form->textField($model,'hc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hc_mae'); ?>
		<?php echo $form->textField($model,'hc_mae'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_fixo'); ?>
		<?php echo $form->textField($model,'telefone_fixo',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_movel'); ?>
		<?php echo $form->textField($model,'telefone_movel',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_trabalho'); ?>
		<?php echo $form->textField($model,'telefone_trabalho',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Procurar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->