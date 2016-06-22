<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<title>Modaal is a WCAG 2.0 Level AA accessible modal plugin</title>

	<!-- Demo Styles -->
	<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="demo/css/demo.css?t=1462179764" media="screen">

	<!-- Modaal Styles -->
	<link rel="stylesheet" href="source/css/modaal.css" media="screen">

	<!-- Made by Humaan http://humaan.com @wearehumaan -->

	<link rel="shortcut icon" href="demo/favicon.ico" type="image/x-icon">
	<link rel="icon" href="demo/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="demo/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="demo/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="demo/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="demo/apple-touch-icon-144x144.png">

	<meta name="description" content="Modaal - An accessible dialog window plugin for all humans by @wearehumaan"/>
	<meta name="robots" content="noodp"/>
	<link rel="canonical" href="http://www.humaan.com/modaal" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Modaal - A WCAG 2.0 Level AA accessible modal plugin by @wearehumaan" />
	<meta property="og:url" content="http://www.humaan.com/modaal/" />
	<meta property="og:site_name" content="Modaal: WCAG 2.0 Level AA accessible modal plugin" />
	<meta property="og:image" content="http://www.humaan.com/modaal/demo/social-share-modaal.png" />

	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:title" content="Modaal - A WCAG 2.0 Level AA accessible modal plugin by @wearehumaan"/>
	<meta name="twitter:site" content="@wearehumaan"/>
	<meta name="twitter:image" content="http://www.humaan.com/modaal/demo/social-share-modaal.png"/>
	<meta name="twitter:creator" content="@wearehumaan"/>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-22985555-46', 'humaan.com');
		ga('send', 'pageview');
	</script>

</head>
<body>

	<header class="modaal-header">

		<h1><?php include 'demo/modaal-logo.php' ?><span class="ui-hidden">Modaal</span></h1>
		<p>An accessible dialog window plugin for all humans.</p>
		<a href="https://github.com/humaan/Modaal" target="_blank" class="btn btn-download">Download from Github<?php /* <span><strong>19kb</strong></span>*/ ?></a>
		<a href="#inline-content" class="btn modaal main-example" data-modaal-type="inline">View Example</a>
		<div class="version" aria-label="Version 0.3.0">v0.3.0</div>
		<a href="http://www.humaan.com" target="_blank" class="humaan-project">A Humaan project</a>

		<div class="share">
			<a href="javascript:void 0" class="social-share share-fb" onclick="return addthis_sendto('facebook');"><span class="ui-hidden">Share on Facebook</span></a>
			<a href="javascript:void 0" class="social-share share-tw" onclick="return addthis_sendto('twitter');"><span class="ui-hidden">Share on Twitter</span></a>
			<a href="javascript:void 0" class="social-share share-other" onclick="return addthis_sendto('more');"><span class="ui-hidden">Share this page</span></a>
		</div>

		<a href="#overview-copy" class="scroll-trigger">
			<div class="scroll-arrow"></div>
			<span class="ui-hidden">Scroll to content</span>
		</a>

	</header>
	<section class="modaal-examples">

		<div class="overview-copy" id="overview-copy">
			<div class="container">
				<p>Modaal is a WCAG 2.0 Level AA accessible modal window plugin.</p>

				<h2 class="highlight">Why another modal plugin?</h2>
				<p>It's hard to find a plugin with the right mix of quality, flexibility and accessibility. We thought it would be interesting to develop something that would work in a variety of projects, furthering the cause for an accessible web.</p>
			</div>
		</div>
		<div class="container">

			<div class="overview">
				<h2 class="highlight">Accessibility Features</h2>
				<ul>
					<li>WCAG 2.0 Level AA Support</li>
					<li>Saving page focusing state on modal open</li>
					<li>Switching focus state to new content on modal open</li>
					<li>Switch focus back to original focus state on modal close (eg. button clicked)</li>
					<li>Maintained tab scope to modal content</li>
					<li>ARIA support and customisation for modal title</li>
					<li>Keyboard control for closing an open modal</li>
					<li>Keyboard control for gallery next and previous</li>
					<li>Default color contrast support optimised for readability</li>
					<li>Accessible <span class="inline-code">&lt;button&gt;</span> close element with ARIA attribute</li>
					<li>Optimised for assistive technologies and screen readers</li>
				</ul>

				<h2 class="highlight">Other Features</h2>
				<ul>
					<li>Fully responsive, scaling with browser width.</li>
					<li>Modal types include inline content, ajax, image and image gallery, iframe, confirmation and Instagram photo.</li>
					<li>Customisable CSS with SASS options</li>
					<li>Inline attribute configuration support</li>
					<li>Full-screen/viewport mode</li>
					<li>Flexible close options and methods</li>
					<li>Callback events for before and after open and close</li>
					<li>Callback events for before and after image change in gallery.</li>
				</ul>

				<div class="clearboth"></div>

			</div>
		</div>

		<div class="examples-wrap-outer">
		<div class="examples-wrap">
			<div class="container">

				<h2 class="highlight">Modaal Examples</h2>

				<div class="modaal-example example-no-brdr">
					<h2>Inline Attribute Configuration</h2>
					<p>Modaal has been developed to support common jQuery configuration options, but in an effort to extend functionality and widen it's usage we've developed support for inline <span class="inline-code">data-option-name</span> attribute support.</p>
					<p>To enable this, the Modaal trigger link must have a class of <span class="inline-code">modaal</span>, then you can add attributes to the link as needed like so:</p>

					<pre><strong>HTML</strong>&lt;a href="#inline" <span>data-modaal-type</span>="inline" <span>data-modaal-animation</span>="fade" class="modaal"&gt;Show&lt;/a&gt;</pre>

					<p>It's important to note, that configuration options that contain an underscore (<span class="inline-code">_</span>) in them need to be replaced with a hyphen (<span class="inline-code">-</span>), and prefixes with <span class="inline-code">data-modaal-</span> in it's respective html attribute.	For example, <span class="inline-code">overlay_opacity</span> configuration would read <span class="inline-code">data-modaal-overlay-opacity="0.8"</span>.</p>

					<a href="#inline-content" data-modaal-type="inline" data-modaal-animation="fade" data-modaal-accessible-title="Inline Dialog Window" class="btn modaal">Show <span class="ui-hidden">Inline</span> Modaal</a>
				</div><!-- .modaal-example -->

				<div class="modaal-example">
					<h2>Inline Content</h2>
					<p>Fetches content from an existing element (using an ID) in the page and loads it into the content.</p>

					<pre><strong>HTML</strong>&lt;a href="#inline" class="inline"&gt;Show&lt;/a&gt;
&lt;div id="inline"&gt;
		Inline content goes here...
&lt;/div&gt;</pre>
					<pre><strong>JS</strong>$(".inline").modaal();</pre>

					<a href="#inline-content" class="btn modaal-inline-content">Show <span class="ui-hidden">Inline</span> Modaal</a>
					<div id="inline-content" class="hidden">
						<h2>Inline Modal Content</h2>
						<p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, <a href="http://google.com" target="_blank">porttitor eu</a>, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
						<p>Quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. <a href="http://humaan.com" target="_blank">Cras ultricies mi eu turpis</a> hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing.</p>
						<form action="/" class="demo-form">
							<p><label for="name">Input Label</label><br />
								<input name="name" id="name" autocomplete="on"></p>
							<p><input type="checkbox" name="fieldInput1" id="fieldInput1"><label for="fieldInput1">Label</label></p>
							<p><input type="checkbox" name="fieldInput2" id="fieldInput2"><label for="fieldInput2">Label 2</label></p>
							<p><input type="checkbox" name="fieldInput3" id="fieldInput3"><label for="fieldInput3">Label 3</label></p>
							<span style="display:none;"><button type="submit">Submit</button></span>
						</form>
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. <a href="http://www.nytimes.com/" target="_blank">Phasellus consectetuer vestibulum elit.</a> Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat augue.</p>
					</div>
				</div><!-- .modaal-example -->

				<div class="modaal-example">
					<h2>Fullscreen Mode</h2>
					<p>Fullscreen mode will open the Modaal window to fill the entire viewport. If the content exceeds the height of the window, the dialog will scroll vertically to allow access to all content.</p>
					<p>Fullscreen mode works best with inline and ajax based modals only. Currently no support for fullscreen images.</p>

					<pre><strong>JS</strong>$('.fullscreen').modaal({
    fullscreen: true
});</pre>

					<a href="#inline-content" class="btn fullscreen">Show <span class="ui-hidden">Fullscreen</span> Modaal</a>
				</div><!-- .modaal-example -->

				<div class="modaal-example">
					<h2>Ajax</h2>
					<p>Loads content via ajax into the Modaal window based on the link href attribute.</p>

					<pre><strong>HTML</strong>&lt;a href="content.php" class="modaal-ajax"&gt;Show&lt;/a&gt;</pre>
					<pre><strong>JS</strong>$('.modaal-ajax').modaal({
    type: 'ajax'
});</pre>

					<a href="demo/ajax-content.php" class="btn modaal-ajax">Show <span class="ui-hidden">Ajax</span> Modaal</a>
				</div><!-- .modaal-example -->


				<div class="modaal-example">
					<h2>Single Image Modal</h2>
					<p>Opens a single image.</p>

					<pre><strong>HTML</strong>&lt;a href="path/to/image.jpg" class="image"&gt;Show&lt;/a&gt;</pre>
					<pre><strong>JS</strong>$('.image').modaal({
    type: 'image'
});</pre>

					<a href="demo/img/temp/gallery-1.jpg" class="modaal-image gallery-thumb"><span class="ui-hidden">Show Single Image</span><img src="demo/img/temp/gallery-thumb-1.jpg" alt="Thumbnail for single image"></a>
				</div><!-- .modaal-example -->

				<div class="modaal-example">
					<h2>Image Gallery</h2>
					<p>Opens a series of images linked by a <span class="inline-code">rel="<span>group-name</span>"</span> attribute. Replace <span class="inline-code"><span>group-name</span></span> with what your gallery group identifier.</p>

					<pre><strong>HTML</strong>&lt;a href="path/to/image-1.jpg" rel="gallery" class="gallery"&gt;Show&lt;/a&gt;
&lt;a href="path/to/image-2.jpg" rel="gallery" class="gallery"&gt;Show&lt;/a&gt;
&lt;a href="path/to/image-3.jpg" rel="gallery" class="gallery"&gt;Show&lt;/a&gt;</pre>
					<pre><strong>JS</strong>$('.gallery').modaal({
    type: 'image'
});</pre>

					<a href="demo/img/temp/gallery-1.jpg" rel="gallery" class="modaal-image gallery-thumb" data-modaal-desc="Test image for modal gallery"><span class="ui-hidden">Show Gallery Image 1</span><img src="demo/img/temp/gallery-thumb-1.jpg" alt="Thumbnail for Gallery Image 1"></a>
					<a href="demo/img/temp/gallery-2.jpg" rel="gallery" class="modaal-image gallery-thumb" data-modaal-desc="Another description"><span class="ui-hidden">Show Gallery Image 2</span><img src="demo/img/temp/gallery-thumb-2.jpg" alt="Thumbnail for Gallery Image 2"></a>
					<a href="demo/img/temp/gallery-3.jpg" rel="gallery" class="modaal-image gallery-thumb"><span class="ui-hidden">Show Gallery Image 3</span><img src="demo/img/temp/gallery-thumb-3.jpg" alt="Thumbnail for Gallery Image 3"></a>
				</div><!-- .modaal-example -->


				<div class="modaal-example">
					<h2>Video</h2>
					<p>Loads in an embedded video as defined in the link href attribute, into an iframe. Currently tested formats include Youtube and Vimeo. Other that support iframe embedding should also work.</p>

					<pre><strong>HTML</strong>&lt;a href="https://player.vimeo.com/video/142216434" class="video"&gt;Show&lt;/a&gt;</pre>
					<pre><strong>JS</strong>$('.video').modaal({
    type: 'video'
});</pre>
					<a href="https://player.vimeo.com/video/142216434?color=ffffff&title=0&byline=0&portrait=0" class="btn modaal-video">Show <span class="ui-hidden">Video</span> Modaal</a>


					<h3 class="highlight">Video Modaal Tips</h3>
					<p>The Modaal video type has been tested thoroughly using both Vimeo and Youtube. For best outcome, please ensure the url format looks like the one of the following below. We transplant this URL into an iframe which then each service provider controls all the necessary play back from there.</p>
					<p><span class="inline-code start-row">https://www.youtube.com/embed/cBJyo0tgLnw</span> where the ID at the end is your unique video id. This can be found by selecting 'Share' on a youtube video, then clicking on 'Embed'. You'll find this URL within the content presented.</p>
					<p><span class="inline-code start-row">https://player.vimeo.com/video/109626219</span> where the ID at the end is your unique video id. This can be found by selecting 'Share' on a vimeo video (commonly seen on the right hand side), and by selecting the content within 'Embed'. You'll find the URL necessary towards the very beginning of that embed code inside <span class="inline-code">src=""</span>.</p>

				</div><!-- .modaal-example -->

				<div class="modaal-example">
					<h2>iFrame</h2>
					<p>Loads a url as defined in the link href attribute, into an iframe. This requires a set width and height for the Modaal to also be defined.</p>

					<pre><strong>HTML</strong>&lt;a href="http://humaan.com" class="iframe"&gt;Show&lt;/a&gt;</pre>
					<pre><strong>JS</strong>$('.iframe').modaal({
    type: 'iframe',
    width: 700,
    height: 500
});</pre>
					<a href="http://humaan.com" class="btn modaal-iframe">Show <span class="ui-hidden">iFrame</span> Modaal</a>
				</div><!-- .modaal-example -->


				<div class="modaal-example">
					<h2>Confirmation Modaal</h2>
					<p>Modaal window to prompt the user to Confirm or Cancel a particular action. Content can be pushed through including callback events as necessary. By default once open, it can not be closed until an action has been selected (such as Confirm/Cancel).</p>

					<pre><strong>HTML</strong>&lt;a href="javascript:void(0);" class="confirm"&gt;Show&lt;/a&gt;</pre>
					<pre><strong>JS</strong>$('.confirm').modaal({
    type: 'confirm',
    confirm_button_text: 'Confirm',
    confirm_cancel_button_text: 'Cancel',
    confirm_title: 'Confirm Action XYZ',
    confirm_content: '&lt;p&gt;Maecenas sed diam eget risus varius blandit sit amet non magna.&lt;/p&gt;',
    confirm_callback: function() {
        alert('you have confirmed this action');
    }
});</pre>

					<a href="javascript:void(0);" class="btn modaal-confirm">Show <span class="ui-hidden">Confirm</span> Modaal</a>
				</div><!-- .modaal-example -->

				<div class="modaal-example">
					<h2>Instagram</h2>
					<p>Loads an embedded Instagram photo into a Modaal window. In the example below we're using inline <span class="inline-code">data-modaal-</span> attributes to set the type and unique photo ID.</p>

					<pre><strong>HTML</strong>&lt;a href="#ig" class="modaal" data-modaal-type="instagram" data-modaal-instagram-id="BAGj2JqHFV6"&gt;Show&lt;/a&gt;</pre>

					<a href="javascript:void 0" class="btn modaal" data-modaal-type="instagram" data-modaal-instagram-id="BAGj2JqHFV6">Show <span class="ui-hidden">Instagram</span> Modaal</a>

				</div><!-- .modaal-example -->


				<div class="clearboth"></div>
			</div>

		</div>
		</div>
	</section>

	<section class="container page-wrap">
		<a href="https://github.com/humaan/Modaal" target="_blank" class="btn btn-download">Download from Github</a>
	</section>

	<!-- Fixed Header - Revealed on Scroll -->
	<div class="modaal-fixed-header">
		<div class="fixed-logo"><?php include 'demo/modaal-logo.php' ?><span class="ui-hidden">Logo for Modaal</span></div>
		<a href="https://github.com/humaan/Modaal" target="_blank" class="btn">Download from Github</a>
	</div>


	<!-- jQuery CDN -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script src="demo/js/demo.js"></script>

	<!-- Modaal -->
	<script src="source/js/modaal.js" type="text/javascript"></script>
	<script type="text/javascript">

		// Standard Modal
		$('.modaal-inline-content').modaal({
			type: 'inline',
			accessible_title: 'Modal title',
			before_open: function() {
				//console.log('log before open');
			},
			before_close: function() {
				//console.log('log before close');
			},
			after_open: function() {
				//console.log('log after open');
			},
			after_close: function() {
				//console.log('log after close');
			}
		});

		// Ajax Modal
		$('.modaal-ajax').modaal({
			type: 'ajax'
		});

		// Confirm Modal
		// this will stay locked by default until actioned (ok/cancel)
		$('.modaal-confirm').modaal({
			type: 'confirm',
			accessible_title: 'Confirm modal title',
			confirm_button_text: 'Confirm',
			confirm_title: 'Confirm Title',
			confirm_content: '<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>',
			confirm_callback: function() {
				//console.log('log callback once confirmed');
			}
		});

		// Single Image Modal
		$('.modaal-image').modaal({
			type: 'image',
			before_image_change: function( current, incoming ) {
				//console.log('change image from', current, incoming );
			},
			after_image_change: function( current ) {
				//console.log('image has changed to', current );
			}
		});

		// iFrame Modal
		$('.modaal-iframe').modaal({
			type: 'iframe',
			width: 1000,
			height: 800,
			accessible_title: 'iFrame modal title'
		});

		// Video Modal
		$('.modaal-video').modaal({
			type: 'video',
			accessible_title: 'Video modal title'
		});

		// Video Modal
		$('.fullscreen').modaal({
			fullscreen: true
		});

	</script>


	<!-- Add This -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-569c37cac02beb89" async="async"></script>

</body>
</html>
