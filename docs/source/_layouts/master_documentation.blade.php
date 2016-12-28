<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') | Docs | Metaphor by META+Lab</title>
  <meta name="description" content="Development Guidelines for Developers Implementing Metaphors UI Components.">
<link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">

  <!-- FONT LIBS -->
  <script src="//use.typekit.net/gfb2mjm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
  <link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
</head>
<body>
  @include('_partials.navbar')
  <div class="section" style="background-color: #252525;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="type--white type--thin type--marginless">Documentation</h1>
          <ul class="breadcrumbs breadcrumbs--marginless type--white">
            <li class="breadcrumb__item breadcrumb__item--home"><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
            <li class="breadcrumb__item">@yield('category')</li>
            <li class="breadcrumb__item">@yield('title')</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="main main--metalab section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert--warning"><strong>Heads Up!</strong> Components &amp; docs are subject to change until official v1.0 release.
            <a href="#" class="alert__close" data-alert-close>&times;</a>
          </div>
        </div>
        <div class="col-sm-3">
          @include('_partials.sidebar',['title'=> $title ])
        </div>
        <div class="col-sm-9">
          @yield('body')
        </div>
      </div>
    </div>
  </div>
  @include('_partials.footer')
  <!-- SCRIPTS -->
  <script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77781058-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
