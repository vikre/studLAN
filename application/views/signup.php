<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="Description" content="Basic Gray">
    <meta name="author" content="Linn Vikre">
    <meta name="Copyright" content="Copyright (c) Linn Vikre, all rights reserved.">
	<title>The sky is the limit</title>
    <link rel="stylesheet" href="<?=base_url()?>stylesheet/default.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="javascripts/behavior.js"></script>
    <!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
	<header id="mast">
    	<h1>The sky is the limit</h1>
    </header>
    <nav id="global">
    	<ul>
        	<li><a href="<?=base_url()?>">Hjem</a></li>
            <li><a class="selected" href="<?=base_url() . 'index.php/signup'?>">Påmeldinger</a></li>
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
                    <h2>Påmeldinger</h2>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
        </section>
        <aside>
            <section>
                <header>
                    <h3>Categories</h3>
                </header>
                <nav id="categories">
                    <ul>
                       		<p> Outland</p>
							<p> Amentio</p>
							<p> Fretex</p>
							<p> Vektor</p>
							<p> Online</p>
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
