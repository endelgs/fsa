<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id
 * @property string $nome
 * @property integer $hc
 * @property string $nome_mae
 * @property integer $hc_mae
 * @property string $data_nascimento
 * @property string $sexo
 * @property string $endereco
 * @property string $cidade
 * @property string $telefone_fixo
 * @property string $telefone_movel
 * @property string $telefone_trabalho
 * @property string $last_update
 * @property string $data_internacao
 * @property string $alta
 *
 * The followings are the available model relations:
 * @property AgendaDiagnostico[] $agendaDiagnosticos
 * @property AgendaMonitoramento[] $agendaMonitoramentos
 * @property AgendaOrl[] $agendaOrls
 * @property AgendaProtese[] $agendaProteses
 * @property AgendaTriagem[] $agendaTriagems
 * @property Diagnostico[] $diagnosticos
 * @property Genetica[] $geneticas
 * @property Monitoramento[] $monitoramentos
 * @property Orl[] $orls
 * @property ProteseAnexo[] $proteseAnexos
 * @property ProteseAvaliacao[] $proteseAvaliacaos
 * @property ProtesePrescricao[] $protesePrescricaos
 * @property Triagem[] $triagems
 */
class Paciente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paciente the static model class
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
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, nome_mae, hc_mae, data_nascimento', 'required'),
			array('hc, hc_mae', 'numerical', 'integerOnly'=>true),
			array('nome, nome_mae', 'length', 'max'=>250),
			array('sexo', 'length', 'max'=>9),
			array('endereco', 'length', 'max'=>500),
			array('cidade', 'length', 'max'=>200),
			array('telefone_fixo, telefone_movel, telefone_trabalho', 'length', 'max'=>15),
			array('alta', 'length', 'max'=>21),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, hc, nome_mae, hc_mae, data_nascimento, sexo, endereco, cidade, telefone_fixo, telefone_movel, telefone_trabalho, data_internacao, alta', 'safe', 'on'=>'search'),
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
			'agendaDiagnosticos' => array(self::HAS_MANY, 'AgendaDiagnostico', 'paciente_r'),
			'agendaMonitoramentos' => array(self::HAS_MANY, 'AgendaMonitoramento', 'paciente_r'),
			'agendaOrls' => array(self::HAS_MANY, 'AgendaOrl', 'paciente_r'),
			'agendaProteses' => array(self::HAS_MANY, 'AgendaProtese', 'paciente_r'),
			'agendaTriagems' => array(self::HAS_MANY, 'AgendaTriagem', 'paciente_r'),
			'diagnosticos' => array(self::HAS_MANY, 'Diagnostico', 'paciente_r'),
			'geneticas' => array(self::HAS_MANY, 'Genetica', 'paciente_r'),
			'monitoramentos' => array(self::HAS_MANY, 'Monitoramento', 'paciente_r'),
			'orls' => array(self::HAS_MANY, 'Orl', 'paciente_r'),
			'proteseAnexos' => array(self::HAS_MANY, 'ProteseAnexo', 'paciente_r'),
			'proteseAvaliacaos' => array(self::HAS_MANY, 'ProteseAvaliacao', 'paciente_r'),
			'protesePrescricaos' => array(self::HAS_MANY, 'ProtesePrescricao', 'paciente_r'),
			'triagems' => array(self::HAS_MANY, 'Triagem', 'paciente_r'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			/*'id' => 'ID',*/
			'nome' => 'Nome',
			'hc' => 'HC',
			'nome_mae' => 'Nome da Mãe',
			'hc_mae' => 'HC da Mãe',
			'data_nascimento' => 'Data de Nascimento',
			'sexo' => 'Sexo',
			'endereco' => 'Endereço',
			'cidade' => 'Cidade',
			'telefone_fixo' => 'Telefone Fixo',
			'telefone_movel' => 'Telefone Móvel',
			'telefone_trabalho' => 'Telefone Trabalho',
			'last_update' => 'Última Atualização',
			'data_internacao' => 'Data da Internação',
			'alta' => 'Alta',
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
		$criteria->compare('hc',$this->hc);
		$criteria->compare('nome_mae',$this->nome_mae,true);
		$criteria->compare('hc_mae',$this->hc_mae);
		$criteria->compare('data_nascimento',$this->data_nascimento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('telefone_fixo',$this->telefone_fixo,true);
		$criteria->compare('telefone_movel',$this->telefone_movel,true);
		$criteria->compare('telefone_trabalho',$this->telefone_trabalho,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('data_internacao',$this->data_internacao,true);
		$criteria->compare('alta',$this->alta,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function afterFind(){
		parent::afterFind();
		$this->data_nascimento=date('d/m/Y', strtotime(str_replace("-", "", $this->data_nascimento)));
		$this->data_internacao=date('d/m/Y', strtotime(str_replace("-", "", $this->data_internacao)));
		$this->last_update=date('d/m/Y - G:i', strtotime(str_replace("-", "", $this->last_update)))."h";
	}
	
	protected function beforeSave(){
		if(parent::beforeSave()){
			$data = explode("/",$this->data_nascimento);
			$this->data_nascimento=implode(array_reverse($data));
			
			$dataInternacao = explode("/",$this->data_internacao);
			$this->data_internacao=implode(array_reverse($dataInternacao));
			return TRUE;
		}
		else return false;
	}
	
	public static function pacienteAutoComplete($name='') {
		$sql = '
		SELECT 
			paciente.id,
			paciente.nome,
			paciente.hc,
			paciente.hc_mae,
			paciente.nome_mae,
			paciente.sexo,
			paciente.endereco,
			paciente.cidade,
			paciente.telefone_fixo,
			paciente.telefone_movel,
			paciente.telefone_trabalho,
			date_format(data_nascimento, "%d/%m/%Y") as data_nascimento,
			date_format(paciente.last_update, "%d/%m/%Y - %H:%i h") as last_update,
			CONCAT(hc,\' - \',nome) as label,
			triagem.id as triagem_id,
			genetica.id as genetica_id,
			servico_social.id as servico_social_id
		FROM 
			paciente
			left join triagem on triagem.paciente_r=paciente.id
			left join genetica on genetica.paciente_r=paciente.id
			left join servico_social on servico_social.paciente_r=paciente.id
		WHERE 
			nome LIKE :qterm OR hc LIKE :qterm';
		$sql .= ' GROUP BY paciente.id';
		$sql .= ' ORDER BY paciente.nome ASC';
		
		$command = Yii::app()->db->createCommand($sql);
		$qterm = $name.'%';
		$command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
		$command->queryAll();
		return $command->queryAll();
	
	}
}