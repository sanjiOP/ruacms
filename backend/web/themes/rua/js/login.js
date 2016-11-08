/**
 * Created by Gezlife on 2016/10/27.
 */

$(function(){

    var loginButton = {
        text: '登陆',
        iconCls: 'icon-ok',
        handler: function () {
            $('#loginform').form('submit',{
                onSubmit:function(){
                    return $(this).form('enableValidation').form('validate');
                },
                success:function(data){
                    data = $.parseJSON(data);
                    if(data.state){
                        alert(data.info);
                    }else{
                        alert(data.info);
                    }
                }
            });
        }
    };

    var cancelButton = {
        text: '取消',
        iconCls: 'icon-cancel',
        handler: function () {
            $('#loginform').form('clear');
        }
    };

    $('#dil-login').dialog({
        title:'登陆',
        width:300,
        height:200,
        closed:false,
        closable:false,
        buttons: [loginButton,cancelButton]
    });

})

