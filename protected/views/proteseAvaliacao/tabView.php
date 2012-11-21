<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacaoSocial */
function resultado($r){
  $resultados = array(
    'rcp' => 'R.C.P',
    'nao_reacao' => 'Não reação',
    'ros_ll' => 'ROS ou LL*',
    'local_down' => 'Local down',
    'local_up' => 'Local up',
    'atencao_som' => 'Atenção ao som',
    'startle' => 'Startle/habituação');
  return $resultados[$r];
}
function nmr($n){
  $nmr = array(
    'audiometro_pediatrico' => 'Audiômetro pediátrico',
    'campo_livre' => 'Campo livre'
  );
  return $nmr[$n];
}
$model->grau_movimentacao_cabeca=($model->grau_movimentacao_cabeca=="90")?'90º':'<90º';
$baseurl = Yii::app()->request->baseUrl;
$urledit = $baseurl.'/images/edit-icon.png';
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
<h2>Avaliação de Prótese</h2>
<hr/>
<h3>Informações Básicas</h3>
<div class="row">
	<div>Pesquisa do limiar eletrofisiológico _PEATE:</div>
	<div class="row">
		<table class="larguraDefault" >
			<tr>
				<th>nNa</th>
				<th>Orelha Direita</th>
				<th>Orelha Esquerda</th>
			</tr>
			<tr>
				<td>Clique</td>
				<td><?php echo CHtml::encode($model->nna_clique_od); ?></td>
				<td><?php echo CHtml::encode($model->nna_cliquer_oe); ?></td>
			</tr>
			<tr>
				<td>500Hz</td>
				<td><?php echo CHtml::encode($model->nna_500_od); ?></td>
				<td><?php echo CHtml::encode($model->nna_500_oe); ?></td>
			</tr>
			<tr>
				<td>1000Hz</td>
				<td><?php echo CHtml::encode($model->nna_1000_od); ?></td>
				<td><?php echo CHtml::encode($model->nna_1000_oe); ?></td>
			</tr>
		</table>
	</div>
</div>

<p class="row">
	<b><span>Imitanciometria:</span></b>
	<?php echo CHtml::encode($model->imitanciometria); ?>
</p>

<p class="row">
	<b><span>Otoscopia:</span></b>
	<?php echo CHtml::encode($model->otoscopia); ?>
</p>
<div class="larguraDefault"><hr/></div>
<p class="row">
	<h3>Curva Timpanométrica</h3>
	<table class="larguraDefault">
		<tr>
			<th>Orelha</th>
			<th>Pressão (daPa)</th>
			<th>Complacência (ml)</th>
			<th>Tipo de Curva</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->pressao_od); ?></td>
			<td><?php echo CHtml::encode($model->complacencia_od); ?></td>
			<td><?php echo CHtml::encode($model->tipo_curva_od); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->pressao_oe); ?></td>
			<td><?php echo CHtml::encode($model->complacencia_oe); ?></td>
			<td><?php echo CHtml::encode($model->tipo_curva_oe); ?></td>
		</tr>
	</table>
</p>
<div class="larguraDefault"><hr/></div>
<p class="row">
	<h3>Reflexo Acústico</h3>
	<table class="larguraDefault">
		<tr>
			<th>RE ipsi</th>
			<th>500</th>
			<th>1k</th>
			<th>2k</th>
			<th>4k</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->reipsi_500_od); ?></td>
			<td><?php echo CHtml::encode($model->reipsi_1k_od); ?></td>
			<td><?php echo CHtml::encode($model->reipsi_2k_od); ?></td>
			<td><?php echo CHtml::encode($model->reipsi_4k_od); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->reipsi_500_oe); ?></td>
			<td><?php echo CHtml::encode($model->reipsi_1k_oe); ?></td>
			<td><?php echo CHtml::encode($model->reipsi_2k_oe); ?></td>
			<td><?php echo CHtml::encode($model->reipsi_4k_oe); ?></td>
		</tr>
	</table>
</p>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<h3>Nível Mínimo de Resposta a <?php echo CHtml::encode(nmr($model->nmr));?></h3>
	
</div>

<div class="row">
	<table class="larguraDefault">
		<tr>
			<th>Orelha</th>
			<th>500 kHz</th>
			<th>1 kHz</th>
			<th>2 kHz</th>
			<th>4 kHz</th>
			<th>Intensidade</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->nmr_500_od); ?></td>
			<td><?php echo CHtml::encode($model->nmr_1k_od); ?></td>
			<td><?php echo CHtml::encode($model->nmr_2k_od); ?></td>
			<td><?php echo CHtml::encode($model->nmr_4k_od); ?></td>
			<td><?php echo CHtml::encode($model->nmr_intensiade_od); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->nmr_500_oe); ?></td>
			<td><?php echo CHtml::encode($model->nmr_1k_oe); ?></td>
			<td><?php echo CHtml::encode($model->nmr_2k_oe); ?></td>
			<td><?php echo CHtml::encode($model->nmr_4k_oe); ?></td>
			<td><?php echo CHtml::encode($model->nmr_intensiade_oe); ?></td>
		</tr>
	</table>
</div>
<div class="larguraDefault"><hr/></div>
<div class="row">
  <h3>RECD (real ear coupler difference)</h3>
</div>
<div class="row">
	<table class="larguraDefault">
		<tr>
			<th>Orelha</th>
			<th>250 (Hz)</th>
			<th>500 (Hz)</th>
			<th>1000 (Hz)</th>
			<th>2000 (Hz)</th>
			<th>3000 (Hz)</th>
			<th>4000 (Hz)</th>
			<th>6000 (Hz)</th>
			<th>8000 (Hz)</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->recd_250_od); ?></td>
			<td><?php echo CHtml::encode($model->recd_500_od);?></td>
			<td><?php echo CHtml::encode($model->recd_1000_od);?></td>
			<td><?php echo CHtml::encode($model->recd_2000_od); ?></td>
			<td><?php echo CHtml::encode($model->recd_3000_od); ?></td>
			<td><?php echo CHtml::encode($model->recd_4000_od); ?></td>
			<td><?php echo CHtml::encode($model->recd_6000_od); ?></td>
			<td><?php echo CHtml::encode($model->recd_8000_od); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->recd_250_oe);?></td>
			<td><?php echo CHtml::encode($model->recd_500_oe); ?></td>
			<td><?php echo CHtml::encode($model->recd_1000_oe); ?></td>
			<td><?php echo CHtml::encode($model->recd_2000_oe); ?></td>
			<td><?php echo CHtml::encode($model->recd_3000_oe); ?></td>
			<td><?php echo CHtml::encode($model->recd_4000_oe); ?></td>
			<td><?php echo CHtml::encode($model->recd_6000_oe); ?></td>
			<td><?php echo CHtml::encode($model->recd_8000_oe); ?></td>
		</tr>
	</table>
</div>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<h3>Reação aos sons verbais com amplificação</h3>
  <p><b><span>
  <?php if($model->reacao_sons == "viva_voz") echo "Viva voz";
  else echo "Voz amplificada a ".CHtml::encode($model->voz_amplificada)." dB"; ?>
  </span></b></p>
</div>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<h3>Sons Ling</h3>
	<table class="larguraDefault">
		<tr>
			<th>s</th>
			<th>ch</th>
			<th>a</th>
			<th>i</th>
			<th>u</th>
			<th>m</th>
		</tr>
		<tr>
			<td><?php echo CHtml::encode($model->sons_ling_s); ?></td>
			<td><?php echo CHtml::encode($model->sons_ling_ch); ?></td>
			<td><?php echo CHtml::encode($model->sons_ling_a); ?></td>
			<td><?php echo CHtml::encode($model->sons_ling_i); ?></td>
			<td><?php echo CHtml::encode($model->sons_ling_u); ?></td>
			<td><?php echo CHtml::encode($model->sons_ling_m); ?></td>
		</tr>
	</table>
	<table style="width:300px;">
		<tr>
			<th>Orelha</th>
			<th>LRF (dB)</th>
			<th>LDV (dB)</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->lrf_od); ?></td>
			<td><?php echo CHtml::encode($model->ldv_od); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->lrf_oe); ?></td>
			<td><?php echo CHtml::encode($model->ldv_oe); ?></td>
		</tr>
	</table>
</div>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<h3>Observação do comportamento auditivo a sons não calibrados</h3>
	<table style="width:700px; text-align:center;">
		<tr>
			<th>Estímulos</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td><b><span>Guizo 1</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->guizo_1));?></td>
		</tr>
		<tr>
			<td><b><span>Guizo 2</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->guizo_2));?></td>
		</tr>
		<tr>
			<td><b><span>Reco-Reco</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->reco_reco));?></td>
		</tr>
		<tr>
			<td><b><span>Sino</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->sino));?></td>
		</tr>
		<tr>
			<td><b><span>Ganzá</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->ganza));?></td>
		</tr>
		<tr>
			<td><b><span>Black-Black</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->black_black));?></td>
		</tr>
		<tr>
			<td><b><span>Agogô Pequeno</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->agogo_pequeno));?></td>
		</tr>
		<tr>
			<td><b><span>Agogô Grande</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->agogo_grande));?></td>
		</tr>
		<tr>
			<td><b><span>Prato</span></b></td>
			<td><?php echo CHtml::encode(resultado($model->prato));?></td>
		</tr>
	</table>
</div>
<p class="row">
	<b><span>Latência Resposta:</span></b>
	<?php echo CHtml::encode($model->latencia_resposta);?>
</p>

<p class="row">
	<b><span>Laudo Audiológico:</span></b>
	<?php echo CHtml::encode($model->laudo_audiologico); ?>
</p>
<p class="row">
	<b><span>Grau de movimentação da cabeça:</span></b>
	<?php echo CHtml::encode($model->grau_movimentacao_cabeca);?>
</p>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar essa avaliação de prótese",array("proteseAvaliacao/update","id" => $model->id),array('class' => 'botao'));?></p>
