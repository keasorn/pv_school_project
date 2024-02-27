@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container-fluid home-main">
        <h2>Kshiti Ghelani <span class="blinker">.</span></h2>
        <button type="button" class="btn btn-default">View Profile</button>
    </div>
    <div class="container-fluid home-content1">
        <div class="row">
            <div class="col-md-6 content1-left">
                <h3>Why to use Bootstrap <span class="blinker">?</span></h3>
                <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
                <!-- <div class="content1-left"></div> -->
            </div>
            <div class="col-md-6 content1-right">
                <p>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid home-content2">
        <p><span>News</span> and <span>announcements</span> for all things <span>Bootstrap</span>, including new <span>releases</span> and <span>Bootstrap Themes</span>.</p>
    </div>
@endsection

