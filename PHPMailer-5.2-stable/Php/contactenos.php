<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/Validaciones.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

  

<?php
        $result="";
        if(isset($_POST['submit'])){
            
            include 'PHPMailerAutoload.php';
            include 'class.smtp.php';
            include 'class.phpmailer.php';
            
            //echo '<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">';

            

        
                $mail = new PHPMailer;
            $mail -> isSMTP();
            $mail -> Host='smtp.gmail.com';
            $mail -> Port=587;
            $mail ->SMTPAuth=true;
            $mail ->SMTPSecure='tls';
            $mail ->Username='amatertester@gmail.com';
            $mail ->Password='Caldas1998.';

            $mail->setFrom($_POST['email'],$_POST['firstname']);
            $mail->addAddress('amatertester@gmail.com');
            $mail->addReplyTo($_POST['email'],$_POST['firstname']);
            

            //mensaje a enviar
            
            $mail->isHTML(true);
            $mail->Subject='Enviado por:'.$_POST['firstname'];
            $mail->Body='<h1 align center>Nombre: '.$_POST['firstname'].
            '<br>Email: '.$_POST['email'].'<br>Celular: '.
            $_POST['mobile'].'<br>Tipo: '.$_POST['tipo'].
            '<br>Mensaje: '.$_POST['msj'].'</h1>';

            if(!$mail->send()){
                $result="algo esta mal, intentelo nuevamente";
            }
            else{
                $result="Gracias ".$_POST['firstname']." por contactarnos, espera nuestro mensaje";
                
            }

        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Triptolearn Vive, Viaja y Aprende</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="js/Validaciones.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

</head>
<body>
    
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- social icon-->
                <div class="col-sm-5">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="https://www.facebook.com/triptolearn.enjoylearning.1"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="https://www.instagram.com/triptolearn/"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="https://www.youtube.com/channel/UC-RuyFaWv7STK99HfDa9VJQ"><i class="fa fa-youtube"></i></a></li>
                        <!-- <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>  -->
                    </ul>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <ul class="info">
                            <li><i class="icon-info-blocks material-icons">question_answer</i><span>triptolearn1@gmail.com</span></li>
                            <li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>(+57) 3016599114</span></li>
                        </ul>
                        <div class="clr"></div>
                    </div>
                </div>
                <!-- info -->

            </div>
        </div>
    </header>
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><i class="icon-info-blocks material-icons">language</i>triptolearn</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="index.html">Inicio</a></li>
                        <li><a class="waves-effect waves-dark" href="Malta.html">Malta</a></li>
                        <li><a class="waves-effect waves-dark" href="Cursos.html">Cursos</a></li>
                        <li><a class="waves-effect waves-dark" href="Acomodaciones.html">Acomodaciones</a></li>
                        <li><a class="waves-effect waves-dark" href="QuienesSomos.html">Quienes Somos</a></li>
                        <li class="active"><a class="waves-effect waves-dark" href="contactenos.html">Contactenos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Contactanos</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">      
              <!--FORMULARIO-->               
              <div class="col-sm-12" style="text-align: center;">
                <div class="about-logo">
                    <h3><span class="color">¡SOLICITA YA TU COTIZACIÓN, QUE ESPERAS!</span></h3>
                    
                </div>
                <div class="col-sm-12" style="text-align: left">
                    <div class="about-logo">
                      
                        <p>Danos el placer de ayudarte en el camino aprender un nuevo idioma.</p>
                        <p>Solicita ya tu cotizacion de forma gratuita y nos pondremos en contacto contigo.</p>
                    </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="row">
                    <div class="col-md-12">
                        <p> </p>
                        <!-- FORMULARIO -->
                         
                        <form name="sentMessage" id="contactForm" method="POST" action="">
                             <!-- NOMBRES -->                         
                               
                                <div class="col-lg-6">
                                    <div class="form-group">                                       
                                        <input id="name" name="firstname" class="form-control" type="text" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="email" name="email" class="form-control required email" type="email" placeholder="E-mail"  onchange="javascript:document.getElementById('email').value = this.value;" required>                                    
                                    </div>
                                </div>                                                       
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="mobile" name="mobile" class="form-control" type="text" placeholder="Celular de contacto" required>                     
                                    </div>
                                                                     
                                </div>      
                                <div class="col-lg-6">                                   
                                    <select id="tipo" name="tipo" title="Destino" class="form-control" required>
                                        <option value="">--Tipo Curso--</option>
                                        <option value="Vacational">Vacacional</option>
                                        <option value="General">General</option>
                                        <option value="Intensive">Intensivo</option>
                                        <option value="S. Intensive">Super Intensivo</option>
                                        <option value="IELTS">Preparación de IELTS</option>
                                        <option value="TOEFL">Preparación de TOEFL</option>
                                        <option value="CAMBRIDGE">Preparación de Cambridge</option>
                                        <option value="Business English">Inglés de Negocios</option>
                                    </select>
                                </div>                                
                                <div class="col-sm-12">
                                    <div class="form-group" style="text-align: left;">
                                        <label for="lane">Mensaje</label>
                                        <textarea id="msj" name="msj"type="text" wrap="soft" class="form-control" rows="1" placeholder="Dejanos tu mensaje"></textarea>
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <input type="submit" onclick="validar();"  id="send_email" name="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" class="form-control" value="ENVIAR" />                         
                                    <h5 class="notifiCorrecto"><?= $result; ?></h5>
                                </div>
                                



                                
                      </div>
                </div>      
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <!--MAPA-->
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;">
                    <div id="gmap_canvas" style="height:500px;width:600px;"></div>
                    <style>
                        #gmap_canvas img {
                            max-width: none !important;
                            background: none !important
                        }
                    </style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a>
                </div>
                <script type="text/javascript">function init_map() { var myOptions = { zoom: 14, center: new google.maps.LatLng(40.805478, -73.96522499999998), mapTypeId: google.maps.MapTypeId.ROADMAP }; map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions); marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(40.805478, -73.96522499999998) }); infowindow = new google.maps.InfoWindow({ content: "<b>The Breslin</b><br/>2880 Broadway<br/> New York" }); google.maps.event.addListener(marker, "click", function () { infowindow.open(map, marker); }); infowindow.open(map, marker); } google.maps.event.addDomListener(window, 'load', init_map);</script>

            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Oficina</h5>
                        <address>
                            <strong>TRIPTOLEARN</strong><br>
                            CRA 35 # 1C 46<br>
                            BOGOTA-COLOMBIA
                        </address>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Contactenos</h5>
                        <p>
                            <i class="icon-phone"></i> 3016599114 <br>
                            <i class="icon-envelope-alt"></i> Triptolearn1@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Enlaces de Interes</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Eventos en Malta</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Contactenos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Noticias Recientes</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="https://jobsinmalta.com/">Trabaje en Malta como Estudiante</a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.miviajeporelmundo.com/consejos-para-viajar-a-europa-por-primera-vez">Viaje por Europa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                </span><a href="https://cmrdevsolutions.com" target="_blank">Developed by CMR Design Solutions</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="https://www.facebook.com/triptolearn.enjoylearning.1" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.instagram.com/triptolearn/" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="https://www.youtube.com/channel/UC-RuyFaWv7STK99HfDa9VJQ" data-placement="top" title="youtube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>

    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>



    



</body>
</html>


<script>
    $(document).ready(function(){

        debugger
        permitirSoloNumeros("mobile");
        
        



        
    });
</script>




