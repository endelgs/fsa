<?php

/**
 * This is the model class for table "protese_avaliacao".
 *
 * The followings are the available columns in table 'protese_avaliacao':
 * @property integer $id
 * @property string $nna_clique_od
 * @property string $nna_500_od
 * @property string $nna_1000_od
 * @property string $nna_cliquer_oe
 * @property string $nna_500_oe
 * @property string $nna_1000_oe
 * @property string $imitanciometria
 * @property string $otoscopia
 * @property string $pressao_od
 * @property string $complacencia_od
 * @property string $tipo_curva_od
 * @property string $pressao_oe
 * @property string $complacencia_oe
 * @property string $tipo_curva_oe
 * @property string $reipsi_500_od
 * @property string $reipsi_1k_od
 * @property string $reipsi_2k_od
 * @property string $reipsi_4k_od
 * @property string $reipsi_500_oe
 * @property string $reipsi_1k_oe
 * @property string $reipsi_2k_oe
 * @property string $reipsi_4k_oe
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
 * @property string $recd_250_od
 * @property string $recd_500_od
 * @property string $recd_1000_od
 * @property string $recd_2000_od
 * @property string $recd_3000_od
 * @property string $recd_4000_od
 * @property string $recd_6000_od
 * @property string $recd_8000_od
 * @property string $recd_250_oe
 * @property string $recd_500_oe
 * @property string $recd_1000_oe
 * @property string $recd_2000_oe
 * @property string $recd_3000_oe
 * @property string $recd_4000_oe
 * @property string $recd_6000_oe
 * @property string $recd_8000_oe
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
 * @property string $laudo_audiologico
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 * @property ProtesePrescricao[] $protesePrescricaos
 */
class ProteseAvaliacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProteseAvaliacao the static model class
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
		return 'protese_avaliacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nna_clique_od, nna_500_od, nna_1000_od, nna_cliquer_oe, nna_500_oe, nna_1000_oe, imitanciometria, otoscopia, pressao_od, complacencia_od, tipo_curva_od, pressao_oe, complacencia_oe, tipo_curva_oe, reipsi_500_od, reipsi_1k_od, reipsi_2k_od, reipsi_4k_od, reipsi_500_oe, reipsi_1k_oe, reipsi_2k_oe, reipsi_4k_oe, nmr, nmr_500_od, nmr_1k_od, nmr_2k_od, nmr_4k_od, nmr_intensiade_od, nmr_500_oe, nmr_1k_oe, nmr_2k_oe, nmr_4k_oe, nmr_intensiade_oe, recd_250_od, recd_500_od, recd_1000_od, recd_2000_od, recd_3000_od, recd_4000_od, recd_6000_od, recd_8000_od, recd_250_oe, recd_500_oe, recd_1000_oe, recd_2000_oe, recd_3000_oe, recd_4000_oe, recd_6000_oe, recd_8000_oe, reacao_sons, voz_amplificada, sons_ling_s, sons_ling_ch, sons_ling_a, sons_ling_i, sons_ling_u, sons_ling_m, lrf_od, ldv_od, lrf_oe, ldv_oe, guizo_1, guizo_2, reco_reco, sino, ganza, black_black, agogo_pequeno, agogo_grande, prato, latencia_resposta, laudo_audiologico, paciente_r', 'required'),
			array('paciente_r', 'numerical', 'integerOnly'=>true),
			array('nna_clique_od, nna_500_od, nna_1000_od, nna_cliquer_oe, nna_500_oe, nna_1000_oe, pressao_od, complacencia_od, tipo_curva_od, pressao_oe, complacencia_oe, tipo_curva_oe, reipsi_500_od, reipsi_1k_od, reipsi_2k_od, reipsi_4k_od, reipsi_500_oe, reipsi_1k_oe, reipsi_2k_oe, reipsi_4k_oe, nmr_500_od, nmr_1k_od, nmr_2k_od, nmr_4k_od, nmr_intensiade_od, nmr_500_oe, nmr_1k_oe, nmr_2k_oe, nmr_4k_oe, nmr_intensiade_oe, recd_250_od, recd_500_od, recd_1000_od, recd_2000_od, recd_3000_od, recd_4000_od, recd_6000_od, recd_8000_od, recd_250_oe, recd_500_oe, recd_1000_oe, recd_2000_oe, recd_3000_oe, recd_4000_oe, recd_6000_oe, recd_8000_oe, voz_amplificada, sons_ling_s, sons_ling_ch, sons_ling_a, sons_ling_i, sons_ling_u, sons_ling_m, lrf_od, ldv_od, lrf_oe, ldv_oe', 'length', 'max'=>250),
			array('nmr', 'length', 'max'=>21),
			array('reacao_sons', 'length', 'max'=>15),
			array('guizo_1, guizo_2, reco_reco, sino, ganza, black_black, agogo_pequeno, agogo_grande, prato', 'length', 'max'=>11),
			array('latencia_resposta', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nna_clique_od, nna_500_od, nna_1000_od, nna_cliquer_oe, nna_500_oe, nna_1000_oe, imitanciometria, otoscopia, pressao_od, complacencia_od, tipo_curva_od, pressao_oe, complacencia_oe, tipo_curva_oe, reipsi_500_od, reipsi_1k_od, reipsi_2k_od, reipsi_4k_od, reipsi_500_oe, reipsi_1k_oe, reipsi_2k_oe, reipsi_4k_oe, nmr, nmr_500_od, nmr_1k_od, nmr_2k_od, nmr_4k_od, nmr_intensiade_od, nmr_500_oe, nmr_1k_oe, nmr_2k_oe, nmr_4k_oe, nmr_intensiade_oe, recd_250_od, recd_500_od, recd_1000_od, recd_2000_od, recd_3000_od, recd_4000_od, recd_6000_od, recd_8000_od, recd_250_oe, recd_500_oe, recd_1000_oe, recd_2000_oe, recd_3000_oe, recd_4000_oe, recd_6000_oe, recd_8000_oe, reacao_sons, voz_amplificada, sons_ling_s, sons_ling_ch, sons_ling_a, sons_ling_i, sons_ling_u, sons_ling_m, lrf_od, ldv_od, lrf_oe, ldv_oe, guizo_1, guizo_2, reco_reco, sino, ganza, black_black, agogo_pequeno, agogo_grande, prato, latencia_resposta, laudo_audiologico, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'protesePrescricaos' => array(self::HAS_MANY, 'ProtesePrescricao', 'protese_avaliacao_r'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nna_clique_od' => 'nNA Clique OD',
			'nna_500_od' => 'nNA 500 OD',
			'nna_1000_od' => 'nNA 1000 OD',
			'nna_cliquer_oe' => 'nNA Clique OE',
			'nna_500_oe' => 'nNA 500 OE',
			'nna_1000_oe' => 'nNA 1000 OE',
			'imitanciometria' => 'Imitanciometria',
			'otoscopia' => 'Otoscopia',
			'pressao_od' => 'Pressão OD',
			'complacencia_od' => 'Complacência OD',
			'tipo_curva_od' => 'Tipo Curva OD',
			'pressao_oe' => 'Pressão OE',
			'complacencia_oe' => 'Complacência OE',
			'tipo_curva_oe' => 'Tipo Curva OE',
			'reipsi_500_od' => 'Reipsi 500 OD',
			'reipsi_1k_od' => 'Reipsi 1k OD',
			'reipsi_2k_od' => 'Reipsi 2k OD',
			'reipsi_4k_od' => 'Reipsi 4k OD',
			'reipsi_500_oe' => 'Reipsi 500 OE',
			'reipsi_1k_oe' => 'Reipsi 1k OE',
			'reipsi_2k_oe' => 'Reipsi 2k OE',
			'reipsi_4k_oe' => 'Reipsi 4k OE',
			'nmr' => 'NMR Nível mínio de resposta (Audiometria pediátrica)',
			'nmr_500_od' => 'NMR 500 Od',
			'nmr_1k_od' => 'NMR 1k Od',
			'nmr_2k_od' => 'NMR 2k Od',
			'nmr_4k_od' => 'NMR 4k Od',
			'nmr_intensiade_od' => 'NMR Intensidade OD',
			'nmr_500_oe' => 'NMR 500 OE',
			'nmr_1k_oe' => 'NMR 1k OE',
			'nmr_2k_oe' => 'NMR 2k OE',
			'nmr_4k_oe' => 'NMR 4k OE',
			'nmr_intensiade_oe' => 'NMR Intensiade OE',
			'recd_250_od' => 'RECD 250 OD',
			'recd_500_od' => 'RECD 500 OD',
			'recd_1000_od' => 'RECD 1000 OD',
			'recd_2000_od' => 'RECD 2000 OD',
			'recd_3000_od' => 'RECD 3000 OD',
			'recd_4000_od' => 'RECD 4000 OD',
			'recd_6000_od' => 'RECD 6000 OD',
			'recd_8000_od' => 'RECD 8000 OD',
			'recd_250_oe' => 'RECD 250 OE',
			'recd_500_oe' => 'RECD 500 OE',
			'recd_1000_oe' => 'RECD 1000 OE',
			'recd_2000_oe' => 'RECD 2000 OE',
			'recd_3000_oe' => 'RECD 3000 OE',
			'recd_4000_oe' => 'RECD 4000 OE',
			'recd_6000_oe' => 'RECD 6000 OE',
			'recd_8000_oe' => 'RECD 8000 OE',
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
			'agogo_pequeno' => 'Agogô Pequeno',
			'agogo_grande' => 'Agogô Grande',
			'prato' => 'Prato',
			'latencia_resposta' => 'Latência Resposta',
			'laudo_audiologico' => 'Laudo Audiológico',
			'last_update' => 'Última atualização',
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
		$criteria->compare('nna_clique_od',$this->nna_clique_od,true);
		$criteria->compare('nna_500_od',$this->nna_500_od,true);
		$criteria->compare('nna_1000_od',$this->nna_1000_od,true);
		$criteria->compare('nna_cliquer_oe',$this->nna_cliquer_oe,true);
		$criteria->compare('nna_500_oe',$this->nna_500_oe,true);
		$criteria->compare('nna_1000_oe',$this->nna_1000_oe,true);
		$criteria->compare('imitanciometria',$this->imitanciometria,true);
		$criteria->compare('otoscopia',$this->otoscopia,true);
		$criteria->compare('pressao_od',$this->pressao_od,true);
		$criteria->compare('complacencia_od',$this->complacencia_od,true);
		$criteria->compare('tipo_curva_od',$this->tipo_curva_od,true);
		$criteria->compare('pressao_oe',$this->pressao_oe,true);
		$criteria->compare('complacencia_oe',$this->complacencia_oe,true);
		$criteria->compare('tipo_curva_oe',$this->tipo_curva_oe,true);
		$criteria->compare('reipsi_500_od',$this->reipsi_500_od,true);
		$criteria->compare('reipsi_1k_od',$this->reipsi_1k_od,true);
		$criteria->compare('reipsi_2k_od',$this->reipsi_2k_od,true);
		$criteria->compare('reipsi_4k_od',$this->reipsi_4k_od,true);
		$criteria->compare('reipsi_500_oe',$this->reipsi_500_oe,true);
		$criteria->compare('reipsi_1k_oe',$this->reipsi_1k_oe,true);
		$criteria->compare('reipsi_2k_oe',$this->reipsi_2k_oe,true);
		$criteria->compare('reipsi_4k_oe',$this->reipsi_4k_oe,true);
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
		$criteria->compare('recd_250_od',$this->recd_250_od,true);
		$criteria->compare('recd_500_od',$this->recd_500_od,true);
		$criteria->compare('recd_1000_od',$this->recd_1000_od,true);
		$criteria->compare('recd_2000_od',$this->recd_2000_od,true);
		$criteria->compare('recd_3000_od',$this->recd_3000_od,true);
		$criteria->compare('recd_4000_od',$this->recd_4000_od,true);
		$criteria->compare('recd_6000_od',$this->recd_6000_od,true);
		$criteria->compare('recd_8000_od',$this->recd_8000_od,true);
		$criteria->compare('recd_250_oe',$this->recd_250_oe,true);
		$criteria->compare('recd_500_oe',$this->recd_500_oe,true);
		$criteria->compare('recd_1000_oe',$this->recd_1000_oe,true);
		$criteria->compare('recd_2000_oe',$this->recd_2000_oe,true);
		$criteria->compare('recd_3000_oe',$this->recd_3000_oe,true);
		$criteria->compare('recd_4000_oe',$this->recd_4000_oe,true);
		$criteria->compare('recd_6000_oe',$this->recd_6000_oe,true);
		$criteria->compare('recd_8000_oe',$this->recd_8000_oe,true);
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
		$criteria->compare('laudo_audiologico',$this->laudo_audiologico,true);
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