<?php
	/*
		Make sure to configure the sv_loadingurl in your server.cfg correctly before reporting an issue.
		An example sv_loadingurl is:
		sv_loadingurl "http://example.com/gmod/index.php?steamid=%s&mapname=%m""

		In the browser DO NOT use ?steamid=%s&mapname=%m just simply type in the URL like this: http://example.com/gmod/
	*/

	// GENERAL SETTINGS
	$serverIP = $_SERVER['REMOTE_ADDR'];
	$serverPort = '63815';
	$serverName = "LifeRP";
	$serverWelcome = "Bienvenue ";
	$serverRules = "<li>Soyez respectueux envers les joueurs</li>
	                <li>Ne tuez pas sans raison</li>
	                <li>NLR INTERDIT</li>
	                <li>Ne pas cheat sinon ban</li>
	                <li>S'amuser est obligatoire !</li>";

	$default_steam64 = '76561198356602958'; // Default Steam64 ID if you're viewing in browser
	$default_map = 'rp_rockford_liferp_v1b'; // Default map if you're viewing in browser
	$SteamAPIKey = 'E0EBF7F682424BC60F27375F439776E8'; // SteamAPI Key (http://steamcommunity.com/dev/apikey)
	$SteamWorkshopid = '1767221890'; // Steam Workshop Content ID (http://steamcommunity.com/sharedfiles/filedetails/?id=XXXXXXXXX)

	$enable_music = true; // Enable music? (Selects random .ogg soundfile from the music directory) (true/false)
	$music_volume = 0.5; // Music volume (Default: 0.5) Can be anywhere from 0.1 to 1

	$materialize_text_color = 'white'; // Materialize Color Name ($materialize_text_color-text) [http://materializecss.com/color.html]
	$materialize_card_color = 'teal darken-3'; // Materialize Color Name [http://materializecss.com/color.html]
	$materialize_waves_color = 'teal'; // Materialize Wave Color (waves-$materialize_waves_color) [http://materializecss.com/color.html]

	$toast_join_message = 'Merci de rejoindre le serveur ! ';
	$bg_img = 'img/back.png'; // URL or directory link for background image.

	// Alternatively, use youtube IDs for music instead of the music directory
	// A youtube ID is the string after v= in a youtube URL.
	// Youtube_names is the name of the track.
	$youtube_ids = array(
		'',
		''
	);
	$youtube_names = array(
		'',
		''
	);
?>
