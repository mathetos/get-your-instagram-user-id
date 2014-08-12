<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="INSTAFOO: Get your Instagram user ID and Access Key">

  <title>INSTAFOO: Get your Instagram user ID and Access Key</title>
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="screen.css" type="text/css" media="screen" charset="utf-8">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="application.js"></script>

</head>
<body>
  <div id="wrapper">
    <p class="js-alert">You need javascript support for this. <br>Either it's turned off or your browser doesn't support it.</p>
    <h1>Get your Instagram UserID and Access Key</h1>
    <section>
	<p class="instructions">To access your Instagram Photo Feed, you need "keys". For Instagram that comes in the form of a User ID (how your account is identified numerically with Instagram), and an Access Token (permission to access your account from outside of Instagram). When you login here, you authorize this site to pull this information for you. This information is not saved in any way, it is only accessed and presented on the screen here for you. We provide this as a service because Instagram has made it incredibly difficult for normal users to access this information.</p>
	
	<p class="instructions">To use this service, simply request the information by clicking the button below and approve the access to your account. Upon approval, you'll be returned here and you'll see a new link that says: "Show me my UserID and Access Token". Click that and your information will be displayed dynamically.</p>
	
	<p class="yourback"><strong>You're back!</strong><br /><br />
	Great! Now just click the button below and you've got all you need.</p>
    
	<a id="login" href="https://instagram.com/oauth/authorize/?client_id=3c562dd1a4fb4f1dbb4b7b46f5b7b04a&amp;redirect_uri=http://docs.mattcromwell.com/instagramauth.php&amp;response_type=token">Log into your Instagram account</a>
    
	<a id="get-user-data" href="#">Show me my UserID and Access Token</a>
	
	<div id="result"></div>
	<p class="copyright">This site is in no way connected or associated with Instagram &trade;. There is no warranty or guarantee of services provided with the use of this site. Use at your own risk.</p>
    </section>
  </div>
</body>
</html>