<?php
/**
 * @package Two_dices
 * @version 1.0.0
 */
/*
Plugin Name: Two dices
Plugin URI: #
Description: #
Author: paikwiki
Version: 1.0.0
Author URI: http://paikwiki.com
*/

function two_dices() {
  echo '<p class="dices">hello, two dices</p>';
}

add_action( 'admin_notices', 'two_dices' );