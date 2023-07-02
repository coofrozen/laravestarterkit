<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Project Created by ***** Anania Cofree *****
you can contribute to these starter kit by creating pull requests. dont forget to leave a STAR if you find the project helpful

you can buy me a cup of coffee via telebirr on +251911066609

## About Specific project
A simple laravel starter kit to get started with your laravel applications

## whats included
Sanctum 
Breeze

# Details
$Sanctum: used for bearer token auth and $Breeze is used for GUI authentication/registration/password reset.

# some api routes revealed
Non protected Routes <br>
    http://localhost:8000/api/animals --- method = GET                  ----- returns list of animals in json format <br>
    http://localhost:8000/api/animals/3 --- method = GET                ----- returns specific animal with the following id <br>
    http://localhost:8000/api/animals/search/abc --- method = GET       ----- returns animal with where type like '%abc%' <br>
    http://localhost:8000/api/login --- method = POST                   ----- Login to system - generates token <br>
    http://localhost:8000/api/register --- method = POST                ----- Registration on the system - generates token <br>
Protected Routes <br>
    http://localhost:8000/api/animals --- method = POST       ----- creates new animal <br>
    http://localhost:8000/api/animals/3 --- method = PUT      ----- edits existing animal <br>
    http://localhost:8000/api/animals/3 --- method = DELETE   ----- destroys animal <br>
    http://localhost:8000/api/logout --- method = POST        ----- logout and destroy token <br>


