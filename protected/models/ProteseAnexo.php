<?php

/**
 * This is the model class for table "protese_anexo".
 *
 * The followings are the available columns in table 'protese_anexo':
 * @property integer $id
 * @property string $comportamento_vocal
 * @property string $primeiras_vocalizacoes
 * @property string $esqueceu_dispositivo
 * @property string $primeiro_teste_dispositivo
 * @property string $silabas_articuladas
 * @property string $crianca_conversa
 * @property string $tipos_sons_brincadeira
 * @property string $emite_sons_exemplo
 * @property string $emite_sons
 * @property string $resposta_primeira_chamada
 * @property string $resposta_espontanea
 * @property string $resposta_chamada_ruido
 * @property string $resposta_espontanea_ruido
 * @property string $sons_ambientais
 * @property string $atencao_espontanea_sons_ambiente
 * @property string $curiosidade_novos_sons
 * @property string $atencao_espontanea_sinais_auditivos
 * @property string $reconhece_sinais_auditivos
 * @property string $atencao_espontanea_sinais_auditivos_diariamente
 * @property string $diferenciar_vozes
 * @property string $habilidade_discriminar_dois_falantes
 * @property string $reconhece_fala_sons_nao_verbais
 * @property string $reconhece_estimulos_fala_audicao
 * @property string $emocao_voz_pessoa
 * @property string $associa_entonacao
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 */
class ProteseAnexo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProteseAnexo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'protese_anexo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comportamento_vocal, primeiras_vocalizacoes, esqueceu_dispositivo, primeiro_teste_dispositivo, silabas_articuladas, crianca_conversa, tipos_sons_brincadeira, emite_sons_exemplo, emite_sons, resposta_primeira_chamada, resposta_espontanea, resposta_chamada_ruido, resposta_espontanea_ruido, sons_ambientais, atencao_espontanea_sons_ambiente, curiosidade_novos_sons, atencao_espontanea_sinais_auditivos, reconhece_sinais_auditivos, atencao_espontanea_sinais_auditivos_diariamente, diferenciar_vozes, habilidade_discriminar_dois_falantes, reconhece_fala_sons_nao_verbais, reconhece_estimulos_fala_audicao, emocao_voz_pessoa, associa_entonacao, paciente_r', 'required'),
			array('paciente_r', 'numerical', 'integerOnly'=>true),
			array('primeiro_teste_dispositivo, emite_sons, resposta_espontanea, resposta_espontanea_ruido, atencao_espontanea_sons_ambiente, atencao_espontanea_sinais_auditivos, atencao_espontanea_sinais_auditivos_diariamente, habilidade_discriminar_dois_falantes, reconhece_estimulos_fala_audicao, associa_entonacao', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, comportamento_vocal, primeiras_vocalizacoes, esqueceu_dispositivo, primeiro_teste_dispositivo, silabas_articuladas, crianca_conversa, tipos_sons_brincadeira, emite_sons_exemplo, emite_sons, resposta_primeira_chamada, resposta_espontanea, resposta_chamada_ruido, resposta_espontanea_ruido, sons_ambientais, atencao_espontanea_sons_ambiente, curiosidade_novos_sons, atencao_espontanea_sinais_auditivos, reconhece_sinais_auditivos, atencao_espontanea_sinais_auditivos_diariamente, diferenciar_vozes, habilidade_discriminar_dois_falantes, reconhece_fala_sons_nao_verbais, reconhece_estimulos_fala_audicao, emocao_voz_pessoa, associa_entonacao, last_update, paciente_r', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pacienteR' => array(self::BELONGS_TO, 'Paciente', 'paciente_r'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comportamento_vocal' => 'O comportamento vocal da criança é modificado é modificado quando está usando o seu dispositivo auditivo (AASI ou implante Coclear) ?',
			'primeiras_vocalizacoes' => 'Descreva as vocalizações da criança quando o dispositivo é colocado pela primeira vez no dia.',
			'esqueceu_dispositivo' => 'Se você esqueceu de colocar o dispositivo auditivo, ou este não está funcionando adequadamente, as vocalizações da criança se alteram de alguma maneira? Cite como e em que frenquência elas ocorrem.',
			'primeiro_teste_dispositivo' => 'A criança testa o dispositivo auditivo vocalizando quando este é ligado pela primeira vez?',
			'silabas_articuladas' => 'A criança produz silabas bem articuladas e sequências silábicas que podem ser reconhecidas como fala? (Ex. mamama,bababa...)',
			'crianca_conversa' => 'A criança "conversa" com você ou com objetos?',
			'tipos_sons_brincadeira' => 'Quando brinca sozinha que tipos de sons você escuta quando está com o dispositivo auditivo ligado? Cite exemplos.',
			'emite_sons_exemplo' => 'A criança emite sons e palavras usadas em rimas infantis ou quando está brincando com bonecos (Ex. upa upa, baaaa muuu, ai ai ai...) ? Cite exemplos.',
			'emite_sons' => '',
			'resposta_primeira_chamada' => 'Se você chamou a criança por trás, numa sala silenciosa, sem pista visual, com que frequência ela responde à primeira chamada (para de brincar, olha para cima ou ao redor, cessa o choro ou sucção da chupeta..)? Cite exemplos.',
			'resposta_espontanea' => 'A criança responde espontaneamente ao seu nome, em ambiente silencioso, somente através da via auditiva, sem pistas visuais?',
			'resposta_chamada_ruido' => 'Se vocẽ chamou a criança por trás, num ambiente ruidoso, como uma sala com pessoas conversando, crianças bricando ou com televisão ligada, sem pista visual, em que porcentagem ela responde à primeira chamada? Cite exemplos',
			'resposta_espontanea_ruido' => 'A criança responde espontaneamente ao seu nome, na presença de ruido de fundo, somente através da via auditiva, sem pistas visuais?',
			'sons_ambientais' => 'Cite exemplos de sons ambientais que a criança responde em casa ou em situações familiares (restaurantes, lojas, parques infantis...) Ex: telefone, campanhia, cachorro, alarme...',
			'atencao_espontanea_sons_ambiente' => 'A criança, espontaneamente, está atenta aos sona ambientais sem que ser induzida ou alertada sobre estes? O comportamento de respostas deve ser demonstrado quando a criança detecta o som pela primeira vez ou quando este cessou.',
			'curiosidade_novos_sons' => 'A criança mostra curidosidade (verbalmente ou não) para novos sons, quando em locais não familiares, tais como lojas, restaurantes, outras casa...? Ex. sinos, alarmes, choros, risos..',
			'atencao_espontanea_sinais_auditivos' => 'A criança está atenta, espontaneamente, aos sinais auditivos, quando em novos ambientes?',
			'reconhece_sinais_auditivos' => 'A criança reconhece regularmente, ou responde adequadamente aos sinais auditivos que ocorrem na creche, pré-escola ou em casa, sem pistas visuais ou alerta? Ex: olhar para fonte sonora quando ocorre o barulho.',
			'atencao_espontanea_sinais_auditivos_diariamente' => 'A criança reconhece, espontaneamente, os sinais auditivos que faem parte de sua rotina diaria?',
			'diferenciar_vozes' => 'A criança pode diferenciar duas vozes prontamente? Se está brincando com dois irmãos e um deles fala alguma coisa, ela olha em sua direção corretamente?',
			'habilidade_discriminar_dois_falantes' => 'A criança demonstra habilidade para discriminar espontaneamente dois falantes, usando somente a audição, sem pista visuais?',
			'reconhece_fala_sons_nao_verbais' => 'A criança reconhece o som da fala de outros sons não verbais? Por exemplo, se você está na sala junto com a criança e a chama, ela olha para você ou para o brinquedo?',
			'reconhece_estimulos_fala_audicao' => 'A criança reconhece espontaneamente as diferenças entre estímulos de fala enão verbais somente através da audição?',
			'emocao_voz_pessoa' => 'Somente através da audição a criança pode perceber a emoção inerente á voz de alguma pessoa, assim como uma voz brava, excitada, etc..? Exemplos, a mãe grita, e a criança chora assustada.',
			'associa_entonacao' => 'A criança associa espontaneamente a entonação da voz (raiva, excitação, ansiedade) ao significado, apenas através da audição?',
			'last_update' => 'Last Update',
			'paciente_r' => 'Paciente',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('comportamento_vocal',$this->comportamento_vocal,true);
		$criteria->compare('primeiras_vocalizacoes',$this->primeiras_vocalizacoes,true);
		$criteria->compare('esqueceu_dispositivo',$this->esqueceu_dispositivo,true);
		$criteria->compare('primeiro_teste_dispositivo',$this->primeiro_teste_dispositivo,true);
		$criteria->compare('silabas_articuladas',$this->silabas_articuladas,true);
		$criteria->compare('crianca_conversa',$this->crianca_conversa,true);
		$criteria->compare('tipos_sons_brincadeira',$this->tipos_sons_brincadeira,true);
		$criteria->compare('emite_sons_exemplo',$this->emite_sons_exemplo,true);
		$criteria->compare('emite_sons',$this->emite_sons,true);
		$criteria->compare('resposta_primeira_chamada',$this->resposta_primeira_chamada,true);
		$criteria->compare('resposta_espontanea',$this->resposta_espontanea,true);
		$criteria->compare('resposta_chamada_ruido',$this->resposta_chamada_ruido,true);
		$criteria->compare('resposta_espontanea_ruido',$this->resposta_espontanea_ruido,true);
		$criteria->compare('sons_ambientais',$this->sons_ambientais,true);
		$criteria->compare('atencao_espontanea_sons_ambiente',$this->atencao_espontanea_sons_ambiente,true);
		$criteria->compare('curiosidade_novos_sons',$this->curiosidade_novos_sons,true);
		$criteria->compare('atencao_espontanea_sinais_auditivos',$this->atencao_espontanea_sinais_auditivos,true);
		$criteria->compare('reconhece_sinais_auditivos',$this->reconhece_sinais_auditivos,true);
		$criteria->compare('atencao_espontanea_sinais_auditivos_diariamente',$this->atencao_espontanea_sinais_auditivos_diariamente,true);
		$criteria->compare('diferenciar_vozes',$this->diferenciar_vozes,true);
		$criteria->compare('habilidade_discriminar_dois_falantes',$this->habilidade_discriminar_dois_falantes,true);
		$criteria->compare('reconhece_fala_sons_nao_verbais',$this->reconhece_fala_sons_nao_verbais,true);
		$criteria->compare('reconhece_estimulos_fala_audicao',$this->reconhece_estimulos_fala_audicao,true);
		$criteria->compare('emocao_voz_pessoa',$this->emocao_voz_pessoa,true);
		$criteria->compare('associa_entonacao',$this->associa_entonacao,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	protected function afterFind(){
		parent::afterFind();
		$this->last_update=date('d/m/Y - G:i', strtotime(str_replace("-", "", $this->last_update)))."h";
	}
}