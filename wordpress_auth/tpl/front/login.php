<div class="alert">
</div>
<h1 class="title"><?php echo isset($wp_auth_options['login_form_title'])? $wp_auth_options['login_form_title'] : "ورود" ; ?></h1>
<div class='formlogin'>
<form id="loginform" action="" method="post" >
<label for="">ایمیل</label>
<input  name="userEmail" type="text" id="userEmail">
<label for="input">رمز</label>
<input  name="userPassword" type="password" id="userPassword">
<button name="submit">ورود</button>
</form>
</div>


