<?php
/* @var $this DiagnosticoController */
/* @var $model Diagnostico */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;} 
.larguraDefault{
	width: 550px;
}
#infoPaciente{
	float:right;
	display:none;
	position:relative;
	text-align:right;
	border:solid thin grey;
	background-color:#efefef;
	padding: 5px 10px 5px 10px;
	width:320px;
}
#infoPaciente .lastUpdate{
	font-style: italic;
	text-align: center;
	margin-bottom: 10px;
	margin-top: -15px;
}

.alinhamento{float:left;margin-right: 12px;}
.coluna{
	width: 550px;
	display: inline-block;
}
table tr td{text-align:center}
table tr td.first,table tr th.first{text-align:right}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diagnostico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>
	<div id="infoPaciente">
		<h3 style="text-align:center">Identificação do Paciente</h3>
	    <div class="lastUpdate"></div>
		<table class="detail-view" id="yw0" >
			<tr class="even"><th>Nome</th><td class='nome'></td></tr>
			<tr class="odd"><th>HC</th><td class='hc'></td></tr>
			<tr class="even"><th>Nome da Mãe</th><td class='mae'></td></tr>
			<tr class="odd"><th>HC da Mãe</th><td class='hc_mae'></td></tr>
			<tr class="even"><th>Data de Nascimento</th><td class='nascimento'></td></tr>
			<tr class="odd"><th>Sexo</th><td class='sexo'></td></tr>
			<tr class="even"><th>Endereço</th><td class='endereco'></td></tr>
			<tr class="odd"><th>Cidade</th><td class='cidade'></td></tr>
			<tr class="even"><th>Telefone Fixo</th><td class='tel_fixo'></td></tr>
			<tr class="odd"><th>Telefone Móvel</th><td class='tel_movel'></td></tr>
			<tr class="even"><th>Telefone Trabalho</th><td class='tel_trab'></td></tr>
		</table>
		<div class='aviso'></div>
		<div class='link'></div>
	</div>
	
<div class="coluna">
	<div class="row">
		<?php echo $form->labelEx($model,'paciente_r'); ?>
		<?php /* echo $form->dropDownList($model,'paciente_r', CHtml::listData(Paciente::model()->findAll(), 'id', 'nome'), array('empty'=>'Selecione um Paciente')). '<br/><span class="help">Ex: João da Silva</span>'; */?>
		<?php 
    		if($model->isNewRecord){
				$this->widget('ext.devAutoComplete', array(
		            'model'=>$model,
		            'attribute'=>'paciente_r',
					'name'=>'paciente_autocomplete',
					'value'=>$model->isNewRecord ? '': $model->pacienteR->nome,
		            'sourceUrl'=> $this->createUrl('paciente/getPacientesAC'),
		                // additional javascript options for the autocomplete plugin
		            'options'=>array(
		                'minLength'=>'1',
	            		'select'=>'js:function(event, ui) {
		               		$("#Diagnostico_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		                		
		               		$("#infoPaciente").css("display","inline-block");
		               		$("#infoPaciente th").css("text-align","right");
		               		$("#infoPaciente .lastUpdate").html("última atualização em "+ui.item.last_update);
		               		$("#infoPaciente .nome").html(ui.item.nome);
		               		$("#infoPaciente .hc").html(ui.item.hc);
		               		$("#infoPaciente .mae").html(ui.item.nome_mae);
		               		$("#infoPaciente .hc_mae").html(ui.item.hc_mae);
		               		$("#infoPaciente .nascimento").html(ui.item.data_nascimento);
		               		$("#infoPaciente .sexo").html(ui.item.sexo);
		               		$("#infoPaciente .endereco").html(ui.item.endereco);
		               		$("#infoPaciente .cidade").html(ui.item.cidade);
		               		$("#infoPaciente .tel_fixo").html(ui.item.telefone_fixo);
		               		$("#infoPaciente .tel_movel").html(ui.item.telefone_movel);
		               		$("#infoPaciente .tel_trab").html(ui.item.telefone_trabalho);
		                		
		               		if(ui.item.servico_social_id_id != null){
				                $("#infoPaciente .aviso").html("<div style=\"color:red;\">Este paciente já possui dados de serviço social cadastrados!</div>");
			    	        }else{
			                	$("#infoPaciente .aviso").empty();
			                    $("#infoPaciente .link").empty();
			    			}
		                		
		                	$("#infoPaciente .link").html(\'<a href="'.Yii::app()->createAbsoluteUrl('paciente/update').'&id=\'+ui.item.id+\'">Atualizar dados cadastrais</a>\');
		               	}'
		            ),
		        	'htmlOptions'=>array('size'=>70),
		    	));
    		}else{
		    	echo $form->textField($model->pacienteR,'nome',array('size'=>30,'disabled'=>'disabled'));
			}
       	?>
		<?php echo $form->error($model,'paciente_r'); ?>
	</div>
	<br/>
	<h3>I - Anamnese</h3>
	<hr/>
	<div class="row">
		<?php echo $form->labelEx($model,'consanguinidade'); ?>
		<?php echo $form->radioButtonList($model,'consanguinidade',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perda_auditiva_familia'); ?>
		<?php echo $form->radioButtonList($model,'perda_auditiva_familia',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preocupacao_familiar'); ?>
		<?php echo $form->radioButtonList($model,'preocupacao_familiar',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alimentacao_neonato'); ?>
		<?php echo $form->radioButtonList($model,'alimentacao_neonato',array('natural'=>'Natural','mamadeira'=>'Mamadeira'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posicao_alimentacao'); ?>
		<?php echo $form->radioButtonList($model,'posicao_alimentacao',array('deitado'=>'Deitado','sentado'=>'Sentado'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refluxo'); ?>
		<?php echo $form->radioButtonList($model,'refluxo',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dor_ouvido'); ?>
		<?php echo $form->radioButtonList($model,'dor_ouvido',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barulho_alto_acorda'); ?>
		<?php echo $form->radioButtonList($model,'barulho_alto_acorda',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chora_ruido_alto'); ?>
		<?php echo $form->radioButtonList($model,'chora_ruido_alto',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'procurar_som_fora_visao'); ?>
		<?php echo $form->radioButtonList($model,'procurar_som_fora_visao',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'atento_voz_materna'); ?>
		<?php echo $form->radioButtonList($model,'atento_voz_materna',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reinternado'); ?>
		<?php echo $form->radioButtonList($model,'reinternado',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'susto_ruido_alto'); ?>
		<?php echo $form->radioButtonList($model,'susto_ruido_alto',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	
	<br/>
	<h3>II - Potencial Evocado Auditivo de Tronco Encefálico</h3>
	<hr/>
	<div class="row">
		<?php echo $form->labelEx($model,'pesquisa_integridade'); ?>
		<?php echo $form->radioButtonList($model,'pesquisa_integridade',array('80'=>'80dB','100'=>'100dB'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<table style="width:400px;">
			<tr>
				<th>Latência Absoluta</th>
				<th>Orelha Direita</th>
				<th>Orelha Esquerda</th>
			</tr>
			<tr>
				<td>Onda I</td>
				<td><?php echo $form->textField($model,'od_onda_1',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_onda_1',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>Onda III</td>
				<td><?php echo $form->textField($model,'od_onda_3',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_onda_3',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>Onda V</td>
				<td><?php echo $form->textField($model,'od_onda_5',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_onda_5',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
		<table style="width:400px;">
			<tr>
				<th>Interlatência</th>
				<th>Orelha Direita</th>
				<th>Orelha Esquerda</th>
			</tr>
			<tr>
				<td>I-III</td>
				<td><?php echo $form->textField($model,'od_interlatencia_1_3',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_interlatencia_1_3',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>III-V</td>
				<td><?php echo $form->textField($model,'od_interlatencia_3_5',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_interlatencia_3_5',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>I-V</td>
				<td><?php echo $form->textField($model,'od_interlatencia_1_5',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_interlatencia_1_5',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
		Pesquisa do limiar eletrofisiológico - latência absoluta onda V
		<table style="width:200px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>100dB</td>
				<td><?php echo $form->textField($model,'od_100',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_100',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>90dB</td>
				<td><?php echo $form->textField($model,'od_90',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_90',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>80dB</td>
				<td><?php echo $form->textField($model,'od_80',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_80',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>70dB</td>
				<td><?php echo $form->textField($model,'od_70',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_70',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>60dB</td>
				<td><?php echo $form->textField($model,'od_60',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_60',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>50dB</td>
				<td><?php echo $form->textField($model,'od_50',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_50',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>40dB</td>
				<td><?php echo $form->textField($model,'od_40',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_40',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>30dB</td>
				<td><?php echo $form->textField($model,'od_30',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_30',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>20dB</td>
				<td><?php echo $form->textField($model,'od_20',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_20',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusao_limiar_eletrofisiologico'); ?>
		<?php echo $form->textArea($model,'conclusao_limiar_eletrofisiologico',array('rows'=>6, 'cols'=>50)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'conclusao_limiar_eletrofisiologico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latencia'); ?>
		<?php echo $form->radioButtonList($model,'latencia',array('normal'=>'Normal','alterada'=>'Alterada'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'interpico'); ?>
		<?php echo $form->radioButtonList($model,'interpico',array('normal'=>'Normal','alterada'=>'Alterada'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limiar_eletrofisiologico'); ?>
		<?php echo $form->textField($model,'limiar_eletrofisiologico',array('size'=>10,'maxlength'=>250)). 'dB'; ?>
		<?php echo $form->error($model,'limiar_eletrofisiologico'); ?>
	</div>
	<br/>
	<h3>III - Emissões Otoacústicas</h3>
	<hr/>
	<div class="row">
		Transiente - SNR (dB)
		<table style="width:200px;">
			<tr>
				<th>Freq (KHz)</th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>1.0</td>
				<td><?php echo $form->textField($model,'od_1',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_1',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>1.4</td>
				<td><?php echo $form->textField($model,'od_1_4',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_1_4',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>2.0</td>
				<td><?php echo $form->textField($model,'od_2_0',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_2_0',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>2.8</td>
				<td><?php echo $form->textField($model,'od_2_8',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_2_8',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>4.0</td>
				<td><?php echo $form->textField($model,'od_4',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_4',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>


	<div class="row">
		<table style="width:200px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Repro</td>
				<td><?php echo $form->textField($model,'od_repro',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_repro',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>Estab</td>
				<td><?php echo $form->textField($model,'od_estab',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_estab',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusao_transiente'); ?>
		<?php echo $form->radioButtonList($model,'conclusao_transiente',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		Produto de distorção
		<table style="width:200px;">
			<tr>
				<th>Freq (KHz)</th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>1.0</td>
				<td><?php echo $form->textField($model,'od_distorcao_1',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_1',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>1.4</td>
				<td><?php echo $form->textField($model,'od_distorcao_1_4',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_1_4',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>2.0</td>
				<td><?php echo $form->textField($model,'od_distorcao_2_0',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_2_0',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>2.8</td>
				<td><?php echo $form->textField($model,'od_distorcao_2_8',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_2_8',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>4.0</td>
				<td><?php echo $form->textField($model,'od_distorcao_4',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_4',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>
	<div class="row">
		<table style="width:200px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Repro</td>
				<td><?php echo $form->textField($model,'od_distorcao_repro',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_repro',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>Estab</td>
				<td><?php echo $form->textField($model,'od_distorcao_estab',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_distorcao_estab',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
		Conclusão:
		<div class="row">
			<?php echo $form->labelEx($model,'distorcao_conclusao_1'); ?>
			<?php echo $form->radioButtonList($model,'distorcao_conclusao_1',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model,'distorcao_conclusao_1_4'); ?>
			<?php echo $form->radioButtonList($model,'distorcao_conclusao_1_4',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model,'distorcao_conclusao_2_0'); ?>
			<?php echo $form->radioButtonList($model,'distorcao_conclusao_2_0',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model,'distorcao_conclusao_2_8'); ?>
			<?php echo $form->radioButtonList($model,'distorcao_conclusao_2_8',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model,'distorcao_conclusao_4'); ?>
			<?php echo $form->radioButtonList($model,'distorcao_conclusao_4',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		</div>
	</div>
	<br/>
	<h3>IV - Imitanciometria</h3>
	<hr/>
	<div class="row">
		Curva timpanométrica
		<table style="width:350px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>Pressão (daPa)</td>
				<td><?php echo $form->textField($model,'od_pressao',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_pressao',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>Complacência (ml)</td>
				<td><?php echo $form->textField($model,'od_complacencia',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_complacencia',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>Tipo de Curva</td>
				<td><?php echo $form->textField($model,'od_tipo_curva',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_tipo_curva',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			
		</table>
	</div>

	<div class="row">
		Reflexo Acústico Ipsilateral
		<table style="width:250px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>500 Hz</td>
				<td><?php echo $form->textField($model,'od_reflexo_500',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_reflexo_500',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>1000 Hz</td>
				<td><?php echo $form->textField($model,'od_reflexo_1000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_reflexo_1000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>2000 Hz</td>
				<td><?php echo $form->textField($model,'od_reflexo_2000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_reflexo_2000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>4000 Hz</td>
				<td><?php echo $form->textField($model,'od_reflexo_4000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_reflexo_4000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>

	<br/>
	<h3>V - Nível Mínimo de Respota (Audiometria Pediátrica) - NMR</h3>
	<hr/>

	<div class="row">
		<table style="width:250px;">
			<tr>
				<th></th>
				<th>OD</th>
				<th>OE</th>
			</tr>
			<tr>
				<td>500 Hz</td>
				<td><?php echo $form->textField($model,'od_nmr_500',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_nmr_500',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>1000 Hz</td>
				<td><?php echo $form->textField($model,'od_nmr_1000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_nmr_1000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>2000 Hz</td>
				<td><?php echo $form->textField($model,'od_nmr_2000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_nmr_2000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>3000 Hz</td>
				<td><?php echo $form->textField($model,'od_nmr_3000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_nmr_3000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
			<tr>
				<td>4000 Hz</td>
				<td><?php echo $form->textField($model,'od_nmr_4000',array('size'=>7,'maxlength'=>250)); ?></td>
				<td><?php echo $form->textField($model,'oe_nmr_4000',array('size'=>7,'maxlength'=>250)); ?></td>
			</tr>
		</table>
	</div>
	<br/>
	<h3>VI - Avaliação Comportamental</h3>
	<hr/>
	<div class="row">
		<table style="width:550px;">
			<tr>
				<th>Instrumento</th>
				<th>Lateral</th>
				<th>Para cima</th>
				<th>Para baixo</th>
			</tr>
			<tr>
				<td>Guizo</td>
				<td><?php echo $form->radioButtonList($model,'guizo_lateral',array('indireta'=>'Indireta','direta'=>'Direta'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
				<td><?php echo $form->radioButtonList($model,'guizo__cima',array('indireta'=>'Indireta','direta'=>'Direta'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
				<td><?php echo $form->radioButtonList($model,'guizo_baixo',array('indireta'=>'Indireta','direta'=>'Direta'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
			</tr>
			<tr>
				<td>Sino</td>
				<td><?php echo $form->radioButtonList($model,'sino_lateral',array('indireta'=>'Indireta','direta'=>'Direta'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
				<td><?php echo $form->radioButtonList($model,'sino_cima',array('indireta'=>'Indireta','direta'=>'Direta'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
				<td><?php echo $form->radioButtonList($model,'sino_baixo',array('indireta'=>'Indireta','direta'=>'Direta'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reflexo_cocleo_palpebral'); ?>
		<?php echo $form->radioButtonList($model,'reflexo_cocleo_palpebral',array('presente'=>'Presente','ausente'=>'Ausente'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conclusao_reflexo'); ?>
		<?php echo $form->textArea($model,'conclusao_reflexo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conclusao_reflexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conduta_reflexo'); ?>
		<?php echo $form->textArea($model,'conduta_reflexo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conduta_reflexo'); ?>
	</div>

</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->