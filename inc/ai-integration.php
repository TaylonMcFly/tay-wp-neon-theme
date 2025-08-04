<?php
add_action('wp_ajax_neon_ai_suggestions', 'neon_core_ai_suggestions');
add_action('wp_ajax_nopriv_neon_ai_suggestions', 'neon_core_ai_suggestions');

function neon_core_ai_suggestions() {
    check_ajax_referer('neon_core_nonce', 'nonce');
    
    $suggestions = array(
        'front' => array(
            '<article class="ai-card">
                <h3>Quantum Computing Breakthrough</h3>
                <p>Scientists achieve 99% accuracy in quantum calculations</p>
                <a href="#">Read Analysis</a>
             </article>',
            '<article class="ai-card">
                <h3>Neural Interface Update</h3>
                <p>New brain-computer interface achieves record data transfer</p>
                <a href="#">Explore Tech</a>
             </article>'
        )
    );
    
    $context = isset($_POST['context']) ? $_POST['context'] : 'front';
    $key = ($context === '/') ? 'front' : 'blog';
    
    $response = array(
        'success' => true,
        'content' => implode('', $suggestions[$key] ?? [])
    );
    
    wp_send_json($response);
}
