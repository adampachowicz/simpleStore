<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Simple Store')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default border-bottom">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                Simple Store
            </a>

        </div>
        <div class="nav navbar-nav navbar-right">
            <p><a href="/shopping-cart">Koszyk zakupowy <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></p>
        </div>
    </div>
</nav>