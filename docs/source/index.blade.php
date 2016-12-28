@extends('_layouts.master')

@section('body')
  <div class="section section--md section--bottomless">
    <div class="container type--center">
      <img src="imgs/icon.png" style="width:80px; margin-bottom: 25px;" alt="Metaphor Logo">
      <h1 class="giga type--thin">The New Metaphor UI Kit.</h1>
      <h2 class="h1 type--thin type--dark-gray">Rapid App Development Is Finally Here.</h2>
      <br>
      <p><a href="https://github.com/csun-metalab/metaphor.git" target="_blank" class="btn btn-primary-outline btn-lg">Download</a></p>
      <p class="milli type--uppercase type--dark-gray type--marginless" id="version"></p>   
      <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
      <script>
      var $version = $('#version');
      $.ajax({
        method: "GET",
        url: "https://api.github.com/repos/csun-metalab/metaphor/releases",
        dataType: "json",
        success: function(data){
            $version.append(data[0].name);
          }
        },{
        error: function(){
          $version.append('Can\'t Display Active Contributors');
        }
      });</script>
      <br><br>
      <img class="img--fluid" src="imgs/editor.png" alt="Metaphor Text Editor">
    </div>
  </div>

  <main clas="main main--metalab">
    <div class="section section--md type--center" style="background-color: rgba(216, 210, 196, 0.2);">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="giga fa fa-terminal" aria-hidden="true"></div>
            <br><br>
            <h2 class="h3">Preprocessors</h2>
            <p>Metaphor ships with vanilla CSS, but its source code utilizes SASS as a preprocessor. Quickly get started with precompiled CSS or build on top of our source code.</p>
            <br>
          </div>
          <div class="col-md-4">
            <div class="giga fa fa-mobile-phone" aria-hidden="true"></div>
            <br><br>
            <h2 class="h3">Support For All Devices</h2>
            <p>Metaphor easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with custom CSS media queries.</p>
            <br>
          </div>
          <div class="col-md-4">
            <div class="giga fa fa-universal-access" aria-hidden="true"></div>
            <br><br>
            <h2 class="h3">Accessibility</h2>
            <p>Clean semantic markup is important for supporting the needs of every user and with Metaphor we've done exactly that. Help us make the web accessible for everyone.</p>
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="section section--lg type--center">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="mega fa fa-code-fork" aria-hidden="true"></div>
            <br><br>
            <h2>It's Easy to Get Started.</h2>
            <p>Working with Metaphor is simple. Start by opening up your command line and running the following:</p>
            <pre><code>$ bower install metaphor --save</code></pre>
            <br>
            <div><a class="btn btn-primary-outline" href="docs/vision.html" role="button">View Documentation</a></div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
