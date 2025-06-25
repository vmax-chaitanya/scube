<?php
function encrypt_id($id)
{
    $CI = &get_instance();
    $CI->load->library('encryption');
    return strtr(rtrim(base64_encode($CI->encryption->encrypt($id)), '='), '+/', '-_');
}

function decrypt_id($encrypted_id)
{
    $CI = &get_instance();
    $CI->load->library('encryption');
    $decoded = base64_decode(strtr($encrypted_id, '-_', '+/'));
    return $CI->encryption->decrypt($decoded);
}
