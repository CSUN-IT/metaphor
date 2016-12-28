@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Buttons')
@section('body')
<h2 class="type--header type--thin">Buttons</h2>
<p>
  <button role="button" class="btn btn-default">Button</button>
  <button role="button" class="btn btn-primary">Button</button>
  <button role="button" class="btn btn-success">Button</button>
</p>
<p>
<pre><code>&lt;button role=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Button&lt;/button&gt;
&lt;button role=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Button&lt;/button&gt;
&lt;button role=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Button&lt;/button&gt;

<div class="type--dark-gray"><strong>// BUTTON MODIFIERS</strong>
<strong>Button Size:</strong>
.btn-sm
.btn-lg

<strong>Button Color:</strong>
.btn-default
.btn-primary
.btn-success

<strong>Button Style:</strong>
.btn-default-outline
.btn-primary-outline
.btn-success-outline
</div>
</code></pre><br>
<br>
@endsection
