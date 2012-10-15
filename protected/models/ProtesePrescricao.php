<?php

/**
 * This is the model class for table "protese_prescricao".
 *
 * The followings are the available columns in table 'protese_prescricao':
 * @property integer $id
 * @property string $od_40_250
 * @property string $od_40_500
 * @property string $od_40_1000
 * @property string $od_40_2000
 * @property string $od_40_3000
 * @property string $od_40_4000
 * @property string $od_40_6000
 * @property string $od_40_8000
 * @property string $od_60_250
 * @property string $od_60_500
 * @property string $od_60_1000
 * @property string $od_60_2000
 * @property string $od_60_3000
 * @property string $od_60_4000
 * @property string $od_60_6000
 * @property string $od_60_8000
 * @property string $od_80_250
 * @property string $od_80_500
 * @property string $od_80_1000
 * @property string $od_80_2000
 * @property string $od_80_3000
 * @property string $od_80_4000
 * @property string $od_80_6000
 * @property string $od_80_8000
 * @property string $oe_40_250
 * @property string $oe_40_500
 * @property string $oe_40_1000
 * @property string $oe_40_2000
 * @property string $oe_40_3000
 * @property string $oe_40_4000
 * @property string $oe_40_6000
 * @property string $oe_40_8000
 * @property string $oe_60_250
 * @property string $oe_60_500
 * @property string $oe_60_1000
 * @property string $oe_60_2000
 * @property string $oe_60_3000
 * @property string $oe_60_4000
 * @property string $oe_60_6000
 * @property string $oe_60_8000
 * @property string $oe_80_250
 * @property string $oe_80_500
 * @property string $oe_80_1000
 * @property string $oe_80_2000
 * @property string $oe_80_3000
 * @property string $oe_80_4000
 * @property string $oe_80_6000
 * @property string $oe_80_8000
 * @property string $data
 * @property string $tipo
 * @property string $modelo
 * @property string $material
 * @property string $modificacao_acustica
 * @property string $od_modelo
 * @property string $od_marca
 * @property string $od_cor
 * @property string $oe_modelo
 * @property string $oe_marca
 * @property string $oe_cor
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 */
class ProtesePrescricao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProtesePrescricao the static model class
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
		return 'protese_prescricao';
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
			array('od_40_250, od_40_500, od_40_1000, od_40_2000, od_40_3000, od_40_4000, od_40_6000, od_40_8000, od_60_250, od_60_500, od_60_1000, od_60_2000, od_60_3000, od_60_4000, od_60_6000, od_60_8000, od_80_250, od_80_500, od_80_1000, od_80_2000, od_80_3000, od_80_4000, od_80_6000, od_80_8000, oe_40_250, oe_40_500, oe_40_1000, oe_40_2000, oe_40_3000, oe_40_4000, oe_40_6000, oe_40_8000, oe_60_250, oe_60_500, oe_60_1000, oe_60_2000, oe_60_3000, oe_60_4000, oe_60_6000, oe_60_8000, oe_80_250, oe_80_500, oe_80_1000, oe_80_2000, oe_80_3000, oe_80_4000, oe_80_6000, oe_80_8000, modelo, material, od_modelo, od_marca, od_cor, oe_modelo, oe_marca, oe_cor', 'length', 'max'=>250),
			array('tipo', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, od_40_250, od_40_500, od_40_1000, od_40_2000, od_40_3000, od_40_4000, od_40_6000, od_40_8000, od_60_250, od_60_500, od_60_1000, od_60_2000, od_60_3000, od_60_4000, od_60_6000, od_60_8000, od_80_250, od_80_500, od_80_1000, od_80_2000, od_80_3000, od_80_4000, od_80_6000, od_80_8000, oe_40_250, oe_40_500, oe_40_1000, oe_40_2000, oe_40_3000, oe_40_4000, oe_40_6000, oe_40_8000, oe_60_250, oe_60_500, oe_60_1000, oe_60_2000, oe_60_3000, oe_60_4000, oe_60_6000, oe_60_8000, oe_80_250, oe_80_500, oe_80_1000, oe_80_2000, oe_80_3000, oe_80_4000, oe_80_6000, oe_80_8000, data, tipo, modelo, material, modificacao_acustica, od_modelo, od_marca, od_cor, oe_modelo, oe_marca, oe_cor, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'od_40_250' => 'Od 40 250',
			'od_40_500' => 'Od 40 500',
			'od_40_1000' => 'Od 40 1000',
			'od_40_2000' => 'Od 40 2000',
			'od_40_3000' => 'Od 40 3000',
			'od_40_4000' => 'Od 40 4000',
			'od_40_6000' => 'Od 40 6000',
			'od_40_8000' => 'Od 40 8000',
			'od_60_250' => 'Od 60 250',
			'od_60_500' => 'Od 60 500',
			'od_60_1000' => 'Od 60 1000',
			'od_60_2000' => 'Od 60 2000',
			'od_60_3000' => 'Od 60 3000',
			'od_60_4000' => 'Od 60 4000',
			'od_60_6000' => 'Od 60 6000',
			'od_60_8000' => 'Od 60 8000',
			'od_80_250' => 'Od 80 250',
			'od_80_500' => 'Od 80 500',
			'od_80_1000' => 'Od 80 1000',
			'od_80_2000' => 'Od 80 2000',
			'od_80_3000' => 'Od 80 3000',
			'od_80_4000' => 'Od 80 4000',
			'od_80_6000' => 'Od 80 6000',
			'od_80_8000' => 'Od 80 8000',
			'oe_40_250' => 'Oe 40 250',
			'oe_40_500' => 'Oe 40 500',
			'oe_40_1000' => 'Oe 40 1000',
			'oe_40_2000' => 'Oe 40 2000',
			'oe_40_3000' => 'Oe 40 3000',
			'oe_40_4000' => 'Oe 40 4000',
			'oe_40_6000' => 'Oe 40 6000',
			'oe_40_8000' => 'Oe 40 8000',
			'oe_60_250' => 'Oe 60 250',
			'oe_60_500' => 'Oe 60 500',
			'oe_60_1000' => 'Oe 60 1000',
			'oe_60_2000' => 'Oe 60 2000',
			'oe_60_3000' => 'Oe 60 3000',
			'oe_60_4000' => 'Oe 60 4000',
			'oe_60_6000' => 'Oe 60 6000',
			'oe_60_8000' => 'Oe 60 8000',
			'oe_80_250' => 'Oe 80 250',
			'oe_80_500' => 'Oe 80 500',
			'oe_80_1000' => 'Oe 80 1000',
			'oe_80_2000' => 'Oe 80 2000',
			'oe_80_3000' => 'Oe 80 3000',
			'oe_80_4000' => 'Oe 80 4000',
			'oe_80_6000' => 'Oe 80 6000',
			'oe_80_8000' => 'Oe 80 8000',
			'data' => 'Data',
			'tipo' => 'Tipo',
			'modelo' => 'Modelo',
			'material' => 'Material',
			'modificacao_acustica' => 'Modificação Acústica',
			'od_modelo' => 'Od Modelo',
			'od_marca' => 'Od Marca',
			'od_cor' => 'Od Cor',
			'oe_modelo' => 'Oe Modelo',
			'oe_marca' => 'Oe Marca',
			'oe_cor' => 'Oe Cor',
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
		$criteria->compare('od_40_250',$this->od_40_250,true);
		$criteria->compare('od_40_500',$this->od_40_500,true);
		$criteria->compare('od_40_1000',$this->od_40_1000,true);
		$criteria->compare('od_40_2000',$this->od_40_2000,true);
		$criteria->compare('od_40_3000',$this->od_40_3000,true);
		$criteria->compare('od_40_4000',$this->od_40_4000,true);
		$criteria->compare('od_40_6000',$this->od_40_6000,true);
		$criteria->compare('od_40_8000',$this->od_40_8000,true);
		$criteria->compare('od_60_250',$this->od_60_250,true);
		$criteria->compare('od_60_500',$this->od_60_500,true);
		$criteria->compare('od_60_1000',$this->od_60_1000,true);
		$criteria->compare('od_60_2000',$this->od_60_2000,true);
		$criteria->compare('od_60_3000',$this->od_60_3000,true);
		$criteria->compare('od_60_4000',$this->od_60_4000,true);
		$criteria->compare('od_60_6000',$this->od_60_6000,true);
		$criteria->compare('od_60_8000',$this->od_60_8000,true);
		$criteria->compare('od_80_250',$this->od_80_250,true);
		$criteria->compare('od_80_500',$this->od_80_500,true);
		$criteria->compare('od_80_1000',$this->od_80_1000,true);
		$criteria->compare('od_80_2000',$this->od_80_2000,true);
		$criteria->compare('od_80_3000',$this->od_80_3000,true);
		$criteria->compare('od_80_4000',$this->od_80_4000,true);
		$criteria->compare('od_80_6000',$this->od_80_6000,true);
		$criteria->compare('od_80_8000',$this->od_80_8000,true);
		$criteria->compare('oe_40_250',$this->oe_40_250,true);
		$criteria->compare('oe_40_500',$this->oe_40_500,true);
		$criteria->compare('oe_40_1000',$this->oe_40_1000,true);
		$criteria->compare('oe_40_2000',$this->oe_40_2000,true);
		$criteria->compare('oe_40_3000',$this->oe_40_3000,true);
		$criteria->compare('oe_40_4000',$this->oe_40_4000,true);
		$criteria->compare('oe_40_6000',$this->oe_40_6000,true);
		$criteria->compare('oe_40_8000',$this->oe_40_8000,true);
		$criteria->compare('oe_60_250',$this->oe_60_250,true);
		$criteria->compare('oe_60_500',$this->oe_60_500,true);
		$criteria->compare('oe_60_1000',$this->oe_60_1000,true);
		$criteria->compare('oe_60_2000',$this->oe_60_2000,true);
		$criteria->compare('oe_60_3000',$this->oe_60_3000,true);
		$criteria->compare('oe_60_4000',$this->oe_60_4000,true);
		$criteria->compare('oe_60_6000',$this->oe_60_6000,true);
		$criteria->compare('oe_60_8000',$this->oe_60_8000,true);
		$criteria->compare('oe_80_250',$this->oe_80_250,true);
		$criteria->compare('oe_80_500',$this->oe_80_500,true);
		$criteria->compare('oe_80_1000',$this->oe_80_1000,true);
		$criteria->compare('oe_80_2000',$this->oe_80_2000,true);
		$criteria->compare('oe_80_3000',$this->oe_80_3000,true);
		$criteria->compare('oe_80_4000',$this->oe_80_4000,true);
		$criteria->compare('oe_80_6000',$this->oe_80_6000,true);
		$criteria->compare('oe_80_8000',$this->oe_80_8000,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('material',$this->material,true);
		$criteria->compare('modificacao_acustica',$this->modificacao_acustica,true);
		$criteria->compare('od_modelo',$this->od_modelo,true);
		$criteria->compare('od_marca',$this->od_marca,true);
		$criteria->compare('od_cor',$this->od_cor,true);
		$criteria->compare('oe_modelo',$this->oe_modelo,true);
		$criteria->compare('oe_marca',$this->oe_marca,true);
		$criteria->compare('oe_cor',$this->oe_cor,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	protected function afterFind(){
		parent::afterFind();
		$this->data=date('d/m/Y', strtotime(str_replace("-", "", $this->data)));
		$this->last_update=date('d/m/Y - G:i', strtotime(str_replace("-", "", $this->last_update)))."h";
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