<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="Description" content="Basic Gray">
    <meta name="author" content="Linn Vikre">
    <meta name="Copyright" content="Copyright (c) Linn Vikre, all rights reserved.">
	<title>studLAN</title>
    <link rel="stylesheet" href="<?=site_url()?>stylesheet/default.css">
    <link rel="icon" href="<?=site_url()?>media/images/favicon.ico" /> 
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="javascripts/behavior.js"></script>
    <!--[if IE]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
	<header id="mast">
        <img src="<?=base_url()?>media/images/studlanlogo.png" alt ="master" />
    </header>
    <nav id="global">
    <!-- Fix selected on active page. -->
    	<ul>
        	<li><a href="<?=base_url()?>">Hjem</a></li>
            <li><a href="<?=base_url() . 'signup'?>">Påmelding</a></li>
            <li><a href="<?=base_url() . 'compo'?>">Compoinformasjon</a></li>
            <li><a href="<?=base_url() . 'about'?>">Om oss</a></li>
        </ul>
    </nav>
    <section id="intro">
    	<header>
    		<h2>studLAN</h2>
        </header>
        <p>16. mars - 18. mars</p>
        <p>P15 @ NTNU Gløshaugen</p>
        <!-- <a href="<?=base_url() . 'signup'?>">Påmelding</a> -->
        <div id="photo">
            	<!--<h3>Photo</h3>-->
				<img src="<?=base_url()?>media/images/intro_mushroom.png" alt ="master" />
        </div>
    </section>