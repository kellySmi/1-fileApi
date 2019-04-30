<?
/* A quick REST API the htaccess is included and needs to have mod_rewrite on the server*/

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // get query string  q
    $q = $_SERVER['QUERY_STRING'];
    $q_arr = explode("/",$q);
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
