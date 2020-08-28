

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// FACEBOOK CREDENTIAL
$config['FACEBOOK_ID'] = FB_ID;
$config['FACEBOOK_SECRET'] = FB_SECRET;
$config['GRAPH_version'] = 'v5.7.0';
$config['FACEBOOK_CALLBACK_URL'] = FB_CALLBACK;
$config['FACEBOOK_PERMISSIONS'] = array(
    // 'public_profile',
    // 'user_friends',
    'email',
    // 'user_about_me',
   /* 'user_actions.books',
    'user_actions.fitness',
'user_actions.music',
'user_actions.news',
'user_actions.video',
'user_birthday',
'user_education_history',
'user_events',
'user_games_activity',
'user_hometown',
'user_likes',
'user_location',
'user_managed_groups',
'user_photos',
'user_posts',
'user_relationships',
'user_relationship_details',
'user_religion_politics',
'user_tagged_places',
'user_videos',
'user_website',
'user_work_history',
'read_custom_friendlists',
'read_insights',
'read_audience_network_insights',
'read_page_mailboxes',
'manage_pages',
'publish_pages',
'publish_actions',
'rsvp_event',
'pages_show_list',
'pages_manage_cta',
'pages_manage_instant_articles',
'ads_read',
'ads_management',
'business_management',
'pages_messaging',
'pages_messaging_phone_number'*/
);


/* End of file facebook_config.php */
/* Location: .//D/xampp7/htdocs/cipasarumkm/pasarumkm/config/facebook_config.php */ ?>