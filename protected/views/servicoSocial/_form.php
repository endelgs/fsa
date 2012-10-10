<?php
/* @var $this ServicoSocialController */
/* @var $model ServicoSocial */
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

.alinhamento{float:left;margin-right: 12px;}

#yw0{width:500px;float:left;}
#yw1{width:500px;float:left;}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servico-social-form',
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
		<div style="float:left; margin-right:12px;">
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
		                		$("#ServicoSocial_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		                		
		                		$("#infoPaciente").css("display","block");
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
		                		
		                		if(ui.item.genetica_id != null){
			                      $("#infoPaciente .aviso").html("<div style=\"color:red;\">Este paciente já possui genética cadastrada!</div>");
			                      
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
	<div><br/><br/><br/><br/>
	
	<h2>Situação Familiar</h2>
	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'nome_mae'); ?>
			<?php echo $form->textField($model,'nome_mae',array('size'=>50,'maxlength'=>250)). '<br/><span class="help">Ex: Maria da Silva</span>'; ?>
			<?php echo $form->error($model,'nome_mae'); ?>
		</div>

		<div>
			<?php echo $form->labelEx($model,'data_nascimento_mae'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		          'attribute'=>'data_nascimento_mae',
		          'model' => $model,
		          'value'=>$model->data_nascimento_mae,
		          'language'=>'pt-BR',
		          'options'=>array(
		          	'showAnim'=>'fold',
		         	'dateFormat'=>'dd/mm/yy',
		           )
		        ));
			?>
			<?php echo '<br/><span class="help">Ex: 01/01/2001</span>'; ?>
		</div>
	</div>
	
	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'escolaridade_mae'); ?>
			<?php echo $form->textField($model,'escolaridade_mae',array('size'=>40,'maxlength'=>250)). '<br/><span class="help">Ex: Ensino Médio Completo</span>'; ?>
			<?php echo $form->error($model,'escolaridade_mae'); ?>
		</div>

		<div>
			<?php echo $form->labelEx($model,'profissao_mae'); ?>
			<?php echo $form->textField($model,'profissao_mae',array('size'=>30,'maxlength'=>250)). '<br/><span class="help">Ex: Professor</span>'; ?>
			<?php echo $form->error($model,'profissao_mae'); ?>
		</div>
	</div>

	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'local_trabalho_mae'); ?>
			<?php echo $form->textField($model,'local_trabalho_mae',array('size'=>50,'maxlength'=>250)). '<br/><span class="help">Ex: Escola Infantil Maria</span>'; ?>
			<?php echo $form->error($model,'local_trabalho_mae'); ?>
		</div>

		<div>
			<?php echo $form->labelEx($model,'telefone_trabalho_mae'); ?>
			<?php echo $form->textField($model,'telefone_trabalho_mae',array('size'=>20,'maxlength'=>15)). '<br/><span class="help">Ex: (19)2536-6788</span>'; ?>
			<?php echo $form->error($model,'telefone_trabalho_mae'); ?>
		</div>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'nome_pai'); ?>
			<?php echo $form->textField($model,'nome_pai',array('size'=>50,'maxlength'=>250)). '<br/><span class="help">Ex: José da Silva</span>'; ?>
			<?php echo $form->error($model,'nome_pai'); ?>
		</div>
	
		<div>
			<?php echo $form->labelEx($model,'data_nascimento_pai'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		          'attribute'=>'data_nascimento_pai',
		          'model' => $model,
		          'value'=>$model->data_nascimento_pai,
		          'language'=>'pt-BR',
		          'options'=>array(
		          	'showAnim'=>'fold',
		         	'dateFormat'=>'dd/mm/yy',
		           )
		        ));
			?>
			<?php echo '<br/><span class="help">Ex: 01/01/2001</span>'; ?>
		</div>
	</div>

	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'escolaridade_pai'); ?>
			<?php echo $form->textField($model,'escolaridade_pai',array('size'=>40,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'escolaridade_pai'); ?>
		</div>

		<div>
			<?php echo $form->labelEx($model,'profissao_pai'); ?>
			<?php echo $form->textField($model,'profissao_pai',array('size'=>30,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'profissao_pai'); ?>
		</div>
	</div>

	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'local_trabalho_pai'); ?>
			<?php echo $form->textField($model,'local_trabalho_pai',array('size'=>50,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'local_trabalho_pai'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'telefone_trabalho_pai'); ?>
			<?php echo $form->textField($model,'telefone_trabalho_pai',array('size'=>20,'maxlength'=>15)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'telefone_trabalho_pai'); ?>
		</div>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'responsavel_crianca'); ?>
		<?php echo $form->textField($model,'responsavel_crianca',array('size'=>78,'maxlength'=>250)). '<br/><span class="help">Ex: Antônia das Dores</span>'; ?>
		<?php echo $form->error($model,'responsavel_crianca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familia'); ?>
		<?php echo $form->radioButton($model, 'familia', array('value'=>'legitima','uncheckValue'=>null))." Legítima";?>
		<?php echo $form->radioButton($model, 'familia', array('value'=>'adotiva','uncheckValue'=>null))." Adotiva";?>
		<?php echo $form->textField($model,'familia_outros',array('size'=>55,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'familia'); ?>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'uniao'); ?>
			<?php echo $form->radioButton($model, 'uniao', array('value'=>'legal','uncheckValue'=>null))." Legal";?>
			<?php echo $form->radioButton($model, 'uniao', array('value'=>'consensual','uncheckValue'=>null))."Consensual";?>
			<?php echo $form->error($model,'uniao'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'uniao_outro'); ?>
			<?php echo $form->textField($model,'uniao_outro',array('size'=>54,'maxlength'=>5)). '<br/><span class="help">Ex: Mora junto</span>'; ?>
			<?php echo $form->error($model,'uniao_outro'); ?>
		</div>
	</div>

	<?php
      $woProvider = new CActiveDataProvider('ServicoSocialIrmao', array(
        'criteria'=>$model->ID,
    ));
		$this->widget('ext.htmltableui.htmlTableUi',array(
		    'ajaxUrl'=>'servicoSocialIrmao/create',
		    'arProvider'=>'',    
		    'collapsed'=>false,
		    'columns'=>array('Nome','Idade','Escolaridade','Profissão','Salário'),
		    'cssFile'=>'',
		    'editable'=>true,
		    'enableSort'=>true,
		    'extra'=>'Additional Information',
		    'formTitle'=>'Editar Dados Irmão',
		    'sortColumn'=>2,
		    'sortOrder'=>'desc',
		    'title'=>'Irmãos',
		));
	?>
	<br/>
	<div style="width:500px"><hr/></div>
	<div class="row">
		<div class="alinhamento"><?php echo $form->labelEx($model,'residentes_familia'); ?></div>
		<?php echo $form->checkBox($model,'residentes_familia',array('value'=>'true', 'uncheckValue'=>'false')); ?>
		<?php echo $form->error($model,'residentes_familia'); ?>
	</div>
	<?php
		$this->widget('ext.htmltableui.htmlTableUi',array(
		    'ajaxUrl'=>'servicoSocialIrmao/update',
		    'arProvider'=>'',    
		    'collapsed'=>false,
		    'columns'=>array('Nome','Idade','Escolaridade','Profissão','Salário'),
		    'cssFile'=>'',
		    'editable'=>true,
		    'enableSort'=>true,
		    'extra'=>'Additional Information',
		    'formTitle'=>'Editar Dados Irmão',
		    'sortColumn'=>2,
		    'sortOrder'=>'desc',
		    'title'=>'Irmãos',
		));
	?>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2>Situação Econômica</h2>
	<div class="row">
		<div  class="alinhamento">
			<?php echo $form->labelEx($model,'renda_total'); ?>
			<?php echo $form->textField($model,'renda_total',array('size'=>10,'maxlength'=>10)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'renda_total'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'quem_contribui'); ?>
			<?php echo $form->textField($model,'quem_contribui',array('size'=>56,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'quem_contribui'); ?>
		</div>
	</div>

	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'n_pessoas_casa'); ?>
			<?php echo $form->textField($model,'n_pessoas_casa',array('size'=>20)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'n_pessoas_casa'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'renda_per_capita'); ?>
			<?php echo $form->textField($model,'renda_per_capita',array('size'=>50)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'renda_per_capita'); ?>
		</div>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficio_social'); ?>
		<?php echo $form->textField($model,'beneficio_social',array('size'=>77,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'beneficio_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outros_situacao_economica'); ?>
		<?php echo $form->textField($model,'outros_situacao_economica',array('size'=>77,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'outros_situacao_economica'); ?>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2>Habitação</h2>
	<div class="row">
		<?php echo $form->labelEx($model,'casa_tipo'); ?>
		<?php echo $form->radioButton($model, 'casa_tipo', array('value'=>'propria','uncheckValue'=>null))." Própria";?>
		<?php echo $form->radioButton($model, 'casa_tipo', array('value'=>'alugada','uncheckValue'=>null))." Alugada";?>
		<?php echo $form->textField($model,'casa_alugada',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->radioButton($model, 'casa_tipo', array('value'=>'cedida','uncheckValue'=>null))." Cedida";?>
		<?php echo $form->textField($model,'casa_outros',array('size'=>28,'maxlength'=>250)); ?>
	</div>
	<div class="row">
		<div class="alinhamento">
			<?php echo $form->labelEx($model,'tipo_construcao'); ?>
			<?php echo $form->textField($model,'tipo_construcao',array('size'=>55,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'tipo_construcao'); ?>
		</div>
	
		<div>
			<?php echo $form->labelEx($model,'n_comodos'); ?>
			<?php echo $form->textField($model,'n_comodos',array('size'=>13)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
			<?php echo $form->error($model,'n_comodos'); ?>
		</div>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2>Outros</h2>
	<div class="row">
		<?php echo $form->labelEx($model,'transporte_utilizado'); ?>
		<?php echo $form->textField($model,'transporte_utilizado',array('size'=>77,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'transporte_utilizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convenio_medico'); ?>
		<?php echo $form->textField($model,'convenio_medico',array('size'=>77,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'convenio_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centro_saude'); ?>
		<?php echo $form->textField($model,'centro_saude',array('size'=>77,'maxlength'=>250)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'centro_saude'); ?>
	</div>
	<br/>
	<div style="width:500px"><hr/></div>
	<h2><?php echo $form->labelEx($model,'sintese_atendimento'); ?></h2>
	<div class="row">
		<?php echo $form->textArea($model,'sintese_atendimento',array('rows'=>6, 'cols'=>60)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'sintese_atendimento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->