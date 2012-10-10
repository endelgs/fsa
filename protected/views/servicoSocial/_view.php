<?php
/* @var $this ServicoSocialController */
/* @var $data ServicoSocial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_mae')); ?>:</b>
	<?php echo CHtml::encode($data->nome_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento_mae')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade_mae')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profissao_mae')); ?>:</b>
	<?php echo CHtml::encode($data->profissao_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local_trabalho_mae')); ?>:</b>
	<?php echo CHtml::encode($data->local_trabalho_mae); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_trabalho_mae')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_trabalho_mae); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_pai')); ?>:</b>
	<?php echo CHtml::encode($data->nome_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nascimento_pai')); ?>:</b>
	<?php echo CHtml::encode($data->data_nascimento_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade_pai')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profissao_pai')); ?>:</b>
	<?php echo CHtml::encode($data->profissao_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local_trabalho_pai')); ?>:</b>
	<?php echo CHtml::encode($data->local_trabalho_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone_trabalho_pai')); ?>:</b>
	<?php echo CHtml::encode($data->telefone_trabalho_pai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsavel_crianca')); ?>:</b>
	<?php echo CHtml::encode($data->responsavel_crianca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familia')); ?>:</b>
	<?php echo CHtml::encode($data->familia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uniao_consensual')); ?>:</b>
	<?php echo CHtml::encode($data->uniao_consensual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uniao_legal')); ?>:</b>
	<?php echo CHtml::encode($data->uniao_legal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unicao_outro')); ?>:</b>
	<?php echo CHtml::encode($data->unicao_outro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('residentes_familia')); ?>:</b>
	<?php echo CHtml::encode($data->residentes_familia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renda_total')); ?>:</b>
	<?php echo CHtml::encode($data->renda_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quem_contribui')); ?>:</b>
	<?php echo CHtml::encode($data->quem_contribui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_pessoas_casa')); ?>:</b>
	<?php echo CHtml::encode($data->n_pessoas_casa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renda_per_capita')); ?>:</b>
	<?php echo CHtml::encode($data->renda_per_capita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficio_social')); ?>:</b>
	<?php echo CHtml::encode($data->beneficio_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outros_situacao_economica')); ?>:</b>
	<?php echo CHtml::encode($data->outros_situacao_economica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casa_propria')); ?>:</b>
	<?php echo CHtml::encode($data->casa_propria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casa_alugada')); ?>:</b>
	<?php echo CHtml::encode($data->casa_alugada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casa_cedida')); ?>:</b>
	<?php echo CHtml::encode($data->casa_cedida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('casa_outros')); ?>:</b>
	<?php echo CHtml::encode($data->casa_outros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_construcao')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_construcao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_comodos')); ?>:</b>
	<?php echo CHtml::encode($data->n_comodos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transporte_utilizado')); ?>:</b>
	<?php echo CHtml::encode($data->transporte_utilizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convenio_medico')); ?>:</b>
	<?php echo CHtml::encode($data->convenio_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_saude')); ?>:</b>
	<?php echo CHtml::encode($data->centro_saude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sintese_atendimento')); ?>:</b>
	<?php echo CHtml::encode($data->sintese_atendimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paciente_r')); ?>:</b>
	<?php echo CHtml::encode($data->paciente_r); ?>
	<br />

	*/ ?>

</div>