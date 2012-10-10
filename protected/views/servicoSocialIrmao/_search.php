<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $model ServicoSocialIrmao */
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
		<?php echo $form->label($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profissao'); ?>
		<?php echo $form->textField($model,'profissao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salario'); ?>
		<?php echo $form->textField($model,'salario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'servico_social_r'); ?>
		<?php echo $form->textField($model,'servico_social_r'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Procurar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->