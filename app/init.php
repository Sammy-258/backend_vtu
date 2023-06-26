<?php

require_once("route.php");



Route::get("/dashboard","ViewController","Privateshow");
Route::get("/services","ViewController","Privateshow");
Route::get("/wallet","ViewController","Privateshow");
Route::get("/profile","ViewController","Privateshow");
Route::get("/login","ViewController","Publicshow");
Route::get("/logout","controller","logout");


Route::post("/login", "controller", "login");


header("HTTP/1.0 404 Not Found");
// http_response_code(404);
echo "page not found";
exit();