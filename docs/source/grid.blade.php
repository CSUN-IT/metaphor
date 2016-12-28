@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Grid System')
@section('body')
<h2 class="type--header type--thin">Grid System</h2>
<p>Using <code>xs</code>, <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> you can modify the grid system to adjust on small, medium, or large devices.</p>

<style>
.grid-example > .col--outline {
  border: 2px solid rgba(216, 210, 196, 1);
  border-radius: 3px;
  padding: 6px;
  text-align: center;
  font-weight: bold;
  margin-bottom: 5px;
}
</style>

<div class="grid-example cf">
<div class="col--outline col-sm-2">1</div>
<div class="col--outline col-sm-10">2</div>
<div class="col--outline col-sm-4">3</div>
<div class="col--outline col-sm-8">4</div>
<div class="col--outline col-sm-6">5</div>
<div class="col--outline col-sm-6">6</div>
<div class="col--outline col-sm-8">7</div>
<div class="col--outline col-sm-4">8</div>
<div class="col--outline col-sm-10">9</div>
<div class="col--outline col-sm-2">10</div>
</div>

<br>

<p>We recommend wrapping your grid inside a <code>.container</code> element to assist with content reflow.</p>
<pre><code>&lt;div class=&quot;container&quot;&gt;

<div class="type--dark-gray">  &lt;!-- Your Code Here --&gt;
&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-12&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</div>
&lt;/div&gt;</code></pre>

<br>

<p>When adding the grid system to your project wrap your columns in a <code>.row</code> element. The following example is a basic row of columns ( <code>.col-*-*</code> ) that automatically adjust to different device sizes:</p>
<div class="grid-example cf">
<div class="col--outline col-sm-12 col-md-1 col-lg-2 col-xl-4">1</div>
<div class="col--outline col-sm-12 col-md-3 col-lg-8 col-xl-4">2</div>
<div class="col--outline col-sm-12 col-md-8 col-lg-2 col-xl-4">3</div>
</div>

<p><small><em><strong>Note:</strong> You will need to resize your browser to view grid system changes.</em></small></p>

<pre><code>&lt;div class=&quot;row&quot;&gt;
&lt;div class=&quot;col-sm-12 col-md-1 col-lg-2 col-xl-4&quot;&gt;1&lt;/div&gt;
&lt;div class=&quot;col-sm-12 col-md-3 col-lg-8 col-xl-4&quot;&gt;2&lt;/div&gt;
&lt;div class=&quot;col-sm-12 col-md-8 col-lg-2 col-xl-4&quot;&gt;3&lt;/div&gt;
&lt;/div&gt;</code></pre>
<br>
@endsection
