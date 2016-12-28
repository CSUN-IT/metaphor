@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Tags')
@section('body')
<h2 class="type--header type--thin">Tags</h2>
<div>
<span>Tag Cloud: </span>
<span class="tag tag--close">When</span>
<span class="tag tag--close">A</span>
<span class="tag tag--close">Problem</span>
<span class="tag tag--close">Comes</span>
<span class="tag tag--close">Along</span>
<span class="tag tag--close">You</span>
<span class="tag tag--close">Must</span>
<span class="tag tag--close">Whip It</span>
</div>
<div>
<span>Status: </span>
<a href="#" class="tag tag--success">Approved</a>
<a href="#" class="tag tag--warning">Pending</a>
<a href="#" class="tag tag--danger">Error</a>
</div>
<pre><code>&lt;a href=&quot;#&quot; class=&quot;tag&quot;&gt;Default&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;tag tag--success&quot;&gt;Approved&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;tag tag--warning&quot;&gt;Pending&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;tag tag--danger&quot;&gt;Error&lt;/a&gt;

<div class="type--dark-gray"><strong>// TAG MODIFIERS</strong>
<strong>Tag Actions:</strong>
.tag--close

<strong>Tag Colors:</strong>
.tag--success
.tag--warning
.tag--danger
</div></code></pre>
        <p><small><em><strong>Note:</strong> You can use <code>&lt;span&gt;</code> or <code>&lt;a&gt;</code> elements. The only difference is anchor tags include styling for cursors.</em></small></p>
        <br>
@endsection
