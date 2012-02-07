<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="Description" content="Basic Gray">
    <meta name="author" content="Linn Vikre">
    <meta name="Copyright" content="Copyright (c) Linn Vikre, all rights reserved.">
	<link rel="stylesheet1" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/stylesheet/default.css">
	<title>studLAN </title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="javascripts/behavior.js"></script>
    <!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
	<header id="mast">
    	<img src="/images/STUDLAN.png"> 
		<h1>studLAN<h1>
    </header>
    <nav id="global">
    	<ul>
        	<li><a class="selected" href="<?=base_url()?>">Hjem</a></li>
            <li><a href="<?=base_url() . 'index.php/signup'?>">Påmeldinger</a></li>
            <li><a href="<?=base_url() . 'index.php/compo'?>">Compoinformasjon</a></li>
            <li><a href="<?=base_url() . 'index.php/about'?>">Om oss</a></li>
        </ul>
    </nav>
    <section id="intro">
    	<header>
    		<h2>studLAN</h2>
        </header>
        <p>16. mars - 18. mars</p>
        <a href="/">Les mer</a>
        <div id="photo">
            	<!--<h3>Photo</h3>-->
				<img src="/images/studlansoppen.png" alt ="master" />
        </div>
    </section>
    <div id="main" class="clear">
        <section id="articles">
            <article class="blogPost">
                <header>
                    <h2>Article Title</h2>
                    <p>Posted on <time pubdate datetime="2012-02-05T23:31:45-09:00">Feb 5th 2012</time> by <a href="#">Linn Vikre</a> - <a href="#comments">3 comments</a></p>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
            <article class="blogPost">
                <header>
                    <h2>Article Title</h2>
						<p>Posted on <time pubdate datetime="2012-02-05T23:31:45-09:00">Feb 5th 2012</time> by <a href="#">Linn Vikre</a> - <a href="#comments">3 comments</a></p>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>
        <aside>
            <section>
                <header>
                    <h3>Sponsorer</h3>
                </header>
                <nav id="categories">
                    <ul>
                       
                    </ul>
                </nav>
            </section>

        </aside>
    </div>
    <footer>
    	<div class="clear">
            <section id="about">
                <header>
                    <h3>Om oss</h3>
                </header>
                <p>studLAN er en interessegruppe drevet av studenter tilhørende linjeforeningene Online og Nabla. Vi arrangerer to LAN på NTNU i løpet av et år. </p>
            </section>
            <section>
                <header>
                    <h3>Nyheter</h3>
                </header>
                <nav id="blogRoll">
                    <ul>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                        <li><a href="/">Page Link</a></li>
                    </ul>
                </nav>
            </section>
            <section>
                <header>
                    <h3>Menu</h3>
                </header>
                <nav id="siteMap">
                    <ul>
                        <li><a href="index.html">Hjem</a></li>
                        <li><a href="about.html">Påmelding</a></li>
                        <li><a href="services.html">Compoinformasjon</a></li>
                        <li><a href="contact.html">Om oss</a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </footer>
</body>
</html>
