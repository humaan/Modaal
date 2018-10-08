<img src="http://humaan.com/modaal/demo/social-share-modaal.png" />

***

- Version 0.4.4
- Requires jQuery 1.11.2 or higher (v2 not tested, v3 works but not extensively stress tested).
- Built by [Humaan](http://www.humaan.com)

***

# Modaal
Modaal is a WCAG 2.0 Level AA accessible modal window plugin.


## Demos
[View Modaal Demos](http://humaan.com/modaal)


# Another modal plugin? why?
It's hard to find a plugin with the right mix of quality, flexibility and accessibility. We thought it would be interesting to develop something that would work in a variety of projects, furthering the cause for an accessible web.

***

## 1. Getting Setup

#### 1.1. Installation

- [Download ZIP](https://github.com/humaan/Modaal/archive/master.zip)
- First, copy and paste `js/modaal.min.js` in your project, and link to it before the closing `</body>` element.
- Next, you'll need to copy and paste the plugin's css into your project. We include both a SASS file and CSS file for flexibility.
- Lastly, link to your new `modaal.css` file before the closing `</head>` element.

Note: This plugin requires your website or application already runs a copy of [jQuery](http://jquery.com/), version 1.11.2 or higher. Currently version 2 has not been tested. Version 3 works but has not been stress tested for bugs/issues.


#### 1.2. Installation with Package Managers

Modaal is now setup and ready to be used with [Bower](https://bower.io/) and [NPM](https://www.npmjs.com/package/modaal) and can be installed using the following commands.

```shell
bower install  modaal

npm install  modaal
```

#### 1.3 Installation with CDN

Modaal is now setup and ready to be used with CDN [JSDelivr](http://www.jsdelivr.com/projects/modaal) [![jsDelivr Hits](https://data.jsdelivr.com/v1/package/npm/modaal/badge)](https://www.jsdelivr.com/package/npm/modaal)


#### 1.4. The Basics

Out of the box Modaal is setup to work using inline content using as little customisation as possible. The first thing you'll require is a link to trigger the modal window. It's recommended that your `href` attribute targets a unique ID for a hidden element on the page containing your modal content. Like so:

```html
<a href="#inline" class="inline">Show</a>
<div id="inline" style="display:none;">
	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
</div>
```
```js
$('.inline').modaal();
```

If you would prefer your trigger element is _not_ an `<a href="#">`, you can define a `content_source` value like so:

```html
<button class="inline">Show</button>
<div id="inline" style="display:none;">
	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
</div>
```
```js
$('.inline').modaal({
	content_source: '#inline'
});
```


## 2. Configuration

#### 2.1. Practical Example
```js
$('.my-link').modaal({
	type: 'ajax',
	loading_content: 'Loading content, please wait.'
});
```

#### 2.2. Configuration Options
key | type | default | values | notes
----|------|---------|--------|-------
type|`string`|`inline`|`ajax`<br /> `inline`<br /> `image`<br /> `iframe`<br /> `confirm`<br /> `video`<br /> `instagram`|
content_source|`string`|null||Accepts a string value for your target element, such as '#my-content'. This allows for when trigger element is an `<a href="#">` link. Not to be confused with the already existing `source` event.
animation|`string`|`fade`|`fade`, `none`|
animation_speed|`integer`|`300`||Animation speed is the duration it takes to reveal the Modaal window once triggered. It's important to note, that if you change this, you must also change the `after_callback_delay` below so that callback events sync up. This will be overwritten and set to `0` if `type` is `none`.
after_callback_delay|`integer`|`350`||Specify a delay value for the after open callbacks. This is necessary because with the bundled animations have a set duration in the bundled CSS. Specify a delay of the same amount as the animation duration in so more accurately fire the after open/close callbacks. Defaults 350, does not apply if animation is 'none', after open callbacks are dispatched immediately
is_locked|`boolean`|`false`|`true`<br /> `false`|Set this to `true` to disable closing the modal via keypress or by clicking the close or background. Beware that if `type` is `confirm` there will be no interface to dismiss the modal. If `is_locked` is `true`, you'd have to programmatically arrange to dismiss the modal. Confirm modals are always locked regardless of this option.
hide_close|`boolean`|`false`|`true`<br /> `false`|Set this to `true` to hide the close modal button. Key press and overlay click will still close the modal. This method is best used when you want to put a custom close button inside the modal container space.
background|`string`|`#000`||Sets the background overlay color
overlay_opacity|`float`|`0.8`||Sets the background overlay transparency
overlay_close|`boolean`|`true`|`true`<br /> `false`|Controls whether the overlay background can be clicked to close.
accessible_title|`string`|`Dialog Window`||Set the `aria-label` attribute value used for Accessibility purposes.
start_open|`boolean`|`false`|`true`<br /> `false`|Set this to `true` if you want the Modaal window to launch immediately on load.
fullscreen|`boolean`|`false`|`true`<br /> `false`|Set this to `true` to make the Modaal fill the entire screen, false will default to own width/height attributes.
custom_class|`string`|`''`||Fill in this string with a custom class that will be applied to the outer most modal wrapper.
background_scroll|`boolean`|`false`|`true`<br /> `false`|Set this to` true` to enable the page to scroll behind the open modal
should_open|`boolean`<br />`function`|`true`||Set to `false` or make the closure return `false` to prevent the modal from opening 
close_text|`string`|`Close`||String for close button text. Available for localisation and alternative languages to be used.
close_aria_label|`string`|`Close (Press escape to close)`||String for close button aria-label attribute (value that screen readers will read out). Available for localisation and alternative languages to be used.
width|`integer`|null||Set the desired width of the modal.
height|`integer`|null||Set the desired height of the modal.
gallery_active_class|`string`|`gallery_active_item`||Active class applied to the currently active image or image slide in a gallery
outer_controls|`boolean`|`false`|`true`<br /> `false`|Set to true to put the next/prev controls outside the Modaal wrapper, at the edges of the browser window.
confirm_button_text|`string`|`Confirm`||Text on the confirm button.
confirm_cancel_button_text|`string`|`Cancel`||Text on the confirm modal cancel button.
confirm_title|`string`|`Confirm Title`||Title for confirm modal. Default
confirm_content|`string`|`<p>This is the default confirm dialog content. Replace me through the options</p>`||HTML content for confirm message
loading_content|`string`|`Loading &hellip;`||HTML content for loading message.
loading_class|`string`|`is_loading`||Class name to be applied while content is loaded via AJAX.
ajax_error_class|`string`|`modaal-error`||Class name to be applied when content has failed to load. Default is ''
instagram_id|`string`|`null`||Unique photo ID for an Instagram photo.

#### 2.3. Inline Attribute Configuration
Modaal has been developed to support common jQuery configuration options, but in an effort to extend functionality and widen its usage we've developed support for inline `data-option-name` attribute support.

To enable this, the Modaal trigger link must have a class of `modaal`, then you can add attributes to the link as needed like so:

```html
<a href="#inline" data-modaal-type="inline" data-modaal-animation="fade" class="modaal">Show</a>
```

Or for non `<a href="#">` elements:

```html
<button data-modaal-content-source="#inline" data-modaal-type="inline" data-modaal-animation="fade" class="modaal">Show</button>
```

It's important to note, that configuration options that contain an underscore (`_`) in them need to be replaced with a hyphen (`-`) in it's respective html attribute. For example, `overlay_opacity` configuration would read `data-overlay-opacity="0.8"`.


#### 2.4. Configuration Events
event | params | notes
------|--------|-------
before_open|`event`|Executed before the modaal has revealed
after_open|`modal_wrapper`|Executed once the duration for Option `after_callback_delay` has expired after the open method is called.
before_close|`modal_wrapper`|Executed once the Modaal has been instructed to close.
after_close||Executed once the the duration for `after_callback_delay` has expired after the close method is called.
before_image_change|`current_item`<br /> `incoming_item`|Executed before the image changes in a gallery Modaal.
after_image_change|`current_item`| Executed after the image has changed in a gallery Modaal.
confirm_callback|`lastFocus`|Executed when the confirm button is pressed as opposed to cancel.
confirm_cancel_callback|`lastFocus`|Executed when the cancel button is pressed as opposed to confirm.
source||Callback function executed on the default source, it is intended to transform the source (href in an AJAX modal or iframe). The function passes in the triggering element as well as the default source depending of the modal type. The default output of the function is an untransformed default source.
ajax_success|`target`|Callback for when AJAX content is loaded in


###### 2.4.1 Working With Events
There are two approaches to using events. The first is to call the entire `function() { }` in where the event configuration is set as seen below in `before_open`, and the second is to reference only the JS function name where the rest of the action occurs, as seen below in `after_open`.
```js
$('.my-link').modaal({
	before_open: function() {
		alert('Before open');
	},
	after_open: myFunction
});

function myFunction() {
	alert('After open');
}
```


## 3. Methods


#### 3.1. Programatically Creating Modaals
To initialise a programatically created Modaal, but not open, it can been called like any other doc ready instance, with 
```js
$('.my-link').modaal();
```

Or with any options as available:
```js
$('.my-link').modaal({
	type: 'ajax',
	loading_content: 'Loading content, please wait.'
});
```


#### 3.2. Programatically Open a Modaal
For any modaal instance that has already been initialised, it can be triggered to open with
```js
$('.my-link').modaal('open');
```

If the modaal has been programatically created and needs to open straight away, the following approach can be used to initialise _and_ open immediately:
```js
$('.my-link').modaal({ start_open: true });
```
This approach allows you to define other options that may be required as well as open immediately once it's ready.


#### 3.3. Programatically Close a Modaal
Currently Modaal only supports a close method which can be called like so.
```js
$('.my-link').modaal('close');
```
Based on this example, we know we've already established (and opened) the modal associated to the `.my-link` class, so to close we use the same selector with a string of `close` instead of options;



## 4. Tips & Tricks

#### 4.1. Avoiding Conflicts
Through development, we've worked hard to ensure no conflicts will occur with any existing code, however it's important to note some of the classes currently in use and best to avoid in your own stylesheet. These include:

`modaal-inline`, `modaal-ajax`, `modaal-image`, `modaal-confirm`, `modaal-iframe`, `modaal-video`, `modaal-wrapper`, `modaal-outer-wrapper`, `modaal-inner-wrapper`, `modaal-container`, `modaal-close`, `modaal-content`

#### 4.2. Customising the CSS
We wanted to provide users the chance to really extend on Modaal's base through customising the modal styles to meet their own project. We understand working with various projects and differing styles how important it is to tailor the aesthetics right down to even the most minute detail.

Provided in the distribution files are both un-minified css and SASS files to best integrate with your workflow. Within the SASS file you'll find a number of variables located at the top of the document for which you can tweak as desired.

It's our recommendation, should you wish to change any styling, that you minify your final output so as to save on overall page weight. The primary recommendation would be to run the `gulp dist` task which will minify the CSS (and JS if changes have been made), with another alternative to be found at [cssminifier.com](http://cssminifier.com/).

#### 4.3. Video file URLs
The Modaal video type has been tested thoroughly using both Vimeo and Youtube. For best outcome, please ensure the url format looks like the one of the following below. We transplant this URL into an iframe which then each service provider controls all the necessary play back from there.

###### 4.3.1. Youtube
`https://www.youtube.com/embed/cBJyo0tgLnw` where the ID at the end is your unique video id. This can be found by selecting 'Share' on a youtube video, then clicking on 'Embed'. You'll find this URL within the content presented.

###### 4.3.1. Vimeo
`https://player.vimeo.com/video/109626219` where the ID at the end is your unique video id. This can be found by selecting 'Share' on a vimeo video (commonly seen on the right hand side), and by selecting the content within 'Embed'. You'll find the URL necessary towards the very beginning of that embed code inside `src=""`.


## 5. Reporting issues and contributing code
#### 5.1. Reporting an issue

1. Please ensure the issue you're reporting is reproducible in a standalone environment, and not a result of something in your own build.
2. Use [jsFiddle](http://jsfiddle.net) or [jsBin](http://jsbin.com) to provide a test page showing issue.
3. In your issue, please indicate which *browser*, *operating system* and *os version* you're using.
4. Please also indicate plugin version.
5. If you have made any alterations to the plugin files (JS or CSS), please also list and include code samples.

*The more information you can provide regarding an issue, the better.*

#### 5.2. Contributing to the plugin
Thanks for your contribution! Please refer to the guidelines below.

1. Please ensure the issue you're reporting is reproducible in a standalone environment, and not a result of something in your own build.
2. Please ensure your pull request has a base branch of `develop` selected. pull request's with base `master` will not be accepted.
3. Please ensure the problem you're resolving has an open issue ticket.
4. Adhere to the current style and formatting of the plugin files, including CSS, SASS and JS.
5. Please ensure any changes are tested thoroughly in multiple browsers. We will do this, but if we locate bugs in the new code, the pull request will not be accepted.
6. Outline all changes in your commit message and also reference the issue ticket. For example "Contribution: Fix for issue #17 - Update to XYZ file to do make it do ABC"

#### 5.3. Development Setup
1. Ensure you're running [NodeJS](http://nodejs.org/)
2. Install Gulp by running `npm install --global gulp`. More details are available through the [Gulp documentation](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md).
3. Install the NPM dependencies by running `npm install`. (if this throws an error, try `sudo` the command).
4. The build can now be called by running `gulp watch` to watch for SASS updates.
5. When you're happy with the final output, please also fun `gulp dist` to minify and compress changes.


## License
Copyright © [Humaan](http://humaan.com)
Licensed under the MIT license.
