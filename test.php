<!doctype>
<html>
<head>
	<title>Facebook</title>
</head>
<body>
	<?php
	define('FACEBOOK_SDK_V4_SRC_DIR', '/facebook/src/Facebook/');
	require __DIR__ . '/facebook/autoload.php';
	// Make sure to load the Facebook SDK for PHP via composer or manually

	use Facebook\FacebookSession;
	// add other classes you plan to use, e.g.:
	// use Facebook\FacebookRequest;
	// use Facebook\GraphUser;
	// use Facebook\FacebookRequestException;

	FacebookSession::setDefaultApplication('1465551047069043', '4142fde45a6b6c0988f756230fbc8f75');
	// Add `use Facebook\FacebookRedirectLoginHelper;` to top of file
	$helper = new FacebookRedirectLoginHelper();
	try {
  	$session = $helper->getSessionFromRedirect();
	} catch(FacebookRequestException $ex) {
 	 // When Facebook returns an error
	} catch(\Exception $ex) {
	  // When validation fails or other local issues
	}
	if ($session) {
	  // Logged in
		$request = new FacebookRequest($session,'Get','/me');
		$response =  $request->execute();
		$graph =  $response->getGraphObject(GraphUser::classname());
		$name = $graph->getName();
		echo "hi $name";
	}else{
		echo '<a href="'.$helper->getLoginUrl().'">Login with facebook</a>';
	}
	?>
</body>
</html>
