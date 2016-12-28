@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Panels')
@section('body')
<h2 class="type--header type--thin">Panels</h2>
<div class="panel">
<div class="panel__content">This is a basic panel</div>
</div>
<div class="panel">
<div class="panel__content">This is a basic panel w/ a footer</div>
<div class="panel__footer"><strong>Pro Tip!</strong> Smiling Makes Others Smile :)</div>
</div>
<div class="panel">
<div class="panel__header">
  <strong>Panel</strong>
</div>
<div class="panel__content">This is a basic panel w/ a header</div>
</div>
<div class="panel panel--red">
<div class="panel__header">
  <strong>Panel Alert</strong>
</div>
<div class="panel__content">This is a basic panel w/ a color modifier (options: red, cream, dark-gray)</div>
<div class="panel__footer"><strong>Warning:</strong> Are You Sure You Want To Do That?</div>
</div>
<br>
<pre><code>&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel w/ a footer&lt;/div&gt;
  &lt;div class=&quot;panel__footer&quot;&gt;&lt;strong&gt;Pro Tip!&lt;/strong&gt; Smiling Makes Others Smile :)&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel&quot;&gt;
  &lt;div class=&quot;panel__header&quot;&gt;
    &lt;strong&gt;Panel&lt;/strong&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel w/ a header&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;panel panel--red&quot;&gt;
  &lt;div class=&quot;panel__header&quot;&gt;
    &lt;strong&gt;Panel Alert&lt;/strong&gt;
  &lt;/div&gt;
  &lt;div class=&quot;panel__content&quot;&gt;This is a basic panel w/ a color modifier&lt;/div&gt;
  &lt;div class=&quot;panel__footer&quot;&gt;&lt;strong&gt;Warning:&lt;/strong&gt; Are You Sure You Want To Do That?&lt;/div&gt;
&lt;/div&gt;</code></pre><br>
<br>
@endsection
