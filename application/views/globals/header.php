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
    <!-- Fix selected on active page. -->
    	<ul>
        	<li><a href="<?=base_url()?>">Hjem</a></li>
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
				<img src="<?=base_url()?>media/images/studlansoppen.png" alt ="master" />
        </div>
    </section>