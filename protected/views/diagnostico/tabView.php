<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */
 
    $model->consanguinidade=($model->consanguinidade == 'true')?'Sim':'Não';
    $model->perda_auditiva_familia=($model->perda_auditiva_familia == 'true')?'Sim':'Não';
    $model->preocupacao_familiar=($model->preocupacao_familiar == 'true')?'Sim':'Não';
    
    $model->alimentacao_neonato = ($model->alimentacao_neonato == 'natural')?'Natural':'Mamadeira';
    $model->posicao_alimentacao = ($model->posicao_alimentacao == 'deitado')?'Deitado':'Sentado';
    $model->refluxo = ($model->refluxo == 'true')?'Sim':'Não';
    $model->dor_ouvido = ($model->dor_ouvido == 'true')?'Sim':'Não';
    $model->chora_ruido_alto = ($model->chora_ruido_alto == 'true')?'Sim':'Não';
    
    $model->procurar_som_fora_visao = ($model->procurar_som_fora_visao == 'true')?'Sim':'Não';
	$model->atento_voz_materna = ($model->atento_voz_materna == 'true')?'Sim':'Não';
	$model->reinternado = ($model->reinternado == 'true')?'Sim':'Não';	
    $model->susto_ruido_alto = ($model->susto_ruido_alto == 'true')?'Sim':'Não';
    $model->pesquisa_integridade = ($model->pesquisa_integridade == '80')?'80dB':'100dB';
    $model->latencia = ($model->latencia == 'normal')?'Normal':'Alterada';
		
    $model->interpico = ($model->interpico == 'normal')?'Normal':'Alterada';
    $model->conclusao_transiente = ($model->conclusao_transiente == 'presente')?'Presente':'Ausente';
    $model->distorcao_conclusao_1 = ($model->distorcao_conclusao_1 == 'presente')?'Presente':'Ausente';
    $model->distorcao_conclusao_1_4 = ($model->distorcao_conclusao_1_4 == 'presente')?'Presente':'Ausente';
    $model->distorcao_conclusao_2_0 = ($model->distorcao_conclusao_2_0 == 'presente')?'Presente':'Ausente';
    $model->distorcao_conclusao_2_8 = ($model->distorcao_conclusao_2_8 == 'presente')?'Presente':'Ausente';
    $model->distorcao_conclusao_4 = ($model->distorcao_conclusao_4 == 'presente')?'Presente':'Ausente';
    
    $model->guizo_lateral = ($model->guizo_lateral == 'direta')?'Direta':'Indireta';
    $model->guizo__cima = ($model->guizo__cima == 'direta')?'Direta':'Indireta';
    $model->guizo_baixo = ($model->guizo_baixo == 'direta')?'Direta':'Indireta';
    $model->sino_lateral = ($model->sino_lateral == 'direta')?'Direta':'Indireta';
    $model->sino_cima = ($model->sino_cima == 'direta')?'Direta':'Indireta';
    $model->sino_baixo = ($model->sino_baixo == 'direta')?'Direta':'Indireta';
    
    $model->reflexo_cocleo_palpebral = ($model->reflexo_cocleo_palpebral == 'presente')?'Presente':'Ausente';
 ?>
 
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.margem{ margin-right:15px;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div class='direita'>
	última atualização <?php echo $model->last_update ;?>
</div>
<br/>
<h3>I - Anamnese</h3>
<hr/>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Consanguinidade:</span></b> <?php echo CHtml::encode($model->consanguinidade); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>História familiar de perda auditiva permanente na infância?</span></b> <?php echo CHtml::encode($model->perda_auditiva_familia); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Preocupação familiar com o desenvolvimento da criança (audição, fala ou linguagem)?</span></b> <?php echo CHtml::encode($model->preocupacao_familiar); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Como é realizada a alimentação do neonato?</span></b> <?php echo CHtml::encode($model->alimentacao_neonato); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Em que posição é realizada a alimentação do neonato?</span></b> <?php echo CHtml::encode($model->posicao_alimentacao); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Tem refluxo gastro-esofágico?</span></b> <?php echo CHtml::encode($model->refluxo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Teve dor de ouvido?</span></b> <?php echo CHtml::encode($model->dor_ouvido); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Quando o neonato esta dormindo tranqüilamente, barulhos altos o acordam?</span></b> <?php echo CHtml::encode($model->barulho_alto_acorda); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>O neonato chora na presença de ruídos muitos altos?</span></b> <?php echo CHtml::encode($model->chora_ruido_alto); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Começou a procurar o som que está fora da sua visão?</span></b> <?php echo CHtml::encode($model->procurar_som_fora_visao); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Neonato fica atento na presença da voz materna?</span></b> <?php echo CHtml::encode($model->atento_voz_materna); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Foi reinternado?</span></b> <?php echo CHtml::encode($model->reinternado); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Motivo</span></b> <?php echo CHtml::encode($model->motivo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>O neonato se assusta com ruídos altos?</span></b> <?php echo CHtml::encode($model->susto_ruido_alto); ?>
	</div>
</p>

<br/>
<h3>II - Potencial Evocado Auditivo de Tronco Encefálico</h3>
<hr/>
<p class='linha'>
	<div class="alinhamento">
		<table style="width:400px;">
			<tr>
				<th>Latência Absoluta</th>
				<th>Orelha Direita</th>
				<th>Orelha Esquerda</th>
			</tr>
			<tr>
				<td>Onda I</td>
				<td><?php echo CHtml::encode($model->od_onda_1); ?></td>
				<td><?php echo CHtml::encode($model->oe_onda_1); ?></td>
			</tr>
			<tr>
				<td>Onda III</td>
				<td><?php echo CHtml::encode($model->od_onda_3); ?></td>
				<td><?php echo CHtml::encode($model->oe_onda_3); ?></td>
			</tr>
			<tr>
				<td>Onda V</td>
				<td><?php echo CHtml::encode($model->od_onda_5); ?></td>
				<td><?php echo CHtml::encode($model->oe_onda_5); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<table style="width:400px;">
			<tr>
				<th>Interlatência</th>
				<th>Orelha Direita</th>
				<th>Orelha Esquerda</th>
			</tr>
			<tr>
				<td>Onda I</td>
				<td><?php echo CHtml::encode($model->od_interlatencia_1_3); ?></td>
				<td><?php echo CHtml::encode($model->oe_interlatencia_1_3); ?></td>
			</tr>
			<tr>
				<td>Onda III</td>
				<td><?php echo CHtml::encode($model->od_interlatencia_3_5); ?></td>
				<td><?php echo CHtml::encode($model->oe_interlatencia_3_5); ?></td>
			</tr>
			<tr>
				<td>Onda V</td>
				<td><?php echo CHtml::encode($model->od_interlatencia_1_5); ?></td>
				<td><?php echo CHtml::encode($model->oe_interlatencia_1_5); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b>Pesquisa do limiar eletrofisiológico - latência absoluta</b>
		<table style="width:400px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>100dB</td>
				<td><?php echo CHtml::encode($model->od_100); ?></td>
				<td><?php echo CHtml::encode($model->oe_100); ?></td>
			</tr>
			<tr>
				<td>90dB</td>
				<td><?php echo CHtml::encode($model->od_90); ?></td>
				<td><?php echo CHtml::encode($model->oe_90); ?></td>
			</tr>
			<tr>
				<td>80dB</td>
				<td><?php echo CHtml::encode($model->od_80); ?></td>
				<td><?php echo CHtml::encode($model->oe_80); ?></td>
			</tr>
			<tr>
				<td>70dB</td>
				<td><?php echo CHtml::encode($model->od_70); ?></td>
				<td><?php echo CHtml::encode($model->oe_70); ?></td>
			</tr>
			<tr>
				<td>60dB</td>
				<td><?php echo CHtml::encode($model->od_60); ?></td>
				<td><?php echo CHtml::encode($model->oe_60); ?></td>
			</tr>
			<tr>
				<td>50dB</td>
				<td><?php echo CHtml::encode($model->od_50); ?></td>
				<td><?php echo CHtml::encode($model->oe_50); ?></td>
			</tr>
			<tr>
				<td>40dB</td>
				<td><?php echo CHtml::encode($model->od_40); ?></td>
				<td><?php echo CHtml::encode($model->oe_40); ?></td>
			</tr>
			<tr>
				<td>30dB</td>
				<td><?php echo CHtml::encode($model->od_30); ?></td>
				<td><?php echo CHtml::encode($model->oe_30); ?></td>
			</tr>
			<tr>
				<td>20dB</td>
				<td><?php echo CHtml::encode($model->od_20); ?></td>
				<td><?php echo CHtml::encode($model->oe_20); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Conclusão:</span></b> <?php echo CHtml::encode($model->conclusao_limiar_eletrofisiologico); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Latência:</span></b> <?php echo CHtml::encode($model->latencia); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Interpico:</span></b> <?php echo CHtml::encode($model->interpico); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Limiar Eletrofisiologico:</span></b> <?php echo CHtml::encode($model->limiar_eletrofisiologico); ?>
	</div>
</p>
<br/>
<h3>III - Emissões Otoacústicas</h3>
<hr/>
<p class='linha'>
	<div class="alinhamento">
		<b>Transiente - SNR (dB)</b>
		<table style="width:400px;">
			<tr>
				<th>Freq (KHz)</th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>1.0</td>
				<td><?php echo CHtml::encode($model->od_1); ?></td>
				<td><?php echo CHtml::encode($model->oe_1); ?></td>
			</tr>
			<tr>
				<td>1.4</td>
				<td><?php echo CHtml::encode($model->od_1_4); ?></td>
				<td><?php echo CHtml::encode($model->oe_1_4); ?></td>
			</tr>
			<tr>
				<td>2.0</td>
				<td><?php echo CHtml::encode($model->od_2_0); ?></td>
				<td><?php echo CHtml::encode($model->oe_2_0); ?></td>
			</tr>
			<tr>
				<td>2.8</td>
				<td><?php echo CHtml::encode($model->od_2_8); ?></td>
				<td><?php echo CHtml::encode($model->oe_2_8); ?></td>
			</tr>
			<tr>
				<td>4.0</td>
				<td><?php echo CHtml::encode($model->od_4); ?></td>
				<td><?php echo CHtml::encode($model->oe_4); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<table style="width:200px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Repro</td>
				<td><?php echo CHtml::encode($model->od_repro); ?></td>
				<td><?php echo CHtml::encode($model->oe_repro); ?></td>
			</tr>
			<tr>
				<td>Estab</td>
				<td><?php echo CHtml::encode($model->od_estab); ?></td>
				<td><?php echo CHtml::encode($model->oe_estab); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<table style="width:200px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Repro</td>
				<td><?php echo CHtml::encode($model->od_repro); ?></td>
				<td><?php echo CHtml::encode($model->oe_repro); ?></td>
			</tr>
			<tr>
				<td>Estab</td>
				<td><?php echo CHtml::encode($model->od_estab); ?></td>
				<td><?php echo CHtml::encode($model->oe_estab); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Conclusão:</span></b> <?php echo CHtml::encode($model->conclusao_transiente); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b>Produto de distorção</b>
		<table style="width:200px;">
			<tr>
				<th>Freq (KHz)</th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>1.0</td>
				<td><?php echo CHtml::encode($model->od_distorcao_1); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_1); ?></td>
			</tr>
			<tr>
				<td>1.4</td>
				<td><?php echo CHtml::encode($model->od_distorcao_1_4); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_1_4); ?></td>
			</tr>
			<tr>
				<td>2.0</td>
				<td><?php echo CHtml::encode($model->od_distorcao_2_0); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_2_0); ?></td>
			</tr>
			<tr>
				<td>2.8</td>
				<td><?php echo CHtml::encode($model->od_distorcao_2_8); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_2_8); ?></td>
			</tr>
			<tr>
				<td>4.0</td>
				<td><?php echo CHtml::encode($model->od_distorcao_4); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_4); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<table style="width:200px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Repro</td>
				<td><?php echo CHtml::encode($model->od_distorcao_repro); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_repro); ?></td>
			</tr>
			<tr>
				<td>Estab</td>
				<td><?php echo CHtml::encode($model->od_distorcao_estab); ?></td>
				<td><?php echo CHtml::encode($model->oe_distorcao_estab); ?></td>
			</tr>
		</table>
	</div>
</p>

<p class='linha'>
	<b>Conclusão:</b>
	<div class="alinhamento">
		<b><span>1.0 KHz:</span></b> <?php echo CHtml::encode($model->distorcao_conclusao_1); ?>
	</div>
	<div class="alinhamento">
		<b><span>1.4 KHz:</span></b> <?php echo CHtml::encode($model->distorcao_conclusao_1_4); ?>
	</div>
	<div class="alinhamento">
		<b><span>2.0 KHz:</span></b> <?php echo CHtml::encode($model->distorcao_conclusao_2_0); ?>
	</div>
	<div class="alinhamento">
		<b><span>2.8 KHz:</span></b> <?php echo CHtml::encode($model->distorcao_conclusao_2_8); ?>
	</div>
	<div class="alinhamento">
		<b><span>4.0 KHz:</span></b> <?php echo CHtml::encode($model->distorcao_conclusao_4); ?>
	</div>
</p>
<br/>
<h3>IV - Imitanciometria</h3>
<hr/>
<p class='linha'>
	<div class="alinhamento">
		<b>Curva timpanométrica</b>
		<table style="width:350px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Pressão (daPa)</td>
				<td><?php echo CHtml::encode($model->od_pressao); ?></td>
				<td><?php echo CHtml::encode($model->oe_pressao); ?></td>
			</tr>
			<tr>
				<td>Complacência (ml)</td>
				<td><?php echo CHtml::encode($model->od_complacencia); ?></td>
				<td><?php echo CHtml::encode($model->oe_complacencia); ?></td>
			</tr>
			<tr>
				<td>Tipo de Curva</td>
				<td><?php echo CHtml::encode($model->od_tipo_curva); ?></td>
				<td><?php echo CHtml::encode($model->oe_tipo_curva); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b>Reflexo Acústico Ipsilateral</b>
		<table style="width:250px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>500 Hz</td>
				<td><?php echo CHtml::encode($model->od_reflexo_500); ?></td>
				<td><?php echo CHtml::encode($model->oe_reflexo_500); ?></td>
			</tr>
			<tr>
				<td>1000 Hz</td>
				<td><?php echo CHtml::encode($model->od_reflexo_1000); ?></td>
				<td><?php echo CHtml::encode($model->oe_reflexo_1000); ?></td>
			</tr>
			<tr>
				<td>2000 Hz</td>
				<td><?php echo CHtml::encode($model->od_reflexo_2000); ?></td>
				<td><?php echo CHtml::encode($model->oe_reflexo_2000); ?></td>
			</tr>
			<tr>
				<td>4000 Hz</td>
				<td><?php echo CHtml::encode($model->od_reflexo_4000); ?></td>
				<td><?php echo CHtml::encode($model->oe_reflexo_4000); ?></td>
			</tr>
		</table>
	</div>
</p>
<br/>
<h3>V - Nível Mínimo de Respota (Audiometria Pediátrica) - NMR</h3>
<hr/>
<p class='linha'>
	<div class="alinhamento">
		<b>Reflexo Acústico Ipsilateral</b>
		<table style="width:250px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>500 Hz</td>
				<td><?php echo CHtml::encode($model->od_nmr_500); ?></td>
				<td><?php echo CHtml::encode($model->oe_nmr_500); ?></td>
			</tr>
			<tr>
				<td>1000 Hz</td>
				<td><?php echo CHtml::encode($model->od_nmr_1000); ?></td>
				<td><?php echo CHtml::encode($model->oe_nmr_1000); ?></td>
			</tr>
			<tr>
				<td>2000 Hz</td>
				<td><?php echo CHtml::encode($model->od_nmr_2000); ?></td>
				<td><?php echo CHtml::encode($model->oe_nmr_2000); ?></td>
			</tr>
			<tr>
				<td>3000 Hz</td>
				<td><?php echo CHtml::encode($model->od_nmr_3000); ?></td>
				<td><?php echo CHtml::encode($model->oe_nmr_3000); ?></td>
			</tr>
			<tr>
				<td>4000 Hz</td>
				<td><?php echo CHtml::encode($model->od_nmr_4000); ?></td>
				<td><?php echo CHtml::encode($model->oe_nmr_4000); ?></td>
			</tr>
		</table>
	</div>
</p>
<br/>
<h3>VI - Avaliação Comportamental</h3>
<hr/>
<p class='linha'>
	<div class="alinhamento">
		<b>Reflexo Acústico Ipsilateral</b>
		<table style="width:250px;">
			<tr>
				<th>Instrumento</th>
				<th>Lateral</th>
				<th>Para cima</th>
				<th>Para baixo</th>
			</tr>
			<tr>
				<td>Guizo</td>
				<td><?php echo CHtml::encode($model->guizo_lateral); ?></td>
				<td><?php echo CHtml::encode($model->guizo__cima); ?></td>
				<td><?php echo CHtml::encode($model->guizo_baixo); ?></td>
			</tr>
			<tr>
				<td>Sino</td>
				<td><?php echo CHtml::encode($model->sino_lateral); ?></td>
				<td><?php echo CHtml::encode($model->sino_cima); ?></td>
				<td><?php echo CHtml::encode($model->sino_baixo); ?></td>
			</tr>
		</table>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Reflexo Cócleo Palpebral (agogô):</span></b> <?php echo CHtml::encode($model->reflexo_cocleo_palpebral); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Conclusão:</span></b> <?php echo CHtml::encode($model->conclusao_reflexo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Conduta:</span></b> <?php echo CHtml::encode($model->conduta_reflexo); ?>
	</div>
</p>