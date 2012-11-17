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
	<br/><hr/>
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
	<div class="row">
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'falhou_35'); ?>
			<?php echo $form->radioButtonList($model,'falhou_35',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
			<?php echo $form->error($model,'falhou_35'); ?>
		</div>
		<div style="float:left; margin-right:12px;">
			<?php echo $form->labelEx($model,'falhou_40'); ?>
			<?php echo $form->radioButtonList($model,'falhou_40',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
			<?php echo $form->error($model,'falhou_40'); ?>
		</div>
		<div>
			<?php echo $form->labelEx($model,'falhou_45'); ?>
			<?php echo $form->radioButtonList($model,'falhou_45',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
			<?php echo $form->error($model,'falhou_45'); ?>
		</div>
	</div>
	<br/><hr/>
	<H3>Indicadores de Risco</H3>
	<div class="row">
		<?php echo $form->labelEx($model,'historia_perda_auditiva'); ?>
		<?php echo $form->radioButtonList($model,'historia_perda_auditiva',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'historia_perda_auditiva'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'consanguinidade'); ?>
		<?php echo $form->radioButtonList($model,'consanguinidade',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'consanguinidade'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'peso_inferiro_1500'); ?>
		<?php echo $form->radioButtonList($model,'peso_inferiro_1500',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'peso_inferiro_1500'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pig'); ?>
		<?php echo $form->radioButtonList($model,'pig',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'pig'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nascimento_pre_termo'); ?>
		<?php echo $form->radioButtonList($model,'nascimento_pre_termo',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'nascimento_pre_termo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'apgar_04_primeiro_minuto'); ?>
		<?php echo $form->radioButtonList($model,'apgar_04_primeiro_minuto',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'apgar_04_primeiro_minuto'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'apgar_06_quinto_minuto'); ?>
		<?php echo $form->radioButtonList($model,'apgar_06_quinto_minuto',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'apgar_06_quinto_minuto'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'uti_5_dias'); ?>
		<?php echo $form->radioButtonList($model,'uti_5_dias',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'uti_5_dias'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'ventilacao_mecanica'); ?>
		<?php echo $form->radioButtonList($model,'ventilacao_mecanica',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'ventilacao_mecanica'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'drogas_ototoxicas'); ?>
		<?php echo $form->radioButtonList($model,'drogas_ototoxicas',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'drogas_ototoxicas'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'hiperbilirrubinemia'); ?>
		<?php echo $form->radioButtonList($model,'hiperbilirrubinemia',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'hiperbilirrubinemia'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'anomalias_cranio_faciais'); ?>
		<?php echo $form->radioButtonList($model,'anomalias_cranio_faciais',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'anomalias_cranio_faciais'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'anoxia_perinatal_grave'); ?>
		<?php echo $form->radioButtonList($model,'anoxia_perinatal_grave',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'anoxia_perinatal_grave'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'asfixia_neonatal'); ?>
		<?php echo $form->radioButtonList($model,'asfixia_neonatal',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'asfixia_neonatal'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'asfixia_neonatal'); ?>
		<?php echo $form->radioButtonList($model,'asfixia_neonatal',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'asfixia_neonatal'); ?>
	</div>
	<b>Infecções congênitas</b>
	<div class="row">
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_congenitas_toxoplasmose',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_congenitas_toxoplasmose'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_congenitas_rubeola',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_congenitas_rubeola'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_congenitas_citomegalovirus',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_congenitas_citomegalovirus'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_congenitas_herpes',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_congenitas_herpes'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_congenitas_sifilis',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_congenitas_sifilis'); ?></div>
		</div>
		<div>
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_congenitas_hiv',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_congenitas_hiv'); ?></div>
		</div>
	</div><br/>
	<div class="row">
		<?php echo $form->labelEx($model,'infeccoes_congenitas_outra'); ?>
		<?php echo $form->textField($model,'infeccoes_congenitas_outra' ,array('size'=>70)); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'sindrome_genetica_deficiencia_auditiva'); ?>
		<?php echo $form->textField($model,'sindrome_genetica_deficiencia_auditiva',array('size'=>70)); ?>
		<?php echo $form->error($model,'sindrome_genetica_deficiencia_auditiva'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'disturbios_neurodegenerativos'); ?>
		<?php echo $form->radioButtonList($model,'disturbios_neurodegenerativos',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'disturbios_neurodegenerativos'); ?>
	</div>
	<b>Infecções bacterianas ou virais pós-natais</b>
	<div class="row">
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_bacterianas_virais_citomegalovirus',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_bacterianas_virais_citomegalovirus'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_bacterianas_virais_herpes',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_bacterianas_virais_herpes'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_bacterianas_virais_sarampo',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_bacterianas_virais_sarampo'); ?></div>
		</div>
		<div class="alinhamento">
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_bacterianas_virais_varicela',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_bacterianas_virais_varicela'); ?></div>
		</div>
		<div>
			<div style="float:left;"><?php echo $form->checkBox($model,'infeccoes_bacterianas_virais_meningite',array('value'=>'true', 'uncheckValue'=>'false')); ?></div>
			<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'infeccoes_bacterianas_virais_meningite'); ?></div>
		</div>
	</div><br/>
	<div class="row">
		<?php echo $form->labelEx($model,'infeccoes_bacterianas_virais_outra'); ?>
		<?php echo $form->textField($model,'infeccoes_bacterianas_virais_outra' ,array('size'=>70)); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'traumatismo_craniano'); ?>
		<?php echo $form->radioButtonList($model,'traumatismo_craniano',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'traumatismo_craniano'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'quimioterapia'); ?>
		<?php echo $form->radioButtonList($model,'quimioterapia',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'quimioterapia'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'materno_drogas_ilicitas'); ?>
		<?php echo $form->radioButtonList($model,'materno_drogas_ilicitas',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
		<?php echo $form->error($model,'materno_drogas_ilicitas'); ?>
	</div>
</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

