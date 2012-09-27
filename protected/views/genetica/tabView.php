<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$model->homozigoto_normal=($model->homozigoto_normal == 'true')?'Sim':'Não';
$model->homozigoto_mutante=($model->homozigoto_mutante == 'true')?'Sim':'Não';
$model->heterozigoto=($model->heterozigoto == 'true')?'Sim':'Não';

$model->del_gjb6_d13s1830 = ($model->del_gjb6_d13s1830 == 'true')?'Sim':'Não';
$model->del_gjb6_d13s1854 = ($model->del_gjb6_d13s1854 == 'true')?'Sim':'Não';
$model->del_3 = ($model->del_3 == 'true')?'Sim':'Não';
$model->del_4 = ($model->del_4 == 'true')?'Sim':'Não';
$model->del_5 = ($model->del_5 == 'true')?'Sim':'Não';

$model->a1555g = ($model->a1555g == 'true')?'Sim':'Não';
$model->c1494t = ($model->c1494t == 'true')?'Sim':'Não';
$model->a827g = ($model->a827g == 'true')?'Sim':'Não';
$model->a7445g = ($model->a7445g == 'true')?'Sim':'Não';
$model->a7444g = ($model->a7444g == 'true')?'Sim':'Não';
$model->a3243g = ($model->a3243g == 'true')?'Sim':'Não';

$model->gjb2 = ($model->gjb2 == 'true')?'Sim':'Não';
$model->gjb3 = ($model->gjb3 == 'true')?'Sim':'Não';
$model->gjb6 = ($model->gjb6 == 'true')?'Sim':'Não';
$model->slc26a4 = ($model->slc26a4 == 'true')?'Sim':'Não';
$model->otof = ($model->otof == 'true')?'Sim':'Não';
$model->mtrnr1 = ($model->mtrnr1 == 'true')?'Sim':'Não';
$model->outros_genes = ($model->outros_genes == 'true')?'Sim':'Não';

$model->homozigoto_normal=($model->homozigoto_normal == 'true')?'Sim':'Não';
$model->homozigoto_mutante=($model->homozigoto_mutante == 'true')?'Sim':'Não';
$model->heterozigoto=($model->heterozigoto == 'true')?'Sim':'Não';

$model->del_gjb6_d13s1830 = ($model->del_gjb6_d13s1830 == 'true')?'Sim':'Não';
$model->del_gjb6_d13s1854 = ($model->del_gjb6_d13s1854 == 'true')?'Sim':'Não';
$model->del_3 = ($model->del_3 == 'true')?'Sim':'Não';
$model->del_4 = ($model->del_4 == 'true')?'Sim':'Não';
$model->del_5 = ($model->del_5 == 'true')?'Sim':'Não';

$model->a1555g = ($model->a1555g == 'true')?'Sim':'Não';
$model->c1494t = ($model->c1494t == 'true')?'Sim':'Não';
$model->a827g = ($model->a827g == 'true')?'Sim':'Não';	
$model->a7445g = ($model->a7445g == 'true')?'Sim':'Não';
$model->a7444g = ($model->a7444g == 'true')?'Sim':'Não';
$model->a3243g = ($model->a3243g == 'true')?'Sim':'Não';

$model->gjb2 = ($model->gjb2 == 'true')?'Sim':'Não';
$model->gjb3 = ($model->gjb3 == 'true')?'Sim':'Não';
$model->gjb6 = ($model->gjb6 == 'true')?'Sim':'Não';
$model->slc26a4 = ($model->slc26a4 == 'true')?'Sim':'Não';
$model->otof = ($model->otof == 'true')?'Sim':'Não';
$model->mtrnr1 = ($model->mtrnr1 == 'true')?'Sim':'Não';
$model->outros_genes = ($model->outros_genes == 'true')?'Sim':'Não';

?>

<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.margem{ margin-right:15px;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<p class='linha'>
	<div class="alinhamento">
		<span>Genética:</span><b> <?php echo CHtml::encode($model->genetica); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<span>Hipótese diagnóstica:</span><b> <?php echo CHtml::encode($model->hipotese_diagnostica); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<span>Conduta:</span><b> <?php echo CHtml::encode($model->conduta); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<span>Alterações observadas:</span><b> <?php echo CHtml::encode($model->alteracoes_observadas); ?></b>
	</div>
</p><br/>
<h4>Alterações frequentes</h4>
<p class='linha'>
	<div class="item30 alinhamento">
		<span>Homozigoto normal (N/N):</span><b> <?php echo CHtml::encode($model->homozigoto_normal); ?></b>
	</div>
	<div class="item40 alinhamento">
		<span>Homozigoto mutante (35deIG/35deIG):</span><b> <?php echo CHtml::encode($model->homozigoto_mutante); ?></b>
	</div>
	<div class="alinhamento">
		<span>Heterozigoto (35deIG/N):</span><b> <?php echo CHtml::encode($model->heterozigoto); ?></b>
	</div>
</p><br/>
<h4>Deleções</h4>
<p class='linha'>
	<div class="alinhamento margem">
		<span>Del (GJB6-D13S1830):</span><b> <?php echo CHtml::encode($model->del_gjb6_d13s1830); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Del (GJB6-D13S1854):</span><b> <?php echo CHtml::encode($model->del_gjb6_d13s1854); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Del 3:</span><b> <?php echo CHtml::encode($model->del_3); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Del 4:</span><b> <?php echo CHtml::encode($model->del_4); ?></b>
	</div>
	<div class="alinhamento">
		<span>Del 5:</span><b> <?php echo CHtml::encode($model->del_5); ?></b>
	</div>
</p><br/>
<h4>Mutações Mitocondriais Frequentes</h4>
<p class='linha'>
	<div class="alinhamento margem">
		<span>A1555G:</span><b> <?php echo CHtml::encode($model->a1555g); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>C1494T:</span><b> <?php echo CHtml::encode($model->c1494t); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>A827G:</span><b> <?php echo CHtml::encode($model->a827g); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>A7445G:</span><b> <?php echo CHtml::encode($model->a7445g); ?></b>
	</div>
	<div class="alinhamento">
		<span>A7444G:</span><b> <?php echo CHtml::encode($model->a7444g); ?></b>
	</div>
	<div class="alinhamento">
		<span>A3243G:</span><b> <?php echo CHtml::encode($model->a3243g); ?></b>
	</div>
</p><br/>
<h4>Genes</h4>
<p class='linha'>
	<div class="alinhamento margem">
		<span>GJB2:</span><b> <?php echo CHtml::encode($model->gjb2); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->gjb2_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<span>GJB6:</span><b> <?php echo CHtml::encode($model->gjb6); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->gjb6_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<span>GJB3:</span><b> <?php echo CHtml::encode($model->gjb3); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->gjb3_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<span>SLC26A4:</span><b> <?php echo CHtml::encode($model->slc26a4); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->slc26a4_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<span>OTOF:</span><b> <?php echo CHtml::encode($model->otof); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->otof_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<span>MTRNR1:</span><b> <?php echo CHtml::encode($model->mtrnr1); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->mtrnr1_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<span>Outros genes:</span><b> <?php echo CHtml::encode($model->outros_genes); ?></b>
	</div>
	<div class="alinhamento margem">
		<span>Genótipo:</span><b> <?php echo CHtml::encode($model->outros_genes_genotipo); ?></b>
	</div>
</p>
	
<?php 
$this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnGoGenetica',
    'caption'=>'Editar dados genética',
    'options'=>array('icons'=>'js:{secondary:"ui-icon-extlink"}'),
    'url'=>array('genetica/update','id'=>$model->id),
));?>