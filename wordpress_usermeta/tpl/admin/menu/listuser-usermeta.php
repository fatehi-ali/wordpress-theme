<div class="wrap">
<h1 style="font-family: IRANSans;">لیست کاربران</h1>
<table class="widefat">
    <thead>
      <tr>
          <th>شناسه</th>
          <th>نام</th>
          <th>ایمیل </th>
          <th>موبایل</th>
          <th>کیف پول</th>
          <th>عملیات</th>

      </tr>
    </thead>
      <tbody>
          <?php foreach($listuser as $listusers):?>
            <tr>
              <td><?php echo $listusers->ID;?></td>
              <td><?php echo $listusers->display_name;?></td>
              <td><?php echo $listusers->user_email;?></td>
              <td><?php echo get_user_meta($listusers->ID,'mobail',true);?></td>
              <td>
              <?php
                   $walletset=get_user_meta($listusers->ID,'wallet',true);
                    isset($walletset) ?  $wallet=$walletset  : $wallet="0";
                    echo number_format($wallet)." تومان ";
              ?>
              </td>
              <td>
              <a href="<?php echo add_query_arg(['action'=>'edit','item'=>$listusers->ID]);?>">
              <span class="dashicons dashicons-edit-page"></span>
              </a> 
              </td>
          </tr>
            <?php endforeach; ?>
          <tr>
              <td></td>
          </tr>
      </tbody>
</table>
</div>