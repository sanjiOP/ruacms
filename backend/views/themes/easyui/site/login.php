<?php

use yii\helpers\Url;


$this->title = 'login';
$AppAsset = \Yii::$app->assetManager->getBundle('backend\assets\AppAsset');
$AppAsset->addScript($this,'/rua/js/login.js');
?>
<div id="dil-login">
	<form id="loginform" method="post" action="<?=Url::to(['site/login'])?>">
		<input type="hidden" value="<?=\Yii::$app->request->getCsrfToken(); ?>" name="<?=\Yii::$app->request->csrfParam?>" />
		<div class="username input-group">
			<label>用户：</label><input type="text" name="LoginForm[username]" value="" placeholder="用户">
		</div>
		<div class="password input-group">
			<label>密码：</label><input type="password" name="LoginForm[password]" value="" placeholder="密码">
		</div>
	</form>
</div>
