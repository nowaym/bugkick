<?php

/**
 * This is the model class for table "{{settings_by_project}}".
 *
 * The followings are the available columns in table '{{settings_by_project}}':
 * @property string $project_id
 * @property integer $defaultAssignee
 * @property integer $defaultLabel
 * @property integer $defaultStatus
 * @property integer $defaultCompany
 */
class SettingsByProject extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SettingsByProject the static model class
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
		return '{{settings_by_project}}';
	}
	
	public function primaryKey()
	{
	  return 'project_id';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, defaultAssignee, defaultLabel, defaultStatus, defaultCompany', 'numerical', 'integerOnly'=>true),
            array('defaultAssignee, defaultLabel, defaultStatus, defaultCompany', 'length', 'max'=>10),
            array('project_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('project_id, defaultAssignee, defaultLabel, defaultStatus, defaultCompany', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'project_id' => 'Project',
			'defaultAssignee' => 'Default Assignee',
			'defaultLabel' => 'Default Label',
            'defaultStatus' => 'Default Status',
            'defaultCompany' => 'Default Company',
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

		$criteria->compare('project_id',$this->project_id,true);
		$criteria->compare('defaultAssignee',$this->defaultAssignee);
		$criteria->compare('defaultLabel',$this->defaultLabel);
        $criteria->compare('defaultStatus',$this->defaultStatus);
        $criteria->compare('defaultCompany',$this->defaultCompany);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}