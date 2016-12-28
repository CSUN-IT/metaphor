@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Pagination')
@section('body')
  <h2 class="type--header type--thin">Pagination</h2>

  <ul class="pagination">
    <li class="disabled"><span>«</span></li>
    <li class="active"><span>1</span></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li class="disabled"><span>...</span></li>
    <li><a href="">20</a></li>
    <li><a href="#">21</a></li>
    <li><a href="#" rel="next">»</a></li>
  </ul>
<pre><code>&lt;ul class=&quot;pagination&quot;&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;span&gt;«&lt;/span&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;span&gt;1&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;span&gt;...&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;&quot;&gt;20&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;21&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot; rel=&quot;next&quot;&gt;»&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre><br>

        <br>
@endsection
