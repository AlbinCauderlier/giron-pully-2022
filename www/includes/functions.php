<?php

/**
 *	Fonction de nettoyage d'un texte
 *
 *	@param	$text	Texte à nettoyer
 *
 *	@return		Texte nettoyé
 */
function cleanText($text){
	$text=trim($text); // delete white spaces after & before text

	if(1 === get_magic_quotes_gpc()){
		$stripslashes=create_function('$txt','return stripslashes($txt);');
	}
	else{
		$stripslashes=create_function('$txt','return $txt;');
	}

	// magic quotes ?
	$text=$stripslashes($text);
	$text=htmlentities($text,ENT_QUOTES); // converts to string with " and ' as well
	//$text=nl2br($text);
	return $text;
}


/**
 * RequestDispatcher
 * Processing of the request uri
 * 
 * TODO - Optimiser, car ici, p1 est djà le premier niveau d'arborescence et p2 est, par contre, tout le reste de l'arbo.
 */
function getRequestedUri(){
	$dossier_pages='pages/';
	$page_home='home';

	// Default=home page
	if(empty($_GET)){
		return($page_home);
	}
	

	// Directory protection
	if(isset($_GET['p1'])){
		$page=cleanText($_GET['p1']);
		$temp=explode('/',$page);

		// Existing page?
		if(isset($_GET['p2'])){
			$temp2=explode('/',cleanText($_GET['p2']));

			if(isset($temp2[2]) && file_exists($dossier_pages.$temp[0].'/'.$temp2[0].'/'.$temp2[1].'/'.$temp2[2].'/index.php')){
				return($temp[0].'/'.$temp2[0].'/'.$temp2[1].'/'.$temp2[2]);
			}

			if(isset($temp2[1]) && file_exists($dossier_pages.$temp[0].'/'.$temp2[0].'/'.$temp2[1].'/index.php')){
				return($temp[0].'/'.$temp2[0].'/'.$temp2[1]);
			}

			if(file_exists($dossier_pages.$temp[0].'/'.$temp2[0].'/index.php')){
				return($temp[0].'/'.$temp2[0]);
			}
		}
		
		if(file_exists($dossier_pages.$temp[0].'/index.php')){
			return($temp[0]);
		}
	}


	// Redirection, faute de page trouvée, vers la page error
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	return('error');
}


/**
 * 
 */
function remove_accents($string,$charset='utf-8'){
	$string=htmlentities($string,ENT_NOQUOTES,$charset);

	$string=preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#','\1',$string);
	$string=preg_replace('#&([A-za-z]{2})(?:lig);#','\1',$string); // pour les ligatures e.g. '&oelig;'
	$string=preg_replace('#&[^;]+;#', '',$string); // supprime les autres caractères

	return $string;
}






/**
 *
 *	@param		Session_label		Le label du champ.
 *	@return		Indique si ce label est utilisé et renseigné.
 *
 *	Permet d'éviter une nouvelle authentification si l'utilisateur est toujours connecté.
 */
function session_isset($label){
	// On teste si la variable de session existe et contient une valeur
	if(isset($_SESSION[$label]) && !empty($_SESSION[$label])){
		return true;
	}
	return false;
}



/**
 *
 *
 */
function unlog_user(){
	// Destruction des variables de la session
	session_unset();

	// Réinitialisation du tableau de session - On le vide int�gralement
	$_SESSION = array();

	// Destruction de la session
	session_destroy();

	// Destruction du tableau de session
	unset($_SESSION);

	// TODO - Enregistrer l'action dans l'historisation d'authentication

}



function is_a_valid_url($url){
	$file_headers = @get_headers($url);
	if(!$file_headers || strpos($file_headers[0],'200')===false || strpos($url,'http')===false){
		return false;
	}
	return true;
}




/**
 *	Parse a Unix time stamp to a date
 *
 *	@param	$unix_time	Time stamp
 *
 *  @return				A string with the date
 *
 */
function unixtime_to_delay($unix_timedelay){
	$seconds = Math.floor($unix_timedelay/1000);
	$minutes = Math.floor($seconds/60);
	$hours = Math.floor($minutes/60);
	$days = Math.floor($hours/24);

	$hours = $hours-($days*24);
	$minutes = $minutes-($days*24*60)-($hours*60);
	$seconds = $seconds-($days*24*60*60)-($hours*60*60)-($minutes*60);

	$result='';
	if($days>0)		$result .= $days.'days ';
	if($hours>0)	$result .= $hours.'hours ';
	if($minutes>0)	$result .= $minutes.'min ';
	if($seconds>0)	$result .= $seconds.'sec ';

	return $result;
}


function get_back_to_top_link($link = "#") {
	echo('<a href="'.$link.'" title="Back to top" class="bottom-link">');
		echo('<i data-feather="chevron-up" class="icon-md text-white"></i>');
	echo('</a>');
}

/**
 * 
 * Permet l'interprétation des fichiers PHP de génération des e-mails.
 * 
 * @param	$url	L'URL du fichier php
 * @return	string	La chaine en sortie du fichier interprété.
 */
function get_include_contents($url) {
	// Contrôle que l'URL fournie est bien un fichier.
	if(!is_file($url)){
		return false;
	}
	
	ob_start();
	include $url;
	return ob_get_clean();
}



?>