<?php
/* @var $this OrlRetornoController */
/* @var $model OrlRetorno */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}  
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orl-retorno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hd'); ?>
		<?php echo $form->textArea($model,'hd',array('rows'=>6, 'cols'=>50)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'hd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evolucao'); ?>
		<?php echo $form->textArea($model,'evolucao',array('rows'=>6, 'cols'=>50)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'evolucao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orl_r'); ?>
		<?php echo $form->textField($model,'orl_r'). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'orl_r'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->