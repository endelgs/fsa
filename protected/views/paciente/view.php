<?php
/* @var $this PacienteController */
/* @var $model Paciente */
$baseurl = Yii::app()->request->baseUrl;
$urledit = $baseurl.'/images/edit-icon.png';

$this->breadcrumbs=array(
	'Pacientes'=>array('admin'),
	'Perfil completo de '.$model->nome,
);
if($model->alta=="alta")$model->alta="Alta";
else if($model->alta=="transferencia_interna")$model->alta="Transferência Interna";
else if($model->alta=="transferencia_externa")$model->alta="Transferência Externa";
else if($model->alta=="obito")$model->alta="Óbito";
?>
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.esquerda{float:left;}
  .item80{width:80%;}
  .item70{width:70%;}
  .item60{width:60%;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
	
	/*#yw1_tab_0 *{
		font-size:12px;
		color:rgb(85,85,85);
	}
	#yw1_tab_0 p{
		margin-bottom: 5px;
	}*/
</style>

<h2>Perfil completo de paciente</h2>
<div class='direita' style="margin-top:-30px;">última atualização <?php echo $model->last_update ;?></div>
<hr/>
<h3><?php echo $model->nome; ?> | HC:</span></b> <?php echo CHtml::encode($model->hc); ?> | Nascimento: <?php echo CHtml::encode($model->data_nascimento); ?></h3>
<p class='linha'>
	<div class="item50 alinhamento">
		<b><span>Mãe:</span></b> <?php echo CHtml::encode($model->nome_mae); ?>
	</div>
  <div class="item10 alinhamento"></div>
	<div class="item20 alinhamento">
		<b><span>HC:</span></b> <?php echo CHtml::encode($model->hc_mae); ?>
	</div>
</p>
<hr/>
<p class='linha'>
	<div class="item50 alinhamento">
		<b><span>Endereço:</span></b> <?php echo CHtml::encode($model->endereco); ?>
	</div>
  <div class="item10 alinhamento"></div>
	<div class="item20 alinhamento">
		<b><span>Cidade:</span></b> <?php echo CHtml::encode($model->cidade); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Telefone Residencial:</span></b> <?php echo CHtml::encode($model->telefone_fixo); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Telefone Móvel:</span></b> <?php echo CHtml::encode($model->telefone_movel); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Telefone Trabalho:</span></b> <?php echo CHtml::encode($model->telefone_trabalho); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Data Internação:</span></b> <?php echo CHtml::encode($model->data_internacao); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Alta:</span></b> <?php echo CHtml::encode($model->alta); ?>
	</div>
</p>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar dados do paciente",array("paciente/update","id" => $model->id),array('class' => 'botao'));?></p>
<?php 

$paciente_id=$model->id;
$sql="select triagem.id from triagem where triagem.paciente_r=:paciente_id";
$command = Yii::app()->db->createCommand($sql);
$command->bindParam(":paciente_id",$paciente_id , PDO::PARAM_STR);
$res=$command->queryAll();
$modelTriagem = Triagem::model()->find(array('select'=>'*','order'=>"id ASC",'condition'=>'paciente_r=:id','params'=>array(':id'=>$paciente_id)));
if($modelTriagem != null)$tabTriagem=$this->renderPartial('../triagem/tabTriagens', array('model'=>$modelTriagem,'aTriagens'=>$res),true);
else $tabTriagem="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('triagem/create'))."</h5>";

$modelGenetica = Genetica::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelGenetica != null)$tabGenetica=$this->renderPartial('../genetica/tabView', array('model'=>$modelGenetica),true);
else $tabGenetica="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('genetica/create'))."</h5>";


$modelProteseAvaliacao = ProteseAvaliacao::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelProteseAvaliacao != null)$tabProteseAvaliacao=$this->renderPartial('../proteseAvaliacao/tabView', array('model'=>$modelProteseAvaliacao),true);
else $tabProteseAvaliacao="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('proteseAvaliacao/create'))."</h5>";

$modelProtesePrescricao = ProtesePrescricao::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelProtesePrescricao != null)$tabProtesePrescricao=$this->renderPartial('../protesePrescricao/tabView', array('model'=>$modelProtesePrescricao),true);
else $tabProtesePrescricao="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('protesePrescricao/create'))."</h5>";

$modelProteseVerificacao = ProteseVerificacao::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelProteseVerificacao != null)$tabProteseVerificacao=$this->renderPartial('../proteseVerificacao/tabView', array('model'=>$modelProteseVerificacao),true);
else $tabProteseVerificacao="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('proteseVerificacao/create'))."</h5>";

$modelProteseValidacao = ProteseValidacao::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelProteseValidacao != null)$tabProteseValidacao=$this->renderPartial('../proteseValidacao/tabView', array('model'=>$modelProteseValidacao),true);
else $tabProteseValidacao="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('proteseValidacao/create'))."</h5>";

$modelProteseAnexo = ProteseAnexo::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelProteseAnexo != null)$tabProteseAnexo=$this->renderPartial('../proteseAnexo/tabView', array('model'=>$modelProteseAnexo),true);
else $tabProteseAnexo="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('proteseAnexo/create'))."</h5>";

$modelServicoSocial = ServicoSocial::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelServicoSocial != null)$tabServicoSocial=$this->renderPartial('../servicoSocial/tabView', array('model'=>$modelServicoSocial,'modelIrmao' => new ServicoSocialIrmao,'modelResidente' => new ServicoSocialResidentes,),true);
else $tabServicoSocial="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('servicoSocial/create'))."</h5>";

$modelMonitoramento = Monitoramento::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelMonitoramento != null)$tabMonitoramento=$this->renderPartial('../monitoramento/tabView', array('model'=>$modelMonitoramento),true);
else $tabMonitoramento="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('monitoramento/create'))."</h5>";

$modelDiagnostico = Diagnostico::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelDiagnostico != null)$tabDiagnostico=$this->renderPartial('../diagnostico/tabView', array('model'=>$modelDiagnostico),true);
else $tabDiagnostico="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('diagnostico/create'))."</h5>";

$modelOrl = Orl::model()->find(array('select'=>'*','condition'=>'paciente_r=:id','params'=>array(':id'=>$model->id)));
if($modelOrl != null)$tabOrl=$this->renderPartial('../orl/tabView', array('model'=>$modelOrl,'modelOrlRetorno'=>new OrlRetorno,),true);
else $tabOrl="<h5>Não há dados de ".CHtml::encode($model->nome)." cadastrados. ".CHtml::link(CHtml::encode("Cadastrar agora"), array('orl/create'))."</h5>";


$this->widget('zii.widgets.jui.CJuiTabs', array(
	'tabs' => array(
		'Triagem'=>$tabTriagem,
		'Genética'=>$tabGenetica,
		'Serviço Social'=>$tabServicoSocial,
		'Monitoramento'=>$tabMonitoramento,	
		'Diagnóstico'=>$tabDiagnostico,
		'ORL'=>$tabOrl,
    'Avaliação de Prótese'=>$tabProteseAvaliacao,
		'Prescrição de Prótese'=>$tabProtesePrescricao,
		'Verificação de Prótese'=>$tabProteseVerificacao,
		'Validação de Prótese'=>$tabProteseValidacao,
		'Anexo de Prótese'=>$tabProteseAnexo,
	)
));

?>
