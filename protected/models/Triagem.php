<?php

/**
 * This is the model class for table "triagem".
 *
 * The followings are the available columns in table 'triagem':
 * @property integer $id
 * @property integer $peso
 * @property integer $apgar_1
 * @property integer $apgar_5
 * @property integer $apgar_10
 * @property integer $apgar_15
 * @property integer $idade_semanas
 * @property integer $idade_dias
 * @property string $metodo_avaliacao
 * @property integer $avaliacao_score
 * @property string $termo
 * @property string $crescimento
 * @property string $tipo_exame
 * @property string $resultado_esquerdo
 * @property string $resultado_direito
 * @property string $falhou_35
 * @property string $falhou_40
 * @property string $falhou_45
 * @property string $historia_perda_auditiva
 * @property string $consanguinidade
 * @property string $peso_inferiro_1500
 * @property string $pig
 * @property string $nascimento_pre_termo
 * @property string $apgar_04_primeiro_minuto
 * @property string $apgar_06_quinto_minuto
 * @property string $uti_5_dias
 * @property string $ventilacao_mecanica
 * @property string $drogas_ototoxicas
 * @property string $hiperbilirrubinemia
 * @property string $anomalias_cranio_faciais
 * @property string $anoxia_perinatal_grave
 * @property string $asfixia_neonatal
 * @property string $infeccoes_congenitas_toxoplasmose
 * @property string $infeccoes_congenitas_rubeola
 * @property string $infeccoes_congenitas_citomegalovirus
 * @property string $infeccoes_congenitas_herpes
 * @property string $infeccoes_congenitas_sifilis
 * @property string $infeccoes_congenitas_hiv
 * @property string $infeccoes_congenitas_outra
 * @property string $sindrome_genetica_deficiencia_auditiva
 * @property string $infeccoes_bacterianas_virais_citomegalovirus
 * @property string $infeccoes_bacterianas_virais_herpes
 * @property string $infeccoes_bacterianas_virais_sarampo
 * @property string $infeccoes_bacterianas_virais_varicela
 * @property string $infeccoes_bacterianas_virais_meningite
 * @property string $infeccoes_bacterianas_virais_outra
 * @property string $traumatismo_craniano
 * @property string $quimioterapia
 * @property string $materno_drogas_ilicitas
 * @property string $disturbios_neurodegenerativos
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property AgendaTriagem[] $agendaTriagems
 * @property Paciente $pacienteR
 */
class Triagem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Triagem the static model class
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
		return 'triagem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peso, apgar_1, apgar_5, idade_semanas, idade_dias, metodo_avaliacao, termo, crescimento, tipo_exame, resultado_esquerdo, resultado_direito, paciente_r', 'required'),
			array('peso, apgar_1, apgar_5, apgar_10,  apgar_15, idade_semanas, idade_dias, avaliacao_score, paciente_r', 'numerical', 'integerOnly'=>true),
			array('metodo_avaliacao', 'length', 'max'=>11),
			array('termo', 'length', 'max'=>9),
			array('crescimento', 'length', 'max'=>3),
			array('tipo_exame', 'length', 'max'=>7),
			array('resultado_esquerdo, resultado_direito', 'length', 'max'=>6),
			array('falhou_35, falhou_40, falhou_45, historia_perda_auditiva, consanguinidade, peso_inferiro_1500, pig, nascimento_pre_termo, apgar_04_primeiro_minuto, apgar_06_quinto_minuto, uti_5_dias, ventilacao_mecanica, drogas_ototoxicas, hiperbilirrubinemia, anomalias_cranio_faciais, anoxia_perinatal_grave, asfixia_neonatal, infeccoes_congenitas_toxoplasmose, infeccoes_congenitas_rubeola, infeccoes_congenitas_citomegalovirus, infeccoes_congenitas_herpes, infeccoes_congenitas_sifilis, infeccoes_congenitas_hiv, infeccoes_bacterianas_virais_citomegalovirus, infeccoes_bacterianas_virais_herpes, infeccoes_bacterianas_virais_sarampo, infeccoes_bacterianas_virais_varicela, infeccoes_bacterianas_virais_meningite, traumatismo_craniano, quimioterapia, materno_drogas_ilicitas, disturbios_neurodegenerativos', 'length', 'max'=>5),
			array('infeccoes_congenitas_outra, sindrome_genetica_deficiencia_auditiva, infeccoes_bacterianas_virais_outra', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, peso, apgar_1, apgar_5, apgar_10, apgar_15, idade_semanas, idade_dias, metodo_avaliacao, avaliacao_score, termo, crescimento, tipo_exame, resultado_esquerdo, resultado_direito, indicadores_risco, paciente_r', 'safe', 'on'=>'search'),
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
			'agendaTriagems' => array(self::HAS_MANY, 'AgendaTriagem', 'triagem_r'),
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
			'peso' => 'Peso',
			'apgar_1' => 'Apgar 1',
			'apgar_5' => 'Apgar 5',
			'apgar_10' => 'Apgar 10',
			'apgar_15' => 'Apgar 15',
			'idade_semanas' => 'Semanas',
			'idade_dias' => 'Dias',
			'metodo_avaliacao' => 'Método Avaliação',
			'avaliacao_score' => 'Score',
			'termo' => 'Termo',
			'crescimento' => 'Crescimento Intra-Uterino',
			'tipo_exame' => 'Tipo Exame',
			'resultado_esquerdo' => 'Resultado Ouvido Esquerdo',
			'resultado_direito' => 'Resultado Ouvido Direito',
			'falhou_35' => 'Falhou 35',
			'falhou_40' => 'Falhou 40',
			'falhou_45' => 'Falhou 45',
			'historia_perda_auditiva' => 'História familiar de perda auditiva permanente na infância',
			'consanguinidade' => 'Consangüinidade',
			'peso_inferiro_1500' => 'Peso ao nascer inferior a 1500g',
			'pig' => 'Pequeno para a idade gestacional (PIG)',
			'nascimento_pre_termo' => 'Nascimento pré-termo',
			'apgar_04_primeiro_minuto' => 'Apgar neonatal de 0 a 4 no primeiro minuto',
			'apgar_06_quinto_minuto' => 'Apgar neonatal de 0 a 6 no quinto minuto',
			'uti_5_dias' => 'Permanência na UTI por mais de 5 dias',
			'ventilacao_mecanica' => 'Ventilação mecânica',
			'drogas_ototoxicas' => 'Exposição a drogas ototóxicas e/ou diuréticos de alça',
			'hiperbilirrubinemia' => 'Hiperbilirrubinemia',
			'anomalias_cranio_faciais' => 'Anomalias crânio-faciais envolvendo orelha e osso temporal',
			'anoxia_perinatal_grave' => 'Anóxia perinatal grave',
			'asfixia_neonatal' => 'Asfixia neonatal',
			'infeccoes_congenitas_toxoplasmose' => 'Toxoplasmose',
			'infeccoes_congenitas_rubeola' => 'Rubéola',
			'infeccoes_congenitas_citomegalovirus' => 'Citomegalovírus',
			'infeccoes_congenitas_herpes' => '*Herpes',
			'infeccoes_congenitas_sifilis' => 'Sífilis',
			'infeccoes_congenitas_hiv' => 'HIV',
			'infeccoes_congenitas_outra' => 'Outra',
			'sindrome_genetica_deficiencia_auditiva' => 'Síndrome genética que usualmente expressam deficiência auditiva. Qual?',
			'infeccoes_bacterianas_virais_citomegalovirus' => 'Citomegalovirus',
			'infeccoes_bacterianas_virais_herpes' => 'Herpes',
			'infeccoes_bacterianas_virais_sarampo' => 'Sarampo',
			'infeccoes_bacterianas_virais_varicela' => 'Varicela',
			'infeccoes_bacterianas_virais_meningite' => 'Meningite',
			'infeccoes_bacterianas_virais_outra' => 'Outra',
			'traumatismo_craniano' => 'Traumatismo craniano',
			'quimioterapia' => 'Quimioterapia',
			'materno_drogas_ilicitas' => 'Uso materno de drogas ilícitas',
			'disturbios_neurodegenerativos' => 'Distúrbios neurodegenerativos',
			'last_update' => 'Paciente','Última Atualização',
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
		$criteria->compare('peso',$this->peso);
		$criteria->compare('apgar_1',$this->apgar_1);
		$criteria->compare('apgar_5',$this->apgar_5);
		$criteria->compare('apgar_10',$this->apgar_10);
		$criteria->compare('apgar_15',$this->apgar_15);
		$criteria->compare('idade_semanas',$this->idade_semanas);
		$criteria->compare('idade_dias',$this->idade_dias);
		$criteria->compare('metodo_avaliacao',$this->metodo_avaliacao,true);
		$criteria->compare('avaliacao_score',$this->avaliacao_score);
		$criteria->compare('termo',$this->termo,true);
		$criteria->compare('crescimento',$this->crescimento,true);
		$criteria->compare('tipo_exame',$this->tipo_exame,true);
		$criteria->compare('resultado_esquerdo',$this->resultado_esquerdo,true);
		$criteria->compare('resultado_direito',$this->resultado_direito,true);
		$criteria->compare('falhou_35',$this->falhou_35,true);
		$criteria->compare('falhou_40',$this->falhou_40,true);
		$criteria->compare('falhou_45',$this->falhou_45,true);
		$criteria->compare('historia_perda_auditiva',$this->historia_perda_auditiva,true);
		$criteria->compare('consanguinidade',$this->consanguinidade,true);
		$criteria->compare('peso_inferiro_1500',$this->peso_inferiro_1500,true);
		$criteria->compare('pig',$this->pig,true);
		$criteria->compare('nascimento_pre_termo',$this->nascimento_pre_termo,true);
		$criteria->compare('apgar_04_primeiro_minuto',$this->apgar_04_primeiro_minuto,true);
		$criteria->compare('apgar_06_quinto_minuto',$this->apgar_06_quinto_minuto,true);
		$criteria->compare('uti_5_dias',$this->uti_5_dias,true);
		$criteria->compare('ventilacao_mecanica',$this->ventilacao_mecanica,true);
		$criteria->compare('drogas_ototoxicas',$this->drogas_ototoxicas,true);
		$criteria->compare('hiperbilirrubinemia',$this->hiperbilirrubinemia,true);
		$criteria->compare('anomalias_cranio_faciais',$this->anomalias_cranio_faciais,true);
		$criteria->compare('anoxia_perinatal_grave',$this->anoxia_perinatal_grave,true);
		$criteria->compare('asfixia_neonatal',$this->asfixia_neonatal,true);
		$criteria->compare('infeccoes_congenitas_toxoplasmose',$this->infeccoes_congenitas_toxoplasmose,true);
		$criteria->compare('infeccoes_congenitas_rubeola',$this->infeccoes_congenitas_rubeola,true);
		$criteria->compare('infeccoes_congenitas_citomegalovirus',$this->infeccoes_congenitas_citomegalovirus,true);
		$criteria->compare('infeccoes_congenitas_herpes',$this->infeccoes_congenitas_herpes,true);
		$criteria->compare('infeccoes_congenitas_sifilis',$this->infeccoes_congenitas_sifilis,true);
		$criteria->compare('infeccoes_congenitas_hiv',$this->infeccoes_congenitas_hiv,true);
		$criteria->compare('infeccoes_congenitas_outra',$this->infeccoes_congenitas_outra,true);
		$criteria->compare('sindrome_genetica_deficiencia_auditiva',$this->sindrome_genetica_deficiencia_auditiva,true);
		$criteria->compare('infeccoes_bacterianas_virais_citomegalovirus',$this->infeccoes_bacterianas_virais_citomegalovirus,true);
		$criteria->compare('infeccoes_bacterianas_virais_herpes',$this->infeccoes_bacterianas_virais_herpes,true);
		$criteria->compare('infeccoes_bacterianas_virais_sarampo',$this->infeccoes_bacterianas_virais_sarampo,true);
		$criteria->compare('infeccoes_bacterianas_virais_varicela',$this->infeccoes_bacterianas_virais_varicela,true);
		$criteria->compare('infeccoes_bacterianas_virais_meningite',$this->infeccoes_bacterianas_virais_meningite,true);
		$criteria->compare('infeccoes_bacterianas_virais_outra',$this->infeccoes_bacterianas_virais_outra,true);
		$criteria->compare('traumatismo_craniano',$this->traumatismo_craniano,true);
		$criteria->compare('quimioterapia',$this->quimioterapia,true);
		$criteria->compare('materno_drogas_ilicitas',$this->materno_drogas_ilicitas,true);
		$criteria->compare('disturbios_neurodegenerativos',$this->disturbios_neurodegenerativos,true);
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