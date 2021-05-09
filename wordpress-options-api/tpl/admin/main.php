<div class="wrap">
<h1 class="" style="font-family: IRANSans;">تنظیمات پلاگین</h1>
<form method="post" action="">
  <div class="row">
    <div class="form-active">
      <div style="display: inline-block;">
      <label>فعال بودن پلاکین</label>
      <input  name="is_plugin_active"  type="checkbox"
      <?php echo isset($current_plugin_status) && intval($current_plugin_status) > 0 ? 'checked' : "";?>
      >
      </div>
      <button type="submit" name="savesetting" class="button button-primary">ارسال</button>
    </div>
  </div>
</form>
</div>
