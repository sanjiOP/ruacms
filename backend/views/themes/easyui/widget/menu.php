<?php


?>

<div class="main-menu" id="main-menu">
    <?php foreach ($menus as $menu ): ?>
    <a href="<?php echo $menu['url']?>" class="<?php echo $menu['active']?>" target="_self"><?php echo $menu['text']?></a>
    <?php endforeach;?>

</div>


<!--
<div class="main-menu" id="main-menu">
    <a href="javascript:void(0);" class="active">我的</a>
    <a href="javascript:void(0);">内容</a>
    <a href="javascript:void(0);">页面</a>
    <a href="javascript:void(0);">用户</a>
    <a href="javascript:void(0);">插件</a>
    <a href="javascript:void(0);">模版</a>
    <a href="javascript:void(0);" menutype="menubutton">配置</a>
    <div class="system-menu">
        <div>系统配置</div>
        <div>站点配置</div>
        <div>权限配置</div>
    </div>
</div>
-->