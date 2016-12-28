@extends('_layouts.master_documentation')

@section('category','Components')
@section('title', $title = 'Nav')
@section('body')

          <h2 class="type--header type--thin">CSUN Nav</h2>
          <nav class="primary-nav primary-nav--cream">
            <div class="container">
              <div class="primary-nav__mobile">
                <div class="primary-nav__btn">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
              </div>
              <ul class="primary-nav__links">
                <li><a class="primary-nav__link active" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
              </ul>
            </div>
          </nav>
          <nav class="primary-nav">
            <div class="container">
              <div class="primary-nav__mobile">
                <div class="primary-nav__btn">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
              </div>
              <ul class="primary-nav__links">
                <li><a class="primary-nav__link active" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
              </ul>
            </div>
          </nav>
          <nav class="primary-nav primary-nav--black">
            <div class="container">
              <div class="primary-nav__mobile">
                <div class="primary-nav__btn">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="primary-nav__brand"><span class="sr-only">California State University, Northridge (CSUN)</span></div>
              </div>
              <ul class="primary-nav__links">
                <li><a class="primary-nav__link active" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
                <li><a class="primary-nav__link" href="#">Nav Link</a></li>
              </ul>
            </div>
          </nav>

          <br>

          <pre><code>&lt;nav class=&quot;primary-nav&quot;&gt;
  &lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;primary-nav__mobile&quot;&gt;
      &lt;div class=&quot;primary-nav__btn&quot;&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;primary-nav__brand&quot;&gt;&lt;span class=&quot;sr-only&quot;&gt;California State University, Northridge (CSUN)&lt;/span&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;primary-nav__links&quot;&gt;
      &lt;li&gt;&lt;a class=&quot;primary-nav__link active&quot; href=&quot;#&quot;&gt;Nav Link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;primary-nav__link&quot; href=&quot;#&quot;&gt;Nav Link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a class=&quot;primary-nav__link&quot; href=&quot;#&quot;&gt;Nav Link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/nav&gt;

<div class="type--dark-gray"><strong>// NAV MODIFIERS</strong>
.primary-nav--cream
.primary-nav--black
</div></code></pre>

        <br>

        <h2 class="type--header type--thin">Side Nav</h2>

        <div class="row">
          <div class="col-sm-6">
            <ul class="nav">
              <li class="nav__item nav__item--active">
                <a href="#" class="nav__link">Link #1</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #2</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #3</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #4</a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6">
            <ul class="nav">
              <li class="nav__item nav__item--active nav__item--fill">
                <a href="#" class="nav__link">Link #1</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #2</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #3</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Link #4</a>
              </li>
            </ul>
          </div>
        </div>

        <pre><code>&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav__item nav__item--active&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #1&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav__item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #2&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav__item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #3&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav__item&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;nav__link&quot;&gt;Link #4&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

<div class="type--dark-gray"><strong>// SIDE NAV MODIFIERS</strong>
.nav__item--active
.nav__item--fill
</div></code></pre>
@endsection
