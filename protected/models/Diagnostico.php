<?php

/**
 * This is the model class for table "diagnostico".
 *
 * The followings are the available columns in table 'diagnostico':
 * @property integer $id
 * @property string $consanguinidade
 * @property string $perda_auditiva_familia
 * @property string $preocupacao_familiar
 * @property string $alimentacao_neonato
 * @property string $posicao_alimentacao
 * @property string $refluxo
 * @property string $dor_ouvido
 * @property string $barulho_alto_acorda
 * @property string $chora_ruido_alto
 * @property string $procurar_som_fora_visao
 * @property string $atento_voz_materna
 * @property string $reinternado
 * @property string $susto_ruido_alto
 * @property string $motivo
 * @property string $pesquisa_integridade
 * @property string $od_onda_1
 * @property string $od_onda_3
 * @property string $od_onda_5
 * @property string $oe_onda_1
 * @property string $oe_onda_3
 * @property string $oe_onda_5
 * @property string $od_interlatencia_1_3
 * @property string $od_interlatencia_3_5
 * @property string $od_interlatencia_1_5
 * @property string $oe_interlatencia_1_3
 * @property string $oe_interlatencia_3_5
 * @property string $oe_interlatencia_1_5
 * @property string $od_100
 * @property string $od_90
 * @property string $od_80
 * @property string $od_70
 * @property string $od_60
 * @property string $od_50
 * @property string $od_40
 * @property string $od_30
 * @property string $od_20
 * @property string $oe_100
 * @property string $oe_90
 * @property string $oe_80
 * @property string $oe_70
 * @property string $oe_60
 * @property string $oe_50
 * @property string $oe_40
 * @property string $oe_30
 * @property string $oe_20
 * @property string $conclusao_limiar_eletrofisiologico
 * @property string $interpico
 * @property string $latencia
 * @property string $limiar_eletrofisiologico
 * @property string $od_1
 * @property string $od_1_4
 * @property string $od_2_0
 * @property string $od_2_8
 * @property string $od_4
 * @property string $oe_1
 * @property string $oe_1_4
 * @property string $oe_2_0
 * @property string $oe_2_8
 * @property string $oe_4
 * @property string $od_repro
 * @property string $od_estab
 * @property string $oe_repro
 * @property string $oe_estab
 * @property string $conclusao_transiente
 * @property string $od_distorcao_1
 * @property string $od_distorcao_1_4
 * @property string $od_distorcao_2_0
 * @property string $od_distorcao_2_8
 * @property string $od_distorcao_4
 * @property string $oe_distorcao_1
 * @property string $oe_distorcao_1_4
 * @property string $oe_distorcao_2_0
 * @property string $oe_distorcao_2_8
 * @property string $oe_distorcao_4
 * @property string $od_distorcao_repro
 * @property string $od_distorcao_estab
 * @property string $oe_distorcao_repro
 * @property string $oe_distorcao_estab
 * @property string $distorcao_conclusao_1
 * @property string $distorcao_conclusao_1_4
 * @property string $distorcao_conclusao_2_0
 * @property string $distorcao_conclusao_2_8
 * @property string $distorcao_conclusao_4
 * @property string $od_pressao
 * @property string $od_complacencia
 * @property string $od_tipo_curva
 * @property string $oe_pressao
 * @property string $oe_complacencia
 * @property string $oe_tipo_curva
 * @property string $od_reflexo_500
 * @property string $od_reflexo_1000
 * @property string $od_reflexo_2000
 * @property string $od_reflexo_4000
 * @property string $oe_reflexo_500
 * @property string $oe_reflexo_1000
 * @property string $oe_reflexo_2000
 * @property string $oe_reflexo_4000
 * @property string $guizo_lateral
 * @property string $guizo__cima
 * @property string $guizo_baixo
 * @property string $sino_lateral
 * @property string $sino_cima
 * @property string $sino_baixo
 * @property string $reflexo_cocleo_palpebral
 * @property string $od_nmr_500
 * @property string $od_nmr_1000
 * @property string $od_nmr_2000
 * @property string $od_nmr_3000
 * @property string $od_nmr_4000
 * @property string $oe_nmr_500
 * @property string $oe_nmr_1000
 * @property string $oe_nmr_2000
 * @property string $oe_nmr_3000
 * @property string $oe_nmr_4000
 * @property string $conclusao_reflexo
 * @property string $conduta_reflexo
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 */
class Diagnostico extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Diagnostico the static model class
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
		return 'diagnostico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('paciente_r', 'required'),
			array('paciente_r', 'numerical', 'integerOnly'=>true),
			array('consanguinidade, perda_auditiva_familia, preocupacao_familiar, refluxo, dor_ouvido, barulho_alto_acorda, chora_ruido_alto, procurar_som_fora_visao, atento_voz_materna, reinternado, susto_ruido_alto', 'length', 'max'=>5),
			array('alimentacao_neonato', 'length', 'max'=>9),
			array('posicao_alimentacao', 'length', 'max'=>7),
			array('pesquisa_integridade', 'length', 'max'=>3),
			array('od_onda_1, od_onda_3, od_onda_5, oe_onda_1, oe_onda_3, oe_onda_5, od_interlatencia_1_3, od_interlatencia_3_5, od_interlatencia_1_5, oe_interlatencia_1_3, oe_interlatencia_3_5, oe_interlatencia_1_5, od_100, od_90, od_80, od_70, od_60, od_50, od_40, od_30, od_20, oe_100, oe_90, oe_80, oe_70, oe_60, oe_50, oe_40, oe_30, oe_20, limiar_eletrofisiologico, od_1, od_1_4, od_2_0, od_2_8, od_4, oe_1, oe_1_4, oe_2_0, oe_2_8, oe_4, od_repro, od_estab, oe_repro, oe_estab, od_distorcao_1, od_distorcao_1_4, od_distorcao_2_0, od_distorcao_2_8, od_distorcao_4, oe_distorcao_1, oe_distorcao_1_4, oe_distorcao_2_0, oe_distorcao_2_8, oe_distorcao_4, od_distorcao_repro, od_distorcao_estab, oe_distorcao_repro, oe_distorcao_estab, od_pressao, od_complacencia, od_tipo_curva, oe_pressao, oe_complacencia, oe_tipo_curva, od_reflexo_500, od_reflexo_1000, od_reflexo_2000, od_reflexo_4000, oe_reflexo_500, oe_reflexo_1000, oe_reflexo_2000, oe_reflexo_4000, od_nmr_500, od_nmr_1000, od_nmr_2000, od_nmr_3000, od_nmr_4000, oe_nmr_500, oe_nmr_1000, oe_nmr_2000, oe_nmr_3000, oe_nmr_4000', 'length', 'max'=>250),
			array('interpico, latencia, conclusao_transiente, distorcao_conclusao_1, distorcao_conclusao_1_4, distorcao_conclusao_2_0, distorcao_conclusao_2_8, distorcao_conclusao_4, guizo_lateral, guizo__cima, guizo_baixo, sino_lateral, sino_cima, sino_baixo, reflexo_cocleo_palpebral', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, consanguinidade, perda_auditiva_familia, preocupacao_familiar, alimentacao_neonato, posicao_alimentacao, refluxo, dor_ouvido, barulho_alto_acorda, chora_ruido_alto, procurar_som_fora_visao, atento_voz_materna, reinternado, susto_ruido_alto, motivo, pesquisa_integridade, od_onda_1, od_onda_3, od_onda_5, oe_onda_1, oe_onda_3, oe_onda_5, od_interlatencia_1_3, od_interlatencia_3_5, od_interlatencia_1_5, oe_interlatencia_1_3, oe_interlatencia_3_5, oe_interlatencia_1_5, od_100, od_90, od_80, od_70, od_60, od_50, od_40, od_30, od_20, oe_100, oe_90, oe_80, oe_70, oe_60, oe_50, oe_40, oe_30, oe_20, conclusao_limiar_eletrofisiologico, interpico, latencia, limiar_eletrofisiologico, od_1, od_1_4, od_2_0, od_2_8, od_4, oe_1, oe_1_4, oe_2_0, oe_2_8, oe_4, od_repro, od_estab, oe_repro, oe_estab, conclusao_transiente, od_distorcao_1, od_distorcao_1_4, od_distorcao_2_0, od_distorcao_2_8, od_distorcao_4, oe_distorcao_1, oe_distorcao_1_4, oe_distorcao_2_0, oe_distorcao_2_8, oe_distorcao_4, od_distorcao_repro, od_distorcao_estab, oe_distorcao_repro, oe_distorcao_estab, distorcao_conclusao_1, distorcao_conclusao_1_4, distorcao_conclusao_2_0, distorcao_conclusao_2_8, distorcao_conclusao_4, od_pressao, od_complacencia, od_tipo_curva, oe_pressao, oe_complacencia, oe_tipo_curva, od_reflexo_500, od_reflexo_1000, od_reflexo_2000, od_reflexo_4000, oe_reflexo_500, oe_reflexo_1000, oe_reflexo_2000, oe_reflexo_4000, guizo_lateral, guizo__cima, guizo_baixo, sino_lateral, sino_cima, sino_baixo, reflexo_cocleo_palpebral, od_nmr_500, od_nmr_1000, od_nmr_2000, od_nmr_3000, od_nmr_4000, oe_nmr_500, oe_nmr_1000, oe_nmr_2000, oe_nmr_3000, oe_nmr_4000, conclusao_reflexo, conduta_reflexo, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'consanguinidade' => 'Consanguinidade',
			'perda_auditiva_familia' => 'História familiar de perda auditiva permanente na infância?',
			'preocupacao_familiar' => 'Preocupação familiar com o desenvolvimento da criança (audição, fala ou linguagem)?',
			'alimentacao_neonato' => 'Como é realizada a alimentação do neonato?',
			'posicao_alimentacao' => 'Em que posição é realizada a alimentação do neonato?',
			'refluxo' => 'Tem refluxo gastro-esofágico?',
			'dor_ouvido' => 'Teve dor de ouvido?',
			'barulho_alto_acorda' => 'Quando o neonato esta dormindo tranqüilamente, barulhos altos o acordam?',
			'chora_ruido_alto' => 'O neonato chora na presença de ruídos muitos altos?',
			'procurar_som_fora_visao' => 'Começou a procurar o som que está fora da sua visão?',
			'atento_voz_materna' => 'Neonato fica atento na presença da voz materna?',
			'reinternado' => 'Foi reinternado?',
			'susto_ruido_alto' => 'O neonato se assusta com ruídos altos?',
			'motivo' => 'Motivo',
			'pesquisa_integridade' => 'Pesquisa Integridade',
			'od_onda_1' => 'Od Onda 1',
			'od_onda_3' => 'Od Onda 3',
			'od_onda_5' => 'Od Onda 5',
			'oe_onda_1' => 'Oe Onda 1',
			'oe_onda_3' => 'Oe Onda 3',
			'oe_onda_5' => 'Oe Onda 5',
			'od_interlatencia_1_3' => 'Od Interlatencia 1 3',
			'od_interlatencia_3_5' => 'Od Interlatencia 3 5',
			'od_interlatencia_1_5' => 'Od Interlatencia 1 5',
			'oe_interlatencia_1_3' => 'Oe Interlatencia 1 3',
			'oe_interlatencia_3_5' => 'Oe Interlatencia 3 5',
			'oe_interlatencia_1_5' => 'Oe Interlatencia 1 5',
			'od_100' => 'Od 100',
			'od_90' => 'Od 90',
			'od_80' => 'Od 80',
			'od_70' => 'Od 70',
			'od_60' => 'Od 60',
			'od_50' => 'Od 50',
			'od_40' => 'Od 40',
			'od_30' => 'Od 30',
			'od_20' => 'Od 20',
			'oe_100' => 'Oe 100',
			'oe_90' => 'Oe 90',
			'oe_80' => 'Oe 80',
			'oe_70' => 'Oe 70',
			'oe_60' => 'Oe 60',
			'oe_50' => 'Oe 50',
			'oe_40' => 'Oe 40',
			'oe_30' => 'Oe 30',
			'oe_20' => 'Oe 20',
			'conclusao_limiar_eletrofisiologico' => 'Conclusão',
			'interpico' => 'Interpico',
			'latencia' => 'Latência',
			'limiar_eletrofisiologico' => 'Limiar Eletrofisiologico',
			'od_1' => 'Od 1',
			'od_1_4' => 'Od 1 4',
			'od_2_0' => 'Od 2 0',
			'od_2_8' => 'Od 2 8',
			'od_4' => 'Od 4',
			'oe_1' => 'Oe 1',
			'oe_1_4' => 'Oe 1 4',
			'oe_2_0' => 'Oe 2 0',
			'oe_2_8' => 'Oe 2 8',
			'oe_4' => 'Oe 4',
			'od_repro' => 'Od Repro',
			'od_estab' => 'Od Estab',
			'oe_repro' => 'Oe Repro',
			'oe_estab' => 'Oe Estab',
			'conclusao_transiente' => 'Conclusão',
			'od_distorcao_1' => 'Od Distorcao 1',
			'od_distorcao_1_4' => 'Od Distorcao 1 4',
			'od_distorcao_2_0' => 'Od Distorcao 2 0',
			'od_distorcao_2_8' => 'Od Distorcao 2 8',
			'od_distorcao_4' => 'Od Distorcao 4',
			'oe_distorcao_1' => 'Oe Distorcao 1',
			'oe_distorcao_1_4' => 'Oe Distorcao 1 4',
			'oe_distorcao_2_0' => 'Oe Distorcao 2 0',
			'oe_distorcao_2_8' => 'Oe Distorcao 2 8',
			'oe_distorcao_4' => 'Oe Distorcao 4',
			'od_distorcao_repro' => 'Od Distorcao Repro',
			'od_distorcao_estab' => 'Od Distorcao Estab',
			'oe_distorcao_repro' => 'Oe Distorcao Repro',
			'oe_distorcao_estab' => 'Oe Distorcao Estab',
			'distorcao_conclusao_1' => '1.0 KHz',
			'distorcao_conclusao_1_4' => '1.4 KHz',
			'distorcao_conclusao_2_0' => '2.0 KHz',
			'distorcao_conclusao_2_8' => '2.8 KHz',
			'distorcao_conclusao_4' => '4.0 KHz',
			'od_pressao' => 'Od Pressao',
			'od_complacencia' => 'Od Complacencia',
			'od_tipo_curva' => 'Od Tipo Curva',
			'oe_pressao' => 'Oe Pressao',
			'oe_complacencia' => 'Oe Complacencia',
			'oe_tipo_curva' => 'Oe Tipo Curva',
			'od_reflexo_500' => 'Od Reflexo 500',
			'od_reflexo_1000' => 'Od Reflexo 1000',
			'od_reflexo_2000' => 'Od Reflexo 2000',
			'od_reflexo_4000' => 'Od Reflexo 4000',
			'oe_reflexo_500' => 'Oe Reflexo 500',
			'oe_reflexo_1000' => 'Oe Reflexo 1000',
			'oe_reflexo_2000' => 'Oe Reflexo 2000',
			'oe_reflexo_4000' => 'Oe Reflexo 4000',
			'guizo_lateral' => 'Guizo Lateral',
			'guizo__cima' => 'Guizo Cima',
			'guizo_baixo' => 'Guizo Baixo',
			'sino_lateral' => 'Sino Lateral',
			'sino_cima' => 'Sino Cima',
			'sino_baixo' => 'Sino Baixo',
			'reflexo_cocleo_palpebral' => 'Reflexo Cócleo Palpebral (agogô)',
			'od_nmr_500' => 'Od Nmr 500',
			'od_nmr_1000' => 'Od Nmr 1000',
			'od_nmr_2000' => 'Od Nmr 2000',
			'od_nmr_3000' => 'Od Nmr 3000',
			'od_nmr_4000' => 'Od Nmr 4000',
			'oe_nmr_500' => 'Oe Nmr 500',
			'oe_nmr_1000' => 'Oe Nmr 1000',
			'oe_nmr_2000' => 'Oe Nmr 2000',
			'oe_nmr_3000' => 'Oe Nmr 3000',
			'oe_nmr_4000' => 'Oe Nmr 4000',
			'conclusao_reflexo' => 'Conclusão',
			'conduta_reflexo' => 'Conduta',
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
		$criteria->compare('consanguinidade',$this->consanguinidade,true);
		$criteria->compare('perda_auditiva_familia',$this->perda_auditiva_familia,true);
		$criteria->compare('preocupacao_familiar',$this->preocupacao_familiar,true);
		$criteria->compare('alimentacao_neonato',$this->alimentacao_neonato,true);
		$criteria->compare('posicao_alimentacao',$this->posicao_alimentacao,true);
		$criteria->compare('refluxo',$this->refluxo,true);
		$criteria->compare('dor_ouvido',$this->dor_ouvido,true);
		$criteria->compare('barulho_alto_acorda',$this->barulho_alto_acorda,true);
		$criteria->compare('chora_ruido_alto',$this->chora_ruido_alto,true);
		$criteria->compare('procurar_som_fora_visao',$this->procurar_som_fora_visao,true);
		$criteria->compare('atento_voz_materna',$this->atento_voz_materna,true);
		$criteria->compare('reinternado',$this->reinternado,true);
		$criteria->compare('susto_ruido_alto',$this->susto_ruido_alto,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('pesquisa_integridade',$this->pesquisa_integridade,true);
		$criteria->compare('od_onda_1',$this->od_onda_1,true);
		$criteria->compare('od_onda_3',$this->od_onda_3,true);
		$criteria->compare('od_onda_5',$this->od_onda_5,true);
		$criteria->compare('oe_onda_1',$this->oe_onda_1,true);
		$criteria->compare('oe_onda_3',$this->oe_onda_3,true);
		$criteria->compare('oe_onda_5',$this->oe_onda_5,true);
		$criteria->compare('od_interlatencia_1_3',$this->od_interlatencia_1_3,true);
		$criteria->compare('od_interlatencia_3_5',$this->od_interlatencia_3_5,true);
		$criteria->compare('od_interlatencia_1_5',$this->od_interlatencia_1_5,true);
		$criteria->compare('oe_interlatencia_1_3',$this->oe_interlatencia_1_3,true);
		$criteria->compare('oe_interlatencia_3_5',$this->oe_interlatencia_3_5,true);
		$criteria->compare('oe_interlatencia_1_5',$this->oe_interlatencia_1_5,true);
		$criteria->compare('od_100',$this->od_100,true);
		$criteria->compare('od_90',$this->od_90,true);
		$criteria->compare('od_80',$this->od_80,true);
		$criteria->compare('od_70',$this->od_70,true);
		$criteria->compare('od_60',$this->od_60,true);
		$criteria->compare('od_50',$this->od_50,true);
		$criteria->compare('od_40',$this->od_40,true);
		$criteria->compare('od_30',$this->od_30,true);
		$criteria->compare('od_20',$this->od_20,true);
		$criteria->compare('oe_100',$this->oe_100,true);
		$criteria->compare('oe_90',$this->oe_90,true);
		$criteria->compare('oe_80',$this->oe_80,true);
		$criteria->compare('oe_70',$this->oe_70,true);
		$criteria->compare('oe_60',$this->oe_60,true);
		$criteria->compare('oe_50',$this->oe_50,true);
		$criteria->compare('oe_40',$this->oe_40,true);
		$criteria->compare('oe_30',$this->oe_30,true);
		$criteria->compare('oe_20',$this->oe_20,true);
		$criteria->compare('conclusao_limiar_eletrofisiologico',$this->conclusao_limiar_eletrofisiologico,true);
		$criteria->compare('interpico',$this->interpico,true);
		$criteria->compare('latencia',$this->latencia,true);
		$criteria->compare('limiar_eletrofisiologico',$this->limiar_eletrofisiologico,true);
		$criteria->compare('od_1',$this->od_1,true);
		$criteria->compare('od_1_4',$this->od_1_4,true);
		$criteria->compare('od_2_0',$this->od_2_0,true);
		$criteria->compare('od_2_8',$this->od_2_8,true);
		$criteria->compare('od_4',$this->od_4,true);
		$criteria->compare('oe_1',$this->oe_1,true);
		$criteria->compare('oe_1_4',$this->oe_1_4,true);
		$criteria->compare('oe_2_0',$this->oe_2_0,true);
		$criteria->compare('oe_2_8',$this->oe_2_8,true);
		$criteria->compare('oe_4',$this->oe_4,true);
		$criteria->compare('od_repro',$this->od_repro,true);
		$criteria->compare('od_estab',$this->od_estab,true);
		$criteria->compare('oe_repro',$this->oe_repro,true);
		$criteria->compare('oe_estab',$this->oe_estab,true);
		$criteria->compare('conclusao_transiente',$this->conclusao_transiente,true);
		$criteria->compare('od_distorcao_1',$this->od_distorcao_1,true);
		$criteria->compare('od_distorcao_1_4',$this->od_distorcao_1_4,true);
		$criteria->compare('od_distorcao_2_0',$this->od_distorcao_2_0,true);
		$criteria->compare('od_distorcao_2_8',$this->od_distorcao_2_8,true);
		$criteria->compare('od_distorcao_4',$this->od_distorcao_4,true);
		$criteria->compare('oe_distorcao_1',$this->oe_distorcao_1,true);
		$criteria->compare('oe_distorcao_1_4',$this->oe_distorcao_1_4,true);
		$criteria->compare('oe_distorcao_2_0',$this->oe_distorcao_2_0,true);
		$criteria->compare('oe_distorcao_2_8',$this->oe_distorcao_2_8,true);
		$criteria->compare('oe_distorcao_4',$this->oe_distorcao_4,true);
		$criteria->compare('od_distorcao_repro',$this->od_distorcao_repro,true);
		$criteria->compare('od_distorcao_estab',$this->od_distorcao_estab,true);
		$criteria->compare('oe_distorcao_repro',$this->oe_distorcao_repro,true);
		$criteria->compare('oe_distorcao_estab',$this->oe_distorcao_estab,true);
		$criteria->compare('distorcao_conclusao_1',$this->distorcao_conclusao_1,true);
		$criteria->compare('distorcao_conclusao_1_4',$this->distorcao_conclusao_1_4,true);
		$criteria->compare('distorcao_conclusao_2_0',$this->distorcao_conclusao_2_0,true);
		$criteria->compare('distorcao_conclusao_2_8',$this->distorcao_conclusao_2_8,true);
		$criteria->compare('distorcao_conclusao_4',$this->distorcao_conclusao_4,true);
		$criteria->compare('od_pressao',$this->od_pressao,true);
		$criteria->compare('od_complacencia',$this->od_complacencia,true);
		$criteria->compare('od_tipo_curva',$this->od_tipo_curva,true);
		$criteria->compare('oe_pressao',$this->oe_pressao,true);
		$criteria->compare('oe_complacencia',$this->oe_complacencia,true);
		$criteria->compare('oe_tipo_curva',$this->oe_tipo_curva,true);
		$criteria->compare('od_reflexo_500',$this->od_reflexo_500,true);
		$criteria->compare('od_reflexo_1000',$this->od_reflexo_1000,true);
		$criteria->compare('od_reflexo_2000',$this->od_reflexo_2000,true);
		$criteria->compare('od_reflexo_4000',$this->od_reflexo_4000,true);
		$criteria->compare('oe_reflexo_500',$this->oe_reflexo_500,true);
		$criteria->compare('oe_reflexo_1000',$this->oe_reflexo_1000,true);
		$criteria->compare('oe_reflexo_2000',$this->oe_reflexo_2000,true);
		$criteria->compare('oe_reflexo_4000',$this->oe_reflexo_4000,true);
		$criteria->compare('guizo_lateral',$this->guizo_lateral,true);
		$criteria->compare('guizo__cima',$this->guizo__cima,true);
		$criteria->compare('guizo_baixo',$this->guizo_baixo,true);
		$criteria->compare('sino_lateral',$this->sino_lateral,true);
		$criteria->compare('sino_cima',$this->sino_cima,true);
		$criteria->compare('sino_baixo',$this->sino_baixo,true);
		$criteria->compare('reflexo_cocleo_palpebral',$this->reflexo_cocleo_palpebral,true);
		$criteria->compare('od_nmr_500',$this->od_nmr_500,true);
		$criteria->compare('od_nmr_1000',$this->od_nmr_1000,true);
		$criteria->compare('od_nmr_2000',$this->od_nmr_2000,true);
		$criteria->compare('od_nmr_3000',$this->od_nmr_3000,true);
		$criteria->compare('od_nmr_4000',$this->od_nmr_4000,true);
		$criteria->compare('oe_nmr_500',$this->oe_nmr_500,true);
		$criteria->compare('oe_nmr_1000',$this->oe_nmr_1000,true);
		$criteria->compare('oe_nmr_2000',$this->oe_nmr_2000,true);
		$criteria->compare('oe_nmr_3000',$this->oe_nmr_3000,true);
		$criteria->compare('oe_nmr_4000',$this->oe_nmr_4000,true);
		$criteria->compare('conclusao_reflexo',$this->conclusao_reflexo,true);
		$criteria->compare('conduta_reflexo',$this->conduta_reflexo,true);
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