@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Alerts')
@section('body')
 <h2 class="type--header type--thin">Alerts</h2>
  <div class="alert"><strong>Pro Tip:</strong> Try Hitting Refresh!
    <a href="#" class="alert__close" data-alert-close>&times;</a>
  </div>
  <div class="alert alert--info"><strong>Pro Tip:</strong> Try Hitting Refresh!
    <a href="#" class="alert__close" data-alert-close>&times;</a>
  </div>
  <div class="alert alert--success"><strong>Success!</strong> Data Saved.
    <a href="#" class="alert__close" data-alert-close>&times;</a>
  </div>
  <div class="alert alert--warning"><strong>Warning!</strong> Data Storage Limited.
    <a href="#" class="alert__close" data-alert-close>&times;</a>
  </div>
  <div class="alert alert--danger"><strong>Danger!</strong> Something went horribly wrong. Application will self destruct in 1min...
    <a href="#" class="alert__close" data-alert-close>&times;</a>
  </div>
  <br>
  <pre><code>&lt;div class=&quot;alert&quot;&gt;
  &lt;strong&gt;Pro Tip:&lt;/strong&gt; Try Hitting Refresh!
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--info&quot;&gt;
  &lt;strong&gt;Pro Tip:&lt;/strong&gt; Try Hitting Refresh!
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--success&quot;&gt;
  &lt;strong&gt;Success!&lt;/strong&gt; Data Saved.
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--warning&quot;&gt;
  &lt;strong&gt;Warning!&lt;/strong&gt; Data Storage Limited.
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;

&lt;div class=&quot;alert alert--danger&quot;&gt;
  &lt;strong&gt;Danger!&lt;/strong&gt; Something went horribly wrong. Application will self destruct in 1min...
  &lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;&amp;times;&lt;/a&gt;
&lt;/div&gt;</code></pre>
<br>
@endsection
