<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


$config['facebook']['api_id'] = 'Your APP ID';
$config['facebook']['app_secret'] = 'Your Secret Key';
$config['facebook']['redirect_url'] = 'http://birthday-openshift.local/';
$config['facebook']['permissions'] = array(
    'email',
    'user_location',
    'user_birthday',
    'user_likes',
);

?>
