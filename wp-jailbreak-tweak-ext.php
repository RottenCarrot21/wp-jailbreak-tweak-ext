<?php

/*
Plugin Name: Jailbreak Things For Wordpress
Plugin URI: https://github.com/RottenCarrot21/wp-jailbreak-tweak-exe
Description: Adds short code for add repo in ~ button, install in ~ button etc.
Version: 1.1.1
Author: RottenCarrot21
Author URI: https://github.com/RottenCarrot21
*/

add_shortcode('repo', function($atts, $content, $tag ){
  $adt_cydia_badge_url     = plugins_url( 'assets/Add_to_Cydia_Badge_JP.svg', __FILE__ );
  $adt_sileo_badge_url     = plugins_url( 'assets/Add_to_Sileo_Badge_JP.svg', __FILE__ );
  $adt_zebra_badge_url     = plugins_url( 'assets/Add_to_Zebra_Badge_JP.svg', __FILE__ );
  $adt_installer_badge_url = plugins_url( 'assets/Add_to_Installer_Badge_JP.svg', __FILE__ );
  extract(
    shortcode_atts(
      array(
        'url' => 'https://repo.chariz.com/', //defaultrepo
      )
      , $atts
    )
	);

	$result_html = "";

	return <<<EOF
<style>
  .repo {
    margin : 0 auto;
  }
  .repo img {
    height: 40px;
    width: 134.5px;
  }
</style>
<a href="cydia://url/https://cydia.saurik.com/api/share#?url={$url}" class="repo">
<img src="{$adt_cydia_badge_url}">
</a>
<a href="sileo://source/{$url}" class="repo">
<img src="{$adt_sileo_badge_url}">
</a>
<a href="zbra://sources/add/{$url}" class="repo">
<img src="{$adt_zebra_badge_url}">
</a>
<a href="installer://add/repo={$url}" class="repo">
<img src="{$adt_installer_badge_url}">
</a>

EOF;

});


add_shortcode('tweak-wr', function($atts, $content, $tag ){
  $inst_cydia_badge_url     = plugins_url( 'assets/Install_in_Cydia_Badge_JP.svg', __FILE__ );
  $inst_sileo_badge_url     = plugins_url( 'assets/Install_in_Sileo_Badge_JP.svg', __FILE__ );
  $inst_zebra_badge_url     = plugins_url( 'assets/Install_in_Zebra_Badge_JP.svg', __FILE__ );
  $inst_installer_badge_url = plugins_url( 'assets/Install_in_Installer_Badge_JP.svg', __FILE__ );

	extract( 
		shortcode_atts( 
			array(
				'package_id' => 'com.creaturecoding.tweaksettings', //default
        'url' => 'https://creaturecoding.com/repo/',  //default
			)
			, $atts
		)
	);

	$result_html = "";

	return <<<EOF
<style>
  .repo {
    margin : 0 auto;
  }
  .repo img {
    height: 40px;
    width: 134.5px;
  }
</style>
<a href="cydia://url/https://cydia.saurik.com/api/share#?source={$url}&package={$package_id}" class="repo">
<img src="{$inst_cydia_badge_url}">
</a>
<a href="sileo://package/{$package_id}" class="repo">
<img src="{$inst_sileo_badge_url}">
</a>
<a href="zbra://packages/{$package_id}?source={$url}" class="repo">
<img src="{$inst_zebra_badge_url}">
</a>
<a href="installer://show/shared=Installer&bundleid={$package_id}&repo={$url}" class="repo">
<img src="{$inst_installer_badge_url}">
</a>

EOF;

});
add_shortcode('tweak-nr', function($atts, $content, $tag ){
    $inst_cydia_badge_url     = plugins_url( 'assets/Install_in_Cydia_Badge_JP.svg', __FILE__ );
    $inst_sileo_badge_url     = plugins_url( 'assets/Install_in_Sileo_Badge_JP.svg', __FILE__ );
    $inst_zebra_badge_url     = plugins_url( 'assets/Install_in_Zebra_Badge_JP.svg', __FILE__ );
    $inst_installer_badge_url = plugins_url( 'assets/Install_in_Installer_Badge_JP.svg', __FILE__ );

	extract( 
		shortcode_atts( 
			array(
				'package_id' => 'com.creaturecoding.tweaksettings', //also default
			)
			, $atts
		)
	);

	$result_html = "";

	return <<<EOF
<style>
  .repo {
    margin : 0 auto;
  }
  .repo img {
    height: 40px;
    width: 134.5px;
  }
</style>
<a href="cydia://url/https://cydia.saurik.com/api/share#?package={$package_id}" class="repo">
<img src="{$inst_cydia_badge_url}">
</a>
<a href="sileo://package/{$package_id}" class="repo">
<img src="{$inst_sileo_badge_url}">
</a>
<a href="zbra://packages/{$package_id}" class="repo">
<img src="{$inst_zebra_badge_url}">
</a>
<a href="installer://show/shared=Installer&bundleid={$package_id}" class="repo">
<img src="{$inst_installer_badge_url}">
</a>

EOF;

});

add_shortcode('ipa', function($atts, $content, $tag ){
  $adt_cydia_badge_url     = plugins_url( 'assets/Install_in_Altstore_Badge_JP.svg', __FILE__ );
  $adt_sileo_badge_url     = plugins_url( 'assets/Install_in_Trollstore_Badge_JP.svg', __FILE__ );
  extract( 
    shortcode_atts( 
      array(
        'url' => 'https://repo.chariz.com/', //DEFAULT
      )
      , $atts
    )
	);

	$result_html = "";
s
	return <<<EOF
<style>
  .repo {
    margin : 0 auto;
  }
  .repo img {
    height: 40px;
    width: 134.5px;
  }
</style>
<a href="cydia://url/https://cydia.saurik.com/api/share#?url={$url}" class="repo">
<img src="{$adt_cydia_badge_url}">
</a>
<a href="sileo://source/{$url}" class="repo">
<img src="{$adt_sileo_badge_url}">
</a>
<a href="zbra://sources/add/{$url}" class="repo">
<img src="{$adt_zebra_badge_url}">
</a>
<a href="installer://add/repo={$url}" class="repo">
<img src="{$adt_installer_badge_url}">
</a>

EOF;

});
