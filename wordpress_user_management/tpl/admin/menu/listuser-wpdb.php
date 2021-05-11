<div class="wrap">
<h1 style="font-family: IRANSans;">لیست کاربران</h1>
<a class="adduser" href="<?php echo add_query_arg(['action' => 'add']);?>">ثبت کاربر جدید</a>
<table class="widefat">
    <thead>
      <tr>
          <th>شناسه</th>
          <th>نام</th>
          <th>نام خانوادگی</th>
          <th>موبایل</th>
          <th>عملیات</th>
      </tr>
    </thead>
      <tbody>
          <?php foreach($listusers as $listuser):?>
            <tr>
              <td><?php echo $listuser->ID;?></td>
              <td><?php echo $listuser->firstName;?></td>
              <td><?php echo $listuser->lastName;?></td>
              <td><?php echo $listuser->mobile;?></td>
              <td>
              <a href="<?php echo add_query_arg(['action'=>'delete','item'=>$listuser->ID]); ?>"><span class="dashicons dashicons-no-alt"></span></a>
              <a href=""><span class="dashicons dashicons-edit-page"></span></a> 
              </td>
          </tr>
            <?php endforeach; ?>
          <tr>
              <td></td>
          </tr>
      </tbody>
</table>
</div>