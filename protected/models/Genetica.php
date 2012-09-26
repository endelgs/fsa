<?php

/**
 * This is the model class for table "genetica".
 *
 * The followings are the available columns in table 'genetica':
 * @property integer $id
 * @property string $genetica
 * @property string $hipotese_diagnostica
 * @property string $conduta
 * @property string $alteracoes_observadas
 * @property string $homozigoto_normal
 * @property string $homozigoto_mutante
 * @property string $heterozigoto
 * @property string $del_gjb6_d13s1830
 * @property string $del_gjb6_d13s1854
 * @property string $del_3
 * @property string $del_4
 * @property string $del_5
 * @property string $a1555g
 * @property string $c1494t
 * @property string $a827g
 * @property string $a7445g
 * @property string $a7444g
 * @property string $a3243g
 * @property string $gjb2
 * @property string $gjb2_genotipo
 * @property string $gjb6
 * @property string $gjb6_genotipo
 * @property string $gjb3
 * @property string $gjb3_genotipo
 * @property string $slc26a4
 * @property string $slc26a4_genotipo
 * @property string $otof
 * @property string $otof_genotipo
 * @property string $mtrnr1
 * @property string $mtrnr1_genotipo
 * @property string $outros_genes
 * @property string $outros_genes_genotipo
 * @property integer $paciente_r
 * 
 * The followings are the available model relations:
 * @property Paciente $pacienteR
 */
class Genetica extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Genetica the static model class
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
		return 'genetica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('genetica, hipotese_diagnostica, conduta, alteracoes_observadas,  paciente_r', 'required'),
			array('paciente_r', 'numerical', 'integerOnly'=>true),
			array('genetica, gjb2_genotipo, gjb6_genotipo, gjb3_genotipo, slc26a4_genotipo, otof_genotipo, mtrnr1_genotipo, outros_genes, outros_genes_genotipo', 'length', 'max'=>250),
			array('homozigoto_normal, homozigoto_mutante, heterozigoto, del_gjb6_d13s1830, del_gjb6_d13s1854, del_3, del_4, del_5, a1555g, c1494t, a827g, a7445g, a7444g, a3243g, gjb2, gjb6, gjb3, slc26a4, otof, mtrnr1', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, genetica, hipotese_diagnostica, conduta, alteracoes_observadas, homozigoto_normal, homozigoto_mutante, heterozigoto, del_gjb6_d13s1830, del_gjb6_d13s1854, del_3, del_4, del_5, a1555g, c1494t, a827g, a7445g, a7444g, a3243g, gjb2, gjb2_genotipo, gjb6, gjb6_genotipo, gjb3, gjb3_genotipo, slc26a4, slc26a4_genotipo, otof, otof_genotipo, mtrnr1, mtrnr1_genotipo, outros_genes, outros_genes_genotipo, paciente_r', 'safe', 'on'=>'search'),
		);
	}

  protected function afterFind(){
		parent::afterFind();
    $this->homozigoto_normal=($this->homozigoto_normal == 'true')?'Sim':'Não';
    $this->homozigoto_mutante=($this->homozigoto_mutante == 'true')?'Sim':'Não';
    $this->heterozigoto=($this->heterozigoto == 'true')?'Sim':'Não';
    
    $this->del_gjb6_d13s1830 = ($this->del_gjb6_d13s1830 == 'true')?'Sim':'Não';
    $this->del_gjb6_d13s1854 = ($this->del_gjb6_d13s1854 == 'true')?'Sim':'Não';
    $this->del_3 = ($this->del_3 == 'true')?'Sim':'Não';
    $this->del_4 = ($this->del_4 == 'true')?'Sim':'Não';
    $this->del_5 = ($this->del_5 == 'true')?'Sim':'Não';
    
    $this->a1555g = ($this->a1555g == 'true')?'Sim':'Não';
		$this->c1494t = ($this->c1494t == 'true')?'Sim':'Não';
		$this->a827g = ($this->a827g == 'true')?'Sim':'Não';	
    $this->a7445g = ($this->a7445g == 'true')?'Sim':'Não';
    $this->a7444g = ($this->a7444g == 'true')?'Sim':'Não';
    $this->a3243g = ($this->a3243g == 'true')?'Sim':'Não';
		
    $this->gjb2 = ($this->gjb2 == 'true')?'Sim':'Não';
    $this->gjb3 = ($this->gjb3 == 'true')?'Sim':'Não';
    $this->gjb6 = ($this->gjb6 == 'true')?'Sim':'Não';
    $this->slc26a4 = ($this->slc26a4 == 'true')?'Sim':'Não';
    $this->otof = ($this->otof == 'true')?'Sim':'Não';
    $this->mtrnr1 = ($this->mtrnr1 == 'true')?'Sim':'Não';
    $this->outros_genes = ($this->outros_genes == 'true')?'Sim':'Não';
    
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
			'genetica' => 'Genética',
			'hipotese_diagnostica' => 'Hipótese Diagnóstica',
			'conduta' => 'Conduta',
			'alteracoes_observadas' => 'Alterações Observadas',
			'homozigoto_normal' => 'Homozigoto Normal (N/N)',
			'homozigoto_mutante' => 'Homozigoto Mutante (35deIG/35deIG)',
			'heterozigoto' => 'Heterozigoto (35deIG/N)',
			'del_gjb6_d13s1830' => 'Del (GJB6-D13S1830)',
			'del_gjb6_d13s1854' => 'Del (GJB6-D13S1854)',
			'del_3' => 'Del 3',
			'del_4' => 'Del 4',
			'del_5' => 'Del 5',
			'a1555g' => 'A1555G',
			'c1494t' => 'C1494T',
			'a827g' => 'A827G',
			'a7445g' => 'A7445G',
			'a7444g' => 'A7444G',
			'a3243g' => 'A3243G',
			'gjb2' => 'GJB2',
			'gjb2_genotipo' => 'Genótipo Observado',
			'gjb6' => 'GJB6',
			'gjb6_genotipo' => 'Genótipo Observado',
			'gjb3' => 'GJB3',
			'gjb3_genotipo' => 'Genótipo Observado',
			'slc26a4' => 'SLC26A4',
			'slc26a4_genotipo' => 'Genótipo Observado',
			'otof' => 'OTOF',
			'otof_genotipo' => 'Genótipo Observado',
			'mtrnr1' => 'MTRNR1',
			'mtrnr1_genotipo' => 'Genótipo Observado',
			'outros_genes' => 'Outros Genes',
			'outros_genes_genotipo' => 'Genótipo Observado',
			'paciente_r' => 'Nome do Paciente',
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
		$criteria->compare('genetica',$this->genetica,true);
		$criteria->compare('hipotese_diagnostica',$this->hipotese_diagnostica,true);
		$criteria->compare('conduta',$this->conduta,true);
		$criteria->compare('alteracoes_observadas',$this->alteracoes_observadas,true);
		$criteria->compare('homozigoto_normal',$this->homozigoto_normal,true);
		$criteria->compare('homozigoto_mutante',$this->homozigoto_mutante,true);
		$criteria->compare('heterozigoto',$this->heterozigoto,true);
		$criteria->compare('del_gjb6_d13s1830',$this->del_gjb6_d13s1830,true);
		$criteria->compare('del_gjb6_d13s1854',$this->del_gjb6_d13s1854,true);
		$criteria->compare('del_3',$this->del_3,true);
		$criteria->compare('del_4',$this->del_4,true);
		$criteria->compare('del_5',$this->del_5,true);
		$criteria->compare('a1555g',$this->a1555g,true);
		$criteria->compare('c1494t',$this->c1494t,true);
		$criteria->compare('a827g',$this->a827g,true);
		$criteria->compare('a7445g',$this->a7445g,true);
		$criteria->compare('a7444g',$this->a7444g,true);
		$criteria->compare('a3243g',$this->a3243g,true);
		$criteria->compare('gjb2',$this->gjb2,true);
		$criteria->compare('gjb2_genotipo',$this->gjb2_genotipo,true);
		$criteria->compare('gjb6',$this->gjb6,true);
		$criteria->compare('gjb6_genotipo',$this->gjb6_genotipo,true);
		$criteria->compare('gjb3',$this->gjb3,true);
		$criteria->compare('gjb3_genotipo',$this->gjb3_genotipo,true);
		$criteria->compare('slc26a4',$this->slc26a4,true);
		$criteria->compare('slc26a4_genotipo',$this->slc26a4_genotipo,true);
		$criteria->compare('otof',$this->otof,true);
		$criteria->compare('otof_genotipo',$this->otof_genotipo,true);
		$criteria->compare('mtrnr1',$this->mtrnr1,true);
		$criteria->compare('mtrnr1_genotipo',$this->mtrnr1_genotipo,true);
		$criteria->compare('outros_genes',$this->outros_genes,true);
		$criteria->compare('outros_genes_genotipo',$this->outros_genes_genotipo,true);
		$criteria->compare('paciente_r',$this->paciente_r);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}