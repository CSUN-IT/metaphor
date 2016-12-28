@extends('_layouts.master_documentation')

@section('category','Intro')
@section('title', $title = 'Code Standards')
@section('body')
  <h2 id="code-guidelines" class="type--header type--thin">Code Standards</h2>
  <p>In order to ensure quality across products we recommend following the standards provided below for developing flexible, durable, and sustainable HTML and CSS.</p>

  <br>

  <h2 id="bem" class="type--header type--thin">BEM Syntax</h2>
  <p>All our components are built using the BEM syntax. BEM (Block, Element, Modifier), is a simple naming convention that makes front-end code easier to understand, easier to work with, and easier to scale.</p>
  <p>The BEM approach ensures that everyone who participates in the development of a website works with a single codebase and speaks the same language. Using proper naming convention will help future design changes and will ease the process of onboarding new team members to project.</p>
  <pre><code><div class="type--dark-gray">// <strong>Block:</strong> .alert
// <strong>Element:</strong> .alert__close
// <strong>Modifier:</strong> .alert--success</div>
&lt;div class=&quot;alert alert--success&quot;>&lt;strong&gt;Heads Up!&lt;/strong&gt; Alert Message...
&lt;a href=&quot;#&quot; class=&quot;alert__close&quot; data-alert-close&gt;×&lt;/a&gt;
&lt;/div&gt;</code></pre>
  <p><a href="https://en.bem.info/methodology/quick-start">For More information on BEM visit their documentation.</a></p>

  <br>

  <h2 id="html" class="type--header type--thin">HTML</h2>
  <p>When coding HTML make sure to abide strictly to the following <a target="_blank" href="http://codeguide.co/#html">Code Guide by @MDO</a>.</p>
  <ul>
    <li>Use tags and elements appropriate for an HTML5 doctype (e.g., self-closing tags).</li>
    <li>Use CDNs and HTTPS for third-party JS when possible. We don't use protocol-relative URLs in this case because they break when viewing the page locally via <code>file://</code>.</li>
    <li>Use <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA">WAI-ARIA</a> attributes in documentation examples to promote accessibility.</li>
  </ul>
  <br>

  <h2 id="css" class="type--header type--thin">CSS</h2>
  <p>When coding CSS make sure to abide strictly to the following <a target="_blank" href="http://codeguide.co/#css">Code Guide by @MDO</a>.</p>
  <ul>
    <li>When feasible, default color palettes should comply with <a target="_blank" href="http://www.w3.org/TR/WCAG20/#visual-audio-contrast">WCAG color contrast guidelines</a>.</li>
    <li>Except in rare cases, don't remove default <code>:focus</code> styles (via e.g. <code>outline: none;</code>) without providing alternative styles. See <a target="_blank" href="http://a11yproject.com/posts/never-remove-css-outlines/">this A11Y Project post</a> for more details.</li>
    <li>For additional information on accessibility visit our <a href="accessibility.html">docs on accessibility</a>.</li>
  </ul>
  <br>
@endsection
