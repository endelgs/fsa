<?php
/* @var $this GeneticaController */
/* @var $model Genetica */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}

</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'genetica-form',
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
      <a style="position:absolute; bottom:20px; right: 20px;color:#C00;" href="javascript:$('#infoPaciente').fadeOut('slow');">Fechar</a>

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
		                		$("#Genetica_paciente_r").val(ui.item.id);//linha mto importante é o que faz funcionar o autocomplete heheheh
		                		
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
		                		
		                		if(ui.item.genetica_id != null){
			                      $("#infoPaciente .aviso").html("<div style=\"color:red;\">Este paciente já possui genética cadastrada!</div>");
			                      
			                    }else{
			                      $("#infoPaciente .aviso").empty();
			                      $("#infoPaciente .link").empty();
			    				}
		                		
		                		$("#infoPaciente .link").html(\'<a href="'.Yii::app()->createAbsoluteUrl('paciente/update').'&id=\'+ui.item.id+\'">Atualizar dados cadastrais</a>\');
		               		}'
		                ),
		                'htmlOptions'=>array('size'=>80),
		            ));
    			}else{
		        	echo $form->textField($model->pacienteR,'nome',array('size'=>80,'disabled'=>'disabled'));
		        }
       	 	?>
			<?php echo $form->error($model,'paciente_r'); ?>
		</div>
	  
	</div>
	<hr class="larguraMenor"/>
  <h2>Informações Básicas</h2>
	
  <div class="row" style="clear:left">
		<?php echo $form->labelEx($model,'genetica'); ?>
		<?php echo $form->textArea($model,'genetica',array('rows'=>3,'cols'=>62)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'genetica'); ?>
	</div><br/>
	<div class="row">
		<?php echo $form->labelEx($model,'hipotese_diagnostica'); ?>
		<?php echo $form->textArea($model,'hipotese_diagnostica',array('rows'=>3, 'cols'=>62)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'hipotese_diagnostica'); ?>
	</div>
	<br/>
	<div class="row">
		<?php echo $form->labelEx($model,'conduta'); ?>
		<?php echo $form->textArea($model,'conduta',array('rows'=>3, 'cols'=>62)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'conduta'); ?>
	</div>
	<br/>
	<div class="row">
		<?php echo $form->labelEx($model,'alteracoes_observadas'); ?>
		<?php echo $form->textArea($model,'alteracoes_observadas',array('rows'=>3, 'cols'=>62)). '<br/><span class="help">Ex: algum texto de exemplo</span>'; ?>
		<?php echo $form->error($model,'alteracoes_observadas'); ?>
	</div>
	<br/>
  	<hr class="larguraMenor"/>

	<div class="row">
		<h2>Alterações Frequentes</h2><br/>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'homozigoto_normal',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'homozigoto_normal'); ?></div>
			</div>
			<div><span class="help">Ex: Homozigoto Normal</span></div>
			<div><?php echo $form->error($model,'homozigoto_normal'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'homozigoto_mutante',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'homozigoto_mutante'); ?></div>
			</div>
			<div><span class="help">Ex: Homozigoto Mutante</span></div>
			<div><?php echo $form->error($model,'homozigoto_mutante'); ?></div>
		</div>
		<div>
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'heterozigoto',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="line-height:20px;"><?php echo $form->labelEx($model,'heterozigoto'); ?></div>
			</div>
			<div><span class="help">Ex: Heterozigoto</span></div>
			<div><?php echo $form->error($model,'heterozigoto'); ?></div>
		</div>
	</div>
	<br/>
  	<hr class="larguraMenor"/>

	<div class="row">
		<h2>Deleções</h2><br/>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'del_gjb6_d13s1830',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'del_gjb6_d13s1830'); ?></div>
			</div>
			<div><span class="help">Ex: Del (GJB6-D13S1830)</span></div>
			<div><?php echo $form->error($model,'del_gjb6_d13s1830'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'del_gjb6_d13s1854',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px;"><?php echo $form->labelEx($model,'del_gjb6_d13s1854'); ?></div>
			</div>
			<div><span class="help">Ex: Del (GJB6-D13S1854)</span></div>
			<div><?php echo $form->error($model,'del_gjb6_d13s1854'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'del_3',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:40px;"><?php echo $form->labelEx($model,'del_3'); ?></div>
			</div>
			<div><span class="help">Ex: Del 3</span></div>
			<div><?php echo $form->error($model,'del_3'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'del_4',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:40px;"><?php echo $form->labelEx($model,'del_4'); ?></div>
			</div>
			<div><span class="help">Ex: Del 4</span></div>
			<div><?php echo $form->error($model,'del_4'); ?></div>
		</div>
		<div style="float:left;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'del_5',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="line-height:20px; width:55px;"><?php echo $form->labelEx($model,'del_5'); ?></div>
			</div>
			<div><span class="help">Ex: Del 5</span></div>
			<div><?php echo $form->error($model,'del_5'); ?></div>
		</div>
	</div><br/><br/><br/>
  	<hr class="larguraMenor"/>

	<div class="row">
		<h2>Mutações Mitocondriais Frequentes</h2><br/>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'a1555g',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:60px;"><?php echo $form->labelEx($model,'a1555g'); ?></div>
			</div>
			<div><span class="help">Ex: A1555G</span></div>
			<div><?php echo $form->error($model,'a1555g'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'c1494t',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:60px;"><?php echo $form->labelEx($model,'c1494t'); ?></div>
			</div>
			<div><span class="help">Ex: C1494T</span></div>
			<div><?php echo $form->error($model,'c1494t'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'a827g',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:60px;"><?php echo $form->labelEx($model,'a827g'); ?></div>
			</div>
			<div><span class="help">Ex: A827G</span></div>
			<div><?php echo $form->error($model,'a827g'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'a7445g',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:60px;"><?php echo $form->labelEx($model,'a7445g'); ?></div>
			</div>
			<div><span class="help">Ex: A7445G</span></div>
			<div><?php echo $form->error($model,'a7445g'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'a7444g',array('value'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:60px;"><?php echo $form->labelEx($model,'a7444g'); ?></div>
			</div>
			<div><span class="help">Ex: A7444G</span></div>
			<div><?php echo $form->error($model,'a7444g'); ?></div>
		</div>
		<div style="float:left; margin-right:12px;">
			<div>
				<div style="float:left;"><?php echo $form->checkBox($model,'a7444g',array('a3243g'=>'true', 'uncheckValue'=>'')); ?></div>
				<div style="float:left; line-height:20px; width:60px;"><?php echo $form->labelEx($model,'a3243g'); ?></div>
			</div>
			<div><span class="help">Ex: A3243G</span></div>
			<div><?php echo $form->error($model,'a3243g'); ?></div>
		</div>
	</div>
	<br/><br/><br/>
    	<hr class="larguraMenor"/>

	<div class="row">
		<h2>Genes</h2><br/>
		<div style="height:80px;">
			<div style="float:left; ">
				<?php echo $form->labelEx($model,'gjb2'); ?>
				<?php echo $form->radioButtonList($model,'gjb2',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
				<?php echo $form->error($model,'gjb2'); ?>
			</div>
			<div style="float:left;">
				<?php echo $form->labelEx($model,'gjb2_genotipo'); ?>
				<?php echo $form->textField($model,'gjb2_genotipo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'gjb2_genotipo'); ?>
			</div>
		</div>
		<div style="height:80px;">
			<div style="float:left;">
				<?php echo $form->labelEx($model,'gjb6'); ?>
				<?php echo $form->radioButtonList($model,'gjb6',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
				<?php echo $form->error($model,'gjb6'); ?>
			</div>
			<div style="float:left;">
				<?php echo $form->labelEx($model,'gjb6_genotipo'); ?>
				<?php echo $form->textField($model,'gjb6_genotipo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'gjb6_genotipo'); ?>
			</div>
		</div>
		<div style="height:80px;">
			<div style="float:left;">
				<?php echo $form->labelEx($model,'gjb3'); ?>
				<?php echo $form->radioButtonList($model,'gjb3',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
				<?php echo $form->error($model,'gjb3'); ?>
			</div>
			<div style="float:left;">
				<?php echo $form->labelEx($model,'gjb3_genotipo'); ?>
				<?php echo $form->textField($model,'gjb3_genotipo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'gjb3_genotipo'); ?>
			</div>
		</div>
		<div style="height:80px;">
			<div style="float:left;">
				<?php echo $form->labelEx($model,'slc26a4'); ?>
				<?php echo $form->radioButtonList($model,'slc26a4',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
				<?php echo $form->error($model,'slc26a4'); ?>
			</div>
			<div style="float:left;">
				<?php echo $form->labelEx($model,'slc26a4_genotipo'); ?>
				<?php echo $form->textField($model,'slc26a4_genotipo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'slc26a4_genotipo'); ?>
			</div>
		</div>
		<div style="height:80px;">
			<div style="float:left;">
				<?php echo $form->labelEx($model,'otof'); ?>
				<?php echo $form->radioButtonList($model,'otof',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
				<?php echo $form->error($model,'otof'); ?>
			</div>
			<div style="float:left;">
				<?php echo $form->labelEx($model,'otof_genotipo'); ?>
				<?php echo $form->textField($model,'otof_genotipo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'otof_genotipo'); ?>
			</div>
		</div>
		<div style="height:80px;">
			<div style="float:left;">
				<?php echo $form->labelEx($model,'mtrnr1'); ?>
				<?php echo $form->radioButtonList($model,'mtrnr1',array('true'=>'Sim','false'=>'Não'), array('separator'=>'','labelOptions'=>array('style'=>'display:inline; line-height:30px; margin-right:10px;'))); ?>
				<?php echo $form->error($model,'mtrnr1'); ?>
			</div>
			<div style="float:left;">
				<?php echo $form->labelEx($model,'mtrnr1_genotipo'); ?>
				<?php echo $form->textField($model,'mtrnr1_genotipo',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'mtrnr1_genotipo'); ?>
			</div>
		</div>
		<div style="height:80px;">
			<div>
				<?php echo $form->labelEx($model,'outros_genes'); ?>
				<?php echo $form->textField($model,'outros_genes',array('size'=>71,'maxlength'=>250)). '<br/><span class="help">Ex: Gene</span>'; ?>
				<?php echo $form->error($model,'outros_genes'); ?>
			</div>
			<div>
				<?php echo $form->labelEx($model,'outros_genes_genotipo'); ?>
				<?php echo $form->textField($model,'outros_genes_genotipo',array('size'=>71,'maxlength'=>250)). '<br/><span class="help">Ex: Genótipo</span>'; ?>
				<?php echo $form->error($model,'outros_genes_genotipo'); ?>
			</div>
		</div>
	</div><br/>
	<br/>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->