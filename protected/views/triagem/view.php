<?php
/* @var $this TriagemController */
/* @var $model Triagem */

$this->breadcrumbs=array(
	'Triagem'=>array('index'),
	$model->pacienteR->nome,
);
$model->metodo_avaliacao = ($model->metodo_avaliacao == 'capurro')?'Capurro':'New Ballard';
$model->termo = ($model->termo == 'termo')?'Termo':'Pré-termo';
$model->crescimento = strtoupper($model->crescimento);
$model->tipo_exame = strtoupper($model->tipo_exame);

$model->falhou_35=($model->falhou_35 == 'true')?'Sim':'Não';
$model->falhou_40=($model->falhou_40 == 'true')?'Sim':'Não';
$model->falhou_45=($model->falhou_45 == 'true')?'Sim':'Não';

$model->historia_perda_auditiva=($model->historia_perda_auditiva == 'true')?'Sim':'Não';
$model->consanguinidade=($model->consanguinidade == 'true')?'Sim':'Não';
$model->peso_inferiro_1500=($model->peso_inferiro_1500 == 'true')?'Sim':'Não';
$model->pig=($model->pig == 'true')?'Sim':'Não';
$model->nascimento_pre_termo=($model->nascimento_pre_termo == 'true')?'Sim':'Não';
$model->apgar_04_primeiro_minuto=($model->apgar_04_primeiro_minuto == 'true')?'Sim':'Não';
$model->apgar_06_quinto_minuto=($model->apgar_06_quinto_minuto == 'true')?'Sim':'Não';
$model->uti_5_dias=($model->uti_5_dias == 'true')?'Sim':'Não';
$model->ventilacao_mecanica=($model->ventilacao_mecanica == 'true')?'Sim':'Não';

$model->drogas_ototoxicas=($model->drogas_ototoxicas == 'true')?'Sim':'Não';
$model->hiperbilirrubinemia=($model->hiperbilirrubinemia == 'true')?'Sim':'Não';
$model->anomalias_cranio_faciais=($model->anomalias_cranio_faciais == 'true')?'Sim':'Não';
$model->anoxia_perinatal_grave=($model->anoxia_perinatal_grave == 'true')?'Sim':'Não';
$model->asfixia_neonatal=($model->asfixia_neonatal == 'true')?'Sim':'Não';
$model->traumatismo_craniano=($model->traumatismo_craniano == 'true')?'Sim':'Não';
$model->quimioterapia=($model->quimioterapia == 'true')?'Sim':'Não';
$model->materno_drogas_ilicitas=($model->materno_drogas_ilicitas == 'true')?'Sim':'Não';
$model->disturbios_neurodegenerativos=($model->disturbios_neurodegenerativos == 'true')?'Sim':'Não';

$model->infeccoes_congenitas_toxoplasmose=($model->infeccoes_congenitas_toxoplasmose == 'true')?'Sim':'Não';
$model->infeccoes_congenitas_rubeola=($model->infeccoes_congenitas_rubeola == 'true')?'Sim':'Não';
$model->infeccoes_congenitas_citomegalovirus=($model->infeccoes_congenitas_citomegalovirus == 'true')?'Sim':'Não';
$model->infeccoes_congenitas_herpes=($model->infeccoes_congenitas_herpes == 'true')?'Sim':'Não';
$model->infeccoes_congenitas_sifilis=($model->infeccoes_congenitas_sifilis == 'true')?'Sim':'Não';
$model->infeccoes_congenitas_hiv=($model->infeccoes_congenitas_hiv == 'true')?'Sim':'Não';

$model->infeccoes_bacterianas_virais_citomegalovirus=($model->infeccoes_bacterianas_virais_citomegalovirus == 'true')?'Sim':'Não';
$model->infeccoes_bacterianas_virais_herpes=($model->infeccoes_bacterianas_virais_herpes == 'true')?'Sim':'Não';
$model->infeccoes_bacterianas_virais_sarampo=($model->infeccoes_bacterianas_virais_sarampo == 'true')?'Sim':'Não';
$model->infeccoes_bacterianas_virais_varicela=($model->infeccoes_bacterianas_virais_varicela == 'true')?'Sim':'Não';
$model->infeccoes_bacterianas_virais_meningite=($model->infeccoes_bacterianas_virais_meningite == 'true')?'Sim':'Não';
$model->infeccoes_bacterianas_virais_outra=($model->infeccoes_bacterianas_virais_outra == 'true')?'Sim':'Não';

?>
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.margem{margin-right:12px;}
	.direita{float: right;}
	.esquerda{float:left;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div>
	<div class='alinhamento'><h1>Dados da Triagem do Paciente: <?php echo $model->pacienteR->nome; ?></h1></div>
	<div class='alinhamento direita'>última atualização: <i><?php echo $model->last_update; ?></i></div>
</div>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Peso:</span></b> <?php echo CHtml::encode($model->peso); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Idade dias:</span></b> <?php echo CHtml::encode($model->idade_dias); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Idade semanas:</span></b> <?php echo CHtml::encode($model->idade_semanas); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Apgar 1:</span></b> <?php echo CHtml::encode($model->apgar_1); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Apgar 5:</span></b> <?php echo CHtml::encode($model->apgar_5); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Apgar 10:</span></b> <?php echo CHtml::encode($model->apgar_10); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Método de Avaliação:</span></b> <?php echo CHtml::encode($model->metodo_avaliacao); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Score:</span></b> <?php echo CHtml::encode($model->avaliacao_score); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Termo:</span></b> <?php echo CHtml::encode($model->termo); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Crescimento intra-uterino:</span></b> <?php echo CHtml::encode($model->crescimento); ?>
	</div>
</p>
<p class='linha'>
	<div class="item50 alinhamento">
		
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Tipo exame:</span></b> <?php echo CHtml::encode($model->tipo_exame); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Resultado Ouvido Esquerdo:</span></b> <?php echo CHtml::encode($model->resultado_esquerdo); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Resultado Ouvido Direito:</span></b> <?php echo CHtml::encode($model->resultado_direito); ?>
	</div>
</p>
<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Falhou 35:</span></b> <?php echo CHtml::encode($model->falhou_35); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Falhou 40:</span></b> <?php echo CHtml::encode($model->falhou_40); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Falhou 45:</span></b> <?php echo CHtml::encode($model->falhou_45); ?>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>História familiar de perda auditiva permanente na infância:</span></b> <?php echo CHtml::encode($model->historia_perda_auditiva); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Consangüinidade:</span></b> <?php echo CHtml::encode($model->consanguinidade); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Peso ao nascer inferior a 1500g:</span></b> <?php echo CHtml::encode($model->peso_inferiro_1500); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Pequeno para a idade gestacional (PIG):</span></b> <?php echo CHtml::encode($model->pig); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Nascimento pré-termo:</span></b> <?php echo CHtml::encode($model->nascimento_pre_termo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Apgar neonatal de 0 a 4 no primeiro minuto:</span></b> <?php echo CHtml::encode($model->apgar_04_primeiro_minuto); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Apgar neonatal de 0 a 6 no quinto minuto:</span></b> <?php echo CHtml::encode($model->apgar_06_quinto_minuto); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Permanência na UTI por mais de 5 dias:</span></b> <?php echo CHtml::encode($model->uti_5_dias); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Ventilação mecânica:</span></b> <?php echo CHtml::encode($model->ventilacao_mecanica); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Exposição a drogas ototóxicas e/ou diuréticos de alça:</span></b> <?php echo CHtml::encode($model->drogas_ototoxicas); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Hiperbilirrubinemia:</span></b> <?php echo CHtml::encode($model->hiperbilirrubinemia); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Anomalias crânio-faciais envolvendo orelha e osso temporal:</span></b> <?php echo CHtml::encode($model->anomalias_cranio_faciais); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Anóxia perinatal grave:</span></b> <?php echo CHtml::encode($model->anoxia_perinatal_grave); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Asfixia neonatal:</span></b> <?php echo CHtml::encode($model->asfixia_neonatal); ?></b>
	</div>
</p>

<p class='linha'>
	<b>Infecções congênitas</b>
	<div class="alinhamento margem">
		<b><span>Toxoplasmose:</span></b> <?php echo CHtml::encode($model->infeccoes_congenitas_toxoplasmose); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Rubéola:</span></b> <?php echo CHtml::encode($model->infeccoes_congenitas_rubeola); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Citomegalovírus:</span></b> <?php echo CHtml::encode($model->infeccoes_congenitas_citomegalovirus); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>*Herpes:</span></b> <?php echo CHtml::encode($model->infeccoes_congenitas_herpes); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Sífilis:</span></b> <?php echo CHtml::encode($model->infeccoes_congenitas_sifilis); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Outras:</span></b> <?php echo CHtml::encode($model->infeccoes_congenitas_outra); ?></b>
	</div>
</p>

<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Síndrome genética que usualmente expressam deficiência auditiva. Qual?:</span></b> <?php echo CHtml::encode($model->sindrome_genetica_deficiencia_auditiva); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Distúrbios neurodegenerativos:</span></b> <?php echo CHtml::encode($model->disturbios_neurodegenerativos); ?></b>
	</div>
</p>

<p class='linha'>
	<b>Infecções congênitas</b>
	<div class="alinhamento margem">
		<b><span>Citomegalovirus:</span></b> <?php echo CHtml::encode($model->infeccoes_bacterianas_virais_citomegalovirus); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Herpes:</span></b> <?php echo CHtml::encode($model->infeccoes_bacterianas_virais_herpes); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Sarampo:</span></b> <?php echo CHtml::encode($model->infeccoes_bacterianas_virais_sarampo); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Varicela:</span></b> <?php echo CHtml::encode($model->infeccoes_bacterianas_virais_varicela); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Meningite:</span></b> <?php echo CHtml::encode($model->infeccoes_bacterianas_virais_meningite); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Outra:</span></b> <?php echo CHtml::encode($model->infeccoes_bacterianas_virais_outra); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Traumatismo craniano:</span></b> <?php echo CHtml::encode($model->traumatismo_craniano); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Quimioterapia:</span></b> <?php echo CHtml::encode($model->quimioterapia); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Uso materno de drogas ilícitas:</span></b> <?php echo CHtml::encode($model->materno_drogas_ilicitas); ?></b>
	</div>
</p>
