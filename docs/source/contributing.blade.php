@extends('_layouts.master_documentation')

@section('category','Intro')
@section('title', $title = 'Contributing')
@section('body')

          <h2 id="contributing" class="type--header type--thin">Contributing to Metaphor</h2>
          <p>We love making super awesome stuff, but even more we like to empower people to make changes on their own. Feel free to fork and improve Metaphor. Please take a moment to review this page in order to make the contribution process easy and effective for everyone involved.</p>
          <p>Following these guidelines helps to communicate that you respect the time of the developers managing and developing this open source project. In return, they should reciprocate that respect in addressing your issue or assessing patches and features.</p>
          <p><strong>Current Contributors:</strong></p>
          <ul id="contributors" class="list--inline"></ul>
          <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
          <script>
          var $contributors = $('#contributors');
          $.ajax({
            method: "GET",
            url: "https://api.github.com/repos/csun-metalab/metaphor/contributors",
            dataType: "json",
            success: function(data){
              for (i = 0; i < data.length; i++) {
                $contributors.append('<li><a title="' + data[i].login + '" target="_blank" href="' + data[i].html_url + '"><img width="75px" class="img--fluid img--circle" src="' + data[i].avatar_url + '" alt="' + data[i].login + '"/></a></li>');
              }
            },
            error: function(){
              $contributors.append('Can\'t Display Active Contributors');
            }
          });</script>
          <br>

          <h2 id="dev-setup" class="type--header type--thin">Developer Setup Instructions</h2>
          <p><strong>#1.</strong> To begin contributing first clone the metaphor repository from <a href="https://github.com/csun-metalab/metaphor.git" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>:</p>
          <pre><code>$ git clone https://github.com/csun-metalab/metaphor.git</code></pre>
<hr>
          <p><strong>#2.</strong> Next you will need to install all the dependencies identified in the projects <code>package.json</code> &amp; <code>bower.json</code>:</p>
          <pre><code><div class="type--dark-gray">// Node/NPM Packages</div>$ npm install

<div class="type--dark-gray">// Bower Packages</div>$ bower install</code></pre>
<p><small><em><strong>Note:</strong> If you haven't already you will need to install <a target="_blank" href="https://nodejs.org/en/download">Node/NPM</a> &amp; <a target="_blank" href="https://bower.io/#install-bower">Bower</a> first.</em></small></p>
<hr>
<p><strong>#3.</strong> Metaphor utilizes a task runner to compile <code>*.scss</code> &amp; <code>*.js</code> assets. Run the following Gulp tasks to compile files:</p>
<pre><code><div class="type--dark-gray">// Run all Gulp tasks</div>$ gulp

<div class="type--dark-gray">// Gulp will watch your assets for any changes and automatically recompile your assets if you modify them</div>$ gulp watch

<div class="type--dark-gray">// Run All Gulp tasks and minify for production</div>$ gulp --production</code></pre>

          <p><small><em><strong>Note:</strong> If you haven't already you will need to install the <a target="_blank" href="https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md">Gulp CLI</a> first.</em></small></p>

          <br>

          <h2 id="sass" class="type--header type--thin">SASS/SCSS</h2>
          <p>All of Metaphors components are written in SASS. As you compile your SASS styles <code>gulp</code> will automatically lint your code to make sure your code conforms to the guidelines specified in the <code>.scss-lint.yml</code> file and the <a href="https://github.com/csun-metalab/metaphor/blob/master/CONTRIBUTING.md">Metaphor contributing guidelines</a>.</p>
          <p>To enable linting on your machine you will have to run the following commands in your terminal:</p>
          <pre><code>$ gem install scss_lint</code></pre>
          <p>You will also have to update your text editor of choice to support linting by installing the following packages.</p>
          <div class="row">
            <div class="col-sm-6">
              <p><strong>Sublime Text:</strong></p>
              <ol>
                <li><a href="https://packagecontrol.io/packages/SublimeLinter">Sublime Linter</a></li>
                <li><a href="https://packagecontrol.io/packages/SublimeLinter-contrib-scss-lint">Sublime​Linter-contrib-scss-lint</a></li>
              </ol>
            </div>
            <div class="col-sm-6">
              <p><strong>Atom:</strong></p>
              <ol>
                <li><a href="https://github.com/steelbrain/linter">Atom Linter</a></li>
                <li><a href="https://atom.io/packages/linter-scss-lint">Atom linter-scss-lint</a></li>
              </ol>
            </div>
          </div>

          <br>

          <h2 id="workflow" class="type--header type--thin">Github Workflow &amp; Pull Requests</h2>
          <p>When commiting code leverage the Github Workflow when building out Metaphor. To learn more about this process take a look at <a href="https://guides.github.com/introduction/flow/">Understanding the GitHub Flow by Github.</a></p>

          <br>

          <h2 id="feature-requests" class="type--header type--thin">Feature Requests</h2>
          <p>Feature requests are welcome. But take a moment to find out whether your idea fits within the scope and aims of the project. It's up to you to make a strong case to convince the project's developers of the merits of any new features. Please provide as much detail and context as possible.</p>
          <p>To view a current log of features/issues visit our <a href="https://github.com/csun-metalab/metaphor/issues">Github issues page.</a></p>
          <br>

          <h2 id="product-versioning" class="type--header type--thin">Product Versioning</h2>
          <p>Given a version number <code>MAJOR.MINOR.PATCH</code>, increment the:</p>
          <p><code>MAJOR</code> version when you make incompatible API changes, <code>MINOR</code> version when you add functionality in a backwards-compatible manner, and <code>PATCH</code> version when you make backwards-compatible bug fixes. Additional labels for pre-release and build metadata are available as extensions to the <code>MAJOR.MINOR.PATCH</code> format.</p>
          <p>For more information on versioning visit <a href="http://semver.org/">Semantic Versionings</a> website.</p>

          <br>
          <h2 id="issue-tracking" class="type--header type--thin">Issue Tracking &amp; Task Management</h2>
          <p>We use Githubs default issue tracking system to manage enhancements, bugs, and new feature requests. The issue tracker also allows us to assign/delegate contributors to a task. To learn more about this process take a look at <a href="https://guides.github.com/features/issues/">Githubs Mastering Issues Guide.</a></p>
          <br>

@endsection
