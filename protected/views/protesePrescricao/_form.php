<?php
/* @var $this ProtesePrescricaoController */
/* @var $model ProtesePrescricao */
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

.alinhamento{float:left;margin-right: 12px;}
.coluna{
	width: 550px;
	display: inline-block;
}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'protese-prescricao-form',
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
		                		$("#ProtesePrescricao_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		                		
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
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->radioButton($model, 'tipo', array('value'=>'od','uncheckValue'=>null))." OD";?>
		<?php echo $form->radioButton($model, 'tipo', array('value'=>'oe','uncheckValue'=>null))." OE";?>
		<?php echo $form->radioButton($model, 'tipo', array('value'=>'binaural','uncheckValue'=>null))." Binaural";?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificacao_acustica'); ?>
		<?php echo $form->textArea($model,'modificacao_acustica',array('rows'=>6, 'cols'=>50)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'modificacao_acustica'); ?>
	</div>
	<br/>
		<div class="larguraDefault"><hr/></div>
	<div class="row">
		Prótese Selecionada:
		<table>
			<tr>
				<th>Orelha</th>
				<th>Modelo</th>
				<th>Marca</th>
				<th>Cor</th>
			</tr>
			<tr>
				<td>OD</td>
				<td><?php echo $form->textField($model,'od_modelo',array('size'=>20,'maxlength'=>250)).$form->error($model,'od_modelo');?></td>
				<td><?php echo $form->textField($model,'od_marca',array('size'=>20,'maxlength'=>250)).$form->error($model,'od_marca');?></td>
				<td><?php echo $form->textField($model,'od_cor',array('size'=>20,'maxlength'=>250)).$form->error($model,'od_cor');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td><?php echo $form->textField($model,'oe_modelo',array('size'=>20,'maxlength'=>250)).$form->error($model,'oe_modelo');?></td>
				<td><?php echo $form->textField($model,'oe_marca',array('size'=>20,'maxlength'=>250)).$form->error($model,'oe_marca');?></td>
				<td><?php echo $form->textField($model,'oe_cor',array('size'=>20,'maxlength'=>250)).$form->error($model,'oe_cor');?></td>
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
				<td><?php echo $form->textField($model,'od_40_250',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_250');?></td>
				<td><?php echo $form->textField($model,'od_40_500',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_500');?></td>
				<td><?php echo $form->textField($model,'od_40_1000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_1000');?></td>
				<td><?php echo $form->textField($model,'od_40_2000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_2000');?></td>
				<td><?php echo $form->textField($model,'od_40_3000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_3000');?></td>
				<td><?php echo $form->textField($model,'od_40_4000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_4000');?></td>
				<td><?php echo $form->textField($model,'od_40_6000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_6000');?></td>
				<td><?php echo $form->textField($model,'od_40_8000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_40_8000');?></td>
			</tr>
			<tr>
				<td>OD</td>
				<td>60 dB</td>
				<td><?php echo $form->textField($model,'od_60_250',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_250');?></td>
				<td><?php echo $form->textField($model,'od_60_500',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_500');?></td>
				<td><?php echo $form->textField($model,'od_60_1000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_1000');?></td>
				<td><?php echo $form->textField($model,'od_60_2000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_2000');?></td>
				<td><?php echo $form->textField($model,'od_60_3000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_3000');?></td>
				<td><?php echo $form->textField($model,'od_60_4000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_4000');?></td>
				<td><?php echo $form->textField($model,'od_60_6000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_6000');?></td>
				<td><?php echo $form->textField($model,'od_60_8000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_60_8000');?></td>
			</tr>
			<tr>
				<td>OD</td>
				<td>80 dB</td>
				<td><?php echo $form->textField($model,'od_80_250',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_250');?></td>
				<td><?php echo $form->textField($model,'od_80_500',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_500');?></td>
				<td><?php echo $form->textField($model,'od_80_1000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_1000');?></td>
				<td><?php echo $form->textField($model,'od_80_2000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_2000');?></td>
				<td><?php echo $form->textField($model,'od_80_3000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_3000');?></td>
				<td><?php echo $form->textField($model,'od_80_4000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_4000');?></td>
				<td><?php echo $form->textField($model,'od_80_6000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_6000');?></td>
				<td><?php echo $form->textField($model,'od_80_8000',array('size'=>7,'maxlength'=>250)).$form->error($model,'od_80_8000');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td>40 dB</td>
				<td><?php echo $form->textField($model,'oe_40_250',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_250');?></td>
				<td><?php echo $form->textField($model,'oe_40_500',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_500');?></td>
				<td><?php echo $form->textField($model,'oe_40_1000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_1000');?></td>
				<td><?php echo $form->textField($model,'oe_40_2000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_2000');?></td>
				<td><?php echo $form->textField($model,'oe_40_3000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_3000');?></td>
				<td><?php echo $form->textField($model,'oe_40_4000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_4000');?></td>
				<td><?php echo $form->textField($model,'oe_40_6000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_6000');?></td>
				<td><?php echo $form->textField($model,'oe_40_8000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_40_8000');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td>60 dB</td>
				<td><?php echo $form->textField($model,'oe_60_250',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_250');?></td>
				<td><?php echo $form->textField($model,'oe_60_500',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_500');?></td>
				<td><?php echo $form->textField($model,'oe_60_1000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_1000');?></td>
				<td><?php echo $form->textField($model,'oe_60_2000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_2000');?></td>
				<td><?php echo $form->textField($model,'oe_60_3000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_3000');?></td>
				<td><?php echo $form->textField($model,'oe_60_4000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_4000');?></td>
				<td><?php echo $form->textField($model,'oe_60_6000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_6000');?></td>
				<td><?php echo $form->textField($model,'oe_60_8000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_60_8000');?></td>
			</tr>
			<tr>
				<td>OE</td>
				<td>80 dB</td>
				<td><?php echo $form->textField($model,'oe_80_250',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_250');?></td>
				<td><?php echo $form->textField($model,'oe_80_500',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_500');?></td>
				<td><?php echo $form->textField($model,'oe_80_1000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_1000');?></td>
				<td><?php echo $form->textField($model,'oe_80_2000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_2000');?></td>
				<td><?php echo $form->textField($model,'oe_80_3000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_3000');?></td>
				<td><?php echo $form->textField($model,'oe_80_4000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_4000');?></td>
				<td><?php echo $form->textField($model,'oe_80_6000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_6000');?></td>
				<td><?php echo $form->textField($model,'oe_80_8000',array('size'=>7,'maxlength'=>250)).$form->error($model,'oe_80_8000');?></td>
			</tr>
		</table>
	</div>
</div>	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->