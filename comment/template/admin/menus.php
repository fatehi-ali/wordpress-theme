<h1> انتخاب تصویر logo</h1>
<div class="wrap wp-uploader">
    <button class="" id="choosepicture">انتخاب تصویر</button>
    <img id="imguploader" src="<?php echo EXP_URL . 'assets/images/avenle.png'; ?>" alt="   ">
    <form action="" method="post">
        <input id="urluploader" type="text" value="در حال حاضر عکسی وجود ندارد">        
    </form>
</div>
<form class="wrap hand-uploader" method="post" action="" enctype="multipart/form-data">
    <div class="file-input">
        <input name="namefile" type="file" id="file" class="file">
        <label for="file">انتخاب تصویر</label>
    </div>
    <img src="<?php echo isset($newaddressurl) ? $newaddressurl : EXP_URL . 'assets/images/avenle.png'; ?>" alt="   ">
    <input name="submit_upload" type="submit" value="اپلود">
</form>