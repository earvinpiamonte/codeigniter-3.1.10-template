<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// used for condition if localhost
$localhost_addrs = array(
    '127.0.0.1',
    '::1'
);

// assets version
$config['assets_version'] = '2019031217541';

// add period before assets
$config['assets_version_with_prefix'] = '.'.$config['assets_version'];

// if localhost then do not use assets versioning
if(in_array($_SERVER['REMOTE_ADDR'], $localhost_addrs)){
	$config['assets_version_with_prefix'] = '';
}

// site details
$config['site'] = array(
	'name'        => 'Codeigniter 3.1.10 template',
	'description' => 'My custom Codeigniter template. I pull this repository whenever I have a Codeigniter project.',
	'tags'        => 'codeigniter, sass, html5, bootstrap'
);

// pages meta
$config['meta'] = array(
	'title'       => $config['site']['name'],
	'description' => $config['site']['description'],
	'keywords'    => $config['site']['tags']
);

// after compressed
$config['content_before_compressed_html'] = '<!-- Created by Noel Earvin Piamonte -->';