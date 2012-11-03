<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Welcome to the BrickHouse</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/app.css">

	<script src="javascripts/foundation/modernizr.foundation.js"></script>

</head>
<body>

	<div class="row">
		<div class="twelve columns">
			<h2>Site Title</h2>
			<p>Site Slogan goes here.</p>

      <!-- main navigation -->
      <ul class="nav-bar">
        <li class="active"><a href="#">Nav Item 1</a></li>
        <li class="has-flyout">
          <a href="#">Nav Item 2</a>
          <a href="#" class="flyout-toggle"><span> </span></a>
          <ul class="flyout">
            <li><a href="#">Sub Nav Item 1</a></li>
            <li><a href="#">Sub Nav Item 2</a></li>
            <li><a href="#">Sub Nav 3</a></li>
            <li><a href="#">Sub Nav 4</a></li>
            <li><a href="#">Sub Nav Item 5</a></li>
          </ul>
        </li>
        <li class="has-flyout">
          <a href="#">Nav Item 3</a>
          <a href="#" class="flyout-toggle"><span> </span></a>
          <ul class="flyout">
            <li><a href="#">Sub Nav Item 1</a></li>
            <li><a href="#">Sub Nav Item 2</a></li>
          </ul>
        </li>
      </ul>
      
		</div>
	</div>
