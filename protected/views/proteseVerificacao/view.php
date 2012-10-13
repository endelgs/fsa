<?php
/* @var $this ProteseVerificacaoController */
/* @var $model ProteseVerificacao */

$this->breadcrumbs=array(
	'Verificação de Prótese'=>array('index'),
	$model->pacienteR->nome,
);

?>

<div>
	<div class='alinhamento'><h1>Dados de Verificação de Prótese: <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>


<br/>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<b><span>NMR Nível mínio de resposta (Audiometria pediátrica) :</span></b>
	<?php echo CHtml::encode($model->nmr);?>
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
<br/>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<b><span>Reação aos sons:</span></b>
	<?php echo CHtml::encode($model->reacao_sons);?>
	<?php echo CHtml::encode($model->voz_amplificada); ?>
</div>
<br/>
<div class="larguraDefault"><hr/></div>
<div class="row">
	Sons Ling:
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
<br/>
<div class="larguraDefault"><hr/></div>
<div class="row">
	Prescrição pela DSL:
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
<br/>
<div class="larguraDefault"><hr/></div>
<div class="row">
	Observação do comportamento auditivo a sons não calibrados:
	<table style="width:700px; text-align:center;">
		<tr>
			<th>Estímulos</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td><b><span>Guizo 1:</span></b></td>
			<td><?php echo CHtml::encode($model->guizo_1);?></td>
		</tr>
		<tr>
			<td><b><span>Guizo 2:</span></b></td>
			<td><?php echo CHtml::encode($model->guizo_2);?></td>
		</tr>
		<tr>
			<td><b><span>Reco-Reco:</span></b></td>
			<td><?php echo CHtml::encode($model->reco_reco);?></td>
		</tr>
		<tr>
			<td><b><span>Sino:</span></b></td>
			<td><?php echo CHtml::encode($model->sino);?></td>
		</tr>
		<tr>
			<td><b><span>Ganza:</span></b></td>
			<td><?php echo CHtml::encode($model->ganza);?></td>
		</tr>
		<tr>
			<td><b><span>Black-Black:</span></b></td>
			<td><?php echo CHtml::encode($model->black_black);?></td>
		</tr>
		<tr>
			<td><b><span>Agogo Pequeno:</span></b></td>
			<td><?php echo CHtml::encode($model->agogo_pequeno);?></td>
		</tr>
		<tr>
			<td><b><span>Agogo Grande:</span></b></td>
			<td><?php echo CHtml::encode($model->agogo_grande);?></td>
		</tr>
		<tr>
			<td><b><span>Prato:</span></b></td>
			<td><?php echo CHtml::encode($model->prato);?></td>
		</tr>
	</table>
</div>
<div class="row">
	<b><span>Latência Resposta:</span></b>
	<?php echo CHtml::encode($model->latencia_resposta);?>
</div>