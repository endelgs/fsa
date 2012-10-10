<?php
/* @var $this ServicoSocialIrmaoController */
/* @var $model ServicoSocialIrmao */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}  
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servico-social-irmao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'escolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissao'); ?>
		<?php echo $form->textField($model,'profissao',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'profissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salario'); ?>
		<?php echo $form->textField($model,'salario',array('size'=>10,'maxlength'=>10)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'salario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servico_social_r'); ?>
		<?php echo $form->textField($model,'servico_social_r'). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'servico_social_r'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->