<?php
/* @var $this GeneticaController */
/* @var $model Genetica */
      $baseurl = Yii::app()->request->baseUrl;
      $urlsim = Yii::app()->request->baseUrl.'/images/Ok-icon.png';
      $urlnao = Yii::app()->request->baseUrl.'/images/Close-2-icon.png';
      $urledit = $baseurl.'/images/edit-icon.png';

    $model->homozigoto_normal=($model->homozigoto_normal == 'true')?$urlsim:$urlnao;
    $model->homozigoto_mutante=($model->homozigoto_mutante == 'true')?$urlsim:$urlnao;
    $model->heterozigoto=($model->heterozigoto == 'true')?$urlsim:$urlnao;
    
    $model->del_gjb6_d13s1830 = ($model->del_gjb6_d13s1830 == 'true')?$urlsim:$urlnao;
    $model->del_gjb6_d13s1854 = ($model->del_gjb6_d13s1854 == 'true')?$urlsim:$urlnao;
    $model->del_3 = ($model->del_3 == 'true')?$urlsim:$urlnao;
    $model->del_4 = ($model->del_4 == 'true')?$urlsim:$urlnao;
    $model->del_5 = ($model->del_5 == 'true')?$urlsim:$urlnao;
    
    $model->a1555g = ($model->a1555g == 'true')?$urlsim:$urlnao;
	$model->c1494t = ($model->c1494t == 'true')?$urlsim:$urlnao;
	$model->a827g = ($model->a827g == 'true')?$urlsim:$urlnao;	
    $model->a7445g = ($model->a7445g == 'true')?$urlsim:$urlnao;
    $model->a7444g = ($model->a7444g == 'true')?$urlsim:$urlnao;
    $model->a3243g = ($model->a3243g == 'true')?$urlsim:$urlnao;
		
    $model->gjb2 = ($model->gjb2 == 'true')?$urlsim:$urlnao;
    $model->gjb3 = ($model->gjb3 == 'true')?$urlsim:$urlnao;
    $model->gjb6 = ($model->gjb6 == 'true')?$urlsim:$urlnao;
    $model->slc26a4 = ($model->slc26a4 == 'true')?$urlsim:$urlnao;
    $model->otof = ($model->otof == 'true')?$urlsim:$urlnao;
    $model->mtrnr1 = ($model->mtrnr1 == 'true')?$urlsim:$urlnao;
    $model->outros_genes = ($model->outros_genes == 'true')?$urlsim:$urlnao;
 ?>
 
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.margem{ margin-right:15px;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div class='direita'>
	última atualização <?php echo $model->last_update ;?>
</div>
<h2>Genética</h2>
<hr/>
<h3>Informações Básicas</h3>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Genética:</span></b> <?php echo CHtml::encode($model->genetica); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Hipótese diagnóstica:</span></b> <?php echo CHtml::encode($model->hipotese_diagnostica); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Conduta:</span></b> <?php echo CHtml::encode($model->conduta); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento">
		<b><span>Alterações observadas:</span></b> <?php echo CHtml::encode($model->alteracoes_observadas); ?>
	</div>
</p>
<hr/>
<h3>Alterações frequentes</h3>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Homozigoto normal (N/N):</span></b> <?php echo CHtml::image($model->homozigoto_normal); ?>
	</div>
	<div class="item40 alinhamento">
		<b><span>Homozigoto mutante (35deIG/35deIG):</span></b> <?php echo CHtml::image($model->homozigoto_mutante); ?>
	</div>
	<div class="alinhamento">
		<b><span>Heterozigoto (35deIG/N):</span></b> <?php echo CHtml::image($model->heterozigoto); ?>
	</div>
</p>
<hr/>
<h3>Deleções</h3>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Del (GJB6-D13S1830):</span></b> <?php echo CHtml::image($model->del_gjb6_d13s1830); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Del (GJB6-D13S1854):</span></b> <?php echo CHtml::image($model->del_gjb6_d13s1854); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Del 3:</span></b> <?php echo CHtml::image($model->del_3); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Del 4:</span></b> <?php echo CHtml::image($model->del_4); ?>
	</div>
	<div class="alinhamento">
		<b><span>Del 5:</span></b> <?php echo CHtml::image($model->del_5); ?>
	</div>
</p>
<hr/>
<h3>Mutações Mitocondriais Frequentes</h3>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>A1555G:</span></b> <?php echo CHtml::image($model->a1555g); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>C1494T:</span></b> <?php echo CHtml::image($model->c1494t); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>A827G:</span></b> <?php echo CHtml::image($model->a827g); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>A7445G:</span></b> <?php echo CHtml::image($model->a7445g); ?>
	</div>
	<div class="alinhamento">
		<b><span>A7444G:</span></b> <?php echo CHtml::image($model->a7444g); ?>
	</div>
	<div class="alinhamento">
		<b><span>A3243G:</span></b> <?php echo CHtml::image($model->a3243g); ?>
	</div>
</p>
<hr/>
<h3>Genes</h3>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>GJB2:</span></b> <?php echo CHtml::image($model->gjb2); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->gjb2_genotipo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>GJB6:</span></b> <?php echo CHtml::image($model->gjb6); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->gjb6_genotipo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>GJB3:</span></b> <?php echo CHtml::image($model->gjb3); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->gjb3_genotipo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>SLC26A4:</span></b> <?php echo CHtml::image($model->slc26a4); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->slc26a4_genotipo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>OTOF:</span></b> <?php echo CHtml::image($model->otof); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->otof_genotipo); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>MTRNR1:</span></b> <?php echo CHtml::image($model->mtrnr1); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->mtrnr1_genotipo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Outros genes:</span></b> <?php echo CHtml::image($model->outros_genes); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Genótipo:</span></b> <?php echo CHtml::encode($model->outros_genes_genotipo); ?></b>
	</div>
</p>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar dados de genética",array("genetica/update","id" => $model->id),array('class' => 'botao'));?></p>
