<?php
if (! function_exists ( 'validateDate' )) {
	function validateDate($date, $format = 'Y-m-d H:i:s') {
		$d = DateTime::createFromFormat ( $format, $date );
		return $d && $d->format ( $format ) == $date;
	}
}
if (! function_exists ( 'listMonth' )) {
	function listMonth($start_date, $end_date) {
		$tab_date = array ();
		if (strtotime ( $start_date ) <= strtotime ( $end_date )) {
			$start_temp = strtotime ( $start_date );
			$end_temp = strtotime ( $end_date );
			while ( $start_temp <= $end_temp || (date ( "Y m", $start_temp ) <= date ( "Y m", $end_temp )) ) {
				$data = array (
						'nummonth' => date ( "m", $start_temp ),
						'numyear' => date ( "Y", $start_temp ) 
				);
				array_push ( $tab_date, $data );
				$start_temp = strtotime ( "+1 month", $start_temp );
			}
		}
		return $tab_date;
	}
}
if (! function_exists ( 'makeTime' )) {
	function makeTime($date) {
		$day = "day";
		$days = "days";
		$month = "month";
		$months = "months";
		$hour = "hour";
		$hours = "hours";
		$left = "left";
		
		$timestamp = strtotime ( $date );
		$format = date ( "Y/m/d H:i", $timestamp );
		$d = new DateTime ( $format );
		$result = $d->diff ( new DateTime () );
		
		$msg = "";
		if ($timestamp <= time ()) {
			$msg = "Closed";
		} else {
			if ($result->m > 0 || $result->d > 0) {
				if ($result->m == 1)
					$msg .= "$result->m $month ";
				else if ($result->m > 1)
					$msg .= "$result->m $months ";
				if ($result->d == 1)
					$msg .= "$result->d $day ";
				else if ($result->d > 1)
					$msg .= "$result->d $days ";
				$msg .= "$left";
			} else {
				if ($result->h > 0 || $result->m > 0) {
					if ($result->h > 0)
						$msg .= sprintf ( "%02d", $result->h ) . ":";
					else
						$msg .= "00:";
					if ($result->i > 0)
						$msg .= sprintf ( "%02d", $result->i ) . " ";
					else
						$msg .= "00 ";
					$msg .= "$left";
				}
			}
		}
		// var_dump($result);
		return $msg;
	}
}
if (! function_exists ( 'weekBetwenDate' )) {
	function weekBetwenDate($pdate1, $pdate2) {
		$tab_week = array ();
		$semaine_date_deb = date ( "Y-m-d", strtotime ( $pdate1 ) );
		$semaine_date_fin = date ( "Y-m-d", strtotime ( $pdate2 ) );
		$date1 = explode ( '-', $semaine_date_deb );
		$semaine_date_deb = mktime ( 0, 0, 0, $date1 [1], $date1 [2], $date1 [0] );
		$date2 = explode ( '-', $semaine_date_fin );
		$semaine_date_fin = mktime ( 0, 0, 0, $date2 [1], $date2 [2], $date2 [0] );
		$semaine = 7 * 24 * 60 * 60;
		
		$i = $semaine_date_deb;
		
		// si le jour est different de dimanche on ajoute 1 semaine sinon le calandrier n'affiche pas la derniere date
		if (date ( 'w', strtotime ( $pdate2 ) ) != 0)
			$semaine_date_fin = $semaine_date_fin + $semaine;
		
		while ( $i < ($semaine_date_fin) ) {
			$week = date ( 'W', $i );
			$year = date ( 'Y', $i );
			
			$temp = array (
					"timesheet_numweek" => $week,
					"timesheet_numyear" => $year 
			);
			array_push ( $tab_week, $temp );
			$i = $i + $semaine;
		}
		return $tab_week;
	}
}
if (! function_exists ( 'addDay' )) {
	function addDay($date, $nbrJours) {
		$dateTime = explode ( ' ', trim ( $date ) );
		if (count ( $dateTime ) == 1) {
			$newDate = date ( "Y-m-d", strtotime ( "+" . $nbrJours . " days" ) );
		} else {
			$date = $dateTime [0];
			$time = $dateTime [1];
			$newDate = Date::addDay ( $date, $nbrJours ) . ' ' . $time;
		}
		return $newDate;
	}
}
if (! function_exists ( 'add' )) {
	function add($date, $nbr, $temp = 'd') {
		$dateTime = explode ( ' ', trim ( $date ) );
		if (count ( $dateTime ) == 1) {
			switch ($temp) {
				case "d" :
					$newDate = date ( "d/m/Y", strtotime ( "+" . $nbr . " days" ) );
					break;
				case "m" :
					$newDate = date ( "d/m/Y", strtotime ( "+" . $nbr . " month" ) );
					break;
				case "y" :
					$newDate = date ( "d/m/Y", strtotime ( "+" . $nbr . " year" ) );
					break;
				default :
					return "00/00/0000";
					break;
			}
		} else {
			$date = $dateTime [0];
			$time = $dateTime [1];
			$newDate = Date::addDay ( $date, $nbrJours ) . ' ' . $time;
		}
		return $newDate;
	}
}
if (! function_exists ( 'difDate' )) {
	function difDate($date1, $date2) {
		$date1 = strtotime ( $date1 );
		$date2 = strtotime ( $date2 );
		$dif = $date1 - $date2;
		return $dif;
	}
}
// -------------------------------- formatDate('2011-08-23 23:54:25','-','/',true,false) ---
// -------------------------------- $reg1 : séparateur initial ---
// -------------------------------- $reg1 : séparateur de sortie ---
// -------------------------------- $reverse : reverse la date (sans bouger aux heures) ---
// -------------------------------- $time : affiche les heures ---
// -------------------------------- ---
// -------------------------------- resultat : 23/08/2011 ---
if (! function_exists ( 'formatDate' )) {
	function formatDate($date, $reg1, $reg2, $reverse = true, $_time = true) {
		$dateTime = explode ( ' ', trim ( $date ) );
		if (count ( $dateTime ) == 1) {
			if ($reverse) {
				$newDate = implode ( $reg2, array_reverse ( explode ( $reg1, trim ( $date ) ) ) );
			} else {
				$newDate = implode ( $reg2, explode ( $reg1, trim ( $date ) ) );
			}
		} else {
			$date = $dateTime [0];
			$time = $dateTime [1];
			if ($_time) {
				$newDate = formatDate ( $date, $reg1, $reg2, $reverse, $time ) . ' ' . $time;
			} else {
				$newDate = formatDate ( $date, $reg1, $reg2, $reverse, $time );
			}
		}
		return $newDate;
	}
}
// -------------------------------- selectTime('2011-08-23 23:54:25','(H)(:)(M)(:)(S)') ---
// -------------------------------- '()' : rend l'information facultative ---
// -------------------------------- ':' : etant un séparateur obligatoire ---
// -------------------------------- ---
// -------------------------------- resultat : 23:54:25 ---
if (! function_exists ( 'selectTime' )) {
	function selectTime($date, $format = 'H:M:S') {
		$dateTime = explode ( ' ', trim ( $date ) );
		if (count ( $dateTime ) == 1) {
			throw new RuntimeException ( '<strong>ERREUR : Aucune heure est disponible pour la selection</strong>' );
		} else {
			$tempTime = explode ( ':', $dateTime [1] );
			if (count ( $tempTime ) != 3)
				throw new RuntimeException ( "<strong>ERREUR : Le format de l'heure est incorrecte</strong>" );
			if (! is_numeric ( $tempTime [0] ) || ! is_numeric ( $tempTime [1] ) || ! is_numeric ( $tempTime [2] ))
				throw new RuntimeException ( "<strong>ERREUR : Le format de l'heure est incorrecte, le bon format est 00:00(:00)</strong>" );
			
			$H = $tempTime [0];
			$M = $tempTime [1];
			$S = $tempTime [2];
			
			$format = explode ( ':', $format );
			$format = array_unique ( $format );
			
			$tab_time = array ();
			if (in_array ( "H", $format ))
				array_push ( $tab_time, $H );
			if (in_array ( "M", $format ))
				array_push ( $tab_time, $M );
			if (in_array ( "S", $format ))
				array_push ( $tab_time, $S );
			
			$time = implode ( ':', $tab_time );
		}
		return $time;
	}
}
// -------------------------------- duree(temps en seconde en unix entre 2 dates) ---
// -------------------------------- ---
// -------------------------------- resultat : durée en jour heure minute seconde entre ces 2 dates ---
if (! function_exists ( 'duree' )) {
	function duree($time) {
		$tabTemps = array (
				"j" => 86400,
				"h" => 3600,
				"m" => 60,
				"s" => 1 
		);
		
		$result = "";
		
		foreach ( $tabTemps as $uniteTemps => $nombreSecondesDansUnite ) {
			$$uniteTemps = floor ( $time / $nombreSecondesDansUnite );
			$time = $time % $nombreSecondesDansUnite;
			
			if ($$uniteTemps > 0 || ! empty ( $result )) {
				if ($uniteTemps == "j") {
					$result .= $$uniteTemps . " j ";
				}
				if ($uniteTemps == "h" || $uniteTemps == "m") {
					if ($$uniteTemps < 10) {
						$result .= "0" . $$uniteTemps . ":";
					} else {
						$result .= $$uniteTemps . ":";
					}
				}
				if ($uniteTemps == "s") {
					if ($$uniteTemps < 10) {
						$result .= "0" . $$uniteTemps;
					} else {
						$result .= $$uniteTemps;
					}
				}
				// $result .= $$uniteTemps." $uniteTemps ";
			}
		}
		return $result;
	}
}
// -------------------------------- changeTime('2011-08-23 23:54:25','15:33(:22)') ---
// -------------------------------- '()' : rend l'information facultative ---
// -------------------------------- ':' : etant un séparateur obligatoire ---
// -------------------------------- si pas de seconde, seconde vaut '00' ---
// -------------------------------- ---
// -------------------------------- resultat : 2011-08-23 15:33:22 ---
if (! function_exists ( 'changeTime' )) {
	function changeTime($date, $newTime) {
		$dateTime = explode ( ' ', trim ( $date ) );
		if (count ( $dateTime ) == 1) {
			throw new RuntimeException ( '<strong>ERREUR : Aucune heure est disponible pour la selection</strong>' );
		} else {
			$tempTime = explode ( ':', $newTime );
			$count = count ( $tempTime );
			if ($count < 2 || $count > 3)
				throw new RuntimeException ( "<strong>ERREUR : Le format de la nouvelle heure est incorrecte</strong>" );
			if ($count == 2) {
				if (! is_numeric ( $tempTime [0] ) || ! is_numeric ( $tempTime [1] ))
					throw new RuntimeException ( "<strong>ERREUR : Le format de l'heure est incorrecte, le bon format est 00:00(:00)</strong>" );
				
				$tab_time = array ();
				array_push ( $tab_time, $tempTime [0] );
				array_push ( $tab_time, $tempTime [1] );
				array_push ( $tab_time, '00' );
				
				$newTime = implode ( ':', $tab_time );
			} else if ($count == 3) {
				if (! is_numeric ( $tempTime [0] ) || ! is_numeric ( $tempTime [1] ) || ! is_numeric ( $tempTime [2] ))
					throw new RuntimeException ( "<strong>ERREUR : Le format de l'heure est incorrecte, le bon format est 00:00(:00)</strong>" );
				
				$tab_time = array ();
				array_push ( $tab_time, $tempTime [0] );
				array_push ( $tab_time, $tempTime [1] );
				array_push ( $tab_time, $tempTime [2] );
				
				$newTime = implode ( ':', $tab_time );
			}
		}
		return $dateTime [1] . ' ' . $newTime;
	}
}
/*
 * if ( ! function_exists('week_dates'))
 * {
 * function week_dates($week,$year) {
 * $week_dates = array();
 * // Get timestamp of first week of the year
 * $first_day = mktime(12,0,0,1,1,$year);
 * $first_week = date("W",$first_day);
 * if ($first_week > 1) {
 * $first_day = strtotime("+1 week",$first_day); // skip to next if year does not begin with week 1
 * }
 * // Get timestamp of the week
 * $timestamp = strtotime(+$week." week",$first_day);
 * // Adjust to Monday of that week
 * $what_day = date("w",$timestamp); // I wanted to do "N" but only version 4.3.9 is installed :-(
 * if ($what_day==0) {
 * // actually Sunday, last day of the week. FIX;
 * $timestamp = strtotime("-6 days",$timestamp);
 * } elseif ($what_day > 1) {
 * $what_day--;
 * $timestamp = strtotime("-$what_day days",$timestamp);
 * }
 * $week_dates[1] = date("Y-m-d",$timestamp); // Monday
 * $week_dates[2] = date("Y-m-d",strtotime("+1 day",$timestamp)); // Tuesday
 * $week_dates[3] = date("Y-m-d",strtotime("+2 day",$timestamp)); // Wednesday
 * $week_dates[4] = date("Y-m-d",strtotime("+3 day",$timestamp)); // Thursday
 * $week_dates[5] = date("Y-m-d",strtotime("+4 day",$timestamp)); // Friday
 * $week_dates[6] = date("Y-m-d",strtotime("+5 day",$timestamp)); // Saturday
 * $week_dates[7] = date("Y-m-d",strtotime("+6 day",$timestamp)); // Sunday
 * return($week_dates);
 * }
 * }
 */
if (! function_exists ( 'week_dates' )) {
	function week_dates($week, $year) {
		$week_dates = array ();
		// on recupere le 1er jour de l'année
		$first_day = mktime ( 12, 0, 0, 1, 1, $year );
		// on récupere la semaine de ce dernier
		$first_week = date ( "W", $first_day );
		// si le numéro de semaine de ce 1er jour est plus grand que 1 (comme 52) l'on rajoute une semaine au premier jour pour pouvoir calculer
		// depuis la semaine 1
		// ex : pour 2012, le calcul ne se fera pas sur le 1er, mais le 8
		if ($first_week > 1) {
			$first_day = strtotime ( "+1 week", $first_day ); // skip to next if year does not begin with week 1
		}
		// on rajoute les semaines à la 1ere semaine récupérée
		// comme l'on se trouve à la semaine 1 on soustrait de 1 sinon
		// on récupèrer la semaine suivante
		// ex: je veux la semaine 52 = 1+52-1
		$timestamp = strtotime ( + ($week - 1) . " week", $first_day );
		// Adjust to Monday of that week
		$what_day = date ( "w", $timestamp ); // I wanted to do "N" but only version 4.3.9 is installed :-(
		                                  
		// trouver la date du lundi de la semaine
		                                  // si dimanche...
		if ($what_day == 0) {
			// on retire 6jour pour arriver a lundi
			$timestamp = strtotime ( "-6 days", $timestamp );
		} elseif ($what_day > 1) {
			// sinon on soustrait le resultat de $what_day au jour courrant
			$what_day --; // on soustrait de 1 car le premier jour est dimanche
			$timestamp = strtotime ( "-$what_day days", $timestamp );
		}
		
		// recuperation des jours a partir
		$week_dates [1] = date ( "Y-m-d", $timestamp ); // Monday
		$week_dates [2] = date ( "Y-m-d", strtotime ( "+1 day", $timestamp ) ); // Tuesday
		$week_dates [3] = date ( "Y-m-d", strtotime ( "+2 day", $timestamp ) ); // Wednesday
		$week_dates [4] = date ( "Y-m-d", strtotime ( "+3 day", $timestamp ) ); // Thursday
		$week_dates [5] = date ( "Y-m-d", strtotime ( "+4 day", $timestamp ) ); // Friday
		$week_dates [6] = date ( "Y-m-d", strtotime ( "+5 day", $timestamp ) ); // Saturday
		$week_dates [7] = date ( "Y-m-d", strtotime ( "+6 day", $timestamp ) ); // Sunday
		return ($week_dates);
	}
}
if (! function_exists ( 'difheure' )) {
	function difheure($heuredeb, $heurefin) {
		$hd = explode ( ":", $heuredeb );
		$hf = explode ( ":", $heurefin );
		$hd [0] = ( int ) ($hd [0]);
		$hd [1] = ( int ) ($hd [1]);
		$hf [0] = ( int ) ($hf [0]);
		$hf [1] = ( int ) ($hf [1]);
		if ($hf [1] < $hd [1]) {
			$hf [0] = $hf [0] - 1;
			$hf [1] = $hf [1] + 60;
		}
		if ($hf [0] < $hd [0]) {
			$hf [0] = $hf [0] + 24;
		}
		
		$newHeure = ($hf [0] - $hd [0]);
		$newMinute = ($hf [1] - $hd [1]);
		
		if (count ( $newHeure ) == 1)
			$newHeure = '0' . $newHeure;
		if (count ( $newMinute ) == 1)
			$newMinute = '0' . $newMinute;
		
		$result = $newHeure . ":" . $newMinute;
		
		return $result;
	}
}
if (! function_exists ( 'heureToInt' )) {
	function heureToInt($heure) {
		$heure = explode ( ":", $heure );
		$minute = ($heure [1] / 60) * 100;
		$result = ( int ) $heure [0] . '.' . ( int ) ($minute);
		return $result;
	}
}
if (! function_exists ( 'intToHeure' )) {
	function intToHeure($int, $separateur) {
		$int = explode ( $separateur, $int );
		$minute = ($heure [1] / 100) * 60;
		$result = $heure [0] . ':' . ($minute);
		return $result;
	}
}
if (! function_exists ( 'retireAnnee' )) {
	function retireAnnee($date) {
		$date = explode ( "/", $date );
		return $date [0] . '/' . $date [1];
	}
}

// -------------------------------- changeTime(strtotime('2011-11-02'),strtotime('2011-11-29')) ---
// -------------------------------- ---
// -------------------------------- resultat : 1 ---
if (! function_exists ( 'get_nb_open_days' )) {
	function get_nb_open_days($date_start, $date_stop) {
		$date_start = strtotime ( $date_start );
		$date_stop = strtotime ( $date_stop );
		
		$arr_bank_holidays = array (); // Tableau des jours feriés
		                              // On boucle dans le cas où l'année de départ serait différente de l'année d'arrivée
		$diff_year = date ( 'Y', $date_stop ) - date ( 'Y', $date_start );
		for($i = 0; $i <= $diff_year; $i ++) {
			$year = ( int ) date ( 'Y', $date_start ) + $i;
			// Liste des jours feriés
			$arr_bank_holidays [] = '1_1_' . $year; // Jour de l'an
			$arr_bank_holidays [] = '1_5_' . $year; // Fete du travail
			$arr_bank_holidays [] = '8_5_' . $year; // Victoire 1945
			$arr_bank_holidays [] = '14_7_' . $year; // Fete nationale
			$arr_bank_holidays [] = '15_8_' . $year; // Assomption
			$arr_bank_holidays [] = '1_11_' . $year; // Toussaint
			$arr_bank_holidays [] = '11_11_' . $year; // Armistice 1918
			$arr_bank_holidays [] = '25_12_' . $year; // Noel
			                                       // Récupération de paques. Permet ensuite d'obtenir le jour de l'ascension et celui de la pentecote
			$easter = easter_date ( $year );
			$arr_bank_holidays [] = date ( 'j_n_' . $year, $easter + 86400 ); // Paques
			$arr_bank_holidays [] = date ( 'j_n_' . $year, $easter + (86400 * 39) ); // Ascension
			$arr_bank_holidays [] = date ( 'j_n_' . $year, $easter + (86400 * 50) ); // Pentecote
		}
		// print_r($arr_bank_holidays);
		$nb_days_open = 0;
		// Mettre <= si on souhaite prendre en compte le dernier jour dans le décompte
		while ( $date_start < $date_stop ) {
			// Si le jour suivant n'est ni un dimanche (0) ou un samedi (6), ni un jour férié, on incrémente les jours ouvrés
			if (! in_array ( date ( 'w', $date_start ), array (
					0,
					6 
			) ) && ! in_array ( date ( 'j_n_' . date ( 'Y', $date_start ), $date_start ), $arr_bank_holidays )) {
				$nb_days_open ++;
			}
			$date_start = mktime ( date ( 'H', $date_start ), date ( 'i', $date_start ), date ( 's', $date_start ), date ( 'm', $date_start ), date ( 'd', $date_start ) + 1, date ( 'Y', $date_start ) );
		}
		return $nb_days_open;
	}
}
if (! function_exists ( 'get_nb_days' )) {
	function get_nb_days($date_start, $date_stop) {
		$date_start = strtotime ( $date_start );
		$date_stop = strtotime ( $date_stop );
		
		$nb_days_open = 0;
		// Mettre <= si on souhaite prendre en compte le dernier jour dans le décompte
		while ( $date_start < $date_stop ) {
			$nb_days_open ++;
			$date_start = mktime ( date ( 'H', $date_start ), date ( 'i', $date_start ), date ( 's', $date_start ), date ( 'm', $date_start ), date ( 'd', $date_start ) + 1, date ( 'Y', $date_start ) );
		}
		return $nb_days_open;
	}
}
if (! function_exists ( 'dateW' )) {
	function dateW($date) { // format de la date yyyy-mm-dd
		/*
		 * //si le format est jj/mm/aaaa
		 * $dateFormat = Date::formatDate($date,'/','-',true,false);
		 * //si pas
		 * if($dateFormat.length == 0)
		 * //on retire les minutes existantes tout en gardant le formatage actuel
		 * $dateFormat = Date::formatDate($date,'-','-',false,false);
		 */
		$dateTemp = explode ( '-', $date );
		// recupération des jour, mois, annee recupérés dans la date passée en paramettre
		$year = ( int ) $dateTemp [0];
		$month = ( int ) $dateTemp [1];
		$day = ( int ) $dateTemp [2];
		
		// definition du nombre de jours contenu dans chaque mois
		$tab_dayOfMonth = array (
				31,
				28,
				31,
				30,
				31,
				30,
				31,
				31,
				30,
				31,
				30,
				31 
		);
		// si l'annee est bisextile, fevrier vaut 29
		if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
			$tab_dayOfMonth [1] = 29;
			
			// premier jour de l'annee recupérée dans la date passée en paramettre
		$firstday = date ( "N", mktime ( 0, 0, 0, 1, 1, $year ) );
		// nombre de jours superflux de l'année précedente
		$nbrDayPrev = $firstday - 1;
		// nombre total de jour écouler depuis le 1er jour de l'an
		$nbrDay = 0;
		// pour chaque mois précedant le mois en cours,
		// ajouter le nombre de jour correspondant à ce mois
		for($i = 0; $i < $month - 1; $i ++) {
			$nbrDay += $tab_dayOfMonth [$i];
		}
		// on ajoute le nombre de jour
		$nbrDay += $day;
		// on calcule le numéro de la semaine
		// on arrondi le resultat à l'entier supérieur
		$nbrWeek = ceil ( ($nbrDay + $nbrDayPrev) / 7 );
		return $nbrWeek;
	}
}
if (! function_exists ( 'getDayOfWeek' )) {
	function getDayOfWeek($numWeek, $year, $concat) {
		// concat relie la 53/54 eme semaine à la 1ere
		// definition du nombre de jours contenu dans chaque mois
		$tab_dayOfMonth = array (
				31,
				28,
				31,
				30,
				31,
				30,
				31,
				31,
				30,
				31,
				30,
				31 
		);
		// definition des numéro de mois
		$tab_numOfMonth = array (
				1,
				2,
				3,
				4,
				5,
				6,
				7,
				8,
				9,
				10,
				11,
				12 
		);
		$count = count ( $tab_dayOfMonth );
		// si l'annee est bisextile, fevrier vaut 29
		if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
			$tab_dayOfMonth [1] = 29;
			// premier jour de l'annee recupérée dans la date passée en paramettre
		$firstday = date ( "N", mktime ( 0, 0, 0, 1, 1, $year ) );
		// nombre de jours superflux de l'année précedente (semaine 53)
		$nbrDayPrev = $firstday - 1;
		// nombre reel du 1er jour de la semaine à partir du 1er janvier
		$firtDayOfWeek = (($numWeek - 1) * 7) - $nbrDayPrev;
		
		$dayOfWeek = array ();
		$tempFirstDay = $firstday;
		
		$nbr_j = $firtDayOfWeek;
		// valeur donnée au ca ou l'on ne rentre pas dans la boucle.
		$num_mois = - 1;
		for($j = 0; $j < $count; $j ++) {
			if (($nbr_j - $tab_dayOfMonth [$j]) > 0) {
				// on soustrait le noubre de jour du moi aux nombre total de jours
				// à partir du 1er janvier.
				// on récupère ainsi le mois et le numéro du jour de ce premier.
				$nbr_j = $nbr_j - $tab_dayOfMonth [$j];
				$num_mois = $j;
			} else {
				break;
			}
		}
		$reste = $nbr_j + 1;
		for($k = 1; $k <= 7; $k ++) {
			// si reste vaut + que le nombre de jour contenu dans le mois...
			if ($reste > $tab_dayOfMonth [$num_mois + 1]) {
				// retour au premier jour
				$reste = 1;
				// du mois suivant
				$num_mois ++;
			}
			// si le mois est decembre et que le reste est différent de 32...
			if (($num_mois + 1) != 12 && $reste != 32) {
				// si le reste est négatif ou égale à 0, on ajoute pas de date.
				if ($reste > 0) {
					$tempWeek = sprintf ( "%02d", $reste ) . '/' . sprintf ( "%02d", $tab_numOfMonth [$num_mois + 1] ) . '/' . $year;
					array_push ( $dayOfWeek, $tempWeek );
					// echo $tempWeek.'<br/>';
				} else {
					if ($concat) {
						$sem53 = getDayOfWeek ( numberOfWeek ( $year - 1 ), $year - 1, true );
						$dayOfWeek = $sem53;
					}
					// print_r($sem53);
				}
				$reste ++;
			} else {
				break;
			}
		}
		return $dayOfWeek;
	}
}
if (! function_exists ( 'numberOfWeek' )) {
	function numberOfWeek($year) {
		// definition du nombre de jours contenu dans chaque mois
		$tab_dayOfMonth = array (
				31,
				28,
				31,
				30,
				31,
				30,
				31,
				31,
				30,
				31,
				30,
				31 
		);
		// si l'annee est bisextile, fevrier vaut 29
		if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0)
			$tab_dayOfMonth [1] = 29;
			
			// premier jour de l'annee recupérée dans la date passée en paramettre
		$firstday = date ( "N", mktime ( 0, 0, 0, 1, 1, $year ) );
		// nombre de jours superflux de l'année précedente(semaine 53)
		$nbrDayPrev = $firstday - 1;
		// nombre total de jour écouler depuis le 1er jour de l'an
		$nbrDay = 0;
		// pour chaque mois précedant le mois en cours,
		// ajouter le nombre de jour correspondant à ce mois
		for($i = 0; $i < count ( $tab_dayOfMonth ); $i ++) {
			$nbrDay += $tab_dayOfMonth [$i];
		}
		// on calcule le numéro de la semaine
		// on arrondi le resultat à l'entier supérieur
		$numWeek = ceil ( ($nbrDay + $nbrDayPrev) / 7 );
		return $numWeek;
	}
}
if (! function_exists ( 'dateDiff' )) {
	function dateDiff($date1, $date2, $out = "d") {
		$diff = abs ( strtotime ( $date2 ) - strtotime ( $date1 ) );
		
		$years = floor ( $diff / (365 * 60 * 60 * 24) );
		$months = floor ( ($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24) );
		$days = floor ( ($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24) );
		
		switch ($out) {
			case "y" :
				return $years;
				break;
			case "m" :
				return $months;
				break;
			case "d" :
				return $days;
				break;
			default :
				return $days;
				break;
		}
	}
}