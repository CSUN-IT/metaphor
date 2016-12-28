@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Lists')
@section('body')
<h2 class="type--header type--thin">Lists</h2>
  <p>When using lists ( <code>&lt;ul&gt;</code> ), you can add custom modifiers to change their layout.</p>
  <div class="row">
    <div class="col-sm-4">
      <ul class="list">
        <li class="list__item"><a href="#">Side Nav Link</a></li>
        <li class="list__item"><a href="#">Side Nav Link</a></li>
        <li class="list__item"><a href="#">Side Nav Link</a></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="list list--arrows list--hover">
        <li class="list__item"><a href="#">Side Nav Link</a></li>
        <li class="list__item"><a href="#">Side Nav Link</a></li>
        <li class="list__item"><a href="#">Side Nav Link</a></li>
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="list list--underlined">
        <li><a href="#">Nav Link List</a></li>
        <li><a href="#">Nav Link List</a></li>
        <li><a href="#">Nav Link List</a></li>
      </ul>
    </div>
  </div>
  <br>
  <pre><code>&lt;ul class=&quot;list&quot;&gt;
  &lt;li class=&quot;list__item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Side Nav Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;list__item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Side Nav Link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;list__item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Side Nav Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

<div class="type--dark-gray"><strong>// LIST MODIFIERS</strong>
.list--arrows
.list--hover
.list--underlined
</div>
</code></pre><br>
<br>
@endsection
