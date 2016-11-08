<?php

namespace backend\models;


/**
 * Created by PhpStorm.
 * User: Gezlife
 * Date: 2016/10/28
 * Time: 13:24
 */
class Category extends RActiveRecord
{

    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public $state = 'closed';

    /**
     * @tabelname
     */
    public static function tableName()
    {
        return '{{%category}}';
    }






    /**
     * @fieldrules
     */
    public function rules()
    {
        return [
            [['pid', 'name'], 'required'],
            [['pid', 'sort', 'list_row'], 'integer'],
            [['allow_publish','reply','check'], 'boolean'],
            [['name', 'title'], 'string', 'max' => 120],
        ];
    }

    /**
     * @lables
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '标识',
            'title' => '栏目名称',
            'pid' => '父编号',
            'sort' => '排序',
            'list_row' => '列表行数',
            'meta_title' => 'SEO网页标题',
            'keywords' => 'SEO网页关键词',
            'description' => 'SEO网页描述',
            'template_index' => '栏目频道概览模板',
            'template_lists' => '栏目列表概览模板',
            'template_detail' => '详情细缆展示模板',
            'template_edit' => '详情细缆编辑模板',
            'allow_publish' => '是否允许发布',
            'display' => '可见性',
            'reply' => '是否允许留言',
            'check' => '是否需要审核内容',
            'create_at' => '创建于',
            'update_at' => '更新于',
            'status' => '状态',
            'icon' => '栏目图标'
            ];
    }


}