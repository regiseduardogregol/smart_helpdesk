<!DOCTYPE HTML>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Connectivity 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20121129

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Smart Help Desk</title>
        
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
        <link href="default.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery-1.7.1.js" type="text/javascript"></script>
        <script src="tooltip_help/js/jquery.tipTip.js" type="text/javascript"></script>
        <link href="tooltip_help/css/tipTip.css" rel="stylesheet" type="text/css" media="all" ></script>
        <script src="tooltip_help/js/jquery.tipTip.minified.js" type="text/javascript" ></script>
        <script type="text/javascript">
            $(document).ready(function(){
                //TOOLTIP AJUDA
                
                $(".labelset").tipTip({
                    fadeIn: 50,
                    fadeOut: 50,
                    delay: 100		
                });
                $(".postopleft").tipTip({
                    fadeIn: 50,
                    fadeOut: 50,
                    delay: 100,
                    defaultPosition: "left"
                });	
                $(".postopbottom").tipTip({
                    fadeIn: 50,
                    fadeOut: 50,
                    delay: 100,
                    defaultPosition: "bottom"
                });	
                $(".postoptop").tipTip({
                    fadeIn: 50,
                    fadeOut: 50,
                    delay: 100,
                    defaultPosition: "top"
                });	
                $(".postopright").tipTip({
                    fadeIn: 50,
                    fadeOut: 50,
                    delay: 100,
                    defaultPosition: "right"
                });	 
            });
        </script>
        <!--[if IE 6]>
        <link href="default_ie6.css" rel="stylesheet" type="text/css" />
        <![endif]-->
    </head>
    <body>
        <header>
            <div id="header-wrapper">
                <div id="header">
                    <div id="logo">
                        <h1><a href="#">Smart Help Desk</a></h1>
                        <p>Easy, Simple and Painless</p>
                    </div>
                    <div id="menu">
                        <ul>
                            <li class="current_page_item"><a href="index.php" accesskey="1" title="">Inicio</a></li>
                            <li><a href="ourclients.php" accesskey="2" title="">Nossos Clientes</a></li>
                            <li><a href="about.php">Sobre</a></li>
                            <li><a href="contact.php">Trabalhe Conosco</a></li>
                            <li><a href="contact.php">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div id="banner">
                    <div class="img-border"> <a href="#"><img src="images/header-img.jpg" width="1120" height="500" alt="" /></a> </div>
                </div>
            </div>
        </header>
        <section>
            <div id="wrapper">
                <div id="page-wrapper">
                    <div id="page">
                        <div id="content">
                            <h2>Nossos clientes</h2>
                            <p>Veja alguns <i>cases</i> de sucesso</p>
                            <p><a href="http://www.trendmobile.net.br" target="_blank"><img src="images/trend.png" title="Trend Mobile Pesquisa e Desenvolvimento LTDA" alt="" width="200" height="200" class="alignleft labelset" /></a></p>
                            <p><a href="http://www.globo.com.br" target="_blank"><img src="images/globo.png" title="Rede Globp" alt="" width="200" height="200" class="alignleft labelset" /></a></p>
                            <p><a href="http://www.serviceweb.com.br" target="_blank"><img src="images/serviceweb.png" title="Serviceweb.com" alt="" width="200" height="200" class="alignleft labelset" /></a></p>
                            <p><a href="http://www.oi.com.br" target="_blank"><img src="images/oi.png" title="Oi" alt="" width="200" height="200" class="alignleft labelset" /></a></p>
                            <p><a href="http://www.facebook.com.br" target="_blank"><img src="images/facebook.png" title="Facebook Corporation" alt="" width="200" height="200" class="alignleft labelset" /></a></p>                                                       
                        </div>
                        <div id="sidebar">
                            <h2>Acesso Rápido</h2>
                            <ul class="style1">
                                <li class="first"><a href="index.php">Home</a></li>					
                                <li><a href="ourclients.php">Nossos Clientes</a></li>
                                <li><a href="about.php">Sobre</a></li>
                                <li><a href="contact.php">Trabalhe Conosco</a></li>
                                <li><a href="contact.php">Contato</a></li>
                                <li><a href="login.php">Acesso ao Smart Help Desk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-bg">
                <div id="footer-content" class="container">
                    <div id="column1">&nbsp;</div>
                    <div id="column2">
                        <h2>Links Recomendados</h2>
                        <ul class="style1">
                            <li class="first"><a href="http://www.google.com" target="_blank">Google</a></li>
                            <li><a href="http://www.yahoo.com" target="_blank">Yahoo</a></li>
                            <li><a href="http://www.bing.com" target="_blank">Bing</a></li>
                        </ul>
                    </div>
                    <div id="column3">
                        <h2>Social</h2>
                        <ul class="style1">
                            <li class="first"><a href="http://twitter.com">Twitter</a></li>
                            <li><a href="http://facebook.com">Facebook</a></li>
                            <li><a href="http://google.com">Google +</a></li>
                            <li><a href="http://instagram.com">Instagram</a></li>
                            <li><a href="feed.rss">RSS</a></li>
                        </ul>
                    </div>
                    <div id="column4">&nbsp;</div>
                </div>
            </div>
        </section>
        <footer>
            <div id="footer" class="container">
                <p>Copyright (c) 2012 Smart Help Desk. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a></p>
            </div>
        </footer>
    </body>
</html>
