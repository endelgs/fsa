<?php
/* @var $this AgendaOrlController */
/* @var $model AgendaOrl */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;} 
.itemAgenda{background-color: #E8F8FF;}
.itemAgenda:HOVER{background-color: #B4DCED;}
.alinhamento{float:left; margin-right: 10px;}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-diagnostico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<hr class="larguraDefault"/>
	<div class="row">
		<div>
			<h5 class="alinhamento">Agendar Protese:</h5>
			<?php echo $form->dropDownList($model, 'agenda_tipo',array(
					''=>'Selecione',
					'anexo' => 'Anexo', 
					'avaliacao' => 'Avaliação',
					'prescricao' => 'Prescrição', 
					'validacao' => 'Validação',
					'verificacao' => 'Verificação')); ?>
		</div>
		<div class="alinhamento">
			<?php echo CHtml::CheckBox('agenda_hoje',false, array('value'=>date("d/m/Y")))."Hoje"; ?>
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
			<b>para o Paciente: </b>
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
		          				$("#AgendaProtese_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		          				/*
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
		          				*/
				       		}'
						),
		           	));
	            }else{
	              echo $form->textField($model->pacienteR,'nome',array('size'=>60,'disabled'=>'disabled'));
	            }
	        ?>
			<?php echo $form->error($model,'paciente_r'); ?>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Agendar' : 'Salvar'); ?>
		</div>
	</div><br/>
	<hr/>

<?php $this->endWidget(); ?>
</div><!-- form -->

<h3>Proteses agendadas para hoje</h3>
<table>
	<tr>
		<th>Paciente</th>
		<th>Agendado para dia</th>
		<th>Protese</th>
		<th></th>
	</tr>
<?php $aProtesesHoje=$model->findAll('data=:data', array(':data'=>date("Y-m-d")));
foreach($aProtesesHoje as $protese){
	echo '<tr class="itemAgenda">
		<td>'.CHtml::encode($protese->pacienteR->nome).'</td>
		<td>'.CHtml::encode($protese->data).'</td>
		<td>'.CHtml::encode($protese->agenda_tipo).'</td>
		<td><a href="'.Yii::app()->createAbsoluteUrl('protese'.ucfirst($protese->agenda_tipo).'/update').'&id='.$protese->form_tipo_r.'">Cadastrar prótese '.$protese->agenda_tipo.'</a></td>
	</tr>';
}
?>
</table>
<br/><hr/>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<h3>Proteses agendadas entre:</h3>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	        'name'=>'data_ini',
	        'language'=>'pt-BR',
	       	'options'=>array(
	        	'showAnim'=>'fold',
	        	'dateFormat'=>'dd/mm/yy',
	    	)
		));
	?>
	e
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	      	'name'=>'data_fim',
	        'language'=>'pt-BR',
	       	'options'=>array(
	        	'showAnim'=>'fold',
	        	'dateFormat'=>'dd/mm/yy',
	    	)
		));
	?>
	<?php echo CHtml::ajaxSubmitButton('Pesquisar',array('agendaProtese/getProteses'),array('update'=>'#boxProteses',));?>
	<div id="boxProteses"></div>
<?php $this->endWidget(); ?>
</div><!-- search-form -->


<script>
	$("#agenda_hoje").click(function(){
		var data = new Date();
		var mes=(data.getMonth()+1)<=9?"0"+(data.getMonth()+1):(data.getMonth()+1);
		var hoje=dia = data.getDate()+"/"+mes+"/"+data.getFullYear();
		if($(this).attr('checked')=="checked")$("#AgendaProtese_data").val(hoje);
		else $("#AgendaProtese_data").val("");
	});
	$("#AgendaProtese_data").change(function(){
		var data = new Date();
		var mes=(data.getMonth()+1)<=9?"0"+(data.getMonth()+1):(data.getMonth()+1);
		var hoje=dia = data.getDate()+"/"+mes+"/"+data.getFullYear();
		$("#agenda_hoje").removeAttr('checked');
		if(hoje==$(this).val())$("#agenda_hoje").attr('checked','checked');
		
		
	});
</script>