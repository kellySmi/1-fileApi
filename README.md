If you are running an Apache web server with PHP installed and need to test a front end call to a backend server,
then just drop the api directory into the server root directory.
You can then call it from this url http://localhost/api/?q=item1/item2/item3
where the value of item1 is in an array $q_arr[0]
To enable a full restful API you will need to enable mod_rewrite in your web server config and modify your .htaccess 


I will leave it to the implementer to clean and validate the incoming data
this is for dev purposes only 