<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bem-vindo ao sistema de gerenciamento de dados do Programa de Saúde Auditiva</h1>

</p>
<h3>O que você deseja fazer?</h3>
<div class="boxHelp">
<strong>Cadastrar um novo paciente</strong>
<p>Vá até o menu 'Paciente' e clique em '<?php echo CHtml::link('Cadastrar novo paciente',array('paciente/create')) ?>'.</p>
</div>

<div class="boxHelp">
<strong>Ver uma lista de todos os pacientes cadastrados</strong>
<p>Vá até o menu 'Paciente' e clique em '<?php echo CHtml::link('Gerenciar pacientes',array('paciente/admin')) ?>'.</p>
</div>

<div class="boxHelp">
<strong>Editar os dados de um paciente</strong>
<p>Vá até o menu 'Paciente' e clique em '<?php echo CHtml::link('Gerenciar pacientes',array('paciente/admin')) ?>'. Na nova tela, você pode buscar o paciente pelo seu nome ou navegar através das páginas. Assim que encontrar o paciente a ser removido, clique no botão com o desenho do lápis.</p>
</div>


<div class="boxHelp">
<strong>Ver o perfil completo de um paciente, incluindo dados de genética, assistência social, triagem e outros dados</strong>
<p>Vá até o menu 'Paciente' e clique em '<?php echo CHtml::link('Gerenciar pacientes',array('paciente/admin')) ?>'. Na nova tela, você pode buscar o paciente pelo seu nome ou navegar através das páginas. Assim que encontrar o paciente a ser removido, clique no botão com o desenho da lupa.</p>
</div>


<div class="boxHelp">
<strong>Excluir um paciente</strong>
<p>Vá até o menu 'Paciente' e clique em '<?php echo CHtml::link('Gerenciar pacientes',array('paciente/admin')) ?>'. Na nova tela, você pode buscar o paciente pelo seu nome ou navegar através das páginas. Assim que encontrar o paciente a ser removido, clique no botão com o <span style="color:#900">'x'</span> em vermelho.</p>
</div>

<div class="boxHelp">
<strong>Inserir dados de triagem para um paciente</strong>
<p>Vá até o menu 'Triagem' e clique em '<?php echo CHtml::link('Cadastrar triagem para um paciente',array('triagem/create')) ?>'.</p>
</div>

