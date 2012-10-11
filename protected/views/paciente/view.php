<?php
/* @var $this PacienteController */
/* @var $model Paciente */

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	'Perfil completo de '.$model->nome,
);

?>
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.esquerda{float:left;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
	
	#yw1_tab_0 *{
		font-size:12px;
		color:rgb(85,85,85);
	}
	#yw1_tab_0 p{
		margin-bottom: 5px;
	}
</style>

<div>
	<div class='alinhamento'><h2>Perfil completo de <?php echo $model->nome; ?></h2></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
<p class='linha'>
		<div class="item50 alinhamento">
			<span>Nome:</span><b> <?php echo CHtml::encode($model->nome); ?></b>
		</div>
		<div class="item20 alinhamento">
			<span>HC:</span><b> <?php echo CHtml::encode($model->hc); ?></b>
		</div>
		<div class="alinhamento">
			<span>Data Nascimento:</span><b> <?php echo CHtml::encode($model->data_nascimento); ?></b>
		</div>
</p>
<p class='linha'>
	<div class="item50 alinhamento">
		<span>Mãe:</span><b> <?php echo CHtml::encode($model->nome_mae); ?></b>
	</div>
	<div class="item20 alinhamento">
		<span>HC:</span><b> <?php echo CHtml::encode($model->hc_mae); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item50 alinhamento">
		<span>Endereço:</span><b> <?php echo CHtml::encode($model->endereco); ?></b>
	</div>
	<div class="item20 alinhamento">
		<span>Cidade:</span><b> <?php echo CHtml::encode($model->cidade); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<span>Telefone Residencial:</span><b> <?php echo CHtml::encode($model->telefone_fixo); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Telefone Móvel:</span><b> <?php echo CHtml::encode($model->telefone_movel); ?></b>
	</div>
	<div class="item30 alinhamento">
		<span>Telefone Trabalho:</span><b> <?php echo CHtml::encode($model->telefone_trabalho); ?></b>
	</div>
</p>
<?php
$modelTriagem = Triagem::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelTriagem != null)$tabTriagem=$aTabs['Triagem']=$this->renderPartial('../triagem/tabView', array('model'=>$modelTriagem),true);
else $tabTriagem="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('triagem/create'))."</h5>";

$modelGenetica = Genetica::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelGenetica != null)$tabGenetica=$aTabs['Genética']=$this->renderPartial('../genetica/tabView', array('model'=>$modelGenetica),true);
else $tabGenetica="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('genetica/create'))."</h5>";

$tabProtese="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora*"), array('paciente/admin'))."</h5>";

$modelServicoSocial = ServicoSocial::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));

if($modelServicoSocial != null)$tabServicoSocial=$aTabs['Serviço Social']=$this->renderPartial('../servicoSocial/tabView', array('model'=>$modelServicoSocial,'modelIrmao' => new ServicoSocialIrmao,'modelResidente' => new ServicoSocialResidentes,),true);
else $tabServicoSocial="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('servicoSocial/create'))."</h5>";





$this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => array(
		'Triagem'=>$tabTriagem,
		'Genética'=>$tabGenetica,
		'Prótese'=>$tabProtese,
		'Serviço Social'=>$tabServicoSocial		
	)
));

?>
