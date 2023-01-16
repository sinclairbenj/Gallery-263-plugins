<?php 

function gp_save_cuisine_meta($termID) {
    if(!isset($_POST['gp_more_info_url'])) {
        return;
    }

    update_term_meta(
        $termID, 
        'more_info_url',
        sanitize_url($_POST['gp_more_info_url'])
    );
}