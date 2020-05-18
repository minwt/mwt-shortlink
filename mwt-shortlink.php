<?php
/*
Plugin Name: MWT-Shortlink 文章短連結
Plugin URI: https://www.minwt.com
Description: 顯示文章短連結
Version: 1.0
Author: Minggo Zhou
Author URI: https://www.minwt.com/
*/

add_action('wp_head', 'mwt_add_shartlink');
function mwt_add_shartlink() {
  if(is_single()){
    echo "<link id=\"shortlink\" rel=\"shortlink\" href=\"".get_home_url()."/?p=".get_the_ID()."\" />";
  }
}