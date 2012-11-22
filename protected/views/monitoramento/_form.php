<?php
/* @var $this MonitoramentoController */
/* @var $model Monitoramento */
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
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monitoramento-form',
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
			               		$("#Monitoramento_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
			                		
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
			            'htmlOptions'=>array('size'=>78),
			        ));
	    		}else{
			    	echo $form->textField($model->pacienteR,'nome',array('size'=>45,'disabled'=>'disabled'));
			    }
	       	 ?>
			<?php echo $form->error($model,'paciente_r'); ?>
		</div>
	<br/>
	<div class="row">
		<h3>I - Observação comportamental a estímulos sonoros:</h3>
		<table class="larguraDefault" style="text-align:center">
			<tr>
				<th>Estímulos</th>
				<th>O</th>
				<th>RPC</th>
				<th>S</th>
				<th>A </th>
				<th>PF </th>
				<th>L</th>
				<th>L ↓</th>
				<th>L ↑</th>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'guizo'); ?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'o','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'rcp','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'s','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'a','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'pf','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'l','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'l_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'guizo', array('value'=>'l_up','uncheckValue'=>null))?></td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'sino'); ?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'o','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'rcp','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'s','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'a','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'pf','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'l','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'l_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'sino', array('value'=>'l_up','uncheckValue'=>null))?></td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'agogo'); ?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'o','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'rcp','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'s','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'a','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'pf','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'l','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'l_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'agogo', array('value'=>'l_up','uncheckValue'=>null))?></td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($model,'reacao_voz'); ?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'o','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'rcp','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'s','uncheckValue'=>null));?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'a','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'pf','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'l','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'l_down','uncheckValue'=>null))?></td>
				<td><?php echo $form->radioButton($model, 'reacao_voz', array('value'=>'l_up','uncheckValue'=>null))?></td>
			</tr>
		</table>
	</div>
	<br/>
	<div class="row">
		<h3>II - Audiometria com reforço visual:</h3>
		<table class="larguraDefault">
			<tr>
				<th>Orelha</th>
				<th>500 Hz</th>
				<th>1000 Hz</th>
				<th>2000 Hz</th>
				<th>4000 Hz</th>
			</tr>
			<tr>
				<td>OD</td>
				<td><?php echo $form->textField($model,'od_500',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_500'); ?></td>
				<td><?php echo $form->textField($model,'od_1000',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_1000'); ?></td>
				<td><?php echo $form->textField($model,'od_2000',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_2000'); ?></td>
				<td><?php echo $form->textField($model,'od_4000',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_4000'); ?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td><?php echo $form->textField($model,'oe_500',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_500'); ?></td>
				<td><?php echo $form->textField($model,'oe_1000',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_1000'); ?></td>
				<td><?php echo $form->textField($model,'oe_2000',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_2000'); ?></td>
				<td><?php echo $form->textField($model,'oe_4000',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_4000'); ?></td>
			</tr>
		</table>
	</div>
	<br/>
	<div class="row">
		<h3>III - Avaliação das condições da Orelha Média</h3>
		Curva Timpanométrica:
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
				<td><?php echo $form->textField($model,'od_complacencia',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_complacencia'); ?></td>
				<td><?php echo $form->textField($model,'od_pressao',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_pressao'); ?></td>
				<td><?php echo $form->textField($model,'od_volume',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_volume'); ?></td>
				<td><?php echo $form->textField($model,'od_gradiente',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_gradiente'); ?></td>
				<td><?php echo $form->textField($model,'od_curva_tipo',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'od_curva_tipo'); ?></td>
				
			</tr>
			<tr>
				<td>OE</td>
				<td><?php echo $form->textField($model,'oe_complacencia',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_complacencia'); ?></td>
				<td><?php echo $form->textField($model,'oe_pressao',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_pressao'); ?></td>
				<td><?php echo $form->textField($model,'oe_volume',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_volume'); ?></td>
				<td><?php echo $form->textField($model,'oe_gradiente',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_gradiente'); ?></td>
				<td><?php echo $form->textField($model,'oe_curva_tipo',array('size'=>10,'maxlength'=>250)); ?><?php echo $form->error($model,'oe_curva_tipo'); ?></td>
			</tr>
		</table>
	</div>

	<div class="row">
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
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'da_tchau'); ?></td>
							<td><?php echo $form->radioButtonList($model,'da_tchau',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'joga_beijo'); ?></td>
							<td><?php echo $form->radioButtonList($model,'joga_beijo',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'bate_palma'); ?></td>
							<td><?php echo $form->radioButtonList($model,'bate_palma',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td style="width:100px; text-align:right;"><?php echo $form->labelEx($model,'cade_chupeta'); ?></td>
							<td><?php echo $form->radioButtonList($model,'cade_chupeta',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'cade_mamae'); ?></td>
							<td><?php echo $form->radioButtonList($model,'cade_mamae',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'cade_sapato'); ?></td>
							<td><?php echo $form->radioButtonList($model,'cade_sapato',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
					</table>
				</td>
				<td>
					<table>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'cade_cabelo'); ?></td>
							<td><?php echo $form->radioButtonList($model,'cade_cabelo',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'cade_mao'); ?></td>
							<td><?php echo $form->radioButtonList($model,'cade_mao',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
						<tr>
							<td style="width:80px; text-align:right;"><?php echo $form->labelEx($model,'cade_pe'); ?></td>
							<td><?php echo $form->radioButtonList($model,'cade_pe',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<?php echo $form->labelEx($model,'observacao'); ?>
		<?php echo $form->textArea($model,'observacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacao'); ?>
	</div>
	<div class="row">
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
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desenvolvimento_motor'); ?>
		<?php echo $form->textArea($model,'desenvolvimento_motor',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'desenvolvimento_motor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desenvolvimento_auditivo'); ?>
		<?php echo $form->textArea($model,'desenvolvimento_auditivo',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'desenvolvimento_auditivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desenvolvimento_linguagem'); ?>
		<?php echo $form->textArea($model,'desenvolvimento_linguagem',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'desenvolvimento_linguagem'); ?>
	</div>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->