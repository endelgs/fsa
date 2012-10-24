<?php

/**
 * This is the model class for table "monitoramento".
 *
 * The followings are the available columns in table 'monitoramento':
 * @property integer $id
 * @property string $guizo
 * @property string $sino
 * @property string $agogo
 * @property string $reacao_voz
 * @property string $od_500
 * @property string $od_1000
 * @property string $od_2000
 * @property string $od_4000
 * @property string $oe_1000
 * @property string $oe_2000
 * @property string $oe_500
 * @property string $oe_4000
 * @property string $od_complacencia
 * @property string $od_pressao
 * @property string $od_volume
 * @property string $od_gradiente
 * @property string $od_curva_tipo
 * @property string $oe_complacencia
 * @property string $oe_pressao
 * @property string $oe_volume
 * @property string $oe_gradiente
 * @property string $oe_curva_tipo
 * @property string $da_tchau
 * @property string $joga_beijo
 * @property string $bate_palma
 * @property string $cade_chupeta
 * @property string $cade_mamae
 * @property string $cade_sapato
 * @property string $cade_cabelo
 * @property string $cade_mao
 * @property string $cade_pe
 * @property string $reipsi_500_od
 * @property string $reipsi_1k_od
 * @property string $reipsi_2k_od
 * @property string $reipsi_4k_od
 * @property string $reipsi_500_oe
 * @property string $reipsi_1k_oe
 * @property string $reipsi_2k_oe
 * @property string $reipsi_4k_oe
 * @property string $desenvolvimento_motor
 * @property string $desenvolvimento_auditivo
 * @property string $desenvolvimento_linguagem
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 */
class Monitoramento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Monitoramento the static model class
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
		return 'monitoramento';
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
			array('guizo, sino, agogo, reacao_voz', 'length', 'max'=>6),
			array('od_500, od_1000, od_2000, od_4000, oe_1000, oe_2000, oe_500, oe_4000, od_complacencia, od_pressao, od_volume, od_gradiente, od_curva_tipo, oe_complacencia, oe_pressao, oe_volume, oe_gradiente, oe_curva_tipo, reipsi_500_od, reipsi_1k_od, reipsi_2k_od, reipsi_4k_od, reipsi_500_oe, reipsi_1k_oe, reipsi_2k_oe, reipsi_4k_oe', 'length', 'max'=>250),
			array('da_tchau, joga_beijo, bate_palma, cade_chupeta, cade_mamae, cade_sapato, cade_cabelo, cade_mao, cade_pe', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, guizo, sino, agogo, reacao_voz, od_500, od_1000, od_2000, od_4000, oe_1000, oe_2000, oe_500, oe_4000, od_complacencia, od_pressao, od_volume, od_gradiente, od_curva_tipo, oe_complacencia, oe_pressao, oe_volume, oe_gradiente, oe_curva_tipo, da_tchau, joga_beijo, bate_palma, cade_chupeta, cade_mamae, cade_sapato, cade_cabelo, cade_mao, cade_pe, observacao, reipsi_500_od, reipsi_1k_od, reipsi_2k_od, reipsi_4k_od, reipsi_500_oe, reipsi_1k_oe, reipsi_2k_oe, reipsi_4k_oe, desenvolvimento_motor, desenvolvimento_auditivo, desenvolvimento_linguagem, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'guizo' => 'Guizo 77',
			'sino' => 'Sino 85',
			'agogo' => 'Agogo grande 100',
			'reacao_voz' => 'Reação a voz',
			'od_500' => 'Od 500',
			'od_1000' => 'Od 1000',
			'od_2000' => 'Od 2000',
			'od_4000' => 'Od 4000',
			'oe_1000' => 'Oe 1000',
			'oe_2000' => 'Oe 2000',
			'oe_500' => 'Oe 500',
			'oe_4000' => 'Oe 4000',
			'od_complacencia' => 'Od Complacencia',
			'od_pressao' => 'Od Pressao',
			'od_volume' => 'Od Volume',
			'od_gradiente' => 'Od Gradiente',
			'od_curva_tipo' => 'Od Curva Tipo',
			'oe_complacencia' => 'Oe Complacencia',
			'oe_pressao' => 'Oe Pressao',
			'oe_volume' => 'Oe Volume',
			'oe_gradiente' => 'Oe Gradiente',
			'oe_curva_tipo' => 'Oe Curva Tipo',
			'da_tchau' => 'Dá tchau',
			'joga_beijo' => 'Joga beijo',
			'bate_palma' => 'Bate palma',
			'cade_chupeta' => 'Cadê chupeta',
			'cade_mamae' => 'Cadê mamãe',
			'cade_sapato' => 'Cadê sapato',
			'cade_cabelo' => 'Cadê cabelo',
			'cade_mao' => 'Cadê mão',
			'cade_pe' => 'Cadê pé',
			'reipsi_500_od' => 'Reipsi 500 Od',
			'reipsi_1k_od' => 'Reipsi 1k Od',
			'reipsi_2k_od' => 'Reipsi 2k Od',
			'reipsi_4k_od' => 'Reipsi 4k Od',
			'reipsi_500_oe' => 'Reipsi 500 Oe',
			'reipsi_1k_oe' => 'Reipsi 1k Oe',
			'reipsi_2k_oe' => 'Reipsi 2k Oe',
			'reipsi_4k_oe' => 'Reipsi 4k Oe',
			'desenvolvimento_motor' => 'Desenvolvimento Motor',
			'desenvolvimento_auditivo' => 'Desenvolvimento Auditivo',
			'desenvolvimento_linguagem' => 'Desenvolvimento de Linguagem',
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
		$criteria->compare('guizo',$this->guizo,true);
		$criteria->compare('sino',$this->sino,true);
		$criteria->compare('agogo',$this->agogo,true);
		$criteria->compare('reacao_voz',$this->reacao_voz,true);
		$criteria->compare('od_500',$this->od_500,true);
		$criteria->compare('od_1000',$this->od_1000,true);
		$criteria->compare('od_2000',$this->od_2000,true);
		$criteria->compare('od_4000',$this->od_4000,true);
		$criteria->compare('oe_1000',$this->oe_1000,true);
		$criteria->compare('oe_2000',$this->oe_2000,true);
		$criteria->compare('oe_500',$this->oe_500,true);
		$criteria->compare('oe_4000',$this->oe_4000,true);
		$criteria->compare('od_complacencia',$this->od_complacencia,true);
		$criteria->compare('od_pressao',$this->od_pressao,true);
		$criteria->compare('od_volume',$this->od_volume,true);
		$criteria->compare('od_gradiente',$this->od_gradiente,true);
		$criteria->compare('od_curva_tipo',$this->od_curva_tipo,true);
		$criteria->compare('oe_complacencia',$this->oe_complacencia,true);
		$criteria->compare('oe_pressao',$this->oe_pressao,true);
		$criteria->compare('oe_volume',$this->oe_volume,true);
		$criteria->compare('oe_gradiente',$this->oe_gradiente,true);
		$criteria->compare('oe_curva_tipo',$this->oe_curva_tipo,true);
		$criteria->compare('da_tchau',$this->da_tchau,true);
		$criteria->compare('joga_beijo',$this->joga_beijo,true);
		$criteria->compare('bate_palma',$this->bate_palma,true);
		$criteria->compare('cade_chupeta',$this->cade_chupeta,true);
		$criteria->compare('cade_mamae',$this->cade_mamae,true);
		$criteria->compare('cade_sapato',$this->cade_sapato,true);
		$criteria->compare('cade_cabelo',$this->cade_cabelo,true);
		$criteria->compare('cade_mao',$this->cade_mao,true);
		$criteria->compare('cade_pe',$this->cade_pe,true);
		$criteria->compare('reipsi_500_od',$this->reipsi_500_od,true);
		$criteria->compare('reipsi_1k_od',$this->reipsi_1k_od,true);
		$criteria->compare('reipsi_2k_od',$this->reipsi_2k_od,true);
		$criteria->compare('reipsi_4k_od',$this->reipsi_4k_od,true);
		$criteria->compare('reipsi_500_oe',$this->reipsi_500_oe,true);
		$criteria->compare('reipsi_1k_oe',$this->reipsi_1k_oe,true);
		$criteria->compare('reipsi_2k_oe',$this->reipsi_2k_oe,true);
		$criteria->compare('reipsi_4k_oe',$this->reipsi_4k_oe,true);
		$criteria->compare('desenvolvimento_motor',$this->desenvolvimento_motor,true);
		$criteria->compare('desenvolvimento_auditivo',$this->desenvolvimento_auditivo,true);
		$criteria->compare('desenvolvimento_linguagem',$this->desenvolvimento_linguagem,true);
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