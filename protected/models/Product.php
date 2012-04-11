<?php

/**
 * This is the model class for table "st_product".
 *
 * The followings are the available columns in table 'st_product':
 * @property integer $id
 * @property string $product_id
 * @property string $product_name
 * @property string $product_introduce
 * @property double $product_mark
 * @property string $product_create_time
 * @property integer $product_marked_times
 *
 * The followings are the available model relations:
 * @property Photo[] $photos
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Product the static model class
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
		return 'st_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, product_name, product_introduce, product_mark, product_create_time, product_marked_times', 'required'),
			array('product_marked_times', 'numerical', 'integerOnly'=>true),
			array('product_mark', 'numerical'),
			array('product_id', 'length', 'max'=>50),
			array('product_name', 'length', 'max'=>100),
			array('product_introduce', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_id, product_name, product_introduce, product_mark, product_create_time, product_marked_times', 'safe', 'on'=>'search'),
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
			'photos' => array(self::HAS_MANY, 'Photo', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'product_name' => 'Product Name',
			'product_introduce' => 'Product Introduce',
			'product_mark' => 'Product Mark',
			'product_create_time' => 'Product Create Time',
			'product_marked_times' => 'Product Marked Times',
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
		$criteria->compare('product_id',$this->product_id,true);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_introduce',$this->product_introduce,true);
		$criteria->compare('product_mark',$this->product_mark);
		$criteria->compare('product_create_time',$this->product_create_time,true);
		$criteria->compare('product_marked_times',$this->product_marked_times);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function validateProductId()
	{
		return preg_match('/^[0-9a-zA-Z]{0,50}$/',$this->product_id)?1:0;
	}
}