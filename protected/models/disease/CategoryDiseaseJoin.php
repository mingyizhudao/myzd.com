<?php

/**
 * This is the model class for table "category_disease_join".
 *
 * The followings are the available columns in table 'category_disease_join':
 * @property integer $id
 * @property integer $sub_cat_id
 * @property integer $disease_id
 * @property integer $display_order
 * @property string $date_created
 * @property string $date_updated
 * @property string $date_deleted
 *
 * The followings are the available model relations:
 * @property Disease $disease
 */
class CategoryDiseaseJoin extends EActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category_disease_join';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_created', 'required'),
			array('sub_cat_id, disease_id, display_order', 'numerical', 'integerOnly'=>true),
			array('date_updated, date_deleted', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sub_cat_id, disease_id, display_order, date_created, date_updated, date_deleted', 'safe', 'on'=>'search'),
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
			'cdDisease' => array(self::BELONGS_TO, 'Disease', 'disease_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sub_cat_id' => 'Sub Cat',
			'disease_id' => 'Disease',
			'display_order' => 'Display Order',
			'date_created' => 'Date Created',
			'date_updated' => 'Date Updated',
			'date_deleted' => 'Date Deleted',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('sub_cat_id',$this->sub_cat_id);
		$criteria->compare('disease_id',$this->disease_id);
		$criteria->compare('display_order',$this->display_order);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('date_deleted',$this->date_deleted,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CategoryDiseaseJoin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function getAllBySubCatId($sub_cat_id) {
        $criteria = new CDbCriteria;
        $criteria->distinct = FALSE;
        $criteria->join = 'left join disease d on (t.`disease_id`=d.`id`)';
        $criteria->addCondition("t.sub_cat_id=:sub_cat_id");
        $criteria->params[":sub_cat_id"] = $sub_cat_id;

        return $this->findAll($criteria);
    }

    public function getDisease(){
        return $this->cdDisease;
    }

    public function getSubCatId(){
        return $this->sub_cat_id;
    }
}
