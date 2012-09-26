<?php
/* @var $this GeneticaController */
/* @var $data Genetica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genetica')); ?>:</b>
	<?php echo CHtml::encode($data->genetica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hipotese_diagnostica')); ?>:</b>
	<?php echo CHtml::encode($data->hipotese_diagnostica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conduta')); ?>:</b>
	<?php echo CHtml::encode($data->conduta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alteracoes_observadas')); ?>:</b>
	<?php echo CHtml::encode($data->alteracoes_observadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homozigoto_normal')); ?>:</b>
	<?php echo CHtml::encode($data->homozigoto_normal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homozigoto_mutante')); ?>:</b>
	<?php echo CHtml::encode($data->homozigoto_mutante); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('heterozigoto')); ?>:</b>
	<?php echo CHtml::encode($data->heterozigoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_gjb6_d13s1830')); ?>:</b>
	<?php echo CHtml::encode($data->del_gjb6_d13s1830); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_gjb6_d13s1854')); ?>:</b>
	<?php echo CHtml::encode($data->del_gjb6_d13s1854); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_3')); ?>:</b>
	<?php echo CHtml::encode($data->del_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_4')); ?>:</b>
	<?php echo CHtml::encode($data->del_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_5')); ?>:</b>
	<?php echo CHtml::encode($data->del_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a1555g')); ?>:</b>
	<?php echo CHtml::encode($data->a1555g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c1494t')); ?>:</b>
	<?php echo CHtml::encode($data->c1494t); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a827g')); ?>:</b>
	<?php echo CHtml::encode($data->a827g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a7445g')); ?>:</b>
	<?php echo CHtml::encode($data->a7445g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a7444g')); ?>:</b>
	<?php echo CHtml::encode($data->a7444g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a3243g')); ?>:</b>
	<?php echo CHtml::encode($data->a3243g); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gjb2')); ?>:</b>
	<?php echo CHtml::encode($data->gjb2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gjb2_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->gjb2_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gjb6')); ?>:</b>
	<?php echo CHtml::encode($data->gjb6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gjb6_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->gjb6_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gjb3')); ?>:</b>
	<?php echo CHtml::encode($data->gjb3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gjb3_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->gjb3_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slc26a4')); ?>:</b>
	<?php echo CHtml::encode($data->slc26a4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slc26a4_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->slc26a4_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otof')); ?>:</b>
	<?php echo CHtml::encode($data->otof); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otof_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->otof_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtrnr1')); ?>:</b>
	<?php echo CHtml::encode($data->mtrnr1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mtrnr1_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->mtrnr1_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outros_genes')); ?>:</b>
	<?php echo CHtml::encode($data->outros_genes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outros_genes_genotipo')); ?>:</b>
	<?php echo CHtml::encode($data->outros_genes_genotipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>