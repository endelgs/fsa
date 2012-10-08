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
 * @property string $indicadores_risco
 * @property string $last_update
 * @property string $data_triagem
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
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
			array('peso, apgar_1, apgar_5, idade_semanas, idade_dias, metodo_avaliacao, termo, crescimento, tipo_exame, resultado_esquerdo, resultado_direito, indicadores_risco, paciente_r', 'required'),
			array('peso, apgar_1, apgar_5, apgar_10,  apgar_15, idade_semanas, idade_dias, avaliacao_score, paciente_r', 'numerical', 'integerOnly'=>true),
			array('metodo_avaliacao', 'length', 'max'=>11),
			array('termo', 'length', 'max'=>9),
			array('crescimento', 'length', 'max'=>3),
			array('tipo_exame', 'length', 'max'=>7),
			array('indicadores_risco', 'length'),
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
			'indicadores_risco' => 'Indicadores Risco',
			'last_update' => 'Paciente','Última Atualização',
			'data_triagem' => 'Data da Triagem',
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
		$criteria->compare('indicadores_risco',$this->indicadores_risco,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('data_triagem',$this->data_triagem,true);
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