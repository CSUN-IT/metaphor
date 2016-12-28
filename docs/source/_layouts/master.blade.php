<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title'|'Metaphor by META+Lab')</title>
  <meta name="description" content="An elegantly crafted UI Kit for CSUN branded prototypes &amp; applications">
  <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">

  <!-- CSUN Branded Fonts -->
  <script src="//use.typekit.net/gfb2mjm.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
</head>
<body>
 @include('_partials.navbar')
 @yield('body')
 @include('_partials.footer')
</body>
<script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>
</body>
</html>