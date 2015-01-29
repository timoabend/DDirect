# DDirect
Dynamic Redirector

Just a little idea put into a few lines of code.

Imagine you want to know your dynamic IP at home, but
* you don't want to use an official DDNS-Service and
* you don't have your own bind which you can configurure on you own

All you need is 
* a Webserver with PHP-Interpreter and static IP, maybe even a Domain and 
* a Box at home being able to call a Webpage maybe via crontab.

On your webserver you install the scripts in a web-share, for example www.yourdomain.com/installationdir
git clone https://github.com/timoabend/DDirect/
Don't forget to set permissions to the webserver's user. ipaddress.php needs write-permission.

At home you call https://www.yourdomain.com/installationdir/rememberme.php regularily. Your IP is then persisted in ipaddress.php.

From anywhere point your browser to https://www.yourdomain.com/installationdir/sendme.php and your browser is redirected to you dynamic IP.

Consider setting up a .htaccess.

Notice: Unfortunatelly this works for webpages but not for apps.
