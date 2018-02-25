<?php $__env->startSection('content'); ?>
    <button class="nav-button show"><i class="fa fa-bars"></i></button>
    <button class="close-nav hide"><i class="fa fa-times"></i></button>
        <div class="divMenu hide">
            <ul id="myMenu">
                <li id="homeid" data-menuanchor="home" class="active nav-li"><a class="nav-a" href="#homeMain">HOME</a></li>
                <li id="aboutusid" data-menuanchor="aboutus" class="nav-li"><a class="nav-a" href="#aboutus">ABOUT US</a></li>
                <li id="eventsid"data-menuanchor="events" class="nav-li"><a class="nav-a" href="#events">EVENTS</a></li>
                <li id="contactusid" data-menuanchor="contact" class="nav-li"><a class="nav-a" href="#contact">CONTACT US</a></li>
            </ul>
        </div> 
       

         <div id="fullpage">

            <div class="section fp-auto-height">
                <div class="slideRelative">
                    
                    <div class="main-container">
                        <div class="mainPic"></div>
                        
                    </div>
                   
                </div>
                    
            </div>
            
            
            <div class="section fp-auto-height">

                <div class="main-container">
                    <div class="insideMain">
                        
                        <!--<div class="main-header"><span class="main-header-content">BALLET FOLKLORICO IMAGENES Y TRADICIONES</span></div>-->
                    
                        <div class="story">
                            <h2 class="header-color">SOBRE NOSOTROS</h2>
                            <p>
                               Imágenes y Tradiciones del Perú es un Institución Cultural no lucrativa, integrada por jóvenes donde se incentiva el desarrollo y la difusión de las Artes a través de la danza, 
                               contribuyendo al fortalecimiento de nuestra identidad como peruanos residentes en el extranjero para de esta manera preservar la tradición y difundir el legado cultural milenario 
                               heredado de nuestras antepasados. 
                            </p>
                            <p>
                                El OBJETIVO de Imágenes y Tradiciones del Perú es el de brindar espacios lúdicos, educativos y de sana convivencia orientada a la niñez y juventud del entorno para el descubrimiento 
                                y desarrollo de sus habilidades artísticas, proporcionándoles los elementos necesarios que faciliten esta labor y de esta manera contribuir al mejoramiento de cada una de las esferas del 
                                desarrollo humano, como el social, motriz y cognitivo.
                            </p>
                           <p>
                               Fundada: Noviembre 2007
                           </p>
                           <h3 style="float:right" class="header-color">Directora.- Cory Morales</h3>
                        </div>
                        
                        <div class="logo-container">
                            <img class="logoPic" src="/pictures/itplogo.jpg">
                        </div>
                        
                        <div class="head4 animate slide-left"><span class="inside-header">DANZAS</span></div>
                        <div class="insideMain pink">
                            <ul class="">
                                <li>Marinera Norteña</li>
                                <li>Huaylas</li>
                                <li>Festejo</li>
                                <li>Saya</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            

            <div class="section fp-auto-height">
                
                <div class="eventos">
                    
                    <h2 style="margin-left:10%">EVENTOS</h2>
                    
                    <div style="margin-top:20px">
                        <table class="eventos-table">
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>27 de Abril
                                </td>
                                <td class="eventos-right">
                                    Selectivo New Jersey USA 2018
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>6 de Mayo
                                </td>
                                <td class="eventos-right">
                                    Selectivo Orlando USA 2018
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>19 de Mayo
                                </td>
                                <td class="eventos-right">
                                    Clausura Escolar
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>27 de Mayo
                                </td>
                                <td class="eventos-right">
                                    Selectivo Las Vegas USA 2018
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>10 de Junio
                                </td>
                                <td class="eventos-right">
                                    Selectivo Miami USA 2018
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>24 de Junio
                                </td>
                                <td class="eventos-right">
                                    Selectivo New York USA 2018
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>01 de Julio
                                </td>
                                <td class="eventos-right">
                                    Selectivo Laval CANADA 2018
                                </td>
                            </tr>
                            <tr>
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>26 de Agosto
                                </td>
                                <td class="eventos-right">
                                    Selectivo Quebec CANADA 2018
                                </td>
                            </tr>
                            <!--<tr>-->
                            <!--    <td class="eventos-left">-->
                            <!--        <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>-->
                            <!--    </td>-->
                            <!--    <td class="eventos-right">-->
                                    
                            <!--    </td>-->
                            <!--</tr>-->
                        </table>
                    </div>
                        
                </div>

            </div>
            
            
            <div class="section fp-auto-height">

                <div class="main-container">
                    
                        <div style="display:inline-block; margin-left:5%; color:black">
                           <h2 class="header-color">CONTACTANOS</h2>
                            
                            <div style="width:100%">
                               <?php if(session('status')): ?>
                                    <div class="email-status">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>
                                <?php foreach($errors->all() as $error): ?>
                                    <p class="email-error">*<?php echo e($error); ?></p>
                                <?php endforeach; ?>
                            </div>
                            
                            <form class="contactForm" method="post" action="/sendEmail">
                                <?php echo csrf_field(); ?>

                                
                                <div class="message">
                                    <div class="m-name">
                                        <input class="message-text" type="text" placeholder="Tu Nombre" name="name"  value="<?php echo e(old('name')); ?>" required>
                                    </div>
                                    <div class="m-email">
                                        <input class="message-text" type="email" placeholder="Tu email" name="email"  value="<?php echo e(old('email')); ?>" required>
                                    </div>
                                </div>
                                
                                
                                <div class="message">
                                    <textarea class="message-textArea" placeholder="mensaje" name="content"  value="<?php echo e(old('content')); ?>" required></textarea>
                                </div>
                                <div class="message" style="margin-top:10px">
                                    <button class="mbutton">send message</button>
                                </div>
                          
                            </form> 
                        </div>
                        
                        <div style="display:inline-block; vertical-align:top; margin:5%; color:black">
                            <div class="m-top link"><span class="bold head3">Email: </span>&nbsp;itpusa07@gmail.com</div>
                            <br>
                            <div class="link"><span class="bold head3">Our Facebook: </span><a style="text-decoration:none; color:inherit; cursor:pointer" href="https://www.facebook.com/imagenes.tradiciones">&nbsp; <i class="fa fa-facebook-square"></i> </a></div>
                            
                        </div>
                            
                        <div style="display:block; text-align:center; margin-top:10%; margin-bottom:10px">
                            Designed by Brend Castillo - brendamrl816@gmail.com
                        </div>
                 </div>
                    
            </div>
            

            
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>