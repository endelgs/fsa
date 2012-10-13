<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacao */
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
		<?php echo $form->label($model,'nna_clique_od'); ?>
		<?php echo $form->textField($model,'nna_clique_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nna_500_od'); ?>
		<?php echo $form->textField($model,'nna_500_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nna_1000_od'); ?>
		<?php echo $form->textField($model,'nna_1000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nna_cliquer_oe'); ?>
		<?php echo $form->textField($model,'nna_cliquer_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nna_500_oe'); ?>
		<?php echo $form->textField($model,'nna_500_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nna_1000_oe'); ?>
		<?php echo $form->textField($model,'nna_1000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imitanciometria'); ?>
		<?php echo $form->textArea($model,'imitanciometria',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otoscopia'); ?>
		<?php echo $form->textArea($model,'otoscopia',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pressao_od'); ?>
		<?php echo $form->textField($model,'pressao_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complacencia_od'); ?>
		<?php echo $form->textField($model,'complacencia_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_curva_od'); ?>
		<?php echo $form->textField($model,'tipo_curva_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pressao_oe'); ?>
		<?php echo $form->textField($model,'pressao_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'complacencia_oe'); ?>
		<?php echo $form->textField($model,'complacencia_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_curva_oe'); ?>
		<?php echo $form->textField($model,'tipo_curva_oe',array('size'=>60,'maxlength'=>250)); ?>
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
		<?php echo $form->label($model,'nmr'); ?>
		<?php echo $form->textField($model,'nmr',array('size'=>21,'maxlength'=>21)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_500_od'); ?>
		<?php echo $form->textField($model,'nmr_500_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_1k_od'); ?>
		<?php echo $form->textField($model,'nmr_1k_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_2k_od'); ?>
		<?php echo $form->textField($model,'nmr_2k_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_4k_od'); ?>
		<?php echo $form->textField($model,'nmr_4k_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_intensiade_od'); ?>
		<?php echo $form->textField($model,'nmr_intensiade_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_500_oe'); ?>
		<?php echo $form->textField($model,'nmr_500_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_1k_oe'); ?>
		<?php echo $form->textField($model,'nmr_1k_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_2k_oe'); ?>
		<?php echo $form->textField($model,'nmr_2k_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_4k_oe'); ?>
		<?php echo $form->textField($model,'nmr_4k_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmr_intensiade_oe'); ?>
		<?php echo $form->textField($model,'nmr_intensiade_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_250_od'); ?>
		<?php echo $form->textField($model,'recd_250_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_500_od'); ?>
		<?php echo $form->textField($model,'recd_500_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_1000_od'); ?>
		<?php echo $form->textField($model,'recd_1000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_2000_od'); ?>
		<?php echo $form->textField($model,'recd_2000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_3000_od'); ?>
		<?php echo $form->textField($model,'recd_3000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_4000_od'); ?>
		<?php echo $form->textField($model,'recd_4000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_6000_od'); ?>
		<?php echo $form->textField($model,'recd_6000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_8000_od'); ?>
		<?php echo $form->textField($model,'recd_8000_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_250_oe'); ?>
		<?php echo $form->textField($model,'recd_250_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_500_oe'); ?>
		<?php echo $form->textField($model,'recd_500_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_1000_oe'); ?>
		<?php echo $form->textField($model,'recd_1000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_2000_oe'); ?>
		<?php echo $form->textField($model,'recd_2000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_3000_oe'); ?>
		<?php echo $form->textField($model,'recd_3000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_4000_oe'); ?>
		<?php echo $form->textField($model,'recd_4000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_6000_oe'); ?>
		<?php echo $form->textField($model,'recd_6000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recd_8000_oe'); ?>
		<?php echo $form->textField($model,'recd_8000_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reacao_sons'); ?>
		<?php echo $form->textField($model,'reacao_sons',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voz_amplificada'); ?>
		<?php echo $form->textField($model,'voz_amplificada',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ling_s'); ?>
		<?php echo $form->textField($model,'sons_ling_s',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ling_ch'); ?>
		<?php echo $form->textField($model,'sons_ling_ch',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ling_a'); ?>
		<?php echo $form->textField($model,'sons_ling_a',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ling_i'); ?>
		<?php echo $form->textField($model,'sons_ling_i',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ling_u'); ?>
		<?php echo $form->textField($model,'sons_ling_u',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sons_ling_m'); ?>
		<?php echo $form->textField($model,'sons_ling_m',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lrf_od'); ?>
		<?php echo $form->textField($model,'lrf_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ldv_od'); ?>
		<?php echo $form->textField($model,'ldv_od',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lrf_oe'); ?>
		<?php echo $form->textField($model,'lrf_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ldv_oe'); ?>
		<?php echo $form->textField($model,'ldv_oe',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guizo_1'); ?>
		<?php echo $form->textField($model,'guizo_1',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guizo_2'); ?>
		<?php echo $form->textField($model,'guizo_2',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reco_reco'); ?>
		<?php echo $form->textField($model,'reco_reco',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sino'); ?>
		<?php echo $form->textField($model,'sino',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ganza'); ?>
		<?php echo $form->textField($model,'ganza',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'black_black'); ?>
		<?php echo $form->textField($model,'black_black',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agogo_pequeno'); ?>
		<?php echo $form->textField($model,'agogo_pequeno',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agogo_grande'); ?>
		<?php echo $form->textField($model,'agogo_grande',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prato'); ?>
		<?php echo $form->textField($model,'prato',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latencia_resposta'); ?>
		<?php echo $form->textField($model,'latencia_resposta',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laudo_audiologico'); ?>
		<?php echo $form->textArea($model,'laudo_audiologico',array('rows'=>6, 'cols'=>50)); ?>
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