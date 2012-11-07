<?php
/* @var $this OrlController */
/* @var $model Orl */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}

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

</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orl-form',
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
			               		$("#Orl_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
			                		
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
		
		<div class="row">
			<?php echo $form->labelEx($model,'diagnostico'); ?>
			<?php echo $form->textArea($model,'diagnostico',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'diagnostico'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'qp'); ?>
			<?php echo $form->textArea($model,'qp',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'qp'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'hpma'); ?>
			<?php echo $form->textArea($model,'hpma',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'hpma'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'interrogatorio_complementar'); ?>
			<?php echo $form->textArea($model,'interrogatorio_complementar',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'interrogatorio_complementar'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'antecedentes_pessoais'); ?>
			<?php echo $form->textArea($model,'antecedentes_pessoais',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'antecedentes_pessoais'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'exame_orl'); ?>
			<?php echo $form->textArea($model,'exame_orl',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'exame_orl'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'hd'); ?>
			<?php echo $form->textArea($model,'hd',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'hd'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'exames_complementares_hd'); ?>
			<?php echo $form->textArea($model,'exames_complementares_hd',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'exames_complementares_hd'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'conduta'); ?>
			<?php echo $form->textArea($model,'conduta',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'conduta'); ?>
		</div>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->