<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo get('sitename');?>管理登录 - Powered by CmsEasy.cn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{$base_url}/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="{$skin_path}/login/login.css" type="text/css" media="all"  />
<style type="text/css">
#bg {
width:608px;
height:512px;
margin:0px auto;
padding:0px auto;
text-align:center;
background:url({$skin_path}/login/login_bg.png) no-repeat left top !important; 

/*For Firefox*/
*background:none;
/*For IE7 & IE6*/
_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='{$skin_path}/login/login_bg.png',sizingMethod='crop');
}
.login {clear:both; width:127px;height:44px;line-height:26px;text-align:center; font-weight:bold; border:none;color:white;
background:url({$skin_path}/login/login_btn.png) no-repeat left top !important; 
/*For Firefox*/
*background:none;
/*For IE7 & IE6*/
_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='{$skin_path}/login/login_btn.png',sizingMethod='crop');
}


</style>
</head>
<body>
<div id="bg">&nbsp;
<div id="login">
<div style="margin:150px 0px 0px 360px;">

<?php
    if(!get('submit')) flash();
    if(!get('submit') || hasflash()) {
?>

    <form name="loginform" action="<?php echo uri();?>" method="post" onsubmit="return Dcheck();">
    <input type="hidden" name="submit" value="提交">
<ul>
    <li> <input name="username" type="text" id="username" value="" class="input" tabindex="1" /></li>
    <li><input name="password" type="password" id="password" value="<?php //echo $password;?>" tabindex="2" class="input" /></li>
    <li><select name="expire" class="ss">
      <option selected value=''>登录有效期-当前会话</option>
      <option value='86400'>登录有效期-1天</option>
      <option value='2592000'>登录有效期-1月</option>
      <option value='31536000'>登录有效期-1年</option>
    </select></li>
<?php
    //if($loginfalse){
?>
     <li class="code"><input type='text' id="verify" value="{lang(enter)}{lang(verifycode)}" onfocus="if(this.value=='{lang(enter)}{lang(verifycode)}') {this.value=''}" onblur="if(this.value=='') this.value='{lang(enter)}{lang(verifycode)}'"  tabindex="3"  name="verify" />{verify()}</li>
<?php
	//}
?>
     <li><input type="submit" name="submit" value=" 登 陆 " class="login" tabindex="4" /></li>
	 </ul>
     </form>
   
   <div style="clear:both;"></div>
</div></div>

<?php
    }
    if(get('submit')) {
	  if(hasflash()) {
	      echo '<div style="clear:both;text-align:left;color:#A5EF54;font-size:16px;font-weight:bold;">';
		  echo flash();
	  } else { ?>
            <div style="padding-top:5px; text-align:left;color:#fff;font-size:16px;font-weight:bold;">
            登陆成功！
            <meta http-equiv="refresh" content="2;url={$admin_url}&site=<?php echo front::get('site')?>">
<?php
      }
	  echo '</div>';
	}
?></div>

</div><div class="clear"></div>
</div>
<div class="clear"></div>
<div id="footer">Copyright &copy; 2015 Powered by <a href="http://www.cmseasy.cn" title="CmsEasy企业网站系统" target="_blank">CmsEasy</a></div>
<script type="text/javascript">
function ResumeError()
{
    return true;
}
window.onerror = ResumeError;
document.loginform.username.focus();
</script>
</body>
</html>