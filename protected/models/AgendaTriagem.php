<?php

/**
 * This is the model class for table "agenda_triagem".
 *
 * The followings are the available columns in table 'agenda_triagem':
 * @property integer $id
 * @property string $data
 * @property integer $triagem_r
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 * @property Triagem $triagemR
 */
class AgendaTriagem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AgendaTriagem the static model class
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
		return 'agenda_triagem';
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
			array('triagem_r, paciente_r', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, triagem_r, paciente_r', 'safe', 'on'=>'search'),
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
			'triagemR' => array(self::BELONGS_TO, 'Triagem', 'triagem_r'),
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
			'triagem_r' => 'Triagem',
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
		$criteria->compare('triagem_r',$this->triagem_r);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getTriagens($dataIni='',$dataFim='') {
		$sql = '
		SELECT
			agenda_triagem.id,
			agenda_triagem.data,
			agenda_triagem.triagem_r,
			agenda_triagem.paciente_r,
			
			paciente.nome
		FROM
			agenda_triagem,paciente
		WHERE
			agenda_triagem.paciente_r=paciente.id and
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