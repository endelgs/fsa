<?php

/**
 * This is the model class for table "agenda_orl".
 *
 * The followings are the available columns in table 'agenda_orl':
 * @property integer $id
 * @property string $data
 * @property integer $orl_r
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 * @property Orl $orlR
 */
class AgendaOrl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AgendaOrl the static model class
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
		return 'agenda_orl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data, paciente_r', 'required'),
			array('orl_r, paciente_r', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, orl_r, paciente_r', 'safe', 'on'=>'search'),
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
			'orlR' => array(self::BELONGS_TO, 'Orl', 'orl_r'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'data' => 'Data',
			'orl_r' => 'Orl',
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
		$criteria->compare('data',$this->data,true);
		$criteria->compare('orl_r',$this->orl_r);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getOrls($dataIni='',$dataFim='') {
		$sql = '
		SELECT
		agenda_orl.id,
		agenda_orl.data,
		agenda_orl.orl_r,
		agenda_orl.paciente_r,
			
		paciente.nome
		FROM
		agenda_orl,paciente
		WHERE
		agenda_orl.paciente_r=paciente.id and
		data >= :dataIni AND data <= :dataFim'
		;
	
		$command = Yii::app()->db->createCommand($sql);
		$command->bindParam(":dataIni", $dataIni, PDO::PARAM_STR);
		$command->bindParam(":dataFim", $dataFim, PDO::PARAM_STR);
		$command->queryAll();
		return $command->queryAll();
	
	}
	
	protected function afterFind(){
		parent::afterFind();
		$this->data=date('d/m/Y', strtotime(str_replace("-", "", $this->data)));
	}
	
	protected function beforeSave(){
		if(parent::beforeSave()){
			$data = explode("/",$this->data);
			$this->data=implode(array_reverse($data));
	
			return TRUE;
		}
		else return false;
	}
}