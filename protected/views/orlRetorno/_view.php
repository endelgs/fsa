<?php
/* @var $this OrlRetornoController */
/* @var $data OrlRetorno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hd')); ?>:</b>
	<?php echo CHtml::encode($data->hd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evolucao')); ?>:</b>
	<?php echo CHtml::encode($data->evolucao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orl_r')); ?>:</b>
	<?php echo CHtml::encode($data->orl_r); ?>
	<br />


</div>