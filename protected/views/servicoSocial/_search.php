<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */
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
		<?php echo $form->label($model,'nome_mae'); ?>
		<?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_nascimento_mae'); ?>
		<?php echo $form->textField($model,'data_nascimento_mae'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escolaridade_mae'); ?>
		<?php echo $form->textField($model,'escolaridade_mae',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profissao_mae'); ?>
		<?php echo $form->textField($model,'profissao_mae',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local_trabalho_mae'); ?>
		<?php echo $form->textField($model,'local_trabalho_mae',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_trabalho_mae'); ?>
		<?php echo $form->textField($model,'telefone_trabalho_mae',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_pai'); ?>
		<?php echo $form->textField($model,'nome_pai',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_nascimento_pai'); ?>
		<?php echo $form->textField($model,'data_nascimento_pai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escolaridade_pai'); ?>
		<?php echo $form->textField($model,'escolaridade_pai',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profissao_pai'); ?>
		<?php echo $form->textField($model,'profissao_pai',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local_trabalho_pai'); ?>
		<?php echo $form->textField($model,'local_trabalho_pai',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefone_trabalho_pai'); ?>
		<?php echo $form->textField($model,'telefone_trabalho_pai',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsavel_crianca'); ?>
		<?php echo $form->textField($model,'responsavel_crianca',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familia'); ?>
		<?php echo $form->textField($model,'familia',array('size'=>8,'maxlength'=>8)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'residentes_familia'); ?>
		<?php echo $form->textField($model,'residentes_familia',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'renda_total'); ?>
		<?php echo $form->textField($model,'renda_total',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quem_contribui'); ?>
		<?php echo $form->textField($model,'quem_contribui',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_pessoas_casa'); ?>
		<?php echo $form->textField($model,'n_pessoas_casa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'renda_per_capita'); ?>
		<?php echo $form->textField($model,'renda_per_capita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beneficio_social'); ?>
		<?php echo $form->textField($model,'beneficio_social',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outros_situacao_economica'); ?>
		<?php echo $form->textField($model,'outros_situacao_economica',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'casa_alugada'); ?>
		<?php echo $form->textField($model,'casa_alugada',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'casa_outros'); ?>
		<?php echo $form->textField($model,'casa_outros',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_construcao'); ?>
		<?php echo $form->textField($model,'tipo_construcao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_comodos'); ?>
		<?php echo $form->textField($model,'n_comodos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transporte_utilizado'); ?>
		<?php echo $form->textField($model,'transporte_utilizado',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convenio_medico'); ?>
		<?php echo $form->textField($model,'convenio_medico',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centro_saude'); ?>
		<?php echo $form->textField($model,'centro_saude',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sintese_atendimento'); ?>
		<?php echo $form->textArea($model,'sintese_atendimento',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
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