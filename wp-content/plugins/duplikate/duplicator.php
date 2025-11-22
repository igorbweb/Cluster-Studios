<?php
/**
 * Plugin Name: Duplicador de Posts com ACF
 * Description: Permite duplicar qualquer post personalizado mantendo campos do ACF.
 * Version: 1.1
 * Author: Igor Bomfim
 * Author URI: https://github.com/igorbweb
 */

function duplicar_post_com_acf($post_id) {
    $post = get_post($post_id);
    if (!$post) return;

    $novo_post = array(
        'post_title'   => $post->post_title . ' (Cópia)',
        'post_content' => $post->post_content,
        'post_status'  => 'draft',
        'post_type'    => $post->post_type,
        'post_author'  => get_current_user_id(),
    );

    $novo_post_id = wp_insert_post($novo_post);
    $metas = get_post_custom($post_id);
    foreach ($metas as $key => $values) {
        foreach ($values as $value) {
            update_post_meta($novo_post_id, $key, maybe_unserialize($value));
        }
    }

    wp_redirect(admin_url('post.php?action=edit&post=' . $novo_post_id));
    exit;
}

// Admin Button
add_filter('post_row_actions', 'adicionar_link_duplicar_post_acf', 10, 2);
function adicionar_link_duplicar_post_acf($actions, $post) {
    $tipos = get_post_types(['public' => true], 'names');

    unset($tipos['post'], $tipos['page'], $tipos['attachment']);

    if (in_array($post->post_type, $tipos) && current_user_can('edit_posts')) {
        $url = admin_url('admin.php?action=duplicar_post_acf&post=' . $post->ID);
        $actions['duplicar'] = '<a href="' . esc_url($url) . '">Duplicar</a>';
    }

    return $actions;
}

// Admin action
add_action('admin_action_duplicar_post_acf', 'handle_duplicar_post_acf');
function handle_duplicar_post_acf() {
    if (!current_user_can('edit_posts') || !isset($_GET['post'])) {
        wp_die('Acesso negado.');
    }

    $post_id = absint($_GET['post']);
    duplicar_post_com_acf($post_id);
}