<?php
/* @var $this AgendaOrlController */
/* @var $model AgendaOrl */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;} 
.itemAgenda{background-color: #E8F8FF;}
.itemAgenda:HOVER{background-color: #B4DCED;}
.alinhamento{float:left; margin-right:20px;}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-orl-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<hr class="larguraDefault"/>
	<div class="row">
		<div class="alinhamento">
			<b>Agendar ORL para:</b><br/>
			
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
		</div>
		<div class="alinhamento">
			<b class="alinhamento">Horário:</b><br/>
			<?php echo $form->dropDownList(	$model,'horario',
				array(
					''=>'Selecione',
					'07' => '07', 
					'08' => '08', 
					'09' => '09', 
					'10' => '10', 
					'11' => '11',
					'12' => '12',
					'13' => '13',
					'14' => '14',
					'15' => '15',
					'16' => '16',
					'17' => '17',
					'18' => '18',
			)); ?>
			<?php echo CHtml::dropDownList(CHtml::activeName($model, 'horario_minuto'),'horario_minuto',
				array(
					''=>'Selecione',
					'00' => '00', 
					'15' => '15', 
					'30' => '30', 
					'45' => '45',
			)); ?>
		</div>
		<div class="alinhamento">
			<b>Paciente: </b><br/>
			<?php 
	     		if($model->isNewRecord){
		       		$this->widget('ext.devAutoComplete', array(
		                'model'=>$model,
		                'attribute'=>'paciente_r',
		         		'name'=>'paciente_r',
		          		'value'=>$model->isNewRecord ? '': $model->pacienteR->nome,
		                'sourceUrl'=> $this->createUrl('paciente/getPacientesAC'),
		                'htmlOptions'=>array('size'=>50),
		          		'options'=>array(
		            		'minLength'=>'1',
		            		'showAnim'=>'fold',
		          			
		               		'select'=>'js:function(event, ui) {
		          				$("#AgendaOrl_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
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

<h3>ORLs agendadas para hoje</h3>
<table>
	<tr>
		<th>Paciente</th>
		<th>Agendado para dia</th>
		<th>Horário</th>
		<th></th>
	</tr>
<?php $aOrlsHoje=$model->findAll('data=:data', array(':data'=>date("Y-m-d")));
foreach($aOrlsHoje as $orl){
	echo '<tr class="itemAgenda">
		<td>'.CHtml::encode($orl->pacienteR->nome).'</td>
		<td>'.CHtml::encode($orl->data).'</td>
		<td>'.CHtml::encode($orl->horario).'</td>
		<td><a href="'.Yii::app()->createAbsoluteUrl('orl/update').'&id='.$orl->orl_r.'">Cadastrar ORL</a></td>
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
	
	<h3>ORLs agendadas entre:</h3>
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
	<?php echo CHtml::ajaxSubmitButton('Pesquisar',array('agendaOrl/getOrls'),array('update'=>'#boxOrls',));?>
	<div id="boxOrls"></div>
<?php $this->endWidget(); ?>
</div><!-- search-form -->


<script>
	$("#agenda_hoje").click(function(){
		var data = new Date();
		var mes=(data.getMonth()+1)<=9?"0"+(data.getMonth()+1):(data.getMonth()+1);
		var hoje=dia = data.getDate()+"/"+mes+"/"+data.getFullYear();
		if($(this).attr('checked')=="checked")$("#AgendaOrl_data").val(hoje);
		else $("#AgendaOrl_data").val("");
	});
	$("#AgendaOrl_data").change(function(){
		var data = new Date();
		var mes=(data.getMonth()+1)<=9?"0"+(data.getMonth()+1):(data.getMonth()+1);
		var hoje=dia = data.getDate()+"/"+mes+"/"+data.getFullYear();
		$("#agenda_hoje").removeAttr('checked');
		if(hoje==$(this).val())$("#agenda_hoje").attr('checked','checked');
		
		
	});
</script>