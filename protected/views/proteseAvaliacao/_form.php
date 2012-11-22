<?php
/* @var $this ProteseAvaliacaoController */
/* @var $model ProteseAvaliacao */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}
.larguraDefault{
	width: 550px;
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
	'id'=>'protese-avaliacao-form',
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
      <a style="position:absolute; bottom:20px; right: 20px;color:#C00;" href="javascript:$('#infoPaciente').fadeOut('slow');">Fechar</a>

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
		                		$("#ProteseAnexo_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		                		
		                		$("#infoPaciente").fadeIn("slow");
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
						<td><?php echo $form->textField($model,'nna_clique_od',array('size'=>20,'maxlength'=>250));?><?php echo $form->error($model,'nna_clique_od'); ?></td>
						<td><?php echo $form->textField($model,'nna_cliquer_oe',array('size'=>20,'maxlength'=>250));?><?php echo $form->error($model,'nna_cliquer_oe'); ?></td>
					</tr>
					<tr>
						<td>500Hz</td>
						<td><?php echo $form->textField($model,'nna_500_od',array('size'=>20,'maxlength'=>250));?><?php echo $form->error($model,'nna_500_od'); ?></td>
						<td><?php echo $form->textField($model,'nna_500_oe',array('size'=>20,'maxlength'=>250));?><?php echo $form->error($model,'nna_500_oe'); ?></td>
					</tr>
					<tr>
						<td>1000Hz</td>
						<td><?php echo $form->textField($model,'nna_1000_od',array('size'=>20,'maxlength'=>250));?><?php echo $form->error($model,'nna_1000_od'); ?></td>
						<td><?php echo $form->textField($model,'nna_1000_oe',array('size'=>20,'maxlength'=>250));?><?php echo $form->error($model,'nna_1000_oe'); ?></td>
					</tr>
				</table>
			</div>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'imitanciometria'); ?>
			<?php echo $form->textArea($model,'imitanciometria',array('rows'=>6, 'cols'=>60)); ?>
			<?php echo $form->error($model,'imitanciometria'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'otoscopia'); ?>
			<?php echo $form->textArea($model,'otoscopia',array('rows'=>6, 'cols'=>60)); ?>
			<?php echo $form->error($model,'otoscopia'); ?>
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
					<td><?php echo $form->textField($model,'pressao_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'pressao_od'); ?></td>
					<td><?php echo $form->textField($model,'complacencia_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'complacencia_od'); ?></td>
					<td><?php echo $form->textField($model,'tipo_curva_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'tipo_curva_od'); ?></td>
				</tr>
				<tr>
					<td>OE</td>
					<td><?php echo $form->textField($model,'pressao_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'pressao_oe'); ?></td>
					<td><?php echo $form->textField($model,'complacencia_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'complacencia_oe'); ?></td>
					<td><?php echo $form->textField($model,'tipo_curva_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'tipo_curva_oe'); ?></td>
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
					<td><?php echo $form->textField($model,'reipsi_500_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_500_od'); ?></td>
					<td><?php echo $form->textField($model,'reipsi_1k_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_1k_od'); ?></td>
					<td><?php echo $form->textField($model,'reipsi_2k_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_2k_od'); ?></td>
					<td><?php echo $form->textField($model,'reipsi_4k_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_4k_od'); ?></td>
				</tr>
				<tr>
					<td>OE</td>
					<td><?php echo $form->textField($model,'reipsi_500_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_500_oe'); ?></td>
					<td><?php echo $form->textField($model,'reipsi_1k_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_1k_oe'); ?></td>
					<td><?php echo $form->textField($model,'reipsi_2k_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_2k_oe'); ?></td>
					<td><?php echo $form->textField($model,'reipsi_4k_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'reipsi_4k_oe'); ?></td>
				</tr>
			</table>
		</p>
		<br/>
		<div class="larguraDefault"><hr/></div>
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
					<td><?php echo $form->textField($model,'nmr_500_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_500_od'); ?></td>
					<td><?php echo $form->textField($model,'nmr_1k_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_1k_od'); ?></td>
					<td><?php echo $form->textField($model,'nmr_2k_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_2k_od'); ?></td>
					<td><?php echo $form->textField($model,'nmr_4k_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_4k_od'); ?></td>
					<td><?php echo $form->textField($model,'nmr_intensiade_od',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_intensiade_od'); ?></td>
				</tr>
				<tr>
					<td>OE</td>
					<td><?php echo $form->textField($model,'nmr_500_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_500_oe'); ?></td>
					<td><?php echo $form->textField($model,'nmr_1k_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_1k_oe'); ?></td>
					<td><?php echo $form->textField($model,'nmr_2k_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_2k_oe'); ?></td>
					<td><?php echo $form->textField($model,'nmr_4k_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_4k_oe'); ?></td>
					<td><?php echo $form->textField($model,'nmr_intensiade_oe',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'nmr_intensiade_oe'); ?></td>
				</tr>
			</table>
		</div>
		<br/>
		<div class="larguraDefault"><hr/></div>
		<div class="row">
      RECD (real ear coupler difference)
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
					<td><?php echo $form->textField($model,'recd_250_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_250_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_500_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_500_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_1000_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_1000_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_2000_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_2000_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_3000_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_3000_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_4000_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_4000_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_6000_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_6000_od'); ?></td>
					<td><?php echo $form->textField($model,'recd_8000_od',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_8000_od'); ?></td>
				</tr>
				<tr>
					<td>OE</td>
					<td><?php echo $form->textField($model,'recd_250_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_250_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_500_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_500_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_1000_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_1000_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_2000_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_2000_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_3000_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_3000_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_4000_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_4000_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_6000_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_6000_oe'); ?></td>
					<td><?php echo $form->textField($model,'recd_8000_oe',array('size'=>5,'maxlength'=>250)); ?><?php echo $form->error($model,'recd_8000_oe'); ?></td>
				</tr>
			</table>
		</div>
		<br/>
		<div class="larguraDefault"><hr/></div>
		<div class="row">
			<?php echo $form->labelEx($model,'reacao_sons'); ?>
			<?php echo $form->radioButton($model, 'reacao_sons', array('value'=>'viva_voz','uncheckValue'=>null))." Viva Voz";?>
			<?php echo $form->radioButton($model, 'reacao_sons', array('value'=>'voz_amplificada','uncheckValue'=>null))." Voz Amplificada a";?>
			<?php echo $form->textField($model,'voz_amplificada',array('size'=>15,'maxlength'=>15))." dB"; ?>
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
		<div class="row">
			Observação do comportamento auditivo a sons não calibrados:
			<table style="width:700px; text-align:center;">
				<tr>
					<th class="first">Estímulos</th>
					<th>Não reação</th>
					<th>Atenção ao Som</th>
					<th>ROS ou LL*</th>
					<th>Local ↑</th>
					<th>Local ↓</th>
					<th>R.C.P</th>
					<th>Startle/habituação</th>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'guizo_1'); ?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'guizo_1', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'guizo_2'); ?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'guizo_2', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'reco_reco'); ?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'reco_reco', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'sino'); ?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'sino', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'ganza'); ?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'ganza', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'black_black'); ?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'black_black', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'agogo_pequeno'); ?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'agogo_pequeno', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'agogo_grande'); ?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'agogo_grande', array('value'=>'startle','uncheckValue'=>null))?></td>
				</tr>
				<tr>
					<td class="first"><?php echo $form->labelEx($model,'prato'); ?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'nao_reacao','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'atencao_som','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'ros_ll','uncheckValue'=>null));?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'local_up','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'local_down','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'rcp','uncheckValue'=>null))?></td>
					<td><?php echo $form->radioButton($model, 'prato', array('value'=>'startle','uncheckValue'=>null))?></td>
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
	
		<div class="row">
			<?php echo $form->labelEx($model,'laudo_audiologico'); ?>
			<?php echo $form->textArea($model,'laudo_audiologico',array('rows'=>6, 'cols'=>60)); ?>
			<?php echo $form->error($model,'laudo_audiologico'); ?>
		</div>
</div>
		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
			ou
			<?php 
				if($model->isNewRecord ){
					echo CHtml::submitButton('Inserir e Ir para Prescrição',array('submit'=>Yii::app()->controller->createUrl('proteseAvaliacao/createProximoForm')));
				}
			?>
		</div>
	</div>
<?php $this->endWidget(); ?>
<script type="text/javascript">
function perfilPaciente(event, ui) {
        $("#ProteseAvaliacao_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
        
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
      }
</script>
</div><!-- form -->