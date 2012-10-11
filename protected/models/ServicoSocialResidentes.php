<?php

/**
 * This is the model class for table "residentes_familia_servico_social".
 *
 * The followings are the available columns in table 'residentes_familia_servico_social':
 * @property integer $id
 * @property string $nome
 * @property integer $idade
 * @property string $parentesco
 * @property string $profissao
 * @property string $salario
 * @property integer $servico_social_r
 *
 * The followings are the available model relations:
 * @property ServicoSocial $servicoSocialR
 */
class ServicoSocialResidentes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ServicoSocialResidentes the static model class
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
		return 'residentes_familia_servico_social';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, idade, parentesco, profissao, salario', 'required'),
			array('idade, servico_social_r', 'numerical', 'integerOnly'=>true),
			array('nome, parentesco, profissao', 'length', 'max'=>250),
			array('salario', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, idade, parentesco, profissao, salario, servico_social_r', 'safe', 'on'=>'search'),
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
			'servicoSocialR' => array(self::BELONGS_TO, 'ServicoSocial', 'servico_social_r'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'idade' => 'Idade',
			'parentesco' => 'Parentesco',
			'profissao' => 'Profissão',
			'salario' => 'Salário ou outros rendimentos',
			'servico_social_r' => 'Servico Social',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('idade',$this->idade);
		$criteria->compare('parentesco',$this->parentesco,true);
		$criteria->compare('profissao',$this->profissao,true);
		$criteria->compare('salario',$this->salario,true);
		$criteria->compare('servico_social_r',$this->servico_social_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}