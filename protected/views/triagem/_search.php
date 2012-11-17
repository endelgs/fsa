<?php
/* @var $this TriagemController */
/* @var $model Triagem */
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
		<?php echo $form->label($model,'peso'); ?>
		<?php echo $form->textField($model,'peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apgar_1'); ?>
		<?php echo $form->textField($model,'apgar_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apgar_5'); ?>
		<?php echo $form->textField($model,'apgar_5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apgar_10'); ?>
		<?php echo $form->textField($model,'apgar_10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idade_semanas'); ?>
		<?php echo $form->textField($model,'idade_semanas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idade_dias'); ?>
		<?php echo $form->textField($model,'idade_dias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metodo_avaliacao'); ?>
		<?php echo $form->textField($model,'metodo_avaliacao',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avaliacao_score'); ?>
		<?php echo $form->textField($model,'avaliacao_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'termo'); ?>
		<?php echo $form->textField($model,'termo',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'crescimento'); ?>
		<?php echo $form->textField($model,'crescimento',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_exame'); ?>
		<?php echo $form->textField($model,'tipo_exame',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resultado_esquerdo'); ?>
		<?php echo $form->textField($model,'resultado_esquerdo',array('size'=>6,'maxlength'=>6)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'resultado_direito'); ?>
		<?php echo $form->textField($model,'resultado_direito',array('size'=>6,'maxlength'=>6)); ?>
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