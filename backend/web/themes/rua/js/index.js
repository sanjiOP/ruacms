/**
 * @ling http://www.ruaby.com/
 * @copyright Copyright (c) 2016 RuabySoft LLC
 * @license http://www.ruaby.com/license/
 * @createTime 16/9/30 下午11:49
 */

$(function(){


    //菜单

    $('#main-menu a').each(function(i,e){
        var type = $(e).attr('menutype');
        var active = $(e).hasClass('active');
        if(type == 'menubutton'){
            $(e).menubutton({
                plain:!active,
                menu:'.system-menu'
            });
        }else{
            $(e).linkbutton({
                plain:!active
            });
        }
    });




    $('#nav').tree({
        url:$config.nodeMenu,
        lines:true,
        onClick:function(node){
            if(node.url){
                if(node.url){
                    if($('#tabs').tabs('exists',node.text)){
                        $('#tabs').tabs('select',node.text);
                    }else{
                        $('#tabs').tabs('add',{
                            title:node.text,
                            closable:true,
                            href:node.url,
                            iconCls:'rua-icon-home'
                        });
                    }
                }
            }
        }
    });


    $('#tabs').tabs({
        fit:true,
        border:false,
    });









});

/*
*
* if(node.url){
 if($('#tabs').tabs('exists',node.text)){
 $('#tabs').tabs('select',node.text);
 }else{
 $('#tabs').tabs('add',{
 title:node.text,
 closable:true,
 href:node.url,
 iconCls:'rua-icon-home'
 });
 }
 }



 if(data){
 //         $(data).each(function(i,n){
 //             if(this.state == 'closed'){
 //                 $('#nav').tree('expandAll');
 //             }
 //         })
 //     }


*
* */


