<?php

/**
 * This is the model class for table "protese_verificacao".
 *
 * The followings are the available columns in table 'protese_verificacao':
 * @property integer $id
 * @property string $data
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
 * @property string $nmr
 * @property string $nmr_500_od
 * @property string $nmr_1k_od
 * @property string $nmr_2k_od
 * @property string $nmr_4k_od
 * @property string $nmr_intensiade_od
 * @property string $nmr_500_oe
 * @property string $nmr_1k_oe
 * @property string $nmr_2k_oe
 * @property string $nmr_4k_oe
 * @property string $nmr_intensiade_oe
 * @property string $reacao_sons
 * @property string $voz_amplificada
 * @property string $sons_ling_s
 * @property string $sons_ling_ch
 * @property string $sons_ling_a
 * @property string $sons_ling_i
 * @property string $sons_ling_u
 * @property string $sons_ling_m
 * @property string $lrf_od
 * @property string $ldv_od
 * @property string $lrf_oe
 * @property string $ldv_oe
 * @property string $guizo_1
 * @property string $guizo_2
 * @property string $reco_reco
 * @property string $sino
 * @property string $ganza
 * @property string $black_black
 * @property string $agogo_pequeno
 * @property string $agogo_grande
 * @property string $prato
 * @property string $latencia_resposta
 * @property string $grau_movimentacao_cabeca
 * @property string $last_update
 * @property integer $paciente_r
 */
class ProteseVerificacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProteseVerificacao the static model class
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
		return 'protese_verificacao';
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
			array('od_40_250, od_40_500, od_40_1000, od_40_2000, od_40_3000, od_40_4000, od_40_6000, od_40_8000, od_60_250, od_60_500, od_60_1000, od_60_2000, od_60_3000, od_60_4000, od_60_6000, od_60_8000, od_80_250, od_80_500, od_80_1000, od_80_2000, od_80_3000, od_80_4000, od_80_6000, od_80_8000, oe_40_250, oe_40_500, oe_40_1000, oe_40_2000, oe_40_3000, oe_40_4000, oe_40_6000, oe_40_8000, oe_60_250, oe_60_500, oe_60_1000, oe_60_2000, oe_60_3000, oe_60_4000, oe_60_6000, oe_60_8000, oe_80_250, oe_80_500, oe_80_1000, oe_80_2000, oe_80_3000, oe_80_4000, oe_80_6000, oe_80_8000, nmr_500_od, nmr_1k_od, nmr_2k_od, nmr_4k_od, nmr_intensiade_od, nmr_500_oe, nmr_1k_oe, nmr_2k_oe, nmr_4k_oe, nmr_intensiade_oe, voz_amplificada, sons_ling_s, sons_ling_ch, sons_ling_a, sons_ling_i, sons_ling_u, sons_ling_m, lrf_od, ldv_od, lrf_oe, ldv_oe', 'length', 'max'=>250),
			array('nmr', 'length', 'max'=>21),
			array('reacao_sons', 'length', 'max'=>15),
			array('guizo_1, guizo_2, reco_reco, sino, ganza, black_black, agogo_pequeno, agogo_grande, prato', 'length', 'max'=>11),
			array('latencia_resposta, grau_movimentacao_cabeca', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, data, od_40_250, od_40_500, od_40_1000, od_40_2000, od_40_3000, od_40_4000, od_40_6000, od_40_8000, od_60_250, od_60_500, od_60_1000, od_60_2000, od_60_3000, od_60_4000, od_60_6000, od_60_8000, od_80_250, od_80_500, od_80_1000, od_80_2000, od_80_3000, od_80_4000, od_80_6000, od_80_8000, oe_40_250, oe_40_500, oe_40_1000, oe_40_2000, oe_40_3000, oe_40_4000, oe_40_6000, oe_40_8000, oe_60_250, oe_60_500, oe_60_1000, oe_60_2000, oe_60_3000, oe_60_4000, oe_60_6000, oe_60_8000, oe_80_250, oe_80_500, oe_80_1000, oe_80_2000, oe_80_3000, oe_80_4000, oe_80_6000, oe_80_8000, nmr, nmr_500_od, nmr_1k_od, nmr_2k_od, nmr_4k_od, nmr_intensiade_od, nmr_500_oe, nmr_1k_oe, nmr_2k_oe, nmr_4k_oe, nmr_intensiade_oe, reacao_sons, voz_amplificada, sons_ling_s, sons_ling_ch, sons_ling_a, sons_ling_i, sons_ling_u, sons_ling_m, lrf_od, ldv_od, lrf_oe, ldv_oe, guizo_1, guizo_2, reco_reco, sino, ganza, black_black, agogo_pequeno, agogo_grande, prato, latencia_resposta, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'data' => 'Data',
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
			'nmr' => 'NMR Nível mínio de resposta (Audiometria pediátrica)',
			'nmr_500_od' => 'Nmr 500 Od',
			'nmr_1k_od' => 'Nmr 1k Od',
			'nmr_2k_od' => 'Nmr 2k Od',
			'nmr_4k_od' => 'Nmr 4k Od',
			'nmr_intensiade_od' => 'Nmr Intensiade Od',
			'nmr_500_oe' => 'Nmr 500 Oe',
			'nmr_1k_oe' => 'Nmr 1k Oe',
			'nmr_2k_oe' => 'Nmr 2k Oe',
			'nmr_4k_oe' => 'Nmr 4k Oe',
			'nmr_intensiade_oe' => 'Nmr Intensiade Oe',
			'reacao_sons' => 'Reação aos Sons verbais com aplificação:',
			'voz_amplificada' => 'Voz Amplificada',
			'sons_ling_s' => 'Sons Ling S',
			'sons_ling_ch' => 'Sons Ling Ch',
			'sons_ling_a' => 'Sons Ling A',
			'sons_ling_i' => 'Sons Ling I',
			'sons_ling_u' => 'Sons Ling U',
			'sons_ling_m' => 'Sons Ling M',
			'lrf_od' => 'Lrf Od',
			'ldv_od' => 'Ldv Od',
			'lrf_oe' => 'Lrf Oe',
			'ldv_oe' => 'Ldv Oe',
			'guizo_1' => 'Guizo 1',
			'guizo_2' => 'Guizo 2',
			'reco_reco' => 'Reco Reco',
			'sino' => 'Sino',
			'ganza' => 'Ganza',
			'black_black' => 'Black Black',
			'agogo_pequeno' => 'Agogo Pequeno',
			'agogo_grande' => 'Agogo Grande',
			'prato' => 'Prato',
			'latencia_resposta' => 'Latência Resposta',
			'grau_movimentacao_cabeca' => 'Grau de movimentação da cabeça',
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
		$criteria->compare('data',$this->data,true);
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
		$criteria->compare('nmr',$this->nmr,true);
		$criteria->compare('nmr_500_od',$this->nmr_500_od,true);
		$criteria->compare('nmr_1k_od',$this->nmr_1k_od,true);
		$criteria->compare('nmr_2k_od',$this->nmr_2k_od,true);
		$criteria->compare('nmr_4k_od',$this->nmr_4k_od,true);
		$criteria->compare('nmr_intensiade_od',$this->nmr_intensiade_od,true);
		$criteria->compare('nmr_500_oe',$this->nmr_500_oe,true);
		$criteria->compare('nmr_1k_oe',$this->nmr_1k_oe,true);
		$criteria->compare('nmr_2k_oe',$this->nmr_2k_oe,true);
		$criteria->compare('nmr_4k_oe',$this->nmr_4k_oe,true);
		$criteria->compare('nmr_intensiade_oe',$this->nmr_intensiade_oe,true);
		$criteria->compare('reacao_sons',$this->reacao_sons,true);
		$criteria->compare('voz_amplificada',$this->voz_amplificada,true);
		$criteria->compare('sons_ling_s',$this->sons_ling_s,true);
		$criteria->compare('sons_ling_ch',$this->sons_ling_ch,true);
		$criteria->compare('sons_ling_a',$this->sons_ling_a,true);
		$criteria->compare('sons_ling_i',$this->sons_ling_i,true);
		$criteria->compare('sons_ling_u',$this->sons_ling_u,true);
		$criteria->compare('sons_ling_m',$this->sons_ling_m,true);
		$criteria->compare('lrf_od',$this->lrf_od,true);
		$criteria->compare('ldv_od',$this->ldv_od,true);
		$criteria->compare('lrf_oe',$this->lrf_oe,true);
		$criteria->compare('ldv_oe',$this->ldv_oe,true);
		$criteria->compare('guizo_1',$this->guizo_1,true);
		$criteria->compare('guizo_2',$this->guizo_2,true);
		$criteria->compare('reco_reco',$this->reco_reco,true);
		$criteria->compare('sino',$this->sino,true);
		$criteria->compare('ganza',$this->ganza,true);
		$criteria->compare('black_black',$this->black_black,true);
		$criteria->compare('agogo_pequeno',$this->agogo_pequeno,true);
		$criteria->compare('agogo_grande',$this->agogo_grande,true);
		$criteria->compare('prato',$this->prato,true);
		$criteria->compare('latencia_resposta',$this->latencia_resposta,true);
		$criteria->compare('grau_movimentacao_cabeca',$this->grau_movimentacao_cabeca,true);
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