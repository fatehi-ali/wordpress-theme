<?php

?>
<form role="search"  method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search"  value="<?php echo get_search_query(); ?>" name="s" placeholder="برای مثال آیفون" />
     <button><i class="fa fa-search" aria-hidden="true"></i></button>
</form>