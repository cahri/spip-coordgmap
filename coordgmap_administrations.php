<?php
/**
 * Plugin Coordonnées GoogleMap
 * (c) 2014 Julen Tessier,Mist. GraphX
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation du plugin et de mise à jour.
**/
function coordgmap_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();
        # quelques exemples
	# (que vous pouvez supprimer !)
	# 
	# $maj['create'] = array(array('creer_base'));
	#
	# include_spip('inc/config')
	# $maj['create'] = array(
	#	array('maj_tables', array('spip_xx', 'spip_xx_liens')),
	#	array('ecrire_config', array('genespip', array('exemple' => "Texte de l'exemple")))
	#);
	#
	# $maj['1.1.0']  = array(array('sql_alter','TABLE spip_xx RENAME TO spip_yy'));
	# $maj['1.2.0']  = array(array('sql_alter','TABLE spip_xx DROP COLUMN id_auteur'));
	# $maj['1.3.0']  = array(
	#	array('sql_alter','TABLE spip_xx CHANGE numero numero int(11) default 0 NOT NULL'),
	#	array('sql_alter','TABLE spip_xx CHANGE texte petit_texte mediumtext NOT NULL default \'\''),
	# );
	# ...
	include_spip('inc/config');
	$maj['create'] = array(
		array('maj_tables', array('spip_adresses')),
		//array('ecrire_config', array('coorgmap', array('exemple' => "Texte de l'exemple")))
	);
        
	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
        
}


/**
 * Fonction de désinstallation du plugin.
**/
function coordgmap_vider_tables($nom_meta_base_version) {


	effacer_meta($nom_meta_base_version);
}

?>