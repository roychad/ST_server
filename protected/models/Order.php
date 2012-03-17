<?php

/**
 * This is the model class for table "st_order".
 *
 * The followings are the available columns in table 'st_order':
 * @property integer $id
 * @property string $create_time
 * @property integer $state
 * @property integer $input_user
 * @property integer $oid
 *
 * The followings are the available model relations:
 * @property User $inputUser
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Order the static model class
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
		return 'st_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_time, state, input_user, oid', 'required'),
			array('state, input_user, oid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, create_time, state, input_user, oid', 'safe', 'on'=>'search'),
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
			'inputUser' => array(self::BELONGS_TO, 'User', 'input_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'create_time' => 'Create Time',
			'state' => 'State',
			'input_user' => 'Input User',
			'oid' => 'Oid',
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
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('input_user',$this->input_user);
		$criteria->compare('oid',$this->oid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function searchFirstByOid($oid)
	{
		$sql = "select * from `st_order` where oid = $oid";
		$command = Yii::app()->db->createCommand($sql);
		$rows = $command->queryAll();
		return $rows?$rows[0]:null;
	}
}