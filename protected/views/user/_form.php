<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}  
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_completo'); ?>
		<?php echo $form->textField($model,'nome_completo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'nome_completo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roles'); ?>
		<?php echo $form->dropDownList($model, 'roles',array(
			''=>'Selecione',
			'admin' => 'Administração', 
			'orl' => 'ORL',
			'triagem' => 'Triagem', 
			'diagnostico' => 'Diagnóstico',
			'monitoramento' => 'Monitoramento',
			'protese' => 'Prótese',
			'servicosocial' => 'Assistência Socual',
			'genetica' => 'Genética')); ?>
		<?php echo $form->error($model,'roles'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->