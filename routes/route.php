<?php
if(isset($_GET['action'])){
    $request =$_GET['action'];
    if($request=='home'){$route="indexController@indexAction";}
    if($request=='home'){$route="productController@getProductAction";}
}