<?php
/* @var $this ProtesePrescricaoController */
/* @var $model ProtesePrescricao */
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
		<?php echo $form->label($model,'od_40_250'); ?>
		<?php echo $form->textField($model,'od_40_250',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_500'); ?>
		<?php echo $form->textField($model,'od_40_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_1000'); ?>
		<?php echo $form->textField($model,'od_40_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_2000'); ?>
		<?php echo $form->textField($model,'od_40_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_3000'); ?>
		<?php echo $form->textField($model,'od_40_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_4000'); ?>
		<?php echo $form->textField($model,'od_40_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_6000'); ?>
		<?php echo $form->textField($model,'od_40_6000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40_8000'); ?>
		<?php echo $form->textField($model,'od_40_8000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_250'); ?>
		<?php echo $form->textField($model,'od_60_250',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_500'); ?>
		<?php echo $form->textField($model,'od_60_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_1000'); ?>
		<?php echo $form->textField($model,'od_60_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_2000'); ?>
		<?php echo $form->textField($model,'od_60_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_3000'); ?>
		<?php echo $form->textField($model,'od_60_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_4000'); ?>
		<?php echo $form->textField($model,'od_60_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_6000'); ?>
		<?php echo $form->textField($model,'od_60_6000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60_8000'); ?>
		<?php echo $form->textField($model,'od_60_8000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_250'); ?>
		<?php echo $form->textField($model,'od_80_250',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_500'); ?>
		<?php echo $form->textField($model,'od_80_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_1000'); ?>
		<?php echo $form->textField($model,'od_80_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_2000'); ?>
		<?php echo $form->textField($model,'od_80_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_3000'); ?>
		<?php echo $form->textField($model,'od_80_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_4000'); ?>
		<?php echo $form->textField($model,'od_80_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_6000'); ?>
		<?php echo $form->textField($model,'od_80_6000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80_8000'); ?>
		<?php echo $form->textField($model,'od_80_8000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_250'); ?>
		<?php echo $form->textField($model,'oe_40_250',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_500'); ?>
		<?php echo $form->textField($model,'oe_40_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_1000'); ?>
		<?php echo $form->textField($model,'oe_40_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_2000'); ?>
		<?php echo $form->textField($model,'oe_40_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_3000'); ?>
		<?php echo $form->textField($model,'oe_40_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_4000'); ?>
		<?php echo $form->textField($model,'oe_40_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_6000'); ?>
		<?php echo $form->textField($model,'oe_40_6000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40_8000'); ?>
		<?php echo $form->textField($model,'oe_40_8000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_250'); ?>
		<?php echo $form->textField($model,'oe_60_250',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_500'); ?>
		<?php echo $form->textField($model,'oe_60_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_1000'); ?>
		<?php echo $form->textField($model,'oe_60_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_2000'); ?>
		<?php echo $form->textField($model,'oe_60_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_3000'); ?>
		<?php echo $form->textField($model,'oe_60_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_4000'); ?>
		<?php echo $form->textField($model,'oe_60_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_6000'); ?>
		<?php echo $form->textField($model,'oe_60_6000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60_8000'); ?>
		<?php echo $form->textField($model,'oe_60_8000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_250'); ?>
		<?php echo $form->textField($model,'oe_80_250',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_500'); ?>
		<?php echo $form->textField($model,'oe_80_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_1000'); ?>
		<?php echo $form->textField($model,'oe_80_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_2000'); ?>
		<?php echo $form->textField($model,'oe_80_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_3000'); ?>
		<?php echo $form->textField($model,'oe_80_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_4000'); ?>
		<?php echo $form->textField($model,'oe_80_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_6000'); ?>
		<?php echo $form->textField($model,'oe_80_6000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80_8000'); ?>
		<?php echo $form->textField($model,'oe_80_8000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modificacao_acustica'); ?>
		<?php echo $form->textArea($model,'modificacao_acustica',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_modelo'); ?>
		<?php echo $form->textField($model,'od_modelo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_marca'); ?>
		<?php echo $form->textField($model,'od_marca',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_cor'); ?>
		<?php echo $form->textField($model,'od_cor',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_modelo'); ?>
		<?php echo $form->textField($model,'oe_modelo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_marca'); ?>
		<?php echo $form->textField($model,'oe_marca',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_cor'); ?>
		<?php echo $form->textField($model,'oe_cor',array('size'=>60,'maxlength'=>250)); ?>
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