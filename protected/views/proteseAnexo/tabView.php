<?php
/* @var $this ProteseAnexoController */
/* @var $model ProteseAnexo */

if($model->primeiro_teste_dispositivo == '0')$model->primeiro_teste_dispositivo=' 0 = nunca';
else if($model->primeiro_teste_dispositivo == '1')$model->primeiro_teste_dispositivo=' 1 = raramente - 25% das vezes';
else if($model->primeiro_teste_dispositivo == '2')$model->primeiro_teste_dispositivo=' 2 = ocasionalmente - vocaliza todo o dia e aumento de 50% quando está ligado';
else if($model->primeiro_teste_dispositivo == '3')$model->primeiro_teste_dispositivo=' 3 = frequentemente - vocaliza todo o dia e aumento de 75% quando está ligado';
else if($model->primeiro_teste_dispositivo == '4')$model->primeiro_teste_dispositivo=' 4 = sempre - aumenta 100% quando está com dispositivo ligado';

if($model->emite_sons == '0')$model->emite_sons=' 0 = nunca';
else if($model->emite_sons == '1')$model->emite_sons=' 1 = raramente - 25% quando oferecido modelo.';
else if($model->emite_sons == '2')$model->emite_sons=' 2 = ocasionalmente - 50% quando oferecido modelo.';
else if($model->emite_sons == '3')$model->emite_sons=' 3 = frequentemente - 75% produz sequências silábicas espontaneamente e imita de forma clara com modelo';
else if($model->emite_sons == '4')$model->emite_sons=' 4 = sempre - produz consistentemente sem modelo e tem repertório variado de sons.';

if($model->resposta_espontanea == '0')$model->resposta_espontanea=' 0 = nunca';
else if($model->resposta_espontanea == '1')$model->resposta_espontanea=' 1 = raramente - 25% das vezes.';
else if($model->resposta_espontanea == '2')$model->resposta_espontanea=' 2 = ocasionalmente - 50% das vezes ou quando repete seu nome mais de uma vez.';
else if($model->resposta_espontanea == '3')$model->resposta_espontanea=' 3 = frequentemente - 75% das vezes na primeira tentativa';
else if($model->resposta_espontanea == '4')$model->resposta_espontanea=' 4 = sempre';

if($model->resposta_espontanea_ruido == '0')$model->resposta_espontanea_ruido=' 0 = nunca';
else if($model->resposta_espontanea_ruido == '1')$model->resposta_espontanea_ruido=' 1 = raramente - 25% das vezes.';
else if($model->resposta_espontanea_ruido == '2')$model->resposta_espontanea_ruido=' 2 = ocasionalmente - 50% das vezes ou quando repete seu nome mais de uma vez.';
else if($model->resposta_espontanea_ruido == '3')$model->resposta_espontanea_ruido=' 3 = frequentemente - 75% das vezes na primeira tentativa';
else if($model->resposta_espontanea_ruido == '4')$model->resposta_espontanea_ruido=' 4 = sempre';

if($model->atencao_espontanea_sons_ambiente == '0')$model->atencao_espontanea_sons_ambiente=' 0 = nunca';
else if($model->atencao_espontanea_sons_ambiente == '1')$model->atencao_espontanea_sons_ambiente=' 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)';
else if($model->atencao_espontanea_sons_ambiente == '2')$model->atencao_espontanea_sons_ambiente=' 2 = ocasionalmente - 50% das vezes a mais de 2 sons ambientais.';
else if($model->atencao_espontanea_sons_ambiente == '3')$model->atencao_espontanea_sons_ambiente=' 3 = frequentemente - responde consistentemente a muitos sons, 75% das vezes';
else if($model->atencao_espontanea_sons_ambiente == '4')$model->atencao_espontanea_sons_ambiente=' 4 = sempre';

if($model->atencao_espontanea_sinais_auditivos == '0')$model->atencao_espontanea_sinais_auditivos=' 0 = nunca';
else if($model->atencao_espontanea_sinais_auditivos == '1')$model->atencao_espontanea_sinais_auditivos=' 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)';
else if($model->atencao_espontanea_sinais_auditivos == '2')$model->atencao_espontanea_sinais_auditivos=' 2 = ocasionalmente - 50% das vezes, vários exemplos.';
else if($model->atencao_espontanea_sinais_auditivos == '3')$model->atencao_espontanea_sinais_auditivos=' 3 = frequentemente - é um fato corriqueiro, 75% das vezes';
else if($model->atencao_espontanea_sinais_auditivos == '4')$model->atencao_espontanea_sinais_auditivos=' 4 = sempre';

if($model->atencao_espontanea_sinais_auditivos_diariamente == '0')$model->atencao_espontanea_sinais_auditivos_diariamente=' 0 = nunca';
else if($model->atencao_espontanea_sinais_auditivos_diariamente == '1')$model->atencao_espontanea_sinais_auditivos_diariamente=' 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)';
else if($model->atencao_espontanea_sinais_auditivos_diariamente == '2')$model->atencao_espontanea_sinais_auditivos_diariamente=' 2 = ocasionalmente - 50% das vezes, vários exemplos.';
else if($model->atencao_espontanea_sinais_auditivos_diariamente == '3')$model->atencao_espontanea_sinais_auditivos_diariamente=' 3 = frequentemente - é um fato corriqueiro, 75% das vezes';
else if($model->atencao_espontanea_sinais_auditivos_diariamente == '4')$model->atencao_espontanea_sinais_auditivos_diariamente=' 4 = sempre';

if($model->habilidade_discriminar_dois_falantes == '0')$model->habilidade_discriminar_dois_falantes=' 0 = nunca';
else if($model->habilidade_discriminar_dois_falantes == '1')$model->habilidade_discriminar_dois_falantes=' 1 = raramente - discrimina duas vozes diferentes 25% das vezes';
else if($model->habilidade_discriminar_dois_falantes == '2')$model->habilidade_discriminar_dois_falantes=' 2 = ocasionalmente - discrimina duas vozes diferentes 50% das vezes';
else if($model->habilidade_discriminar_dois_falantes == '3')$model->habilidade_discriminar_dois_falantes=' 3 = frequentemente - discrimina duas vozes diferentes ou similares 75% das vezes';
else if($model->habilidade_discriminar_dois_falantes == '4')$model->habilidade_discriminar_dois_falantes=' 4 = sempre';

if($model->reconhece_estimulos_fala_audicao == '0')$model->reconhece_estimulos_fala_audicao=' 0 = nunca';
else if($model->reconhece_estimulos_fala_audicao == '1')$model->reconhece_estimulos_fala_audicao=' 1 = raramente - 25% das vezes a diferentes sons (1 ou 2 exemplos)';
else if($model->reconhece_estimulos_fala_audicao == '2')$model->reconhece_estimulos_fala_audicao=' 2 = ocasionalmente - 50% das vezes, vários exemplos.';
else if($model->reconhece_estimulos_fala_audicao == '3')$model->reconhece_estimulos_fala_audicao=' 3 = frequentemente - é um fato corriqueiro, 75% das vezes';
else if($model->reconhece_estimulos_fala_audicao == '4')$model->reconhece_estimulos_fala_audicao=' 4 = sempre';

if($model->associa_entonacao == '0')$model->associa_entonacao=' 0 = nunca';
else if($model->associa_entonacao == '1')$model->associa_entonacao=' 1 = raramente - apresenta esse comportamente 25% das vezes';
else if($model->associa_entonacao == '2')$model->associa_entonacao=' 2 = ocasionalmente - apresenta esse comportamente 50% das vezes';
else if($model->associa_entonacao == '3')$model->associa_entonacao=' 3 = frequentemente - apresenta esse comportamente 75% das vezes';
else if($model->associa_entonacao == '4')$model->associa_entonacao=' 4 = sempre';

$baseurl = Yii::app()->request->baseUrl;
$urledit = $baseurl.'/images/edit-icon.png';

 ?>
 
<style>
	.linha{}
	.alinhamento{display:inline-block;}
	.direita{float: right;}
	.item50{width:50%;}
	.item40{width:40%;}
	.item30{width:30%;}
	.item20{width:20%;}
	.item10{width:10%;}
</style>

<div class='direita'>
	última atualização <?php echo $model->last_update ;?>
</div>
<h2>Anexo de Prótese</h2>
<hr/>
<div class="row">
		<h3>1 - O comportamento vocal da criança é modificado é modificado quando está usando o seu dispositivo auditivo (AASI ou implante Coclear) ?</h3>
		<?php echo CHtml::encode($model->comportamento_vocal); ?>
	</div><br/>
	<div class="row">
		<b class="subpergunta">a) Descreva as vocalizações da criança quando o dispositivo é colocado pela primeira vez no dia.</b><br/><br/>
		<?php echo CHtml::encode($model->primeiras_vocalizacoes); ?>
	</div><br/>
	<div class="row">
		<b class="subpergunta">b) Se você esqueceu de colocar o dispositivo auditivo, ou este não está funcionando adequadamente, as vocalizações da criança se alteram de alguma maneira? Cite como e em que frenquência elas ocorrem.</b><br/><br/>
		<?php echo CHtml::encode($model->esqueceu_dispositivo); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">c) A criança testa o dispositivo auditivo vocalizando quando este é ligado pela primeira vez?</b><br/><br/>
		<?php echo CHtml::encode($model->primeiro_teste_dispositivo); ?>
	</div>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>2 - A criança produz sílabas bem articuladas e sequências silábicas que podem ser reconhecidas como fala? (Ex. mamama,bababa...)</h3>
		<?php echo CHtml::encode($model->silabas_articuladas); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança "conversa" com você ou com objetos?</b><br/><br/>
		<?php echo CHtml::encode($model->crianca_conversa); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">b) Quando brinca sozinha que tipos de sons você escuta quando está com o dispositivo auditivo ligado? Cite exemplos.</b><br/><br/>
		<?php echo CHtml::encode($model->tipos_sons_brincadeira); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">c) A criança emite sons e palavras usadas em rimas infantis ou quando está brincando com bonecos (Ex. upa upa, baaaa muuu, ai ai ai...) ? Cite exemplos.</b></br><br/>
		<?php echo CHtml::encode($model->emite_sons_exemplo); ?>
	</div>
  <br/>
	<div class="row">
    <b class="subpergunta">d) Com que frequência?</b><br/><br/>
		<?php echo CHtml::encode($model->emite_sons); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>3 - Se você chamou a criança por trás, numa sala silenciosa, sem pista visual, com que frequência ela responde à primeira chamada (para de brincar, olha para cima ou ao redor, cessa o choro ou sucção da chupeta..)? Cite exemplos.</h3>
		<?php echo CHtml::encode($model->resposta_primeira_chamada); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança responde espontaneamente ao seu nome, em ambiente silencioso, somente através da via auditiva, sem pistas visuais?</b></br><br/>
		<?php echo CHtml::encode($model->resposta_espontanea); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>4 - Se vocẽ chamou a criança por trás, num ambiente ruidoso, como uma sala com pessoas conversando, crianças bricando ou com televisão ligada, sem pista visual, em que porcentagem ela responde à primeira chamada? Cite exemplos</h3>
		<?php echo CHtml::encode($model->resposta_chamada_ruido); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">A criança responde espontaneamente ao seu nome, na presença de ruido de fundo, somente através da via auditiva, sem pistas visuais?</b></br><br/>
		<?php echo CHtml::encode($model->resposta_espontanea_ruido); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>5 - Cite exemplos de sons ambientais que a criança responde em casa ou em situações familiares (restaurantes, lojas, parques infantis...) Ex: telefone, campanhia, cachorro, alarme...</h3>
		<?php echo CHtml::encode($model->sons_ambientais); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança, espontaneamente, está atenta aos sona ambientais sem que ser induzida ou alertada sobre estes? O comportamento de respostas deve ser demonstrado quando a criança detecta o som pela primeira vez ou quando este cessou.</b></br><br/>
		<?php echo CHtml::encode($model->atencao_espontanea_sons_ambiente); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>6 - A criança mostra curiosidade (verbalmente ou não) para novos sons, quando em locais não familiares, tais como lojas, restaurantes, outras casa...? Ex. sinos, alarmes, choros, risos..</h3>
		<?php echo CHtml::encode($model->curiosidade_novos_sons); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<b class="subpergunta">a) A criança está atenta, espontaneamente, aos sinais auditivos, quando em novos ambientes?</b></br><br/>
		<?php echo CHtml::encode($model->atencao_espontanea_sinais_auditivos); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>	
	<div class="row">
		<h3>7 - A criança reconhece regularmente, ou responde adequadamente aos sinais auditivos que ocorrem na creche, pré-escola ou em casa, sem pistas visuais ou alerta? Ex: olhar para fonte sonora quando ocorre o barulho.</h3>
		<?php echo CHtml::encode($model->reconhece_sinais_auditivos); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança reconhece, espontaneamente, os sinais auditivos que faem parte de sua rotina diaria?</b></br><br/>
		<?php echo CHtml::encode($model->atencao_espontanea_sinais_auditivos_diariamente); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>8 - A criança pode diferenciar duas vozes prontamente? Se está brincando com dois irmãos e um deles fala alguma coisa, ela olha em sua direção corretamente?</h3>
		<?php echo CHtml::encode($model->diferenciar_vozes); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança demonstra habilidade para discriminar espontaneamente dois falantes, usando somente a audição, sem pista visuais?</b></br><br/>
		<?php echo CHtml::encode($model->habilidade_discriminar_dois_falantes); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>9 - A criança reconhece o som da fala de outros sons não verbais? Por exemplo, se você está na sala junto com a criança e a chama, ela olha para você ou para o brinquedo?</h3>
		<?php echo CHtml::encode($model->reconhece_fala_sons_nao_verbais); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança reconhece espontaneamente as diferenças entre estímulos de fala enão verbais somente através da audição?</b></br><br/>
		<?php echo CHtml::encode($model->reconhece_estimulos_fala_audicao); ?>
	</div>
	<br/>
	<div class="larguraDefault"><hr/></div>
	<div class="row">
		<h3>10 - Somente através da audição a criança pode perceber a emoção inerente á voz de alguma pessoa, assim como uma voz brava, excitada, etc..? Exemplos, a mãe grita, e a criança chora assustada.</h3>
		<?php echo CHtml::encode($model->emocao_voz_pessoa); ?>
	</div>
	<br/>
	<div class="row">
		<b class="subpergunta">a) A criança associa espontaneamente a entonação da voz (raiva, excitação, ansiedade) ao significado, apenas através da audição?</b></br><br/>
		<?php echo CHtml::encode($model->associa_entonacao); ?>
	</div>
  <br/>
<hr/>
<p><img src="<?php echo $urledit;?>"/> <?php echo CHtml::link("Editar esse anexo de prótese",array("proteseAnexo/update","id" => $model->id),array('class' => 'botao'));?></p>