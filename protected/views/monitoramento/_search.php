<?php
/* @var $this MonitoramentoController */
/* @var $model Monitoramento */
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
		<?php echo $form->label($model,'guizo'); ?>
		<?php echo $form->textField($model,'guizo',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sino'); ?>
		<?php echo $form->textField($model,'sino',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agogo'); ?>
		<?php echo $form->textField($model,'agogo',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reacao_voz'); ?>
		<?php echo $form->textField($model,'reacao_voz',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_500'); ?>
		<?php echo $form->textField($model,'od_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_1000'); ?>
		<?php echo $form->textField($model,'od_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_2000'); ?>
		<?php echo $form->textField($model,'od_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_4000'); ?>
		<?php echo $form->textField($model,'od_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_1000'); ?>
		<?php echo $form->textField($model,'oe_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_2000'); ?>
		<?php echo $form->textField($model,'oe_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_500'); ?>
		<?php echo $form->textField($model,'oe_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_4000'); ?>
		<?php echo $form->textField($model,'oe_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_complacencia'); ?>
		<?php echo $form->textField($model,'od_complacencia',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_pressao'); ?>
		<?php echo $form->textField($model,'od_pressao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_volume'); ?>
		<?php echo $form->textField($model,'od_volume',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_gradiente'); ?>
		<?php echo $form->textField($model,'od_gradiente',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_curva_tipo'); ?>
		<?php echo $form->textField($model,'od_curva_tipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_complacencia'); ?>
		<?php echo $form->textField($model,'oe_complacencia',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_pressao'); ?>
		<?php echo $form->textField($model,'oe_pressao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_volume'); ?>
		<?php echo $form->textField($model,'oe_volume',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_gradiente'); ?>
		<?php echo $form->textField($model,'oe_gradiente',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_curva_tipo'); ?>
		<?php echo $form->textField($model,'oe_curva_tipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'da_tchau'); ?>
		<?php echo $form->textField($model,'da_tchau',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joga_beijo'); ?>
		<?php echo $form->textField($model,'joga_beijo',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bate_palma'); ?>
		<?php echo $form->textField($model,'bate_palma',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cade_chupeta'); ?>
		<?php echo $form->textField($model,'cade_chupeta',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cade_mamae'); ?>
		<?php echo $form->textField($model,'cade_mamae',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cade_sapato'); ?>
		<?php echo $form->textField($model,'cade_sapato',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cade_cabelo'); ?>
		<?php echo $form->textField($model,'cade_cabelo',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cade_mao'); ?>
		<?php echo $form->textField($model,'cade_mao',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cade_pe'); ?>
		<?php echo $form->textField($model,'cade_pe',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_500_od'); ?>
		<?php echo $form->textField($model,'reipsi_500_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_1k_od'); ?>
		<?php echo $form->textField($model,'reipsi_1k_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_2k_od'); ?>
		<?php echo $form->textField($model,'reipsi_2k_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_4k_od'); ?>
		<?php echo $form->textField($model,'reipsi_4k_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_500_oe'); ?>
		<?php echo $form->textField($model,'reipsi_500_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_1k_oe'); ?>
		<?php echo $form->textField($model,'reipsi_1k_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_2k_oe'); ?>
		<?php echo $form->textField($model,'reipsi_2k_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reipsi_4k_oe'); ?>
		<?php echo $form->textField($model,'reipsi_4k_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desenvolvimento_motor'); ?>
		<?php echo $form->textArea($model,'desenvolvimento_motor',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desenvolvimento_auditivo'); ?>
		<?php echo $form->textArea($model,'desenvolvimento_auditivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desenvolvimento_linguagem'); ?>
		<?php echo $form->textArea($model,'desenvolvimento_linguagem',array('rows'=>6, 'cols'=>50)); ?>
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