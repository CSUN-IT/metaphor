@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Breadcrumbs')
@section('body')
  <h2 class="type--header type--thin">Breadcrumbs</h2>
  <ul class="breadcrumbs">
    <li class="breadcrumb__item breadcrumb__item--home"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    <li class="breadcrumb__item">Documentation</li>
    <li class="breadcrumb__item">Breadcrumbs</li>
  </ul>
<pre><code>&lt;ul class=&quot;breadcrumbs&quot;&gt;
	&lt;li class=&quot;breadcrumb__item breadcrumb__item--home&quot;&gt;
	&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-home&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;
	&lt;/li&gt;
	&lt;li class=&quot;breadcrumb__item&quot;&gt;Documentation&lt;/li&gt;
	&lt;li class=&quot;breadcrumb__item&quot;&gt;Breadcrumbs&lt;/li&gt;
&lt;/ul&gt;
<div class="type--dark-gray"><strong>// BREADCRUMB MODIFIERS</strong>
.breadcrumbs--underlined
</div></code></pre><br>
<br>
@endsection
