#Get Your Instagram User ID and Access Token
This is a simple website designed to provide your users with a simple interface to retrieve their Instagram User ID and Access Tokens from. Instagram makes this info incredibly difficult to retrieve for a common user. But this info is necessary for using common Instagram Photo Feed plugins. This enables users to get that information easily.

##DEMO
You can see this form live here: [http://docs.mattcromwell.com/instagramauth.php](http://docs.mattcromwell.com/instagramauth.php)

##ANATOMY
This web page has three main elements:

- `index.html`
- `screen.css`
- `application.js`

###INDEX.HTML
 This file holds all the necessary instructions. It is also the only file the is REQUIRED to be changed in order to work on your server. See instructions below.

###SCREEN.CSS
These are all the styles. The instructions in the `index.html` file are hidden or shown based on the body class. The body class changes via javascript according to whether the user is logged into Instagram or not.

###APPLICATION.JS
This is the core javascript plugin which retrieves the necessary information, switches the body class, and several other necessary functions.

##CUSTOMIZATION
The only thing you need to do to customize this script to work on your site is to edit the `index.html` file. You also need to have your own Instagram Application. So here's a quick step-by-step:

1. [Create an Instagram App](http://instagram.com/developer/clients/register/) with the following settings:
 - Unique Name
 - Unique Description (yes, this is required)
 - Your website, meaning the website where you will host this page.
 - The OAutho redirect uri, which should be the exact same url as the website page since you want your users to come back to this same page but logged in this time.
 - DO NOT check "Disable implicit OAuth"
 - DO NOT check "Enforce signed header"
2. Now edit the `index.html` page:
 - On line 28, change [YOUR-CLIENT-ID] to the client id of the app you just created. Do not include the brackets.
 - Also on line 28, change http://yourwebsite.com to the exact url where you will be hosting this page.

That's it! Enjoy!
