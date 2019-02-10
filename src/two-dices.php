<?php
/**
* @package Two_dices
* @version 1.0.0
*/
/*
Plugin Name: Two dices
Plugin URI: https://github.com/paikwiki/wp-two-dices
Description: Let's roll the dices.
Author: paikwiki
Version: 1.0.0
Author URI: http://paikwiki.com
*/

function two_dices() {
    $dices = [
        '⚀',
        '⚁',
        '⚂',
        '⚃',
        '⚄',
        '⚅',
    ];
    $values = [
        rand(0, 5),
        rand(0, 5)
    ];
    echo '<p class="dices">'
    .$dices[$values[0]].$dices[$values[1]]
    .' <span>'.(array_sum($values) + 2)
    .'</span></p>';
}

add_action( 'admin_notices', 'two_dices' );

function two_dices_css() {
    echo "
        <style>
        .dices {
            padding: 0;
            margin: 0;
            font-size: 1.6rem;
            letter-spacing: 0.2rem;
        }
        .dices span {
            font-size: 1rem;
            letter-spacing: 0rem;
        }
        .block-editor-page .dices {
            display: none;
        }
        </style>
    ";
}
add_action( 'admin_head', 'two_dices_css' );