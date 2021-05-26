<div class="alert">
</div>
<h1 class="title"><?php echo isset($wp_auth_options['register_form_title'])? $wp_auth_options['register_form_title'] : "ثبت نام" ; ?></h1>
<div class='formlogin'>
<form id="registerform" action="" method="post" >
<label for="">نام</label>
<input  name="FirstNameUser" type="text" id="FirstNameUser">
<label for=""> نام خانوادگی</label>
<input  name="LastNameUser" type="text" id="LastNameUser">
<label for="input">ایمیل</label>
<input  name="EmailUser" type="email" id="EmailUser">
<label for="input"> کلمه عبور </label>
<input  name="PasswordUser" type="password" id="PasswordUser">
<button name="submit">ثبت نام</button>
</form>
</div>
