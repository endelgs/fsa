<?php
/* @var $this ProtesePrescricaoController */
/* @var $model ProtesePrescricao */
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
<h2>Prescrição de Prótese</h2>
<hr/>
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
<p class="row">
	<b><span>Data:</span></b>
	<?php echo CHtml::encode($model->data); ?>
</p>

<p class="row">
	<b><span>Tipo:</span></b>
	<?php echo CHtml::encode($model->tipo); ?>
</p>

<p class="row">
	<b><span>Modelo:</span></b>
	<?php echo CHtml::encode($model->modelo); ?>
</p>

<p class="row">
	<b><span>Material:</span></b>
	<?php echo CHtml::encode($model->material); ?>
</p>

<p class="row">
	<b><span>Modificação Acústica:</span></b>
	<?php echo CHtml::encode($model->modificacao_acustica); ?>
</p>
	<div class="larguraDefault"><hr/></div>
<div class="row">
	<h3>Prótese Selecionada</h3>
	<table>
		<tr>
			<th>Orelha</th>
			<th>Modelo</th>
			<th>Marca</th>
			<th>Cor</th>
		</tr>
		<tr>
			<td>OD</td>
			<td><?php echo CHtml::encode($model->od_modelo); ?></td>
			<td><?php echo CHtml::encode($model->od_marca); ?></td>
			<td><?php echo CHtml::encode($model->od_cor); ?></td>
		</tr>
		<tr>
			<td>OE</td>
			<td><?php echo CHtml::encode($model->oe_modelo); ?></td>
			<td><?php echo CHtml::encode($model->oe_marca); ?></td>
			<td><?php echo CHtml::encode($model->oe_cor); ?></td>
		</tr>
	</table>
</div>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar essa prescrição de prótese",array("protesePrescricao/update","id" => $model->id),array('class' => 'botao'));?></p>
