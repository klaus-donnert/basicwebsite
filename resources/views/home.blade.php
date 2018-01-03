@extends('layouts.app')
@section('content')
<h1>Home</h1>
<p>My name is Klaus Donnert. This website is a example of some of the things that I can do.
    There is nothing really fancy here, just some demo sites to with html, css,
    js, vue.js, jquery, php, mysql, sqlite, laravel, and other frameworks and libraries.
    This site is built with Laravel 5.5 on a small LEMP server hosted in the cloud at Digitalocean.
    I'm using Laravel Forge to automatically pull updates from Github, run Composer and Artisan whenever a push to master occurs.
    The source code is located at
    <a href="https://github.com/klaus-donnert/basicwebsite">https://github.com/klaus-donnert/basicwebsite</a>.</p>

    @include('inc.portfolio')
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the side bar</p>
@endsection
