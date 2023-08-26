<?php
/*
Plugin Name: Simulador de Parcelamento Nextstream
Description: Adiciona através de um shortcode, uma simulação de parcelamento na página do produto.
Version: 1.3.0
Author: Sylas Filho A
Author URI: https://nextstream.com.br
*/

// Função para incluir os arquivos necessários
function simulador_parcelamento_nextstream_include_files() {
    include_once plugin_dir_path(__FILE__) . 'includes/admin/admin.php';
    include_once plugin_dir_path(__FILE__) . 'includes/frontend/frontend.php';
}
add_action('plugins_loaded', 'simulador_parcelamento_nextstream_include_files');
