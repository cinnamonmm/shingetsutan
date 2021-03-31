<?php
add_shortcode('site_url',function($args,$contents){
$contents =  esc_url(home_url());
return $contents;
});
