<?php
/* @var $this ProteseValidacaoController */
/* @var $model ProteseValidacao */

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
<h2>Validação de Prótese</h2>
<hr/>
<div class="row">
	<b><span>Data :</span></b>
	<?php echo CHtml::encode($model->data);?>
</div>
<hr/>
<p class="row">
	<h3>NMR Nível mínimo de resposta a <?php echo CHtml::encode(nmr($model->nmr));?></h3>
</p>

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
	<h3>Prescrição pela DSL</h3>
	<table class="larguraDefault">
		<tr>
			<th>NPS</th>
			<th></th>
			<th>250 Hz</th>
			<th>500 Hz</th>
			<th>1000 Hz</th>
			<th>2000 Hz</th>
			<th>3000 Hz</th>
			<th>4000 Hz</th>
			<th>6000 Hz</th>
			<th>8000 Hz</th>
		</tr>
		<tr>
			<td>OD</td>
			<td>40 dB</td>
			<td><?php echo CHtml::encode($model->od_40_250); ?></td>
			<td><?php echo CHtml::encode($model->od_40_500); ?></td>
			<td><?php echo CHtml::encode($model->od_40_1000); ?></td>
			<td><?php echo CHtml::encode($model->od_40_2000); ?></td>
			<td><?php echo CHtml::encode($model->od_40_3000); ?></td>
			<td><?php echo CHtml::encode($model->od_40_4000); ?></td>
			<td><?php echo CHtml::encode($model->od_40_6000); ?></td>
			<td><?php echo CHtml::encode($model->od_40_8000); ?></td>
		</tr>
		<tr>
			<td>OD</td>
			<td>60 dB</td>
			<td><?php echo CHtml::encode($model->od_60_250); ?></td>
			<td><?php echo CHtml::encode($model->od_60_500); ?></td>
			<td><?php echo CHtml::encode($model->od_60_1000); ?></td>
			<td><?php echo CHtml::encode($model->od_60_2000); ?></td>
			<td><?php echo CHtml::encode($model->od_60_3000); ?>></td>
			<td><?php echo CHtml::encode($model->od_60_4000); ?></td>
			<td><?php echo CHtml::encode($model->od_60_6000); ?></td>
			<td><?php echo CHtml::encode($model->od_60_8000); ?></td>
		</tr>
		<tr>
			<td>OD</td>
			<td>80 dB</td>
			<td><?php echo CHtml::encode($model->od_80_250); ?></td>
			<td><?php echo CHtml::encode($model->od_80_500); ?></td>
			<td><?php echo CHtml::encode($model->od_80_1000); ?></td>
			<td><?php echo CHtml::encode($model->od_80_2000); ?></td>
			<td><?php echo CHtml::encode($model->od_80_3000); ?></td>
			<td><?php echo CHtml::encode($model->od_80_4000); ?></td>
			<td><?php echo CHtml::encode($model->od_80_6000); ?></td>
			<td><?php echo CHtml::encode($model->od_80_8000); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td>40 dB</td>
			<td><?php echo CHtml::encode($model->oe_40_250); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_500); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_1000); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_2000); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_3000); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_4000); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_6000); ?></td>
			<td><?php echo CHtml::encode($model->oe_40_8000); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td>60 dB</td>
			<td><?php echo CHtml::encode($model->oe_60_250); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_500); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_1000); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_2000); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_3000); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_4000); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_6000); ?></td>
			<td><?php echo CHtml::encode($model->oe_60_8000); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td>80 dB</td>
			<td><?php echo CHtml::encode($model->oe_80_250); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_500); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_1000); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_2000); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_3000); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_4000); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_6000); ?></td>
			<td><?php echo CHtml::encode($model->oe_80_8000); ?></td>
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
			<td><b><span>Guizo 2:</span></b></td>
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
	<b><span>Grau de movimentação da cabeça:</span></b>
	<?php echo CHtml::encode($model->grau_movimentacao_cabeca);?>
</p>
<p class="row">
	<b><span>Estágio de desenvolvimento auditivo:</span></b>
	<?php echo CHtml::encode($model->estagio_desenvolvimento);?>
</p>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar essa validação de prótese",array("proteseValidacao/update","id" => $model->id),array('class' => 'botao'));?></p>