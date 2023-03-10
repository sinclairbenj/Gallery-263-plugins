<?php

function gp_register_blocks() {
    $blocks = [
        [ 'name' => 'fancy-header' ],
        [ 'name' => 'search-form', 'options' => [
            'render_callback' => 'gp_search_form_render_cb'
        ]],
        [ 'name' => 'page-header', 'options' => [
            'render_callback' => 'gp_page_header_render_cb'
        ]],
        [ 'name' => 'recipe-summary', 'options' => [
            'render_callback' => 'gp_recipe_summary_render_cb'
        ]]
    ];

    foreach($blocks as $block) {
        register_block_type(
            GP_PLUGIN_DIR . 'build/blocks/' . $block['name'],
            isset($block['options']) ? $block['options'] : []
        );
    }
}