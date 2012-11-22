<?php
/* @var $this ProteseAnexoController */
/* @var $model ProteseAnexo */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;} 
.larguraDefault{
	width: 600px;
}

.alinhamento{float:left;margin-right: 12px;}
.coluna{
	width: 550px;
	display: inline-block;
}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'protese-anexo-form',
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
		                'htmlOptions'=>array('size'=>78),
		            ));
    			}else{
		        	echo $form->textField($model->pacienteR,'nome',array('size'=>45,'disabled'=>'disabled'));
		        }
       	 	?>
			<?php echo $form->error($model,'paciente_r'); ?>
		</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'comportamento_vocal'); ?>
		<?php echo $form->textArea($model,'comportamento_vocal',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'comportamento_vocal'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'primeiras_vocalizacoes'); ?>
		<?php echo $form->textArea($model,'primeiras_vocalizacoes',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'primeiras_vocalizacoes'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'esqueceu_dispositivo'); ?>
		<?php echo $form->textArea($model,'esqueceu_dispositivo',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'esqueceu_dispositivo'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'primeiro_teste_dispositivo'); ?>
		<?php echo $form->radioButton($model, 'primeiro_teste_dispositivo', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'primeiro_teste_dispositivo', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'primeiro_teste_dispositivo', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - vocaliza todo o dia e aumento de 50% quando está ligado";?><br/>
		<?php echo $form->radioButton($model, 'primeiro_teste_dispositivo', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - vocaliza todo o dia e aumento de 75% quando está ligado";?><br/>
		<?php echo $form->radioButton($model, 'primeiro_teste_dispositivo', array('value'=>'4','uncheckValue'=>null))." 4 = sempre - aumenta 100% quando está com dispositivo ligado";?><br/>
		<?php echo $form->error($model,'primeiro_teste_dispositivo'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'silabas_articuladas'); ?>
		<?php echo $form->textArea($model,'silabas_articuladas',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'silabas_articuladas'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'crianca_conversa'); ?>
		<?php echo $form->textArea($model,'crianca_conversa',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'crianca_conversa'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'tipos_sons_brincadeira'); ?>
		<?php echo $form->textArea($model,'tipos_sons_brincadeira',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'tipos_sons_brincadeira'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'emite_sons_exemplo'); ?>
		<?php echo $form->textArea($model,'emite_sons_exemplo',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'emite_sons_exemplo'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'emite_sons'); ?>
		<?php echo $form->radioButton($model, 'emite_sons', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'emite_sons', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% quando oferecido modelo.";?><br/>
		<?php echo $form->radioButton($model, 'emite_sons', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% quando oferecido modelo.";?><br/>
		<?php echo $form->radioButton($model, 'emite_sons', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - 75% produz sequências silábicas espontaneamente e imita de forma clara com modelo";?><br/>
		<?php echo $form->radioButton($model, 'emite_sons', array('value'=>'4','uncheckValue'=>null))." 4 = sempre - produz consistentemente sem modelo e tem repertório variado de sons.";?><br/>
		<?php echo $form->error($model,'emite_sons'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'resposta_primeira_chamada'); ?>
		<?php echo $form->textArea($model,'resposta_primeira_chamada',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'resposta_primeira_chamada'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'resposta_espontanea'); ?>
		<?php echo $form->radioButton($model, 'resposta_espontanea', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes.";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% das vezes ou quando repete seu nome mais de uma vez.";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - 75% das vezes na primeira tentativa";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'resposta_espontanea'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'resposta_chamada_ruido'); ?>
		<?php echo $form->textArea($model,'resposta_chamada_ruido',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'resposta_chamada_ruido'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'resposta_espontanea_ruido'); ?>
		<?php echo $form->radioButton($model, 'resposta_espontanea_ruido', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea_ruido', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes.";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea_ruido', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% das vezes ou quando repete seu nome mais de uma vez.";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea_ruido', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - 75% das vezes na primeira tentativa";?><br/>
		<?php echo $form->radioButton($model, 'resposta_espontanea_ruido', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'resposta_espontanea_ruido'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'sons_ambientais'); ?>
		<?php echo $form->textArea($model,'sons_ambientais',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'sons_ambientais'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'atencao_espontanea_sons_ambiente'); ?>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sons_ambiente', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sons_ambiente', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sons_ambiente', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% das vezes a mais de 2 sons ambientais.";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sons_ambiente', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - responde consistentemente a muitos sons, 75% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sons_ambiente', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'atencao_espontanea_sons_ambiente'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'curiosidade_novos_sons'); ?>
		<?php echo $form->textArea($model,'curiosidade_novos_sons',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'curiosidade_novos_sons'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'atencao_espontanea_sinais_auditivos'); ?>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% das vezes, vários exemplos.";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - é um fato corriqueiro, 75% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'atencao_espontanea_sinais_auditivos'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>	
	<div class="row">
		<?php echo $form->labelEx($model,'reconhece_sinais_auditivos'); ?>
		<?php echo $form->textArea($model,'reconhece_sinais_auditivos',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'reconhece_sinais_auditivos'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'atencao_espontanea_sinais_auditivos_diariamente'); ?>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos_diariamente', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos_diariamente', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos_diariamente', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% das vezes, vários exemplos.";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos_diariamente', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - é um fato corriqueiro, 75% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'atencao_espontanea_sinais_auditivos_diariamente', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'atencao_espontanea_sinais_auditivos_diariamente'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'diferenciar_vozes'); ?>
		<?php echo $form->textArea($model,'diferenciar_vozes',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'diferenciar_vozes'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'habilidade_discriminar_dois_falantes'); ?>
		<?php echo $form->radioButton($model, 'habilidade_discriminar_dois_falantes', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'habilidade_discriminar_dois_falantes', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - discrimina duas vozes diferentes 25% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'habilidade_discriminar_dois_falantes', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - discrimina duas vozes diferentes 50% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'habilidade_discriminar_dois_falantes', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - discrimina duas vozes diferentes ou similares 75% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'habilidade_discriminar_dois_falantes', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'habilidade_discriminar_dois_falantes'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'reconhece_fala_sons_nao_verbais'); ?>
		<?php echo $form->textArea($model,'reconhece_fala_sons_nao_verbais',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'reconhece_fala_sons_nao_verbais'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'reconhece_estimulos_fala_audicao'); ?>
		<?php echo $form->radioButton($model, 'reconhece_estimulos_fala_audicao', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'reconhece_estimulos_fala_audicao', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)";?><br/>
		<?php echo $form->radioButton($model, 'reconhece_estimulos_fala_audicao', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - 50% das vezes, vários exemplos.";?><br/>
		<?php echo $form->radioButton($model, 'reconhece_estimulos_fala_audicao', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - é um fato corriqueiro, 75% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'reconhece_estimulos_fala_audicao', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'reconhece_estimulos_fala_audicao'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'emocao_voz_pessoa'); ?>
		<?php echo $form->textArea($model,'emocao_voz_pessoa',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'emocao_voz_pessoa'); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<?php echo $form->labelEx($model,'associa_entonacao'); ?>
		<?php echo $form->radioButton($model, 'associa_entonacao', array('value'=>'0','uncheckValue'=>null))." 0 = nunca";?><br/>
		<?php echo $form->radioButton($model, 'associa_entonacao', array('value'=>'1','uncheckValue'=>null))." 1 = raramente - apresenta esse comportamente 25% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'associa_entonacao', array('value'=>'2','uncheckValue'=>null))." 2 = ocasionalmente - apresenta esse comportamente 50% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'associa_entonacao', array('value'=>'3','uncheckValue'=>null))." 3 = frequentemente - apresenta esse comportamente 75% das vezes";?><br/>
		<?php echo $form->radioButton($model, 'associa_entonacao', array('value'=>'4','uncheckValue'=>null))." 4 = sempre";?><br/>
		<?php echo $form->error($model,'associa_entonacao'); ?>
	</div>
</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->