<?
/* A quick API using the query string 
this script accepts a string as api/?q=item1/item2/item3
where the value of item1 is in $q_arr[0]
I will leave it to the implementer to clean and validate the incoming data
this is for dev purposes only 
*/

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // get query string  q
    $q = $_SERVER['QUERY_STRING'];
    $q_arr = explode("/",$q);
    $q_arr[0] = ltrim($q_arr[0],"q=");
    $data = $q_arr;
    //////
    // switch($q_arr[0]){
    //   case "items":
    //     $data = [];
    //     break;
    //   case "item":      
    //     $data = [];
    //     break;
    //   default :
    //     $data = [];
    //     break;
    // }
    header('Content-Type: application/json');
    echo json_encode($data);
}
