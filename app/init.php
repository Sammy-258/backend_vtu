<?php

require_once("route.php");



Route::get("/dashboard","ViewController","Publicshow");
Route::get("/services","ViewController","Publicshow");
Route::get("/wallet","ViewController","Publicshow");
Route::get("/profile","ViewController","Publicshow");
Route::get("/login","ViewController","Publicshow");


header("HTTP/1.0 404 Not Found");
// http_response_code(404);
echo "page not found";
exit();