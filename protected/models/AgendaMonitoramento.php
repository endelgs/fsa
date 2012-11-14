<?php

/**
 * This is the model class for table "agenda_monitoramento".
 *
 * The followings are the available columns in table 'agenda_monitoramento':
 * @property integer $id
 * @property string $data
 * @property integer $monitoramento_r
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Monitoramento $monitoramentoR
 * @property Paciente $pacienteR
 */
class AgendaMonitoramento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AgendaMonitoramento the static model class
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
		return 'agenda_monitoramento';
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
			array('monitoramento_r, paciente_r', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, monitoramento_r, paciente_r', 'safe', 'on'=>'search'),
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
			'monitoramentoR' => array(self::BELONGS_TO, 'Monitoramento', 'monitoramento_r'),
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
			'data' => 'Data',
			'monitoramento_r' => 'Monitoramento R',
			'paciente_r' => 'Paciente R',
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
		$criteria->compare('monitoramento_r',$this->monitoramento_r);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public static function getMonitoramentos($dataIni='',$dataFim='') {
		$sql = '
		SELECT
		agenda_monitoramento.id,
		agenda_monitoramento.data,
		agenda_monitoramento.monitoramento_r,
		agenda_monitoramento.paciente_r,
			
		paciente.nome
		FROM
		agenda_monitoramento,paciente
		WHERE
		agenda_monitoramento.paciente_r=paciente.id and
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