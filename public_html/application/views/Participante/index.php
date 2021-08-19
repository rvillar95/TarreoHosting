<!DOCTYPE html>

<?php $user = $this->session->userdata("participante"); ?>

<html>



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Tarreo Inacap Talca | Modulo Participante</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>lib/img/icono.png">

    <link href="<?php echo base_url() ?>lib/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>lib/fonts/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>lib/css/animate.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>lib/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>lib/css/toastr.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url() ?>lib/css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url() ?>lib/css/mystyle.css" rel="stylesheet" type="text/css" />

</head>



<body>

    <div id="wrapper">

        <div id="page-wrapper" class="gray-bg" style="padding: 0px; margin: 0px;  ">



            <div class="row border-bottom">

                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #900">

                    <center>

                        <ul class="nav navbar-top-links navbar-left">

                            <img src="<?php echo base_url() ?>lib/img/admin/logo_admin.png" class="img-responsive" style="width: 240px; height: 65px; padding-left: 20px ; padding-top: 10px;" alt="" />

                        </ul>

                    </center>

                    <ul class="nav navbar-top-links navbar-right" style="padding-left: 10px;">

                        <li style="top: 18px; left: 10px">

                            <span style="color: white;"> <img src="<?php echo base_url() ?>lib/img/Jugadores/<?php echo $user[0]->fotoParticipante ?>" class="img-circle m-t-xs img-responsive" style="height: 50px; width: 50px;"></span>

                        </li>

                        <li style="left: 10px">

                            <span class="" style="color: white;"><?php echo $user[0]->nombreParticipante . ' ' . $user[0]->apellidoParticipante ?></span>

                        </li>

                        <li style="padding: 10px;">

                            <a id="btn" style="color: white;">

                                <i class="fa fa-sign-out" style="color: white"></i> Salir

                            </a>

                        </li>

                    </ul>

                </nav>

            </div>



            <div class="row wrapper border-bottom white-bg page-heading">

                <div class="col-sm-4">

                    <h2>Modulo Participante</h2>

                    <ol class="breadcrumb">

                        <li>

                            <a href="<?php echo base_url() ?>Participante">Login</a>

                        </li>

                        <li class="active">

                            <strong>Participante</strong>

                        </li>

                    </ol>

                </div>

                <div class="col-sm-8">

                     <div class="title-action" style="padding: 0px;">
                        <a data-toggle="modal" data-target="#sugerencias" class="btn btn-info">Sugerencias? Click Aqui!!!</a>
                    </div>
                    <div class="title-action" style="padding-top: 5px;">
                        <a href="" class="btn btn-primary">Actualizar Pagina</a>
                    </div>
                </div>

            </div>



            <div class="wrapper wrapper-content  animated fadeInRight">

                <!--                    <img src="<?php echo base_url() ?>lib/img/fondoadmin.jpg" class="img-responsive" style="z-index: -100; position: fixed; padding: 0px; " alt=""/>-->

                <div class="row">

                    <div class="col-lg-4">

                        <div class="ibox float-e-margins">

                            <div class="ibox-title" style="background-color: black">

                                <h5 style="color: white">Ver Juegos</h5>

                                <div class="ibox-tools">

                                    <a data-toggle="modal" data-target="#info-juegos">

                                        <i class="fa fa-question" style="background-color: white; color:black; padding: 2px;"></i>

                                    </a>

                                </div>

                            </div>

                            <div class="ibox-content" style="padding: 0px;">

                                <a href=" <?php echo base_url(); ?>Juegos">

                                    <center>

                                        <div class="div-img sty contenedor">

                                            <img src="<?php echo base_url() ?>lib/img/admin/juegos.jpg" class="img-responsive img" alt="" />

                                        </div>

                                    </center>

                                </a>

                            </div>

                            <div class="ibox-footer" style="padding: 0px; margin: 0px;">





                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="ibox float-e-margins">

                            <div class="ibox-title" style="background-color: black">

                                <h5 style="color: white">Iniciar Campaña</h5>

                                <div class="ibox-tools">

                                    <a data-toggle="modal" data-target="#info-campaña">

                                        <i class="fa fa-question" style="background-color: white; color:black; padding: 2px;"></i>

                                    </a>

                                </div>

                            </div>

                            <div class="ibox-content" style="padding: 0px;">

                                <a href=" <?php echo base_url(); ?>Inscritos">

                                    <center>

                                        <div class="div-img sty contenedor">

                                            <img src="<?php echo base_url() ?>lib/img/admin/parametros.jpg" class="img-responsive img" alt="" />

                                        </div>

                                    </center>

                                </a>

                            </div>

                            <div class="ibox-footer" style="padding: 0px; margin: 0px;">

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="ibox float-e-margins">

                            <div class="ibox-title" style="background-color: black">

                                <h5 style="color: white">Mis Equipos</h5>

                                <div class="ibox-tools">

                                    <a data-toggle="modal" data-target="#info-equipos">



                                        <i class="fa fa-question" style="background-color: white; color:black; padding: 2px;"></i>



                                    </a>

                                </div>

                            </div>

                            <div class="ibox-content" style="padding: 0px;">

                                <a href=" <?php echo base_url(); ?>Equipo">

                                    <center>

                                        <div class="div-img sty contenedor">

                                            <img src="<?php echo base_url() ?>lib/img/admin/equipos.png" class="img-responsive img" alt="" />

                                        </div>

                                    </center>

                                </a>

                            </div>

                            <div class="ibox-footer" style="padding: 0px; margin: 0px;">

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="ibox float-e-margins">

                            <div class="ibox-title" style="background-color: black">

                                <h5 style="color: white">Postulaciones a Equipos</h5>

                                <div class="ibox-tools">

                                    <a data-toggle="modal" data-target="#info-postulaciones">

                                        <i class="fa fa-question" style="background-color: white; color:black; padding: 2px;"></i>

                                    </a>

                                </div>

                            </div>

                            <div class="ibox-content" style="padding: 0px;">

                                <a href=" <?php echo base_url(); ?>Postular">

                                    <center>

                                        <div class="div-img sty contenedor">

                                            <img src="<?php echo base_url() ?>lib/img/admin/fechas.jpg" class="img-responsive img" alt="" />

                                        </div>

                                    </center>

                                </a>

                            </div>

                            <div class="ibox-footer" style="padding: 0px; margin: 0px;">

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="ibox float-e-margins">

                            <div class="ibox-title" style="background-color: black">

                                <h5 style="color: white">Ver Solicitudes</h5>

                                <div class="ibox-tools">

                                    <a data-toggle="modal" data-target="#info-solicitudes">

                                        <i class="fa fa-question" style="background-color: white; color:black; padding: 2px;"></i>

                                    </a>

                                </div>

                            </div>

                            <div class="ibox-content" style="padding: 0px;">

                                <a href=" <?php echo base_url(); ?>Solicitudes">

                                    <center>

                                        <div class="div-img sty contenedor">

                                            <img src="<?php echo base_url() ?>lib/img/admin/tony.jpg" class="img-responsive img" alt="" />

                                        </div>

                                    </center>

                                </a>

                            </div>

                            <div class="ibox-footer" style="padding: 0px; margin: 0px;">

                            </div>

                        </div>

                    </div>
			<div class="col-lg-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title" style="background-color: black">
                                <h5 style="color: white">Mi Perfil</h5>
                                <div class="ibox-tools">
                                    <a data-toggle="modal" data-target="#info-perfil">
                                        <i class="fa fa-question" style="background-color: white; color:black; padding: 2px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content" style="padding: 0px;">
                                <a href=" <?php echo base_url(); ?>Perfil">
                                    <center>
                                        <div class="div-img sty contenedor">
                                            <img src="<?php echo base_url() ?>lib/img/admin/capi.jpg" class="img-responsive img" alt="" />
                                        </div>
                                    </center>
                                </a>
                            </div>
                            <div class="ibox-footer" style="padding: 0px; margin: 0px;">
                            </div>
                        </div>

                    </div>

                </div>



            </div>

            <div class="footer">

                <div class="pull-right">



                </div>

                <div>

                    <strong>Copyright</strong> <a href="https://solucionesvillar.cl" style="color: graytext">Soluciones Villar</a> &copy; 2018-2019

                </div>

            </div>



        </div>

    </div>

    <div class="modal inmodal" id="info-solicitudes" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content animated flipInY">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title">Modulo Solicitudes</h4>

                    <small class="font-bold">Acá podras encontrar toda la informacion necesaria para enteder el sistema.</small>

                </div>

                <div class="modal-body">

                    <p> En este modulo encontraras todas las solicitudes hechas, tanto las que siguen pendientes o ya sea las Rechazadas o Aceptadas.</strong>

                    </p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>

                </div>

            </div>

        </div>

    </div>

    <div class="modal inmodal" id="info-postulaciones" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content animated flipInY">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title">Modulo Postulaciones</h4>

                    <small class="font-bold">Acá podras encontrar toda la informacion necesaria para enteder el sistema.</small>

                </div>

                <div class="modal-body">

                    <p> En este modulo podras ver todos los Equipos creados en el momento, a su Capitan y Juego asociado. Podras enviar solicitudes para poder ser parte del equipo en cuestión, pudiendo ser

                        Aceptado o Rechazado. <strong>Recuerda que si ya formas parte de un Equipo de LOL por ejemplo, no podras enviar otra solicitud a un Equipo asociado al mismo Juego.</strong>

                    </p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>

                </div>

            </div>

        </div>

    </div>

    <div class="modal inmodal" id="info-equipos" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content animated flipInY">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title">Modulo Equipos</h4>

                    <small class="font-bold">Acá podras encontrar toda la informacion necesaria para enteder el sistema.</small>

                </div>

                <div class="modal-body">

                    <p>En este modulo podras ver a TÚ equipo si es que eres Capitan, o si eres Integrante.<br/>

                <strong>Capitan: </strong>Podras editar los datos de tu equipo, podras ver las solicitudes entrantes y ver comentarios de parte de los administradores sobre el estado de tu Equipo. <br/>

            <strong>Integrante: </strong>Podras ver los equipos en los cuales estas asociado y los integrantes de tu Equipo.</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>

                </div>

            </div>

        </div>

    </div>

    <div class="modal inmodal" id="info-campaña" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content animated flipInY">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title">Modulo Campaña</h4>

                    <small class="font-bold">Acá podras encontrar toda la informacion necesaria para enteder el sistema.</small>

                </div>

                <div class="modal-body">

                    <p>En este modulo podras ver todos los juegos en los que estes postulados <strong>(Pincha <a href=" <?php echo base_url(); ?>Juegos">Aqui</a> para postularte a los Juegos)</strong>, ya sean en Equipo o Individuales. 

                Tambíen en este ultimo tipo de juego podras ver los participantes contra quienes podrias toparte el día del Tarreo. </br> <strong>Recuerda que tambíen podras crear un equipo y quedar como capitan de este.</strong> Tu equipo antes de poder ser visible por los demas participantes postulados al juego en cuestión, debera pasar por un filtro de parte de los administradores.</p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>

                </div>

            </div>

        </div>

    </div>

    <div class="modal inmodal" id="info-juegos" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content animated flipInY">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                    <h4 class="modal-title">Modulo Juegos</h4>

                    <small class="font-bold">Acá podras encontrar toda la informacion necesaria para enteder el sistema.</small>

                </div>

                <div class="modal-body">

                    <p>En este modulo podras ver todos los juegos que estaran el día del tarreo, y a la vez podras postular a cada uno de ellos haciendo click en el ultimo boton a la derecha de cada juego.

                        <strong>Recuerda que solo puedes registrarte una vez en cada Juego.</strong>

                    </p>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>

                </div>

            </div>

        </div>

    </div>

	 <div id="modal-foto" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <h1><strong>
                            <center>Pronto Nuevas Actualizaciones...</center>
                        </strong></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
<div class="modal-body">
	<strong>Modulo Perfil: </strong> Edita tus datos y sube tu mejor foto.</br>
	<strong>Modulo Sugerencias: </strong> Ayudanos a mejorar el sistema enviando tus opiniones sobre este. Ojala de forma constructiva</br>

</div>
            </div>
        </div>
    </div>

<div class="modal inmodal" id="info-perfil" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Modulo Postulaciones</h4>
                    <small class="font-bold">Ac� podras encontrar toda la informacion necesaria para enteder el sistema.</small>
                </div>
                <div class="modal-body">
                    <p> En este modulo podras editar todos tus datos, cambiar foto, etc.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

	<div class="modal inmodal" id="sugerencias" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Ayudanos a mejorar el Sistema</h4>
                    <small class="font-bold">En este modulo, esperamos que nos ayuden con sus pensamientos, ya sean criticas o aportes. Siempre de manera constructiva.</small>
                </div>
                <div class="modal-body">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><label>Asunto</label> <input type="text" id="asunto" required placeholder="Contexto de tu Sugerencia..." class="form-control"></div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><label>Descripcion</label> <textarea class="form-control" name="" placeholder="Te gusta el sistema? falta algo ? dilo aca... Tambien se aceptan felicitaciones..." id="descripcion" cols="30" rows="5"></textarea></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnAgregarSugerencia">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ./wrapper -->



    <!-- jQuery 3 -->

    <script src="<?php echo base_url() ?>lib/js/jquery-2.1.1.js"></script>

    <script src="<?php echo base_url() ?>lib/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>lib/js/inspinia.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/myjs.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/jquery.slimscroll.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/pace.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/jquery.metisMenu.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/toastr.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/jquery-ui.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/jquery.peity.min.js" type="text/javascript"></script>





    <script>

        $(function() {



            $(document).ready(function() {


                // Add slimscroll to element

                $('.scroll_content').slimscroll({

                    height: '200px'

                })

		$("#btnAgregarSugerencia").click(function(e) {
                    e.preventDefault();
                    addSugerencia();
                });

                $("#btn").click(function(e) {

                    e.preventDefault();

                    salir();

                });



            });







        });

    </script>

</body>



</html>