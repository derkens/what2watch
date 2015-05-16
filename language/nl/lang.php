<?php
/**
* DO NOT CHANGE
*/
if (!defined('IN_W2W'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ALL'						=> 'Alles',
	'CACHE_EMPTY'				=> 'Buffer is leeg, er is iets verkeerd gegaan, controleer het log!',
	'CACHE_LIFE' 				=> 'Buffer tijd',
	'CACHE_LIFE_EXPLAIN' 				=> 'buffer tijd in seconden',
	'CACHE_PURGED' 				=> 'Buffer geleegd!',
	'CACHE_PURGED_EXPLAIN' 				=> 'Je wordt doorgestuurd in ongeveer 5 seconden, zo niet, klik dan %s.',
	'CHECKIN' 				=> 'Check in',
	'CHECK_FINISHED'		=> 'Gereed met checken van %s',
	'CONFIG' 				=> 'Instellingen',
	'CONFIG_NOT_UP_TO_DATE' 				=> 'Config-versie niet up-to-date, hier kan je je config bijwerken',
	'CONFIG_WRITTEN' 				=> 'Config geschreven',
	'CONFIG_WRITTEN_EXPLAIN' 				=> 'Het configuratiebestand is geschreven, klik %s om verder te gaan.',
	'CREATED_BANNER' 				=> 'Banner gecreëerd voor %s',
	'CREATED_FANART' 				=> 'Afbeelding gecreëerd van %s',
	'CREATE_CONFIG' 				=> 'Creër configuratie',
	'DEBUG'						=> 'Debug',
	'DEBUG_DUMP' 				=> 'Dumpen voor debug: %s',
	'DL_CONFIG' 				=> 'Download configuratie',
	'DL_CONFIG_EXPLAIN' 				=> 'Je kunt het config.php bestand naar je computer downloaden, waarna je het manueel uploadt (en het eventueel bestaande config.php bestand overschrijft) naar je root map. Zorg er echter wel voor dat je het bestand in ASCII-formaat uploadt (als je niet weet hoe dit moet, raadpleeg dan de documentatie van je FTP-programma). Nadat je het config.php geüpload hebt, klik je op "klaar" om naar de volgende stap te gaan.',
	'DL_DONE' 				=> 'Klaar',
	'DL_DOWNLOAD' 				=> 'Download',
	'DOWNLOAD_BANNER' 				=> 'Download thetvdb.com banner',
	'ERROR'						=> 'Error',
	'FAILED_CHMOD' 				=> 'Mislukt om permissies in te stellen, je moet je configuratiebestand permissies tenminste veranderen naar 0644.',
	'FAILED_XML'		=> 'xml bestand opslaan mislukt van %s voor %s',
	'FILL' 				=> 'Titel plakken',
	'FIRST_RUN' 				=> 'Eerste keer, Authoriseer eerst bij trakt, Je wordt doorgestuurd in ongeveer 5 seconden, zo niet, klik dan %s.',
	'GET_SLUG' 				=> 'Grabbing slug voor %s',
	'GRABBING_FANART' 				=> 'grabbing %s',
	'HERE'							=> 'hier',
	'HTTP_PASSWORD' 				=> 'HTTP Paswoord',
	'HTTP_PASSWORD_EXPLAIN' 				=> 'Paswoord voor authenticatie (leeg voor geen)',
	'HTTP_USERNAME' 				=> 'HTTP Gebruikersnaam',
	'HTTP_USERNAME_EXPLAIN' 				=> 'Gebruikersnaam voor authenticatie (leeg voor geen)',
	'IGNORE_FOUND' 				=> '%s gevonden, negeer ondertitel controle voor %s',
	'IGNORE_WORDS' 				=> 'Negeer Woorden',
	'IGNORE_WORDS_EXPLAIN' 				=> 'Niet hoofdlettergevoelige woorden gescheiden door een , die je wenst te negeren in releases.',
	'INDEX' 				=> 'What2Watch',
	'INFO'					=> 'Info',
	'IP_SUBNET'				=> 'IP Subnet',
	'IP_SUBNET_EXPLAIN'		=> 'Je kan hier je ip subnet invullen als je alleen een login scherm voor buiten je LAN wilt, laat de laatste reeks leeg(192.168.100.), of laat dit veld leeg om het uit te schakelen',
	'LANGUAGE_SELECT' 				=> 'Taal',
	'LOADINGINDICATOR'	=> 'Laden...',
	'LOG' 				=> 'Log',
	'LOG_INFO' 				=> 'Er is momenteel geen %s informatie in je log bestand!',
	'LOG_PURGED' 				=> 'Log geleegd!',
	'LOG_PURGED_EXPLAIN' 				=> 'Je wordt doorgestuurd in ongeveer 5 seconden, zo niet, klik dan %s.',
	'MESSAGE' 				=> 'Bericht',
	'MESSAGE_EXPLAIN' 				=> 'Voer een bericht in (optioneel)',
	'MISSING_LANG_FILES' 				=> 'Het iso.txt bestand mist in de %s language folder.',
	'MOVIES' 				=> 'Films',
	'MOVIES_FOLDER' 				=> 'Films folder',
	'MOVIES_FOLDER_EXPLAIN' 				=> 'absolute pad, vergeet de open_basedir instelling niet',
	'NAVIGATION' 				=> 'Navigatie',
	'NO_SEASONS_FOUND' 				=> 'Geen seizoenen gevonden voor %s',
	'NO_SUBTITLE_FOUND' 				=> 'Geen ondertitel gevonden voor %s',
	'OMDB_MOVIE_FAILED'		=> 'Film niet gevonden op OMDBAPI voor %s',
	'OPEN_XML' 				=> 'Open XML %s',
	'OPTIONS' 				=> 'Opties',
	'PASSWORD_EMPTY' 				=> 'Het wachtwoordveld mag niet leeg zijn',
	'PURGE_CACHE' 				=> 'Leeg de buffer',
	'PURGE_LOG'					=> 'Leeg het log',
	'REFRESH_BANNER' 				=> 'Vernieuw banner',
	'RESET' 				=> 'Wissen',
	'SAVED_BANNER' 				=> 'Banner opgeslagen voor %s',
	'SAVED_FANART' 				=> '%s opgeslagen van fanart.tv voor %s',
	'SAVED_XML'			=> 'xml bestand opgeslagen van %s voor %s',
	'SAVED_FANART_FAILED' 				=> 'Opslaan mislukt van %s van fanart.tv voor %s',
	'SB_NO_EPISODE' 				=> 'SickBeard API retourneerde geen aflevering data voor tvdbid: %s',
	'SB_NO_SHOW' 				=> 'SickBeard API retourneerde niets voor %s',
	'SB_NO_SHOWS' 				=> 'SickBeard API retourneerde shows',
	'SB_SHOW' 				=> 'SickBeard retourneerde %s',
	'SB_START'				=> 'Start check voor %s',
	'SEARCH' 				=> 'Zoeken',
	'SEARCH_FOR' 				=> 'Zoeken naar...',
	'SEASONS_FOUND' 				=> 'Seizoen %s gevonden voor %s',
	'SETUP' 				=> 'Setup',
	'SHOWS' 				=> 'Series',
	'SICKBEARD_API_KEY' 				=> 'Sickbeard Api key',
	'SICKBEARD_URL' 				=> 'SickBeard url',
	'SICKBEARD_URL_EXPLAIN' 				=> 'volledige url http://localhost:8081',
	'SKIP_FOUND' 				=> '%s gevonden, sla ontertitel controle over voor %s',
	'SKIP_SHOWS' 				=> 'Skip Shows',
	'SKIP_SHOWS_EXPLAIN' 				=> 'TVDB id\'s gescheiden door een , die je wenst te negeren in het overzicht.',
	'STYLE_SELECT'			=> 'Style',
	'SUBMIT' 				=> 'Submit',
	'SUBTITLE_EXTENSION' 				=> 'Ondertitels extensie',
	'SUBTITLE_EXTENSION_EXPLAIN' 				=> 'met voorloop punt bijvoorbeeld .nl.srt',
	'SUBTITLE_FOUND' 				=> 'Ondertitel gevonden voor %s',
	'TESTING' 				=> 'Testing',
	'TRAKT_CHECKIN' 				=> 'aangemeld bij %s op trakt',
	'TRAKT_ERROR' 				=> 'Communicatie met trakt is niet mogenlijk, probeer het later nog eens.',
	'TRAKT_GET_PROGRESS' 				=> 'Probeer voortgang te krijgen voor %s',
	'TRAKT_NO_NEXT_EPISODE' 				=> 'Seizoen folder gevonden voor %s (%s) maar Trakt api retourneerde geen next_episode, seizoen klaar?',
	'TRAKT_PROGRESS_FAILED' 				=> 'Mislukt om de voortgang te krijgen voor %s',
	'TRAKT_PROGRESS_SUCCESS' 				=> 'Trakt retourneerde de volgende aflevering voor %s is %s',
	'TRAKT_START'					=> 'Start checkin...',
	'TRAKT_UPDATE'					=> 'Updaten van serie',
	'USERNAME_EMPTY' 				=> 'Het gebruikersnaam veld mag niet leeg zijn',
	'VERSIONCHECK_FAIL' 				=> 'Verkrijgen van laatste versie-informatie mislukt.',
	'VERSION_NOT_UP_TO_DATE' 				=> 'Nieuwe versie beschikbaar : (%s)',
	'VERSION_UP_TO_DATE' 				=> 'What2Watch is up-to-date',
	'WARNING'				=> 'Warning',
	'WELCOME' 				=> '<h1>Home</h1>Welkom bij What2Watch, <br />Kies uit het menu wat je kan bekijken.',
));

?>