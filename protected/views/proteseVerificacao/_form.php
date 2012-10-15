<?php
/* @var $this ProteseVerificacaoController */
/* @var $model ProteseVerificacao */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;} 
.larguraDefault{
	width: 600px;
}
#infoPaciente{
	float:right;
	display:none;
	text-align:right;
	border:solid thin grey;
	background-color:#efefef;
	padding: 5px 10px 5px 10px;
	width:320px;
	z-index:100;
}
#infoPaciente .lastUpdate{
	font-style: italic;
	text-align: center;
	margin-bottom: 10px;
	margin-top: -15px;
}
.primeiraTabela{width:500px;}
.alinhamento{float:left;margin-right: 12px;}
.coluna{
	width: 550px;
	display: inline-block;
}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'protese-verificacao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div id="infoPaciente">
    	<h3 style="text-align:center">Identificação do Paciente</h3>
    	<div class="lastUpdate"></div>
		<table class="detail-view" id="yw0" >
			<tr class="even">
				<th>Nome</th><td class='nome'></td>
			</tr>
			<tr class="odd">
				<th>HC</th><td class='hc'></td></tr>
			<tr class="even">
				<th>Nome da Mãe</th><td class='mae'></td></tr>
			<tr class="odd">
				<th>HC da Mãe</th><td class='hc_mae'></td>
			</tr>
			<tr class="even">
				<th>Data de Nascimento</th><td class='nascimento'></td>
			</tr>
			<tr class="odd">
				<th>Sexo</th><td class='sexo'></td>
			</tr>
			<tr class="even">
				<th>Endereço</th><td class='endereco'></td>
			</tr>
			<tr class="odd">
				<th>Cidade</th><td class='cidade'></td>
			</tr>
			<tr class="even">
				<th>Telefone Fixo</th><td class='tel_fixo'></td>
			</tr>
			<tr class="odd">
				<th>Telefone Móvel</th><td class='tel_movel'></td>
			</tr>
			<tr class="even">
				<th>Telefone Trabalho</th><td class='tel_trab'></td>
			</tr>
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
		                		$("#ProteseVerificacao_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		                		
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
		                		
		                		$("#infoPaciente .link").html(\'<a href="'.Yii::app()->createAbsoluteUrl('paciente/update').'&id=\'+ui.item.pacienteID+\'">Atualizar dados cadastrais</a>\');
		               		}'
		                ),
		                'htmlOptions'=>array('size'=>78),
		            ));
    			}else{
		        	echo $form->textField($model->pacienteR,'nome',array('size'=>45,'disabled'=>'disabled'));
		        }
       	 	?>
		<?php echo $form->error($model,'paciente_r'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	          'attribute'=>'data',
	          'model' => $model,
	          'value'=>$model->data,
	          'language'=>'pt-BR',
	          'options'=>array(
	          	'showAnim'=>'fold',
	         	'dateFormat'=>'dd/mm/yy',
	           )
	        ));
		?>
	</div>
	<div class="row">
		Ganho de inserção método direto:
		<table class="primeiraTabela">
			<tr>
				<th>NPS</th>
				<th>dB</th>
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
				<td>40</td>
				<td><?php echo $form->textField($model,'od_40_250',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_250');?></td>
				<td><?php echo $form->textField($model,'od_40_500',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_500');?></td>
				<td><?php echo $form->textField($model,'od_40_1000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_1000');?></td>
				<td><?php echo $form->textField($model,'od_40_2000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_2000');?></td>
				<td><?php echo $form->textField($model,'od_40_3000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_3000');?></td>
				<td><?php echo $form->textField($model,'od_40_4000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_4000');?></td>
				<td><?php echo $form->textField($model,'od_40_6000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_6000');?></td>
				<td><?php echo $form->textField($model,'od_40_8000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_40_8000');?></td>
			</tr>
			<tr>
				<td>OD</td>
				<td>60</td>
				<td><?php echo $form->textField($model,'od_60_250',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_250');?></td>
				<td><?php echo $form->textField($model,'od_60_500',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_500');?></td>
				<td><?php echo $form->textField($model,'od_60_1000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_1000');?></td>
				<td><?php echo $form->textField($model,'od_60_2000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_2000');?></td>
				<td><?php echo $form->textField($model,'od_60_3000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_3000');?></td>
				<td><?php echo $form->textField($model,'od_60_4000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_4000');?></td>
				<td><?php echo $form->textField($model,'od_60_6000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_6000');?></td>
				<td><?php echo $form->textField($model,'od_60_8000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_60_8000');?></td>
			</tr>
			<tr>
				<td>OD</td>
				<td>80</td>
				<td><?php echo $form->textField($model,'od_80_250',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_250');?></td>
				<td><?php echo $form->textField($model,'od_80_500',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_500');?></td>
				<td><?php echo $form->textField($model,'od_80_1000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_1000');?></td>
				<td><?php echo $form->textField($model,'od_80_2000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_2000');?></td>
				<td><?php echo $form->textField($model,'od_80_3000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_3000');?></td>
				<td><?php echo $form->textField($model,'od_80_4000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_4000');?></td>
				<td><?php echo $form->textField($model,'od_80_6000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_6000');?></td>
				<td><?php echo $form->textField($model,'od_80_8000',array('size'=>1,'maxlength'=>250)).$form->error($model,'od_80_8000');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td>40</td>
				<td><?php echo $form->textField($model,'oe_40_250',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_250');?></td>
				<td><?php echo $form->textField($model,'oe_40_500',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_500');?></td>
				<td><?php echo $form->textField($model,'oe_40_1000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_1000');?></td>
				<td><?php echo $form->textField($model,'oe_40_2000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_2000');?></td>
				<td><?php echo $form->textField($model,'oe_40_3000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_3000');?></td>
				<td><?php echo $form->textField($model,'oe_40_4000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_4000');?></td>
				<td><?php echo $form->textField($model,'oe_40_6000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_6000');?></td>
				<td><?php echo $form->textField($model,'oe_40_8000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_40_8000');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td>60</td>
				<td><?php echo $form->textField($model,'oe_60_250',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_250');?></td>
				<td><?php echo $form->textField($model,'oe_60_500',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_500');?></td>
				<td><?php echo $form->textField($model,'oe_60_1000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_1000');?></td>
				<td><?php echo $form->textField($model,'oe_60_2000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_2000');?></td>
				<td><?php echo $form->textField($model,'oe_60_3000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_3000');?></td>
				<td><?php echo $form->textField($model,'oe_60_4000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_4000');?></td>
				<td><?php echo $form->textField($model,'oe_60_6000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_6000');?></td>
				<td><?php echo $form->textField($model,'oe_60_8000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_60_8000');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td>80</td>
				<td><?php echo $form->textField($model,'oe_80_250',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_250');?></td>
				<td><?php echo $form->textField($model,'oe_80_500',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_500');?></td>
				<td><?php echo $form->textField($model,'oe_80_1000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_1000');?></td>
				<td><?php echo $form->textField($model,'oe_80_2000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_2000');?></td>
				<td><?php echo $form->textField($model,'oe_80_3000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_3000');?></td>
				<td><?php echo $form->textField($model,'oe_80_4000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_4000');?></td>
				<td><?php echo $form->textField($model,'oe_80_6000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_6000');?></td>
				<td><?php echo $form->textField($model,'oe_80_8000',array('size'=>1,'maxlength'=>250)).$form->error($model,'oe_80_8000');?></td>
			</tr>
		</table>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nmr'); ?>
		<?php echo $form->radioButton($model, 'nmr', array('value'=>'audiometro_pediatrico','uncheckValue'=>null))." Audiometro Pediátrico";?>
		<?php echo $form->radioButton($model, 'nmr', array('value'=>'campo_livre','uncheckValue'=>null))." Campo Livre";?>
		<?php echo $form->error($model,'nmr'); ?>
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
				<td><?php echo $form->textField($model,'nmr_500_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_500_od'); ?></td>
				<td><?php echo $form->textField($model,'nmr_1k_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_1k_od'); ?></td>
				<td><?php echo $form->textField($model,'nmr_2k_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_2k_od'); ?></td>
				<td><?php echo $form->textField($model,'nmr_4k_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_4k_od'); ?></td>
				<td><?php echo $form->textField($model,'nmr_intensiade_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_intensiade_od'); ?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td><?php echo $form->textField($model,'nmr_500_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_500_oe'); ?></td>
				<td><?php echo $form->textField($model,'nmr_1k_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_1k_oe'); ?></td>
				<td><?php echo $form->textField($model,'nmr_2k_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_2k_oe'); ?></td>
				<td><?php echo $form->textField($model,'nmr_4k_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_4k_oe'); ?></td>
				<td><?php echo $form->textField($model,'nmr_intensiade_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_intensiade_oe'); ?></td>
			</tr>
		</table>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'reacao_sons'); ?>
		<?php echo $form->radioButton($model, 'reacao_sons', array('value'=>'viva_voz','uncheckValue'=>null))." Viva Voz";?>
		<?php echo $form->radioButton($model, 'reacao_sons', array('value'=>'voz_amplificada','uncheckValue'=>null))." Voz Amplificada à";?>
		<?php echo $form->textField($model,'voz_amplificada',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'reacao_sons'); ?>
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
				<td><?php echo $form->textField($model,'sons_ling_s',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'sons_ling_s'); ?></td>
				<td><?php echo $form->textField($model,'sons_ling_ch',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'sons_ling_ch'); ?></td>
				<td><?php echo $form->textField($model,'sons_ling_a',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'sons_ling_a'); ?></td>
				<td><?php echo $form->textField($model,'sons_ling_i',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'sons_ling_i'); ?></td>
				<td><?php echo $form->textField($model,'sons_ling_u',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'sons_ling_u'); ?></td>
				<td><?php echo $form->textField($model,'sons_ling_m',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'sons_ling_m'); ?></td>
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
				<td><?php echo $form->textField($model,'lrf_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'lrf_od'); ?></td>
				<td><?php echo $form->textField($model,'ldv_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'ldv_od'); ?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td><?php echo $form->textField($model,'lrf_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'lrf_oe'); ?></td>
				<td><?php echo $form->textField($model,'ldv_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'ldv_oe'); ?></td>
			</tr>
		</table>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		Observação do comportamento auditivo a sons não calibrados:
		<table style="width:700px; text-align:center;">
			<tr>
				<th>Estímulos</th>
				<th>Não reação</th>
				<th>Atenção ao Som</th>
				<th>ROS ou LL*</th>
				<th>Local </th>
				<th>Local </th>
				<th>R.C.P</th>
				<th>Startle/habituação</th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'guizo_1'); ?></td>
				<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'guizo_2'); ?></td>
				<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'reco_reco'); ?></td>
				<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'sino'); ?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'sino', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'ganza'); ?></td>
				<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'ganza', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'black_black'); ?></td>
				<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'black_black', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'agogo_pequeno'); ?></td>
				<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'agogo_grande'); ?></td>
				<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'prato'); ?></td>
				<td><?php echo $form->radioButton($model, 'prato', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'prato', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'prato', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'prato', array('value'=>'local_up','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'prato', array('value'=>'local_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'prato', array('value'=>'rcp','uncheckValue'=>null))?></td>
				<th><?php echo $form->radioButton($model, 'prato', array('value'=>'startle','uncheckValue'=>null))?></th>
			</tr>
		</table>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latencia_resposta'); ?>
		<?php echo $form->radioButton($model, 'latencia_resposta', array('value'=>'imediata','uncheckValue'=>null)).' Imediata'; ?>
		<?php echo $form->radioButton($model, 'latencia_resposta', array('value'=>'lenta','uncheckValue'=>null)).' Lenta'; ?>
		<?php echo $form->error($model,'latencia_resposta'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'grau_movimentacao_cabeca'); ?>
		<?php echo $form->radioButton($model, 'grau_movimentacao_cabeca', array('value'=>'90','uncheckValue'=>null)).' 90º'; ?>
		<?php echo $form->radioButton($model, 'grau_movimentacao_cabeca', array('value'=>'menor_90','uncheckValue'=>null)).' <90º'; ?>
		<?php echo $form->error($model,'grau_movimentacao_cabeca'); ?>
	</div>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
		ou
		<?php 
			if($model->isNewRecord ){
				echo CHtml::submitButton('Inserir e Ir para Validação',array('submit'=>Yii::app()->controller->createUrl('proteseVerificação/createProximoForm')));
			}
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->