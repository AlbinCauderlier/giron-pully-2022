<?php

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
		$page=$_GET['p1'];
		$temp=explode('/',$page);

		// Existing page?
		if(isset($_GET['p2'])){
			$temp2=explode('/',$_GET['p2']);

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



function refresh_session( $lifetime = 15000 ){
	// Création de la session s'il n'existe pas encore de cookie
	if( !isset($_SESSION) ) {
		if( DEBUG ){
			session_set_cookie_params($lifetime,'/',COOKIE_URL);
		}
		else{
			session_set_cookie_params($lifetime,'/',COOKIE_URL, true, true);
			session_start();
		}
    }

    // Refresh the lifetime
    // ini_set("session.cookie_lifetime", $lifetime );

    // session_start();

	// Détection de la langue à utiliser
	if( !isset($_SESSION['lang']) || empty($_SESSION['lang']) ){
		// require_once(ROOT_PATH."lib/lang/php/lang.php");

		// Utilise la fonction de détection de la langue.
		//$_SESSION['lang'] = detectLang();
		$_SESSION['lang'] = LANG_DEFAULT;
	}
}


?>