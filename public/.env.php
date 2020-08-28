<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*DEFINE SPECIFIC SETTING*/
// define('SITENAME','');
define('COMPANY','UWG Malang');
define('APPSNAME','WIGA');
define('APPSVERSION','Beta v0.1');
define('DOMAIN','tracer.id');
// define('DOMAIN','irigasi.roniwahyu.com');
define('TELPON','0341-364842');
define('EMAIL','roniwahyu@gmail.com');
define('ALAMAT','Jl. Borobudur No. 35<br>
Malang');
define('COMPANY_LONG',''); //longitude
define('COMPANY_LAT',''); //latitude
define('GA','');
define('THEMES','metronic'); //metronic | steller | default (BS4) | material (BS4)

// define('BASEURI',(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST']);
define('BASEURI',(isset($_SERVER['HTTPS']) ? "https://" : "http://") 
	. $_SERVER['SERVER_NAME'] 
	. str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']));

define('ASSETSURI',(isset($_SERVER['HTTPS']) ? "https://" : "http://") 
	.DOMAIN."/assets/");
define('ASSETSMAPS',(isset($_SERVER['HTTPS']) ? "https://" : "http://") 
	.DOMAIN."/assetsx/");

/*BNI CLIENT ID*/

/*GOOGLE DEV*/
//from api credential syahroni wahyu umkm2020 pasarumkmcom
// define('JSON_KEY',BASEURI.'credentials/client_secret_423847498219-8u8bt4sajb71kkc2rbgv3tc72eq5idt1.apps.googleusercontent.com.json'); //direktori credentials json WEBUWG
define('CREDENTIALS',APPPATH.'../public/credentials/client_secret_423847498219-l1eimmus6i34rt3ceailovarmn19c5fg.apps.googleusercontent.com.json');
define('JSON_KEY',BASEURI.'credentials/client_secret_423847498219-l1eimmus6i34rt3ceailovarmn19c5fg.apps.googleusercontent.com.json'); //direktori credentials json WEBSPADA
define('API_KEY', 'AIzaSyDZYwxiTjNtsJgXtggD4FTe3rY6poPbUX4'); //API SPADA

define('CLIENT_ID', '423847498219-l1eimmus6i34rt3ceailovarmn19c5fg.apps.googleusercontent.com'); //WEBSPADA
// define('CLIENT_SECRET', 'tTWa3p5vqYjZbdRQuwBLR8-A'); //WEBUWG
// define('STDIN',fopen("php://stdin","r"));

//from syahroni@widyagama.ac.id project widyagama WEB
define('CLIENT_SECRET', '1m4rRlonWakuNY-tszv2ZCjE'); //WEBUWG

// define('CLIENT_ID', '423847498219-8u8bt4sajb71kkc2rbgv3tc72eq5idt1.apps.googleusercontent.com'); WEBUWG
define('OAUTH_CALLBACK_URI',BASEURI.'auth/google/oauth2callback');
define('OAUTH_TEST_URI',BASEURI.'googleauth/oauth2callback');

define('FB_ID', '509039476670249');
define('FB_SECRET', '205264d41357268c3f8f48dfa695303a');
define('FB_CALLBACK','facebook/oauth2callback');
define('FB_CALLBACK2','fbion/action');


/*GOOGLE RECAPTCHA*/
//syahroni wahyu recaptcha spada widyagama
define('SITE_KEY', '6LdN7-MUAAAAAOeehR8g0gcDTtuysnSfiSxLwr0G');
define('SECRET_KEY', '6LdN7-MUAAAAAAR1Sw2zWhCttbISzM7_ttXGeMUv');
define('RECAPTCHA_LANG', 'en');

/*NOREPLY SYSTEM EMAIL*/
define('SYSMAIL_USER','noreply@widyagama.ac.id'); //username email system
define('SYSMAIL_PASS','wjktaxjequlukblj'); //password app
define('SYSMAIL_NAME','Tracerstudy UWG 2020'); //name on email sender

/*SECURITY IS MATTER*/
define('SALT', '!!@B15m1ll4H_@rrahM4n_Arr4H1m!*#');
define('CSRF', TRUE);
define('XSS', TRUE);
define('SESSID','widyagama');


define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','tracerstudy2020live');
define('DBDRIVER','mysqli'); //mysqli,sqlsrv

//AWS S3 CONFIGURATION
define('S3FOLDER','files-webapps/');
define('S3ACCESS','AKIA2XSK75SHMFV3XNLY');
define('S3SECRET','5UwaMMAPCEPReSZFA2ErBgT9e6KYXVXbumuVyhY');
define('S3BUCKETNAME','roniwahyucom');
define('S3BUCKETURL','https://roniwahyucom.s3.amazonaws.com');

         ?>