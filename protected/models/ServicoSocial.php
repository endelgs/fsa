<?php

/**
 * This is the model class for table "servico_social".
 *
 * The followings are the available columns in table 'servico_social':
 * @property integer $id
 * @property string $nome_mae
 * @property string $data_nascimento_mae
 * @property string $escolaridade_mae
 * @property string $profissao_mae
 * @property string $local_trabalho_mae
 * @property string $telefone_trabalho_mae
 * @property string $nome_pai
 * @property string $data_nascimento_pai
 * @property string $escolaridade_pai
 * @property string $profissao_pai
 * @property string $local_trabalho_pai
 * @property string $telefone_trabalho_pai
 * @property string $responsavel_crianca
 * @property string $familia
 * @property string $familia_outros
 * @property string $uniao
 * @property string $uniao_outro
 * @property string $residentes_familia
 * @property string $renda_total
 * @property string $quem_contribui
 * @property integer $n_pessoas_casa
 * @property integer $renda_per_capita
 * @property string $beneficio_social
 * @property string $outros_situacao_economica
 * @property string $casa_tipo
 * @property string $casa_alugada
 * @property string $casa_outros
 * @property string $tipo_construcao
 * @property integer $n_comodos
 * @property string $transporte_utilizado
 * @property string $convenio_medico
 * @property string $centro_saude
 * @property string $sintese_atendimento
 * @property string $last_update
 * @property integer $paciente_r
 *
 * The followings are the available model relations:
 * @property IrmaoServicoSocial[] $irmaoServicoSocials
 * @property ResidentesFamiliaServicoSocial[] $residentesFamiliaServicoSocials
 */
class ServicoSocial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ServicoSocial the static model class
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
		return 'servico_social';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_mae, data_nascimento_mae, escolaridade_mae, profissao_mae, local_trabalho_mae, telefone_trabalho_mae, nome_pai, data_nascimento_pai, escolaridade_pai, profissao_pai, local_trabalho_pai, telefone_trabalho_pai, responsavel_crianca, familia, familia_outros, uniao, residentes_familia, renda_total, quem_contribui, n_pessoas_casa, renda_per_capita, casa_tipo, tipo_construcao, n_comodos, transporte_utilizado, sintese_atendimento, paciente_r', 'required'),
			array('n_pessoas_casa, renda_per_capita, n_comodos, paciente_r', 'numerical', 'integerOnly'=>true),
			array('nome_mae, escolaridade_mae, profissao_mae, local_trabalho_mae, nome_pai, escolaridade_pai, profissao_pai, local_trabalho_pai, responsavel_crianca, familia_outros, uniao_outro, quem_contribui, beneficio_social, outros_situacao_economica, casa_outros, tipo_construcao, transporte_utilizado, convenio_medico, centro_saude', 'length', 'max'=>250),
			array('telefone_trabalho_mae, telefone_trabalho_pai', 'length', 'max'=>15),
			array('familia', 'length', 'max'=>8),
			array('uniao, renda_total, casa_alugada', 'length', 'max'=>10),
			array('residentes_familia', 'length', 'max'=>5),
			array('casa_tipo', 'length', 'max'=>7),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome_mae, data_nascimento_mae, escolaridade_mae, profissao_mae, local_trabalho_mae, telefone_trabalho_mae, nome_pai, data_nascimento_pai, escolaridade_pai, profissao_pai, local_trabalho_pai, telefone_trabalho_pai, responsavel_crianca, familia, familia_outros, uniao, uniao_outro, residentes_familia, renda_total, quem_contribui, n_pessoas_casa, renda_per_capita, beneficio_social, outros_situacao_economica, casa_tipo, casa_alugada, casa_outros, tipo_construcao, n_comodos, transporte_utilizado, convenio_medico, centro_saude, sintese_atendimento, last_update, paciente_r', 'safe', 'on'=>'search'),
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
			'irmaoServicoSocials' => array(self::HAS_MANY, 'IrmaoServicoSocial', 'servico_social_r'),
			'residentesFamiliaServicoSocials' => array(self::HAS_MANY, 'ResidentesFamiliaServicoSocial', 'servico_social_r'),
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
			'nome_mae' => 'Nome da Mãe',
			'data_nascimento_mae' => 'Data de Nascimento',
			'escolaridade_mae' => 'Escolaridade',
			'profissao_mae' => 'Profissão',
			'local_trabalho_mae' => 'Local de Trabalho',
			'telefone_trabalho_mae' => 'Telefone de Trabalho',
			'nome_pai' => 'Nome do Pai',
			'data_nascimento_pai' => 'Data de Nascimento',
			'escolaridade_pai' => 'Escolaridade',
			'profissao_pai' => 'Profissão',
			'local_trabalho_pai' => 'Local de Trabalho',
			'telefone_trabalho_pai' => 'Telefone de Trabalho',
			'responsavel_crianca' => 'Responsável pela Criança',
			'familia' => 'Família',
			'familia_outros' => 'Outros',
			'uniao' => 'União',
			'uniao_outro' => 'Outros',
			'residentes_familia' => 'Há pessoas residindo com a família?',
			'renda_total' => 'Renda Total',
			'quem_contribui' => 'Quem Contribui',
			'n_pessoas_casa' => 'Nº de pessoas na casa',
			'renda_per_capita' => 'Renda Per Capita',
			'beneficio_social' => 'Benefício Social',
			'outros_situacao_economica' => 'Outros',
			'casa_tipo' => 'Casa',
			'casa_alugada' => 'Casa Alugada',
			'casa_outros' => 'Casa Outros',
			'tipo_construcao' => 'Tipo de Construção',
			'n_comodos' => 'Nº de Cômodos',
			'transporte_utilizado' => 'Tipo de transporte utilizado para vir ao CEPRE',
			'convenio_medico' => 'Convênio Médico Particular',
			'centro_saude' => 'Centro de Saúde',
			'sintese_atendimento' => 'Síntese do Atendimento',
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
		$criteria->compare('nome_mae',$this->nome_mae,true);
		$criteria->compare('data_nascimento_mae',$this->data_nascimento_mae,true);
		$criteria->compare('escolaridade_mae',$this->escolaridade_mae,true);
		$criteria->compare('profissao_mae',$this->profissao_mae,true);
		$criteria->compare('local_trabalho_mae',$this->local_trabalho_mae,true);
		$criteria->compare('telefone_trabalho_mae',$this->telefone_trabalho_mae,true);
		$criteria->compare('nome_pai',$this->nome_pai,true);
		$criteria->compare('data_nascimento_pai',$this->data_nascimento_pai,true);
		$criteria->compare('escolaridade_pai',$this->escolaridade_pai,true);
		$criteria->compare('profissao_pai',$this->profissao_pai,true);
		$criteria->compare('local_trabalho_pai',$this->local_trabalho_pai,true);
		$criteria->compare('telefone_trabalho_pai',$this->telefone_trabalho_pai,true);
		$criteria->compare('responsavel_crianca',$this->responsavel_crianca,true);
		$criteria->compare('familia',$this->familia,true);
		$criteria->compare('familia_outros',$this->familia_outros,true);
		$criteria->compare('uniao',$this->uniao,true);
		$criteria->compare('uniao_outro',$this->uniao_outro,true);
		$criteria->compare('residentes_familia',$this->residentes_familia,true);
		$criteria->compare('renda_total',$this->renda_total,true);
		$criteria->compare('quem_contribui',$this->quem_contribui,true);
		$criteria->compare('n_pessoas_casa',$this->n_pessoas_casa);
		$criteria->compare('renda_per_capita',$this->renda_per_capita);
		$criteria->compare('beneficio_social',$this->beneficio_social,true);
		$criteria->compare('outros_situacao_economica',$this->outros_situacao_economica,true);
		$criteria->compare('casa_tipo',$this->casa_tipo,true);
		$criteria->compare('casa_alugada',$this->casa_alugada,true);
		$criteria->compare('casa_outros',$this->casa_outros,true);
		$criteria->compare('tipo_construcao',$this->tipo_construcao,true);
		$criteria->compare('n_comodos',$this->n_comodos);
		$criteria->compare('transporte_utilizado',$this->transporte_utilizado,true);
		$criteria->compare('convenio_medico',$this->convenio_medico,true);
		$criteria->compare('centro_saude',$this->centro_saude,true);
		$criteria->compare('sintese_atendimento',$this->sintese_atendimento,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}