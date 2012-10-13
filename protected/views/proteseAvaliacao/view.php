<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacao */

$this->breadcrumbs=array(
	'Avaliação de Prótese'=>array('index'),
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
	<div class='alinhamento'><h1>Dados de Avaliação de Prótese: <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
<br/><br/><br/>
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

<div class="row">
	<b><span>imitanciometria:</span></b>
	<?php echo CHtml::encode($model->imitanciometria); ?>
</div>

<div class="row">
	<b><span>otoscopia:</span></b>
	<?php echo CHtml::encode($model->otoscopia); ?>
</div>
<br/>
<div class="larguraDefault"><hr/></div>
<p class="row">
	Curva Timpanométrica
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
<br/>
<div class="larguraDefault"><hr/></div>
<p class="row">
	Reflexo Acústico
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
<br/>
<div class="larguraDefault"><hr/></div>
<div class="row">
	<b><span>Reação aos sons::</span></b>
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

<div class="row">
	<b><span>Laudo Audiológico:</span></b>
	<?php echo CHtml::encode($model->laudo_audiologico); ?>
</div>
