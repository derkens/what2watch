<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
/**
* @ignore
*/
define('IN_W2W', true);
include('common.php');

// Initial var setup
$mode = (isset($_GET['mode']) ? $_GET['mode'] : '');
$error = $success = $info = $warning = array();
$purge_cache = false;
if ($version = $cache->get('version_check'))
{
    $version = json_decode($version, true);
}
else
{
	$version = version_check();
	// Save array as json
	$cache->put('version_check', json_encode($version));
}

// Status flag:
$LoginSuccessful = false;

if (!empty($ip_subnet))
{
	if (substr($_SERVER['REMOTE_ADDR'], 0, strlen($ip_subnet)) == $ip_subnet)
	{
		unset($web_username);
	}
}

if (!empty($web_username))
{
	// Check username and password:
	if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
	{
 
		$Username = $_SERVER['PHP_AUTH_USER'];
		$Password = $_SERVER['PHP_AUTH_PW'];
 
		if ($Username == $web_username && $Password == $web_password)
		{
			$LoginSuccessful = true;
		}
	}
}
else
{
	$LoginSuccessful = true;
}

// Login passed successful?
if (!$LoginSuccessful){
 
    /* 
    ** The user gets here if:
    ** 
    ** 1. The user entered incorrect login data (three times)
    **     --> User will see the error message from below
    **
    ** 2. Or the user requested the page for the first time
    **     --> Then the 401 headers apply and the "login box" will
    **         be shown
    */
 
    // The text inside the realm section will be visible for the 
    // user in the login box
    header('WWW-Authenticate: Basic realm="What2Watch"');
    header('HTTP/1.0 401 Unauthorized');
 
    print "Login failed!\n";
 
}
else
{

switch ($mode)
{
	case 'shows':
		include('shows.php');
	break;
	
	case 'movies':
		include('movies.php');
	break;
	
	case 'viewlog':
		include('log.php');
	break;

	case 'config_file':
		create_config_file();
		header('Location: index.php');
	break;

	case 'plugins':
		include('plugins.php');
	break;
	
	case 'test':
		include('test.php');
	break;
	
	case 'purge_cache':
		$cache->purge();
		$referer = $_SERVER['HTTP_REFERER'];
		header("refresh:5; url=" . $referer);
		$tag = 'Cache';
		$log->info($tag, $lang['CACHE_PURGED']);
		$info[] = $lang['CACHE_PURGED'];
		$cache_message = sprintf($lang['CACHE_PURGED_EXPLAIN'], '<a href="' . $referer . '">' . $lang['HERE'] . '</a>');
		$purge_cache = true;
	
	case 'purge_log':
		if (!$purge_cache)
		{
			$lines_array = file('error.log');
			$new_output = "";
			file_put_contents('error.log', $new_output);
			$referer = $_SERVER['HTTP_REFERER'];
			header("refresh:5; url=" . $referer);
			$tag = 'Log';
			$log->info($tag, $lang['LOG_PURGED']);
			$info[] = $lang['LOG_PURGED'];
			$cache_message = sprintf($lang['LOG_PURGED_EXPLAIN'], '<a href="' . $referer . '">' . $lang['HERE'] . '</a>');
		}
	
	default:
		/**
		* Loads our layout template, settings its title and content.
		*/
		$content = (isset($cache_message) ? $cache_message : $lang['WELCOME']);

		$template->assign_vars(array(
			'CONTENT'	=> $content,
		));
		/**
		* Finally we can output our final page.
		*/
		page_header($lang['INDEX']);

		$template->set_filename('index_body.html');

		page_footer();
	}
}