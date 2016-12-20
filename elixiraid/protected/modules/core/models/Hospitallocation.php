<?php

/**
 * This is the model class for table "hospitallocation".
 *
 * The followings are the available columns in table 'hospitallocation':
 * @property integer $hospitallocationid
 * @property integer $hospitalregistrationid
 * @property string $buidingname
 * @property string $buildingcode
 */
class Hospitallocation extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'hospitallocation';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('buidingname,buildingcode', 'required'),
            array('hospitalregistrationid', 'numerical', 'integerOnly' => true),
            array('buidingname, buildingcode', 'length', 'max' => 30),
            array('buidingname,buildingcode', 'filter', 'filter' => 'trim'),
             array('buidingname', 'match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => 'Invalid building name.Avoid special characters($,@,_ etc..)'),
            array('buidingname', 'unique', 'message' => 'Buiding name number already exist!'),
            array('buildingcode', 'unique', 'message' => 'Building code number already exist!'),
          
            array('hospitallocationid, hospitalregistrationid, buidingname, buildingcode', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'hospitalregistrationid' => array(self::BELONGS_TO, 'Users', 'id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'hospitallocationid' => 'Hospitallocationid',
            'id' => 'Hospitalregistrationid',
            'buidingname' => 'Buiding name',
            'buildingcode' => 'Building code',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('hospitallocationid', $this->hospitallocationid);
        $criteria->compare('hospitalregistrationid', $this->hospitalregistrationid);
        $criteria->compare('buidingname', $this->buidingname, true);
        $criteria->compare('buildingcode', $this->buildingcode, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Hospitallocation the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
