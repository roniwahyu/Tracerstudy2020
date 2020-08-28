<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id']       = FB_ID;       // Your app id
$config['app_secret']   = FB_SECRET;       // Your app secret key
$config['scope']        = 'email';  // custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['fields']       = 'id,first_name,last_name,email'; // fields to retrieve; if set to '', default is "id,first_name,last_name"
$config['redirect_uri'] = FB_CALLBACK2;       // url to redirect back from facebook. If set to '', site_url('') will be used
// $config['redirect_uri'] = site_url('fbion/action'); // url to redirect back from facebook.
