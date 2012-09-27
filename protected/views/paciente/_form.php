<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>
<style type="text/css">
.help{font-size:9px;font-style:italic;}  
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos marcados com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div style="float:left; margin-right:12px;">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: João da Silva</span>'; ?>
		<?php echo $form->error($model,'nome'); ?>
    </div>
    <div style="float:left; margin-right:12px;">
		<?php echo $form->labelEx($model,'hc'); ?>
		<?php echo $form->textField($model,'hc'). '<br/><span class="help">Ex: 1505</span>'; ?>
		<?php echo $form->error($model,'hc'); ?>
	</div>
	
  <div style="float:left; margin-right:12px;">
		<?php echo $form->labelEx($model,'data_nascimento'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	          'attribute'=>'data_nascimento',
	          'model' => $model,
	          'value'=>$model->data_nascimento,
	          'language'=>'pt-BR',
	          'options'=>array(
	          	'showAnim'=>'fold',
	         	'dateFormat'=>'dd/mm/yy',
	           )
	        ));
		?>
		<?php echo '<br/><span class="help">Ex: 01/01/2001</span>'; ?>
		<?php echo $form->error($model,'data_nascimento'); ?>
    </div>
    <div>
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->dropDownList($model, 'sexo',array(''=>'Selecione','masculino' => 'Masculino', 'feminino' => 'Feminino')). '<br/><span class="help">Ex: Masculino</span>'; ?>
		<?php echo $form->error($model,'sexo'); ?>
    </div>
	</div>
	

	<div class="row">
    <div style="float:left; margin-right:12px;">
      <?php echo $form->labelEx($model,'nome_mae'); ?>
      <?php echo $form->textField($model,'nome_mae',array('size'=>60,'maxlength'=>250)). '<br/><span class="help">Ex: Maria da Silva</span>'; ?>
      <?php echo $form->error($model,'nome_mae'); ?>
    </div>
	

    <div class="row">
      <?php echo $form->labelEx($model,'hc_mae'); ?>
      <?php echo $form->textField($model,'hc_mae'). '<br/><span class="help">Ex: 1002</span>'; ?>
      <?php echo $form->error($model,'hc_mae'); ?>
    </div>
  </div>
	

	

	<div class="row">
    <div style="float:left; margin-right:12px;">
      <?php echo $form->labelEx($model,'endereco'); ?>
      <?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>500)). '<br/><span class="help">Ex: R. Três, nº 10 - Bairro Qualquer</span>'; ?>
      <?php echo $form->error($model,'endereco'); ?>
    </div>
    <div>
      <?php echo $form->labelEx($model,'cidade'); ?>
      <?php echo $form->textField($model,'cidade',array('size'=>60,'maxlength'=>200)). '<br/><span class="help">Ex: Campinas</span>'; ?>
      <?php echo $form->error($model,'cidade'); ?>
    </div>
	</div>

	

	<div class="row">
    <div style="float:left; margin-right:12px;">
      <?php echo $form->labelEx($model,'telefone_fixo'); ?>
      <?php echo $form->textField($model,'telefone_fixo',array('size'=>13,'maxlength'=>13)). '<br/><span class="help">Ex: (15)3535-6677</span>'; ?>
      <?php echo $form->error($model,'telefone_fixo'); ?>
    </div>

    <div style="float:left; margin-right:12px;">
      <?php echo $form->labelEx($model,'telefone_movel'); ?>
      <?php echo $form->textField($model,'telefone_movel',array('size'=>13,'maxlength'=>13)). '<br/><span class="help">Ex: (15)9707-9900</span>'; ?>
      <?php echo $form->error($model,'telefone_movel'); ?>
    </div>

    <div>
      <?php echo $form->labelEx($model,'telefone_trabalho'); ?>
      <?php echo $form->textField($model,'telefone_trabalho',array('size'=>13,'maxlength'=>13)). '<br/><span class="help">Ex: (15)3534-5454</span>'; ?>
      <?php echo $form->error($model,'telefone_trabalho'); ?>
    </div>
  </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Inserir' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->