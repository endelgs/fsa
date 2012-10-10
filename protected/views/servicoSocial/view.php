<?php
/* @var $this GeneticaController */
/* @var $model Genetica */

$this->breadcrumbs=array(
	'Serviço Social'=>array('admin'),
	$model->pacienteR->nome,
);
 ?>
 
<style>
	.linha{}
	.alinhamento{float:left;}
	.direita{float: right;}
	.esquerda{float:left;}
	.margem{ margin-right:15px;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div>
	<div class='alinhamento'><h1>Dados de Serviço Social do Paciente: <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
<br/><br/><br/>
<h2>Situação Familiar</h2>
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Nome da Mãe:</span></b> <?php echo CHtml::encode($model->nome_mae); ?>
		</div>

		<div>
			<b><span>Data Nascimento:</span></b> <?php echo CHtml::encode($model->data_nascimento_mae); ?>
		</div>
	</p>
	
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Escolaridade:</span></b> <?php echo CHtml::encode($model->escolaridade_mae); ?>
		</div>

		<div>
			<b><span>Profissão:</span></b> <?php echo CHtml::encode($model->profissao_mae); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Local de trabalho:</span></b> <?php echo CHtml::encode($model->local_trabalho_mae); ?>
		</div>

		<div>
			<b><span>Telefone do Trabalho:</span></b> <?php echo CHtml::encode($model->telefone_trabalho_mae); ?>
		</div>
	</p>
	<br/>
	<div><hr/></div>
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Nome do Pai:</span></b> <?php echo CHtml::encode($model->nome_pai); ?>
		</div>
	
		<div>
			<b><span>Data Nascimento:</span></b> <?php echo CHtml::encode($model->data_nascimento_pai); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Escolaridade:</span></b> <?php echo CHtml::encode($model->escolaridade_pai); ?>
		</div>

		<div>
			<b><span>Profissão do Pai:</span></b> <?php echo CHtml::encode($model->profissao_pai); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Local de trabalho:</span></b> <?php echo CHtml::encode($model->local_trabalho_pai); ?>
		</div>
		<div>
			<b><span>Telefone do trabalho:</span></b> <?php echo CHtml::encode($model->telefone_trabalho_pai); ?>
		</div>
	</p>
	<br/>
	<div><hr/></div>
	<p class="row">
		<b><span>Responsável pela criança:</span></b> <?php echo CHtml::encode($model->responsavel_crianca); ?>
	</p>

	<div class="row">
		<b><span>Familia Nascimento:</span></b> <?php
			if(CHtml::encode($model->familia)=='legitima'){
				echo CHtml::encode($model->familia);
			}else if(CHtml::encode($model->familia)=='adotiva'){
				echo CHtml::encode($model->familia).' - '.CHtml::encode($model->familia_outros);
			}
		?>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<div class="row">
		<div class="alinhamento">
			<b><span>União:</span></b> <?php echo CHtml::encode($model->uniao); ?>
		</div>
		<div>
			<b><span>Outro:</span></b> <?php echo CHtml::encode($model->uniao_outro); ?>
		</div>
	</div>

	<?php
		$this->widget('ext.htmltableui.htmlTableUi',array(
		    'ajaxUrl'=>'servicoSocialIrmao/create',
		    'arProvider'=>'',    
		    'collapsed'=>false,
		    'columns'=>array('Nome','Idade','Escolaridade','Profissão','Salário'),
		    'cssFile'=>'',
		    'editable'=>true,
		    'enableSort'=>true,
		    'extra'=>'Additional Information',
		    'formTitle'=>'Editar Dados Irmão',
		    'rows'=>array(
		    	array('Joao','23','Superior Completo','Desenvolvedor Web','R$800,00'),
		    ),
		    'sortColumn'=>2,
		    'sortOrder'=>'desc',
		    'title'=>'Irmãos',
		));
	?>
	<br/>
	<div style="width:500px"><hr/></div>
	<div class="row">
		<b><span>Residentes com a familia:</span></b> <?php echo CHtml::encode($model->residentes_familia); ?>
	</div>
	<?php
		$this->widget('ext.htmltableui.htmlTableUi',array(
		    'ajaxUrl'=>'servicoSocialIrmao/create',
		    'arProvider'=>'',    
		    'collapsed'=>false,
		    'columns'=>array('Nome','Idade','Escolaridade','Profissão','Salário'),
		    'cssFile'=>'',
		    'editable'=>true,
		    'enableSort'=>true,
		    'extra'=>'Additional Information',
		    'formTitle'=>'Editar Dados Irmão',
		    'rows'=>array(
		    	array('Joao','23','Superior Completo','Desenvolvedor Web','R$800,00'),
		    ),
		    'sortColumn'=>2,
		    'sortOrder'=>'desc',
		    'title'=>'Irmãos',
		));
	?>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2>Situação Econômica</h2>
	<div class="row">
		<div  class="alinhamento">
			<b><span>Renda Total:</span></b> <?php echo CHtml::encode($model->renda_total); ?>
		</div>
		<div>
			<b><span>Quem contribui:</span></b> <?php echo CHtml::encode($model->quem_contribui); ?>
		</div>
	</div>

	<div class="row">
		<div class="alinhamento">
			<b><span>Nº pessoas na casa:</span></b> <?php echo CHtml::encode($model->n_pessoas_casa); ?>
		</div>
		<div>
			<b><span>Renda per Capita:</span></b> <?php echo CHtml::encode($model->renda_per_capita); ?>
		</div>
	</div>

	<div class="row">
		<b><span>Benefício Social:</span></b> <?php echo CHtml::encode($model->beneficio_social); ?>
	</div>

	<div class="row">
		<b><span>Outros:</span></b> <?php echo CHtml::encode($model->outros_situacao_economica); ?>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2>Habitação</h2>
	<div class="row">
		<b><span>Casa:</span></b> <?php 
			if(CHtml::encode($model->casa_tipo)=='propria'){
				echo CHtml::encode($model->casa_tipo);
			}else if(CHtml::encode($model->casa_tipo)=='alugada'){
				echo CHtml::encode($model->casa_tipo).' - '.CHtml::encode($model->casa_alugada);
			}else if(CHtml::encode($model->casa_tipo)=='cedida'){
				echo CHtml::encode($model->casa_tipo).' - '.CHtml::encode($model->casa_outros);
			}
		
			?>
	</div>
	<div class="row">
		<div class="alinhamento">
			<b><span>Tipo de Construção:</span></b> <?php echo CHtml::encode($model->tipo_construcao); ?>
		</div>
	
		<div>
			<b><span>Nº de Cômodos:</span></b> <?php echo CHtml::encode($model->n_comodos); ?>
		</div>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2>Outros</h2>
	<div class="row">
		<b><span>Transporte Utilizado:</span></b> <?php echo CHtml::encode($model->transporte_utilizado); ?>
	</div>

	<div class="row">
		<b><span>Convênio Médico:</span></b> <?php echo CHtml::encode($model->convenio_medico); ?>
	</div>

	<div class="row">
		<b><span>Centro de Sáude:</span></b> <?php echo CHtml::encode($model->centro_saude); ?>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	
	<h2>Síntese do Atendimento</h2>
	<div class="row">
		<b><span>Síntese do Atendimento:</span></b> <?php echo CHtml::encode($model->sintese_atendimento); ?>
	</div>
</div>