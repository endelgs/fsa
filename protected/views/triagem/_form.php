<?php
/* @var $this TriagemController */
/* @var $model Triagem */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}  
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'triagem-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'paciente_r'); ?>
		<?php 
			$this->widget('ext.devAutoComplete', array(
            	'model'=>$model,
                'attribute'=>'paciente_r',
				'name'=>'paciente_autocomplete',
				'value'=>$model->isNewRecord ? '': $model->pacienteR->nome,
                'sourceUrl'=> $this->createUrl('paciente/getPacientesAC'),
                // additional javascript options for the autocomplete plugin
				'options'=>array(
					'minLength'=>'1',
					//'showAnim'=>'fold',
					//'select'=>$this->renderPartial('../paciente/viewInfo', array('model'=>Paciente::model()->find(array('select'=>'*','condition'=>'id=:id','params'=>array(':id'=>1)))),true)
			        'select'=>'js:function(event, ui) {
						$("#infoPaciente").css("display","block");
						$("#infoPaciente th").css("text-align","right");
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
						
						if(ui.item.triagem_id)$("#infoPaciente .aviso").html("<div style=\"color:red;\">Este paciente já possui triagem cadastrada!</div>");
						
						$("#infoPaciente .link").html("<a href=/saudeAuditiva/index.php?r=paciente/update&id="+ui.item.id+">Editar Paciente</a>");
			        }'
				),
						
                'htmlOptions'=>array('size'=>45)
            ));
        ?>
		<?php echo $form->error($model,'paciente_r'); ?>
	</div>
	<div id="infoPaciente" style="float:right;display:none; text-align:right;">
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
	
	<div class="row">
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
		<div>
			<?php echo $form->labelEx($model,'apgar_10'); ?>
			<?php echo $form->textField($model,'apgar_10',array('size'=>10)). '<br/><span class="help">Ex: 2</span>'; ?>
			<?php echo $form->error($model,'apgar_10'); ?>
		</div>
	</div>
	
	
	<div class="row">
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'peso'); ?>
			<?php echo $form->textField($model,'peso',array('size'=>10)). '<br/><span class="help">Ex: 200</span>'; ?>
			<?php echo $form->error($model,'peso'); ?>
		</div>
		<div>
			<label>Idade Gestacional</label>
			<div style="float:left; margin-right:12px;">
				<div>
					<div style="float:left; vertical-align:middle;">
						<?php echo $form->textField($model,'idade_dias',array('size'=>5)).'<br/><span class="help">Ex: 45</span>'; ?>
					</div>
					<div style="float:left; margin-left:5px; line-height:28px;">
						<?php echo $form->labelEx($model,'idade_dias'); ?>
					</div>
				</div>
				<div>
					<?php echo $form->error($model,'idade_dias'); ?>
				</div>
			</div>
			<div>
				<div>
					<div style="float:left; vertical-align:middle;">
						<?php echo $form->textField($model,'idade_semanas',array('size'=>5)).'<br/><span class="help">Ex: 5</span>'; ?>
					</div>
					<div style="margin-left:5px; line-height:28px;">
						<?php echo $form->labelEx($model,'idade_semanas'); ?>
					</div>
				</div>
				<div>
					<?php echo $form->error($model,'idade_semanas'); ?>
				</div>
			</div>
		</div>
	</div><br/><br/>
	<div class="row">
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'metodo_avaliacao'); ?>
			<?php echo $form->dropDownList($model, 'metodo_avaliacao',array(''=>'Selecione','capurro' => 'Capurro', 'new_ballard' => 'New Ballard')). '<br/><span class="help">Ex: Capurro</span>'; ?>
			<?php echo $form->error($model,'metodo_avaliacao'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'avaliacao_score'); ?>
			<?php echo $form->textField($model,'avaliacao_score' ,array('size'=>10)). '<br/><span class="help">Ex: 60</span>'; ?>
			<?php echo $form->error($model,'avaliacao_score'); ?>
		</div>
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
			<?php echo $form->dropDownList($model, 'tipo_exame',array(''=>'Selecione','peate-a' => 'PEATE-A', 'eoa' => 'EOA')). '<br/><span class="help">Ex: PEATE-A</span>'; ?>
			<?php echo $form->error($model,'tipo_exame'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'resultado'); ?>
			<?php echo $form->dropDownList($model, 'resultado',array(''=>'Selecione','passou' => 'Passou', 'falhou' => 'Falhou')). '<br/><span class="help">Ex: Passou</span>'; ?>
			<?php echo $form->error($model,'resultado'); ?>
		</div>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->