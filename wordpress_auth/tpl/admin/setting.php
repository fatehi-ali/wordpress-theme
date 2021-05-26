<div class="wrap">
<h1>ورود یا ثبت نام </h1>
<form action="" method="post">
<div class="row">
<label for="">فعال بودن ورود </label>
<input type="checkbox" name="is_login_active" <?php echo $wp_auth_options['is_login_active'] ? 'checked' : '' ;?>>
</div>

<div class="row">
<label for="">فعال بودن ثبت نام</label>
<input type="checkbox" name="is_register_active" <?php echo $wp_auth_options['is_register_active'] ? 'checked' : '' ; ?>>
</div>

<div class="row">
<label for="">عنوان فرم ورود : </label>
<input type="text" name="login_form_title" value="<?php echo isset($wp_auth_options['login_form_title']) ? $wp_auth_options['login_form_title'] : 'ورود' ; ?>">
</div>

<div class="row">
<label for="">عنوان فرم ثبت نام  : </label>
<input type="text" name="register_form_title" value="<?php echo isset($wp_auth_options['register_form_title']) ? $wp_auth_options['register_form_title'] : 'ثبت نام' ; ?>">
</div>

<div class="row">
<input type="submit" value="ثبت" name="submit">
</div>

</form>
</div>