<?php
namespace backend\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * Menu model
 *
 */
class Menu extends ActiveRecord
{


    const DISPLAY = 1;
    const UNDISPLAY = 0;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu}}';
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'        => '编号',
            'name'      => '标识',
            'title'     =>'导航名称',
            'pid'       => '父级id',
            'url'       =>'跳转页面',
            'iconcls'   =>'icon',
        ];
    }



    /**
     * 获取所有的分类
     */
    public static function getAllMenu()
    {
        $data = static::find()->all();
        $data = ArrayHelper::toArray($data);
        return $data;
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'show' => self::DISPLAY]);
    }


    /*
     * level node list
     * */
    public static function getMenuLevel($level = 0){
        return static::find()->where(['pid'=>$level,'show'=>self::DISPLAY])->all();
    }


    /*
     * child nodes list
     * */
    public function getChildMenu(){
        return static::find()->where(['pid'=>$this->id,'show'=>self::DISPLAY])->all();
    }


    /*
     * parent nodes list
     * */
    public function getParentMenu(){
        return static::find()->where(['id'=>$this->pid,'show'=>self::DISPLAY])->all();
    }


}
