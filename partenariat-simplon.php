<?php
/*
Plugin Name: WPSimplonInside plugin
Plugin URI: https://github.com/psykoGabW/partenariat-simplon
Description: Un plugin d'insertion d'information sur Simplon.co par simple ajout d'une balise [Simplon]
Version: 1.0
Author: Gabriel WISNIEWSKI
Author URI:
License:
*/
function InsertSimplonPresent() {
	return "<p>La publication de cet article est possible grâce à mon super partenaire <a target='_blank' href='http://simplon.co'>simplon.co</a> - une entreprise de l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose des formations GRATUITES pour devenir développeur web.</p>";
}
add_shortcode('simplon', 'InsertSimplonPresent');
?>
