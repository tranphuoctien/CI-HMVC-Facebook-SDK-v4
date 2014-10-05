<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$config['facebook']['api_id'] = '1488714401412382';
$config['facebook']['app_secret'] = '1c32904a8458d36eb71e9f218fc66a0a';
$config['facebook']['redirect_url'] = 'http://birthday-openshift.local/';
$config['facebook']['permissions'] = array(
    'email',
    'user_location',
    'user_birthday',
    'user_likes',
);

?>
