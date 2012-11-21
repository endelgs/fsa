<?php
/* @var $this TriagemController */
/* @var $model Triagem */
$baseurl = Yii::app()->request->baseUrl;
$urlsim = Yii::app()->request->baseUrl.'/images/Ok-icon.png';
$urlnao = Yii::app()->request->baseUrl.'/images/Close-2-icon.png';
$urledit = $baseurl.'/images/edit-icon.png';

$model->metodo_avaliacao = ($model->metodo_avaliacao == 'capurro')?'Capurro':'New Ballard';
$model->termo = ($model->termo == 'termo')?'Termo':'Pré-termo';
$model->crescimento = strtoupper($model->crescimento);
$model->tipo_exame = strtoupper($model->tipo_exame);

$model->resultado_esquerdo = ($model->resultado_esquerdo == 'passou')?$urlsim:$urlnao;
$model->resultado_direito = ($model->resultado_direito == 'passou')?$urlsim:$urlnao;

$model->falhou_35=($model->falhou_35 == 'true')?$urlsim:$urlnao;
$model->falhou_40=($model->falhou_40 == 'true')?$urlsim:$urlnao;
$model->falhou_45=($model->falhou_45 == 'true')?$urlsim:$urlnao;

$model->historia_perda_auditiva=($model->historia_perda_auditiva == 'true')?$urlsim:$urlnao;
$model->consanguinidade=($model->consanguinidade == 'true')?$urlsim:$urlnao;
$model->peso_inferiro_1500=($model->peso_inferiro_1500 == 'true')?$urlsim:$urlnao;
$model->pig=($model->pig == 'true')?$urlsim:$urlnao;
$model->nascimento_pre_termo=($model->nascimento_pre_termo == 'true')?$urlsim:$urlnao;
$model->apgar_04_primeiro_minuto=($model->apgar_04_primeiro_minuto == 'true')?$urlsim:$urlnao;
$model->apgar_06_quinto_minuto=($model->apgar_06_quinto_minuto == 'true')?$urlsim:$urlnao;
$model->uti_5_dias=($model->uti_5_dias == 'true')?$urlsim:$urlnao;
$model->ventilacao_mecanica=($model->ventilacao_mecanica == 'true')?$urlsim:$urlnao;

$model->drogas_ototoxicas=($model->drogas_ototoxicas == 'true')?$urlsim:$urlnao;
$model->hiperbilirrubinemia=($model->hiperbilirrubinemia == 'true')?$urlsim:$urlnao;
$model->anomalias_cranio_faciais=($model->anomalias_cranio_faciais == 'true')?$urlsim:$urlnao;
$model->anoxia_perinatal_grave=($model->anoxia_perinatal_grave == 'true')?$urlsim:$urlnao;
$model->asfixia_neonatal=($model->asfixia_neonatal == 'true')?$urlsim:$urlnao;
$model->traumatismo_craniano=($model->traumatismo_craniano == 'true')?$urlsim:$urlnao;
$model->quimioterapia=($model->quimioterapia == 'true')?$urlsim:$urlnao;
$model->materno_drogas_ilicitas=($model->materno_drogas_ilicitas == 'true')?$urlsim:$urlnao;
$model->disturbios_neurodegenerativos=($model->disturbios_neurodegenerativos == 'true')?$urlsim:$urlnao;

$model->infeccoes_congenitas_toxoplasmose=($model->infeccoes_congenitas_toxoplasmose == 'true')?$urlsim:$urlnao;
$model->infeccoes_congenitas_rubeola=($model->infeccoes_congenitas_rubeola == 'true')?$urlsim:$urlnao;
$model->infeccoes_congenitas_citomegalovirus=($model->infeccoes_congenitas_citomegalovirus == 'true')?$urlsim:$urlnao;
$model->infeccoes_congenitas_herpes=($model->infeccoes_congenitas_herpes == 'true')?$urlsim:$urlnao;
$model->infeccoes_congenitas_sifilis=($model->infeccoes_congenitas_sifilis == 'true')?$urlsim:$urlnao;
$model->infeccoes_congenitas_hiv=($model->infeccoes_congenitas_hiv == 'true')?$urlsim:$urlnao;

$model->infeccoes_bacterianas_virais_citomegalovirus=($model->infeccoes_bacterianas_virais_citomegalovirus == 'true')?$urlsim:$urlnao;
$model->infeccoes_bacterianas_virais_herpes=($model->infeccoes_bacterianas_virais_herpes == 'true')?$urlsim:$urlnao;
$model->infeccoes_bacterianas_virais_sarampo=($model->infeccoes_bacterianas_virais_sarampo == 'true')?$urlsim:$urlnao;
$model->infeccoes_bacterianas_virais_varicela=($model->infeccoes_bacterianas_virais_varicela == 'true')?$urlsim:$urlnao;
$model->infeccoes_bacterianas_virais_meningite=($model->infeccoes_bacterianas_virais_meningite == 'true')?$urlsim:$urlnao;
$model->infeccoes_bacterianas_virais_outra=($model->infeccoes_bacterianas_virais_outra == 'true')?$urlsim:$urlnao;
?>
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.esquerda{float: left;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>
<p>
	<div class='direita'>
		última atualização <?php echo $model->last_update ;?>
	</div>
</p>
<h2>Triagem</h2>
<hr/>
<p class='linha'>
</p>
<p class='linha'>
  <h3>Informação básica do paciente</h3>
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
<hr/>
<p class='linha'>
  <h3>Exames</h3>
	<div class="item30 alinhamento">
		<b><span>Tipo exame:</span></b> <?php echo CHtml::encode($model->tipo_exame); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Resultado Ouvido Esquerdo:</span></b> <?php echo CHtml::image($model->resultado_esquerdo); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Resultado Ouvido Direito:</span></b> <?php echo CHtml::image($model->resultado_direito); ?>
	</div>
</p>

<p class='linha'>
	<div class="item30 alinhamento">
		<b><span>Falhou 35:</span></b> <?php echo CHtml::image($model->falhou_35); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Falhou 40:</span></b> <?php echo CHtml::image($model->falhou_40); ?>
	</div>
	<div class="item30 alinhamento">
		<b><span>Falhou 45:</span></b> <?php echo CHtml::image($model->falhou_45); ?>
	</div>
</p>
<hr/>
<p class='linha'>
  <h3>Indicadores de Risco</h3>
	<div class="alinhamento margem">
		<b><span>História familiar de perda auditiva permanente na infância:</span></b> <?php echo CHtml::image($model->historia_perda_auditiva); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Consangüinidade:</span></b> <?php echo CHtml::image($model->consanguinidade); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Peso ao nascer inferior a 1500g:</span></b> <?php echo CHtml::image($model->peso_inferiro_1500); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Pequeno para a idade gestacional (PIG):</span></b> <?php echo CHtml::image($model->pig); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Nascimento pré-termo:</span></b> <?php echo CHtml::image($model->nascimento_pre_termo); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Apgar neonatal de 0 a 4 no primeiro minuto:</span></b> <?php echo CHtml::image($model->apgar_04_primeiro_minuto); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Apgar neonatal de 0 a 6 no quinto minuto:</span></b> <?php echo CHtml::image($model->apgar_06_quinto_minuto); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Permanência na UTI por mais de 5 dias:</span></b> <?php echo CHtml::image($model->uti_5_dias); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Ventilação mecânica:</span></b> <?php echo CHtml::image($model->ventilacao_mecanica); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Exposição a drogas ototóxicas e/ou diuréticos de alça:</span></b> <?php echo CHtml::image($model->drogas_ototoxicas); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Hiperbilirrubinemia:</span></b> <?php echo CHtml::image($model->hiperbilirrubinemia); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Anomalias crânio-faciais envolvendo orelha e osso temporal:</span></b> <?php echo CHtml::image($model->anomalias_cranio_faciais); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Anóxia perinatal grave:</span></b> <?php echo CHtml::image($model->anoxia_perinatal_grave); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Asfixia neonatal:</span></b> <?php echo CHtml::image($model->asfixia_neonatal); ?></b>
	</div>
</p>
<hr>
<p class='linha'>
	<h3>Infecções congênitas</h3>
	<div class="alinhamento margem">
		<b><span>Toxoplasmose:</span></b> <?php echo CHtml::image($model->infeccoes_congenitas_toxoplasmose); ?>
	</div>
	<div class="alinhamento margem">
		<b><span>Rubéola:</span></b> <?php echo CHtml::image($model->infeccoes_congenitas_rubeola); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Citomegalovírus:</span></b> <?php echo CHtml::image($model->infeccoes_congenitas_citomegalovirus); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>*Herpes:</span></b> <?php echo CHtml::image($model->infeccoes_congenitas_herpes); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Sífilis:</span></b> <?php echo CHtml::image($model->infeccoes_congenitas_sifilis); ?></b>
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
		<b><span>Distúrbios neurodegenerativos:</span></b> <?php echo CHtml::image($model->disturbios_neurodegenerativos); ?></b>
	</div>
</p>
<hr/>
<p class='linha'>
	<h3>Infecções bacterianas ou virais pós-natal</h3>
	<div class="alinhamento margem">
		<b><span>Citomegalovirus:</span></b> <?php echo CHtml::image($model->infeccoes_bacterianas_virais_citomegalovirus); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Herpes:</span></b> <?php echo CHtml::image($model->infeccoes_bacterianas_virais_herpes); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Sarampo:</span></b> <?php echo CHtml::image($model->infeccoes_bacterianas_virais_sarampo); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Varicela:</span></b> <?php echo CHtml::image($model->infeccoes_bacterianas_virais_varicela); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Meningite:</span></b> <?php echo CHtml::image($model->infeccoes_bacterianas_virais_meningite); ?></b>
	</div>
	<div class="alinhamento margem">
		<b><span>Outra:</span></b> <?php echo CHtml::image($model->infeccoes_bacterianas_virais_outra); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Traumatismo craniano:</span></b> <?php echo CHtml::image($model->traumatismo_craniano); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Quimioterapia:</span></b> <?php echo CHtml::image($model->quimioterapia); ?></b>
	</div>
</p>
<p class='linha'>
	<div class="alinhamento margem">
		<b><span>Uso materno de drogas ilícitas:</span></b> <?php echo CHtml::image($model->materno_drogas_ilicitas); ?></b>
	</div>
</p>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar essa triagem",array("triagem/update","id" => $model->id),array('class' => 'botao'));?></p>
		
