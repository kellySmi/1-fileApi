This is a quick PHP api when running an Apache web server.
It requires PHP and mod_rewrite installed along with the "AllowOverride All" set in the httpd.conf.
Just drop the api directory into the server root directory. It contains the index.php file and an .htaccess file to rewrite the url's

You can then call it from this url http://localhost/api/item1/item2/item3
where the value of each item is in an array $q_arr[0]

I will leave it to the implementer to clean and validate the incoming data
this is for dev purposes only 