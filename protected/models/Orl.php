<?php

/**
 * This is the model class for table "orl".
 *
 * The followings are the available columns in table 'orl':
 * @property integer $id
 * @property string $diagnostico
 * @property string $qp
 * @property string $hpma
 * @property string $interrogatorio_complementar
 * @property string $antecedentes_pessoais
 * @property string $exame_orl
 * @property string $hd
 * @property string $exames_complementares_hd
 * @property string $conduta
 * @property string $last_update
 * @property integer $paciente_r
 */
class Orl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Orl the static model class
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
		return 'orl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diagnostico, qp, hpma, interrogatorio_complementar, antecedentes_pessoais, exame_orl, hd, exames_complementares_hd, conduta, paciente_r', 'required'),
			array('paciente_r', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, diagnostico, qp, hpma, interrogatorio_complementar, antecedentes_pessoais, exame_orl, hd, exames_complementares_hd, conduta, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'diagnostico' => 'Diagnóstico',
			'qp' => 'Q.P.',
			'hpma' => 'HPMA',
			'interrogatorio_complementar' => 'Interrogatório complementar',
			'antecedentes_pessoais' => 'Antecedentes pessoais/familiares/ocupacionais',
			'exame_orl' => 'Exame ORL',
			'hd' => 'HD',
			'exames_complementares_hd' => 'Exames complementares HD',
			'conduta' => 'Conduta',
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
		$criteria->compare('diagnostico',$this->diagnostico,true);
		$criteria->compare('qp',$this->qp,true);
		$criteria->compare('hpma',$this->hpma,true);
		$criteria->compare('interrogatorio_complementar',$this->interrogatorio_complementar,true);
		$criteria->compare('antecedentes_pessoais',$this->antecedentes_pessoais,true);
		$criteria->compare('exame_orl',$this->exame_orl,true);
		$criteria->compare('hd',$this->hd,true);
		$criteria->compare('exames_complementares_hd',$this->exames_complementares_hd,true);
		$criteria->compare('conduta',$this->conduta,true);
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