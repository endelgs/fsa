<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */
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
		<?php echo $form->label($model,'consanguinidade'); ?>
		<?php echo $form->textField($model,'consanguinidade',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perda_auditiva_familia'); ?>
		<?php echo $form->textField($model,'perda_auditiva_familia',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preocupacao_familiar'); ?>
		<?php echo $form->textField($model,'preocupacao_familiar',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alimentacao_neonato'); ?>
		<?php echo $form->textField($model,'alimentacao_neonato',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'posicao_alimentacao'); ?>
		<?php echo $form->textField($model,'posicao_alimentacao',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'refluxo'); ?>
		<?php echo $form->textField($model,'refluxo',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dor_ouvido'); ?>
		<?php echo $form->textField($model,'dor_ouvido',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barulho_alto_acorda'); ?>
		<?php echo $form->textField($model,'barulho_alto_acorda',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chora_ruido_alto'); ?>
		<?php echo $form->textField($model,'chora_ruido_alto',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'procurar_som_fora_visao'); ?>
		<?php echo $form->textField($model,'procurar_som_fora_visao',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atento_voz_materna'); ?>
		<?php echo $form->textField($model,'atento_voz_materna',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reinternado'); ?>
		<?php echo $form->textField($model,'reinternado',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'susto_ruido_alto'); ?>
		<?php echo $form->textField($model,'susto_ruido_alto',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pesquisa_integridade'); ?>
		<?php echo $form->textField($model,'pesquisa_integridade',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_onda_1'); ?>
		<?php echo $form->textField($model,'od_onda_1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_onda_3'); ?>
		<?php echo $form->textField($model,'od_onda_3',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_onda_5'); ?>
		<?php echo $form->textField($model,'od_onda_5',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_onda_1'); ?>
		<?php echo $form->textField($model,'oe_onda_1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_onda_3'); ?>
		<?php echo $form->textField($model,'oe_onda_3',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_onda_5'); ?>
		<?php echo $form->textField($model,'oe_onda_5',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_interlatencia_1_3'); ?>
		<?php echo $form->textField($model,'od_interlatencia_1_3',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_interlatencia_3_5'); ?>
		<?php echo $form->textField($model,'od_interlatencia_3_5',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_interlatencia_1_5'); ?>
		<?php echo $form->textField($model,'od_interlatencia_1_5',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_interlatencia_1_3'); ?>
		<?php echo $form->textField($model,'oe_interlatencia_1_3',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_interlatencia_3_5'); ?>
		<?php echo $form->textField($model,'oe_interlatencia_3_5',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_interlatencia_1_5'); ?>
		<?php echo $form->textField($model,'oe_interlatencia_1_5',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_100'); ?>
		<?php echo $form->textField($model,'od_100',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_90'); ?>
		<?php echo $form->textField($model,'od_90',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_80'); ?>
		<?php echo $form->textField($model,'od_80',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_70'); ?>
		<?php echo $form->textField($model,'od_70',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_60'); ?>
		<?php echo $form->textField($model,'od_60',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_50'); ?>
		<?php echo $form->textField($model,'od_50',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_40'); ?>
		<?php echo $form->textField($model,'od_40',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_30'); ?>
		<?php echo $form->textField($model,'od_30',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_20'); ?>
		<?php echo $form->textField($model,'od_20',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_100'); ?>
		<?php echo $form->textField($model,'oe_100',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_90'); ?>
		<?php echo $form->textField($model,'oe_90',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_80'); ?>
		<?php echo $form->textField($model,'oe_80',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_70'); ?>
		<?php echo $form->textField($model,'oe_70',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_60'); ?>
		<?php echo $form->textField($model,'oe_60',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_50'); ?>
		<?php echo $form->textField($model,'oe_50',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_40'); ?>
		<?php echo $form->textField($model,'oe_40',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_30'); ?>
		<?php echo $form->textField($model,'oe_30',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_20'); ?>
		<?php echo $form->textField($model,'oe_20',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conclusao_limiar_eletrofisiologico'); ?>
		<?php echo $form->textArea($model,'conclusao_limiar_eletrofisiologico',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interpico'); ?>
		<?php echo $form->textField($model,'interpico',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latencia'); ?>
		<?php echo $form->textField($model,'latencia',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'limiar_eletrofisiologico'); ?>
		<?php echo $form->textField($model,'limiar_eletrofisiologico',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_1'); ?>
		<?php echo $form->textField($model,'od_1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_1_4'); ?>
		<?php echo $form->textField($model,'od_1_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_2_0'); ?>
		<?php echo $form->textField($model,'od_2_0',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_2_8'); ?>
		<?php echo $form->textField($model,'od_2_8',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_4'); ?>
		<?php echo $form->textField($model,'od_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_1'); ?>
		<?php echo $form->textField($model,'oe_1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_1_4'); ?>
		<?php echo $form->textField($model,'oe_1_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_2_0'); ?>
		<?php echo $form->textField($model,'oe_2_0',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_2_8'); ?>
		<?php echo $form->textField($model,'oe_2_8',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_4'); ?>
		<?php echo $form->textField($model,'oe_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_repro'); ?>
		<?php echo $form->textField($model,'od_repro',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_estab'); ?>
		<?php echo $form->textField($model,'od_estab',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_repro'); ?>
		<?php echo $form->textField($model,'oe_repro',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_estab'); ?>
		<?php echo $form->textField($model,'oe_estab',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conclusao_transiente'); ?>
		<?php echo $form->textField($model,'conclusao_transiente',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_1'); ?>
		<?php echo $form->textField($model,'od_distorcao_1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_1_4'); ?>
		<?php echo $form->textField($model,'od_distorcao_1_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_2_0'); ?>
		<?php echo $form->textField($model,'od_distorcao_2_0',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_2_8'); ?>
		<?php echo $form->textField($model,'od_distorcao_2_8',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_4'); ?>
		<?php echo $form->textField($model,'od_distorcao_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_1'); ?>
		<?php echo $form->textField($model,'oe_distorcao_1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_1_4'); ?>
		<?php echo $form->textField($model,'oe_distorcao_1_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_2_0'); ?>
		<?php echo $form->textField($model,'oe_distorcao_2_0',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_2_8'); ?>
		<?php echo $form->textField($model,'oe_distorcao_2_8',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_4'); ?>
		<?php echo $form->textField($model,'oe_distorcao_4',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_repro'); ?>
		<?php echo $form->textField($model,'od_distorcao_repro',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_distorcao_estab'); ?>
		<?php echo $form->textField($model,'od_distorcao_estab',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_repro'); ?>
		<?php echo $form->textField($model,'oe_distorcao_repro',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_distorcao_estab'); ?>
		<?php echo $form->textField($model,'oe_distorcao_estab',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distorcao_conclusao_1'); ?>
		<?php echo $form->textField($model,'distorcao_conclusao_1',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distorcao_conclusao_1_4'); ?>
		<?php echo $form->textField($model,'distorcao_conclusao_1_4',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distorcao_conclusao_2_0'); ?>
		<?php echo $form->textField($model,'distorcao_conclusao_2_0',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distorcao_conclusao_2_8'); ?>
		<?php echo $form->textField($model,'distorcao_conclusao_2_8',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distorcao_conclusao_4'); ?>
		<?php echo $form->textField($model,'distorcao_conclusao_4',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_pressao'); ?>
		<?php echo $form->textField($model,'od_pressao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_complacencia'); ?>
		<?php echo $form->textField($model,'od_complacencia',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_tipo_curva'); ?>
		<?php echo $form->textField($model,'od_tipo_curva',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_pressao'); ?>
		<?php echo $form->textField($model,'oe_pressao',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_complacencia'); ?>
		<?php echo $form->textField($model,'oe_complacencia',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_tipo_curva'); ?>
		<?php echo $form->textField($model,'oe_tipo_curva',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_reflexo_500'); ?>
		<?php echo $form->textField($model,'od_reflexo_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_reflexo_1000'); ?>
		<?php echo $form->textField($model,'od_reflexo_1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_reflexo_2000'); ?>
		<?php echo $form->textField($model,'od_reflexo_2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_reflexo_4000'); ?>
		<?php echo $form->textField($model,'od_reflexo_4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_reflexo_500'); ?>
		<?php echo $form->textField($model,'oe_reflexo_500'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_reflexo_1000'); ?>
		<?php echo $form->textField($model,'oe_reflexo_1000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_reflexo_2000'); ?>
		<?php echo $form->textField($model,'oe_reflexo_2000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_reflexo_4000'); ?>
		<?php echo $form->textField($model,'oe_reflexo_4000'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guizo_lateral'); ?>
		<?php echo $form->textField($model,'guizo_lateral',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guizo__cima'); ?>
		<?php echo $form->textField($model,'guizo__cima',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guizo_baixo'); ?>
		<?php echo $form->textField($model,'guizo_baixo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sino_lateral'); ?>
		<?php echo $form->textField($model,'sino_lateral',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sino_cima'); ?>
		<?php echo $form->textField($model,'sino_cima',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sino_baixo'); ?>
		<?php echo $form->textField($model,'sino_baixo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reflexo_cocleo_palpebral'); ?>
		<?php echo $form->textField($model,'reflexo_cocleo_palpebral',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_nmr_500'); ?>
		<?php echo $form->textField($model,'od_nmr_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_nmr_1000'); ?>
		<?php echo $form->textField($model,'od_nmr_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_nmr_2000'); ?>
		<?php echo $form->textField($model,'od_nmr_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_nmr_3000'); ?>
		<?php echo $form->textField($model,'od_nmr_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'od_nmr_4000'); ?>
		<?php echo $form->textField($model,'od_nmr_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_nmr_500'); ?>
		<?php echo $form->textField($model,'oe_nmr_500',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_nmr_1000'); ?>
		<?php echo $form->textField($model,'oe_nmr_1000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_nmr_2000'); ?>
		<?php echo $form->textField($model,'oe_nmr_2000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_nmr_3000'); ?>
		<?php echo $form->textField($model,'oe_nmr_3000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oe_nmr_4000'); ?>
		<?php echo $form->textField($model,'oe_nmr_4000',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conclusao_reflexo'); ?>
		<?php echo $form->textArea($model,'conclusao_reflexo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conduta_reflexo'); ?>
		<?php echo $form->textArea($model,'conduta_reflexo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laste_update'); ?>
		<?php echo $form->textField($model,'laste_update'); ?>
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