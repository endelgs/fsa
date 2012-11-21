<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */


$baseurl = Yii::app()->request->baseUrl;
    $urlsim = Yii::app()->request->baseUrl.'/images/Ok-icon.png';
    $urlnao = Yii::app()->request->baseUrl.'/images/Close-2-icon.png';
    $urledit = $baseurl.'/images/edit-icon.png';
    $model->residentes_familia=($model->residentes_familia == 'true')?$urlsim:$urlnao;
 ?>
 
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div class='direita'>
	última atualização <?php echo $model->last_update ;?>
</div>
<h2>Serviço Social</h2>
<hr/>
<h3>Situação Familiar</h3>
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Nome da Mãe:</span></b> <?php echo CHtml::encode($model->nome_mae); ?>
		</div>

		<div class="alinhamento">
			<b><span>Data Nascimento:</span></b> <?php echo CHtml::encode($model->data_nascimento_mae); ?>
		</div>
	</p>
	
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Escolaridade:</span></b> <?php echo CHtml::encode($model->escolaridade_mae); ?>
		</div>

		<div class="alinhamento">
			<b><span>Profissão:</span></b> <?php echo CHtml::encode($model->profissao_mae); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Local de trabalho:</span></b> <?php echo CHtml::encode($model->local_trabalho_mae); ?>
		</div>

		<div class="alinhamento">
			<b><span>Telefone do Trabalho:</span></b> <?php echo CHtml::encode($model->telefone_trabalho_mae); ?>
		</div>
	</p>
	<div><hr/></div>
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Nome do Pai:</span></b> <?php echo CHtml::encode($model->nome_pai); ?>
		</div>
	
		<div class="alinhamento">
			<b><span>Data Nascimento:</span></b> <?php echo CHtml::encode($model->data_nascimento_pai); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Escolaridade:</span></b> <?php echo CHtml::encode($model->escolaridade_pai); ?>
		</div>

		<div class="alinhamento">
			<b><span>Profissão do Pai:</span></b> <?php echo CHtml::encode($model->profissao_pai); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Local de trabalho:</span></b> <?php echo CHtml::encode($model->local_trabalho_pai); ?>
		</div>
		<div class="alinhamento">
			<b><span>Telefone do trabalho:</span></b> <?php echo CHtml::encode($model->telefone_trabalho_pai); ?>
		</div>
	</p>
	<div><hr/></div>
	<p class="row">
		<b><span>Responsável pela criança:</span></b> <?php echo CHtml::encode($model->responsavel_crianca); ?>
	</p>

	<p class="row">
		<b><span>Familia Nascimento:</span></b> <?php
			if(CHtml::encode($model->familia)=='legitima'){
				echo CHtml::encode($model->familia);
			}else if(CHtml::encode($model->familia)=='adotiva'){
				echo CHtml::encode($model->familia).' - '.CHtml::encode($model->familia_outros);
			}
		?>
	</p>
	<div><hr/></div>
	<p class="row">
		<div class="alinhamento item50">
			<b><span>União:</span></b> <?php echo CHtml::encode($model->uniao); ?>
		</div>
		<div class="alinhamento">
			<b><span>Outro:</span></b> <?php echo CHtml::encode($model->uniao_outro); ?>
		</div>
	</p>
	<div><hr/></div>
	<h3>Irmãos</h3>
  <?php $aIrmaos=$modelIrmao->findAll('servico_social_r=:servico_social_r', array(':servico_social_r'=>$model->id));?>
  <?php if(!empty($aIrmaos)): ?>
	<p>
		<table>
			<tr>
				<th>Nome</th>
				<th>Idade</th>
				<th>Escolaridade</th>
				<th>Salário</th>
			</tr>
			<?php
				
				foreach($aIrmaos as $irmao){
					echo '<tr>
						<td>'.CHtml::encode($irmao->nome).'</td>
						<td>'.CHtml::encode($irmao->idade).'</td>
						<td>'.CHtml::encode($irmao->escolaridade).'</td>
						<td>'.CHtml::encode($irmao->salario).'</td>
					</tr>';
				}
			?>
		</table>
	
	</p>
  <?php else: ?>
  <p>Não há irmãos cadastrados para esta criança.</p>
  <?php endif; ?>
	<div><hr/></div>
		<h3>Residentes com a familia </h3>
    <?php $aResi=$modelResidente->findAll('servico_social_r=:servico_social_r', array(':servico_social_r'=>$model->id)); ?>
		<?php if(!empty($aResi)):?>
    <table>
			<tr>
				<th>Nome</th>
				<th>Idade</th>
				<th>Escolaridade</th>
				<th>Salário</th>
			</tr>
			<?php
				
				foreach($aResi as $resi){
					echo '<tr>
						<td>'.CHtml::encode($resi->nome).'</td>
						<td>'.CHtml::encode($resi->idade).'</td>
						<td>'.CHtml::encode($resi->parentesco).'</td>
						<td>'.CHtml::encode($resi->salario).'</td>
					</tr>';
				}
			?>
		</table>
    <?php else: ?>
    <p>Não há outros residentes com a família.</p>
    <?php endif; ?>
	<div><hr/></div>
	<h3>Situação Econômica</h3>
	<p class="row">
		<div  class="alinhamento item50">
			<b><span>Renda Total:</span></b> <?php echo CHtml::encode($model->renda_total); ?>
		</div>
		<div class="alinhamento">
			<b><span>Quem contribui:</span></b> <?php echo CHtml::encode($model->quem_contribui); ?>
		</div>
	</p>

	<p class="row">
		<div class="alinhamento item50">
			<b><span>Nº pessoas na casa:</span></b> <?php echo CHtml::encode($model->n_pessoas_casa); ?>
		</div>
		<div class="alinhamento">
			<b><span>Renda per Capita:</span></b> <?php echo CHtml::encode($model->renda_per_capita); ?>
		</div>
	</p>

	<p class="row">
		<b><span>Benefício Social:</span></b> <?php echo CHtml::encode($model->beneficio_social); ?>
	</p>

	<p class="row">
		<b><span>Outros:</span></b> <?php echo CHtml::encode($model->outros_situacao_economica); ?>
	</p>
	<div><hr/></div>
	<h3>Habitação</h3>
	<p class="row">
		<b><span>Casa:</span></b> <?php 
			if(CHtml::encode($model->casa_tipo)=='propria'){
				echo CHtml::encode($model->casa_tipo);
			}else if(CHtml::encode($model->casa_tipo)=='alugada'){
				echo CHtml::encode($model->casa_tipo).' - '.CHtml::encode($model->casa_alugada);
			}else if(CHtml::encode($model->casa_tipo)=='cedida'){
				echo CHtml::encode($model->casa_tipo).' - '.CHtml::encode($model->casa_outros);
			}
		
			?>
	</p>
	<p class="row">
		<div class="alinhamento item50">
			<b><span>Tipo de Construção:</span></b> <?php echo CHtml::encode($model->tipo_construcao); ?>
		</div>
	
		<div class="alinhamento">
			<b><span>Nº de Cômodos:</span></b> <?php echo CHtml::encode($model->n_comodos); ?>
		</div>
	</p>
	<div><hr/></div>
	<h3>Outros</h3>
	<p class="row">
		<b><span>Transporte Utilizado:</span></b> <?php echo CHtml::encode($model->transporte_utilizado); ?>
	</p>

	<p class="row">
		<b><span>Convênio Médico:</span></b> <?php echo CHtml::encode($model->convenio_medico); ?>
	</p>

	<p class="row">
		<b><span>Centro de Sáude:</span></b> <?php echo CHtml::encode($model->centro_saude); ?>
	</p>
	<div><hr/></div>
	
	<h3>Síntese do Atendimento</h3>
	<p class="row">
		<b><span>Síntese do Atendimento:</span></b> <?php echo CHtml::encode($model->sintese_atendimento); ?>
	</p>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar estes dados de serviço social",array("servicoSocial/update","id" => $model->id),array('class' => 'botao'));?></p>