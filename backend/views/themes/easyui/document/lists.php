<?php

use backend\widget\ConfigjsWidget;

?>
<?= ConfigjsWidget::widget(); ?>

<table id="document_datagird_<?= $cid; ?>"></table>


<script>

    $(function(){
        $('#document_datagird_<?= $cid; ?>').datagrid({
            url:$config.documentList,
            method:'GET',
            title:'文档列表',
            fitColumns: true,
            fit:true,
            rownumbers: false,
            pagination:true,
            pageSize: 20,
            pageList: [20, 50, 100],
            singleSelect: false,
            collapsible:false,
            queryParams:{'cid':<?= $cid; ?>},
            columns:[[
                {field:'ck',checkbox: true},
                {field:'id',title:'编号',sortable:true,width:'3%'},
                {field:'preview',title:'预览',width:'3%'},
                {field:'title',title:'文档标题',align:'left',width:'64%'},
                {field:'created_at',title:'创建时间',width:'10%'},
                {field:'uid',title:'发稿人',width:'5%'},
                {field:'category_id',title:'所在栏目',width:'5%'},
                {field:'status',title:'状态',width:'5%'},
                {field:'view',title:'查看',width:'5%'}
            ]]
        });
    })
</script>

