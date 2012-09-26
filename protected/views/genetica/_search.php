<?php
/* @var $this GeneticaController */
/* @var $model Genetica */
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
		<?php echo $form->label($model,'genetica'); ?>
		<?php echo $form->textField($model,'genetica',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hipotese_diagnostica'); ?>
		<?php echo $form->textArea($model,'hipotese_diagnostica',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conduta'); ?>
		<?php echo $form->textArea($model,'conduta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alteracoes_observadas'); ?>
		<?php echo $form->textArea($model,'alteracoes_observadas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homozigoto_normal'); ?>
		<?php echo $form->textField($model,'homozigoto_normal',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homozigoto_mutante'); ?>
		<?php echo $form->textField($model,'homozigoto_mutante',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heterozigoto'); ?>
		<?php echo $form->textField($model,'heterozigoto',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_gjb6_d13s1830'); ?>
		<?php echo $form->textField($model,'del_gjb6_d13s1830',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_gjb6_d13s1854'); ?>
		<?php echo $form->textField($model,'del_gjb6_d13s1854',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_3'); ?>
		<?php echo $form->textField($model,'del_3',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_4'); ?>
		<?php echo $form->textField($model,'del_4',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_5'); ?>
		<?php echo $form->textField($model,'del_5',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1555g'); ?>
		<?php echo $form->textField($model,'a1555g',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c1494t'); ?>
		<?php echo $form->textField($model,'c1494t',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a827g'); ?>
		<?php echo $form->textField($model,'a827g',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a7445g'); ?>
		<?php echo $form->textField($model,'a7445g',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a7444g'); ?>
		<?php echo $form->textField($model,'a7444g',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3243g'); ?>
		<?php echo $form->textField($model,'a3243g',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gjb2'); ?>
		<?php echo $form->textField($model,'gjb2',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gjb2_genotipo'); ?>
		<?php echo $form->textField($model,'gjb2_genotipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gjb6'); ?>
		<?php echo $form->textField($model,'gjb6',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gjb6_genotipo'); ?>
		<?php echo $form->textField($model,'gjb6_genotipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gjb3'); ?>
		<?php echo $form->textField($model,'gjb3',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gjb3_genotipo'); ?>
		<?php echo $form->textField($model,'gjb3_genotipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'slc26a4'); ?>
		<?php echo $form->textField($model,'slc26a4',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'slc26a4_genotipo'); ?>
		<?php echo $form->textField($model,'slc26a4_genotipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otof'); ?>
		<?php echo $form->textField($model,'otof',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otof_genotipo'); ?>
		<?php echo $form->textField($model,'otof_genotipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mtrnr1'); ?>
		<?php echo $form->textField($model,'mtrnr1',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mtrnr1_genotipo'); ?>
		<?php echo $form->textField($model,'mtrnr1_genotipo',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outros_genes'); ?>
		<?php echo $form->textField($model,'outros_genes',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'outros_genes_genotipo'); ?>
		<?php echo $form->textField($model,'outros_genes_genotipo',array('size'=>60,'maxlength'=>250)); ?>
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