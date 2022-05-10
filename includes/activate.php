<?php
function st_calculadora(){

    if(version_compare(get_bloginfo('version'), '4.5', '<')){
        wp_die('Você precisa atualizar o Wordpress para usar este plugin');
    }

}