@extends('_layouts.master_documentation')

@section('category','Intro')
@section('title', $title = "Getting Started" )



@section('body')
  <h2 id="getting-started" class="type--header type--thin">Getting Started</h2>
  <p>The easiest way to try out Metaphor is by using our CDN and viewing the source code in our template <a href="examples.html">examples</a>. If you prefer downloading / installing from a package manager, check out the installation process below.</p>

  <br>

  <h2 id="installation" class="type--header type--thin">Installation</h2>
  <p>To include Metaphor in your next project simply run  the following in the command line: </p>
  <pre><code>$ bower install metaphor --save</code></pre>
  <p><small><em><strong>Note:</strong> If you haven't already you will need to install <a target="_blank" href="https://nodejs.org/en/download">Node/NPM</a> &amp; <a target="_blank" href="https://bower.io/#install-bower">Bower</a> first.</em></small></p>

  <br>

  <h2 id="cdn" class="type--header type--thin">Metaphor CDN</h2>
  <p>Alternatively, you can also add Metaphor to your project with our Content Delivery Network (CDN).</p>
  <pre><code><div class="type--dark-gray">// CSS</div>&lt;link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css"&gt;

<div class="type--dark-gray">// JavaScript</div>&lt;script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"&gt;&lt;/script&gt;</code></pre>
  <p><small><em><strong>Note:</strong> You will need to add <a target="_blank" href="http://code.jquery.com">jQuery</a> to your project if you plan on using <code>metaphor.js</code></em></small></p>

  <br>

  <h2 id="template" class="type--header type--thin">Basic Template</h2>
  <p>Next add the following boilerplate code to your project:</p>
  <pre><code><div class="type--dark-gray">&lt;!DOCTYPE HTML&gt;
&lt;html class="no-js" lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="utf-8"&gt;
  &lt;meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Metaphor by META+LAB&lt;/title&gt;
  &lt;meta name="description" content=""&gt;
  &lt;link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon"&gt;

  &lt;!-- CSUN Branded Fonts --&gt;
  &lt;script src="//use.typekit.net/gfb2mjm.js"&gt;&lt;/script&gt;
  &lt;script&gt;try{Typekit.load();}catch(e){}&lt;/script&gt;

</div>  &lt;link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css"&gt;
<div class="type--dark-gray">  &lt;link rel="stylesheet" href="../your-personal-project/path/to/styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;

  &lt;!-- Add Your Code Here &amp; Start Building ;D --&gt;

</div>  &lt;script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"&gt;&lt;/script&gt;
<div class="type--dark-gray">&lt;/body&gt;
&lt;/html&gt;</div></code></pre>

          <br>

          <h2 id="included" class="type--header type--thin">What's Included</h2>
          <p>When you download Metaphor via Bower, the following source files will be available to you</p>

          <pre><code><div class="type--dark-gray">Metaphor
  ├── CONTRIBUTING.md
  ├── LICENSE
  ├── README.md
  ├── bower.json
  ├── dist/
  │   ├── css/
  │   │&nbsp;&nbsp; └── metaphor.css
  │   ├── fonts/
  │   └── js/
  │       └── metaphor.js
  ├── docs/
  ├── examples/
  ├── gulpfile.js
  ├── index.html
  ├── package.json
  └── src/
      ├── js/
      └── sass/
</div></code></pre>
@endsection