<?php
/* @var $this MonitoramentoController */
/* @var $model Monitoramento */

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
<div class="row">
	<h3>I - Observação comportamental a estímulos sonoros:</h3>
	<div class="row">
		<table class="larguraDefault" style="text-align:center">
			<tr>
				<th>Estímulos</th>
				<th>Resultado</th>
			</tr>
			<tr>
				<td>Guizo</td>
				<td><?php echo CHtml::encode($model->guizo);?></td>
			</tr>
			<tr>
				<td>Sino</td>
				<td><?php echo CHtml::encode($model->sino);?></td>
			</tr>
			<tr>
				<td>Agogo</td>
				<td><?php echo CHtml::encode($model->agogo);?></td>
			</tr>
			<tr>
				<td>Reação Voz</td>
				<td><?php echo CHtml::encode($model->reacao_voz);?></td>
			</tr>
		</table>
	</div>
</div>
<br/>
<div class="larguraDefault"><hr/></div>
<p class="row">
	<h3>II - Audiometria com reforço visual:</h3>
	<table class="larguraDefault">
		<tr>
			<th>Orelha</th>
			<th>500 kHz</th>
			<th>1 kHz</th>
			<th>2 kHz</th>
			<th>4 kHz</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->od_500);?></td>
			<td><?php echo CHtml::encode($model->od_1000);?></td>
			<td><?php echo CHtml::encode($model->od_2000);?></td>
			<td><?php echo CHtml::encode($model->od_4000);?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->oe_500);?></td>
			<td><?php echo CHtml::encode($model->oe_1000);?></td>
			<td><?php echo CHtml::encode($model->oe_2000);?></td>
			<td><?php echo CHtml::encode($model->oe_4000);?></td>
		</tr>
	</table>
</p>
<br/>
<div class="larguraDefault"><hr/></div>
<p class="row">
	<h3>III - Avaliação das condições da Orelha Média</h3>
	<table class="larguraDefault">
		<tr>
			<th>Orelha</th>
			<th>Complacência</th>
			<th>Pressão</th>
			<th>Volume</th>
			<th>Gradiente</th>
			<th>Tipo de Curva</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->od_complacencia); ?></td>
			<td><?php echo CHtml::encode($model->od_pressao); ?></td>
			<td><?php echo CHtml::encode($model->od_volume); ?></td>
			<td><?php echo CHtml::encode($model->od_gradiente); ?></td>
			<td><?php echo CHtml::encode($model->od_curva_tipo); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->oe_complacencia); ?></td>
			<td><?php echo CHtml::encode($model->oe_pressao); ?></td>
			<td><?php echo CHtml::encode($model->oe_volume); ?></td>
			<td><?php echo CHtml::encode($model->oe_gradiente); ?></td>
			<td><?php echo CHtml::encode($model->oe_curva_tipo); ?></td>
		</tr>
	</table>
</p>
<br/>
<div class="larguraDefault"><hr/></div>
<p class="row">
	<h3>IV - Atendimento de ordens</h3>
	<p></p>
	<table style="width:800px;">
		<tr>
			<th>Nível I - 9-12m</th>
			<th>Nível II - 13-15m</th>
			<th>Nível III - 15-18m</th>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td style="width:80px; text-align:right;">Da tchau</td>
						<td><?php echo CHtml::encode($model->da_tchau); ?></td>
					</tr>
					<tr>
						<td style="width:80px; text-align:right;">Joga beijo</td>
						<td><?php echo CHtml::encode($model->joga_beijo); ?></td>
					</tr>
					<tr>
						<td style="width:80px; text-align:right;">Bate palma</td>
						<td><?php echo CHtml::encode($model->bate_palma); ?></td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td style="width:100px; text-align:right;">Cade chupeta</td>
						<td><?php echo CHtml::encode($model->cade_chupeta); ?></td>
					</tr>
					<tr>
						<td style="width:80px; text-align:right;">Cade mamãe</td>
						<td><?php echo CHtml::encode($model->cade_mamae); ?></td>
					</tr>
					<tr>
						<td style="width:80px; text-align:right;">Cade sapato</td>
						<td><?php echo CHtml::encode($model->cade_sapato); ?></td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td style="width:80px; text-align:right;">Cade cabelo</td>
						<td><?php echo CHtml::encode($model->cade_cabelo); ?></td>
					</tr>
					<tr>
						<td style="width:80px; text-align:right;">Cade mão</td>
						<td><?php echo CHtml::encode($model->cade_mao); ?></td>
					</tr>
					<tr>
						<td style="width:80px; text-align:right;">Cade pé</td>
						<td><?php echo CHtml::encode($model->cade_pe); ?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<p>Observação:</p>
	<?php echo CHtml::encode($model->observacao);?>
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
<p class="row">
	<b><span>Desenvolvimento Motor:</span></b>
	<?php echo CHtml::encode($model->desenvolvimento_motor);?>
</p>
<p class="row">
	<b><span>Desenvolvimento Auditivo:</span></b>
	<?php echo CHtml::encode($model->desenvolvimento_auditivo);?>
</p>

<p class="row">
	<b><span>Desenvolvimento da Linguagem:</span></b>
	<?php echo CHtml::encode($model->desenvolvimento_linguagem); ?>
</p>