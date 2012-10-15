<?php
/* @var $this TriagemController */
/* @var $model Triagem */
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
     		width: 320px;
		}
		#infoPaciente .lastUpdate{
			font-style: italic;
			text-align: center;
			margin-bottom: 10px;
			margin-top: -15px;
		}
		.larguraDefault{width:500px;}
		.alinhamento{float:left;margin-right: 12px;}
		.coluna{width:550px; display:inline-block;}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'triagem-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
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
    <div class="row" style="margin-right:12px;">
		<?php echo $form->labelEx($model,'paciente_r'); ?>
		<?php 
      if($model->isNewRecord){
       		$this->widget('ext.devAutoComplete', array(
                'model'=>$model,
                'attribute'=>'paciente_r',
         		'name'=>'paciente_r',
          		'value'=>$model->isNewRecord ? '': $model->pacienteR->nome,
                'sourceUrl'=> $this->createUrl('paciente/getPacientesAC'),
                'htmlOptions'=>array('size'=>65),
          		'options'=>array(
            		'minLength'=>'1',
            		'showAnim'=>'fold',
          			
               		'select'=>'js:function(event, ui) {
          				$("#Triagem_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
          				
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
		              
			            if(ui.item.triagem_id != null){
			            	$("#infoPaciente .aviso").html("<div style=\"color:red;\">Este paciente já possui triagem cadastrada!</div>");
			            }else{
			            	$("#infoPaciente .aviso").empty();
			            	$("#infoPaciente .link").empty();
			            }
		          		$("#infoPaciente .link").html(\'<a href="'.Yii::app()->createAbsoluteUrl('paciente/update').'&id=\'+ui.item.id+\'">Atualizar dados cadastrais</a>\');
		       		}'
				),
       			
              	
           	));
            }else{
              echo $form->textField($model->pacienteR,'nome',array('size'=>60,'disabled'=>'disabled'));
            }
        ?>
		<?php echo $form->error($model,'paciente_r'); ?>
	</div><br/>
	<hr class="larguraDefault"/>
	<div class="row">
		<h5 class="alinhamento">Agendar triagem para:</h5>
		
		<?php echo CHtml::CheckBox('agenda_hoje',false, array('value'=>date("d/m/Y")))."Hoje"; ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		          'attribute'=>'data_triagem',
		          'model' => $model,
		          'value'=>$model->data_triagem,
		          'language'=>'pt-BR',
		          'options'=>array(
		          	'showAnim'=>'fold',
		         	'dateFormat'=>'dd/mm/yy',
		           )
		        ));
			?>
		<?php 
			if($model->isNewRecord)echo CHtml::submitButton('Agendar',array('submit'=>Yii::app()->controller->createUrl('triagem/agendarTriagem'))); ?>
		
	</div>
	<hr class="larguraDefault"/>
	<div class="row">
    <div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'peso'); ?>
			<?php echo $form->textField($model,'peso',array('size'=>10)). '<br/><span class="help">Ex: 200</span>'; ?>
			<?php echo $form->error($model,'peso'); ?>
		</div>
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'apgar_1'); ?>
			<?php echo $form->textField($model,'apgar_1',array('size'=>10)). '<br/><span class="help">Ex: 1</span>'; ?>
			<?php echo $form->error($model,'apgar_1'); ?>
		</div>
		<div style="float:left;  margin-right:12px;">
			<?php echo $form->labelEx($model,'apgar_5'); ?>
			<?php echo $form->textField($model,'apgar_5',array('size'=>10)). '<br/><span class="help">Ex: 2</span>'; ?>
			<?php echo $form->error($model,'apgar_5'); ?>
		</div>
		<div style="float:left;  margin-right:12px;">
			<?php echo $form->labelEx($model,'apgar_10'); ?>
			<?php echo $form->textField($model,'apgar_10',array('size'=>10)). '<br/><span class="help">Ex: 2</span>'; ?>
			<?php echo $form->error($model,'apgar_10'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'apgar_15'); ?>
			<?php echo $form->textField($model,'apgar_15',array('size'=>10)). '<br/><span class="help">Ex: 2</span>'; ?>
			<?php echo $form->error($model,'apgar_15'); ?>
		</div>
	</div><br/>
	
	
	
	<div class="row">
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'metodo_avaliacao'); ?>
			<?php echo $form->dropDownList($model, 'metodo_avaliacao',array(''=>'Selecione','capurro' => 'Capurro', 'new_ballard' => 'New Ballard','ecografia' => 'Ecografia', 'amenorreia' => 'Amenorréia')). '<br/><span class="help">Ex: Capurro</span>'; ?>
			<?php echo $form->error($model,'metodo_avaliacao'); ?>
		</div>
		<div>
			<label>Idade Gestacional</label>
			<div style="float:left; margin-right:12px;">
				<div>
					<div style="float:left; vertical-align:middle;">
						<?php echo $form->textField($model,'idade_semanas',array('size'=>3)).'<br/><span class="help">Ex: 45</span>'; ?>
					</div>
					<div style="float:left; margin-left:5px; line-height:28px;">
						<?php echo $form->labelEx($model,'idade_semanas'); ?>
					</div>
				</div>
				<div>
					<?php echo $form->error($model,'idade_semanas'); ?>
				</div>
			</div>
			<div>
				<div>
					<div style="float:left; vertical-align:middle;">
						<?php echo $form->textField($model,'idade_dias',array('size'=>3)).'<br/><span class="help">Ex: 5</span>'; ?>
					</div>
					<div style="margin-left:5px; line-height:28px;">
						<?php echo $form->labelEx($model,'idade_dias'); ?>
					</div>
				</div>
				<div>
					<?php echo $form->error($model,'idade_dias'); ?>
				</div>
			</div>
		</div>
		<!-- div>
			<?php echo $form->labelEx($model,'avaliacao_score'); ?>
			<?php echo $form->textField($model,'avaliacao_score' ,array('size'=>10)). '<br/><span class="help">Ex: 60</span>'; ?>
			<?php echo $form->error($model,'avaliacao_score'); ?>
		</div-->
	</div><br/>

	<div class="row">
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'termo'); ?>
			<?php echo $form->dropDownList($model, 'termo',array(''=>'Selecione','termo' => 'Termo', 'pre_termo' => 'Pré Termo')). '<br/><span class="help">Ex: Termo</span>'; ?>
			<?php echo $form->error($model,'termo'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'crescimento'); ?>
			<?php echo $form->dropDownList($model, 'crescimento',array(''=>'Selecione','aig' => 'AIG', 'pig' => 'PIG', 'gig' => 'GIG')). '<br/><span class="help">Ex: AIG</span>'; ?>
			<?php echo $form->error($model,'crescimento'); ?>
		</div>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'indicadores_risco'); ?>
		<?php echo $form->textArea($model,'indicadores_risco',array('cols'=>62)). '<br/><span class="help">Ex: Algum indicador de risco</span>'; ?>
		<?php echo $form->error($model,'indicadores_risco'); ?>
	</div>
	
	
	<div class="row">
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'tipo_exame'); ?>
			<?php echo $form->dropDownList($model, 'tipo_exame',array(''=>'Selecione','peate-a' => 'PEATE-A', 'eoat' => 'EOAt', 'eoa-pd' => 'EOA-PD')). '<br/><span class="help">Ex: PEATE-A</span>'; ?>
			<?php echo $form->error($model,'tipo_exame'); ?>
		</div>
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'resultado_esquerdo'); ?>
			<?php echo $form->dropDownList($model, 'resultado_esquerdo',array(''=>'Selecione','passou' => 'Passou', 'falhou' => 'Falhou')). '<br/><span class="help">Ex: Passou</span>'; ?>
			<?php echo $form->error($model,'resultado_esquerdo'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'resultado_direito'); ?>
			<?php echo $form->dropDownList($model, 'resultado_direito',array(''=>'Selecione','passou' => 'Passou', 'falhou' => 'Falhou')). '<br/><span class="help">Ex: Passou</span>'; ?>
			<?php echo $form->error($model,'resultado_direito'); ?>
		</div>
	</div>
</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	$("#agenda_hoje").click(function(){
		var data = new Date();
		var mes=(data.getMonth()+1)<=9?"0"+(data.getMonth()+1):(data.getMonth()+1);
		var hoje=dia = data.getDate()+"/"+mes+"/"+data.getFullYear();
		if($(this).attr('checked')=="checked")$("#Triagem_data_triagem").val(hoje);
		else $("#Triagem_data_triagem").val("");
	});
	$("#Triagem_data_triagem").change(function(){
		var data = new Date();
		var mes=(data.getMonth()+1)<=9?"0"+(data.getMonth()+1):(data.getMonth()+1);
		var hoje=dia = data.getDate()+"/"+mes+"/"+data.getFullYear();
		$("#agenda_hoje").removeAttr('checked');
		if(hoje==$(this).val())$("#agenda_hoje").attr('checked','checked');
		
		
	});
</script>