# Contributing to Metaphor

Looking to contribute something to Metaphor? **Here's how you can help.**

We love making super awesome stuff, but even more we like to empower people to make changes on their own. Feel free to fork and improve Metaphor.
Please take a moment to review this document in order to make the contribution process easy and effective for everyone involved.

Following these guidelines helps to communicate that you respect the time of the developers managing and developing this open source project. In return, they should reciprocate that respect in addressing your issue or assessing patches and features.

## Feature Requests

Feature requests are welcome. But take a moment to find out whether your idea fits within the scope and aims of the project. It's up to *you* to make a strong case to convince the project's developers of the merits of any new features. Please provide as much detail and context as possible.

## Github Workflow

We leverage the Github Workflow when building out Metaphor. To learn more about this process take a look at [Understanding the GitHub Flow](https://guides.github.com/introduction/flow/) by Github.

## Product Versioning

Given a version number MAJOR.MINOR.PATCH, increment the:

MAJOR version when you make incompatible API changes,
MINOR version when you add functionality in a backwards-compatible manner, and
PATCH version when you make backwards-compatible bug fixes.
Additional labels for pre-release and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.

For more information on versioning visit [Semantic Versionings](http://semver.org) website.

## Issue Tracking & Task Management

We use Githubs default issue tracking system to manage enhancements, bugs, and new feature requests. The issue tracker also allows us to assign/delegate contributors to a task. To learn more about this process take a look at [Githubs Mastering Issues Guide](https://guides.github.com/features/issues/).


## Code guidelines

### HTML

[Adhere to the Code Guide.](http://codeguide.co/#html)

- Use tags and elements appropriate for an HTML5 doctype (e.g., self-closing tags).
- Use CDNs and HTTPS for third-party JS when possible. We don't use protocol-relative URLs in this case because they break when viewing the page locally via `file://`.
- Use [WAI-ARIA](https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA) attributes in documentation examples to promote accessibility.

### CSS

[Adhere to the Code Guide.](http://codeguide.co/#css)

- When feasible, default color palettes should comply with [WCAG color contrast guidelines](http://www.w3.org/TR/WCAG20/#visual-audio-contrast).
- Except in rare cases, don't remove default `:focus` styles (via e.g. `outline: none;`) without providing alternative styles. See [this A11Y Project post](http://a11yproject.com/posts/never-remove-css-outlines/) for more details.
