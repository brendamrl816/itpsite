@extends('master')

@section('content')
    
    
    <div class="loadingDiv">
        <div class="load-letters-container">
            <h1 class="load-letters">
                <span class="dot1">.</span><span class="dot2">.</span><span class="dot3">.</span>
                Imagenes Y Tradiciones Del Peru <span class="dot1">.</span><span class="dot2">.</span><span class="dot3">.</span></h1>
        </div>
        
       <!--<div id="l1" class="load-letters">Imagenes</div> -->
       <!--<div id=l2 class="load-letters">Y</div>-->
       <!--<div id="l3" class="load-letters">Tradiciones</div>-->
       <!--<div id="l4" class="load-letters">Del</div>-->
       <!--<div id="l5" class="load-letters">Peru</div>-->
    </div>
    
    
    <div class="divMenu">
        <div id="myMenu">
            <div class="myMenuHolder">
                <div id="homeid" data-menuanchor="home" class="active nav-li"><a class="nav-a navBorder" href="#home">HOME</a></div>
                <div id="aboutusid" data-menuanchor="about" class="nav-li"><a class="nav-a navBorder" href="#about">ABOUT US</a></div>
                <div id="eventsid"data-menuanchor="events" class="nav-li"><a class="nav-a navBorder" href="#events">EVENTS</a></div>
                <div id="danzasid"data-menuanchor="danzas" class="nav-li"><a class="nav-a navBorder" href="#danzas">DANZAS</a></div>
                <div id="contactusid" data-menuanchor="contact" class="nav-li"><a class="nav-a" href="#contact">CONTACT US</a></div>
                <!--<li data-menuanchor="home" class="active nav-li"><a class="nav-a" href="#home">HOME</a></li>-->
                <!--<li data-menuanchor="about" class="nav-li"><a class="nav-a" href="#about">ABOUT US</a></li>-->
                <!--<li data-menuanchor="events" class="nav-li"><a class="nav-a" href="#events">EVENTS</a></li>-->
                <!--<li data-menuanchor="contact" class="nav-li"><a class="nav-a" href="#contact">CONTACT US</a></li>-->
            </div>
                
        </div>
    </div>
    
    <div class="img-letters-container">
       <h1 class="img-letters"><span class="img-letters-span">IMAGENES Y TRADICIONES DEL PERU</span></h1> 
    </div>
    
        
    <div id="fullpage">
        
        
            <div class="section fp-auto-height">
                
                <div class="slideRelative">
                    <div id="mainPicRelative">
                        <div class="mainPic-holder">
                            <img id="mainpic" class="mainPic" src="/pictures/main.png">
                        </div>
                    </div>
                </div>
                    
            </div>
            
            
            <div class="section fp-auto-height">

                <div class="main-container">
                    
                    
                    <div class="story">
                        <h2 style="color:black; text-decoration:underline; margin-left:5%; text-align:left"><span>SOBRE NOSOTROS</span></h2>
                        <div class="story-left">
                            
                            <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic13.jpg">
        		                  </div>
        		              </div>
                            <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic3.jpg">
        		                  </div>
        		              </div>
        		               <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic5.jpg">
        		                  </div>
        		              </div>
        		               <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic6.jpg">
        		                  </div>
        		              </div>
        		              <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic8.jpg">
        		                  </div>
        		              </div>
        		              <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic9.jpg">
        		                  </div>
        		              </div>
        		              <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic10.jpg">
        		                  </div>
        		              </div>
        		              <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic11.jpg">
        		                  </div>
        		              </div>
        		              <div class="storypic-container slide">
        		                  <div>
        		                      <img class="storypic" src="/pictures/pic12.jpg">
        		                  </div>
        		              </div>
        		              
                        </div>
                        <div class="story-right">
                            <h3 style="color:black">Quienes Somos</h3>
                            <p>
                               Imágenes y Tradiciones del Perú es un Institución Cultural no lucrativa, integrada por jóvenes donde se incentiva el desarrollo y la difusión de las Artes a través de la danza, 
                               contribuyendo al fortalecimiento de nuestra identidad como peruanos residentes en el extranjero para de esta manera preservar la tradición y difundir el legado cultural milenario 
                               heredado de nuestras antepasados. Fundada en noviembre del 2007. El Objetivo de Imágenes y Tradiciones del Perú es el de brindar espacios lúdicos, educativos y de sana convivencia orientada a la niñez y juventud del entorno para el descubrimiento 
                                y desarrollo de sus habilidades artísticas, proporcionándoles los elementos necesarios que faciliten esta labor y de esta manera contribuir al mejoramiento de cada una de las esferas del 
                                desarrollo humano.
                            </p>
                            
                           <h3 style="float:right; color:white; size:120%; background-color:#9e9e9e; padding:5px">Directora.- Cory Morales</h3>
                           
                        </div>
                        
                        
                    </div>
                    
                    
                        
                    
                </div>
            </div>
            

            <div class="section fp-auto-height">
                
                <div class="eventos" >
                    
                   
                    <div class="theSkew sktop">
                        <div class="theSkew-content">
                            <h2 class="evHeader">EVENTOS</h2>
                        </div>
                    </div>
                    
                    <div class="eventsDisplay">
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
                            <tr style="color:#004d4d; font-weight:bolder">
                                <td class="eventos-left">
                                    <span style="margin-right:5px"><i class="fa fa-calendar"></i></span>19 de Mayo
                                </td>
                                <td  class="eventos-right">
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
                            
                        </table>
                    </div>
                    
                    <div class="theSkew skbottom">
                        <div class="theSkew-content"></div>
                    </div>
                        
                </div>
                

            </div>
            
            
            <div class="section fp-auto-height">
                    
                    <div class="insideMain">
                            
                        <h2 class="dHeader">DANZAS</h2>
                        <div class="danzas-main">
                               
                               <div class="danzas-container dLeft">
                                   
                                    <img class="danzas-pic" src="/pictures/marinera.jpg"> 
                                    <div class="danzas-par">
                                        <h3 class="danzas-header">Marinera Norteña</h3>
                                    La marinera es un baile de pareja suelta mixta, el más conocido de la costa del Perú. Se caracteriza por el uso de pañuelos. Es un baile que muestra el mestizaje hispano-amerindio-africano, entre otros. 

                                    <div id="moreMarinera" style="display:none">
                                    Además de destreza y ensayos constantes, la marinera demanda también gran esfuerzo físico y sacrificios por parte de los bailarines, quienes deben someterse a ejercicios y dietas adecuadas.
                                    Tal es así que con el fin de fortalecer las plantas de sus pies es bien sabido que muchas bailarinas entrenan saliendo a caminar descalzas a la calle, yendo a distintos lugares como parte de su día a día y en sus ratos libres. 
                                    Los varones por su parte practican incansablemente el zapateo y los distintos pasos hasta dominarlos. Un bailarín de marinera norteña deja de lado compromisos sociales, familiares y horas de descanso con tal de dedicar tiempo a su pasión.
                                    La marinera en el norte (departamentos de Lambayeque, La Libertad, Piura y otros) es ágil, elegante, libre, alegre y espontánea, mostrando durante todo el baile un coloquio amoroso en el cual la dama coquetea con picardía, astucia e inteligencia expresando su afectividad, 
                                    mientras el varón galantea, acompaña, acecha y conquista a su pareja. Este mensaje se desarrolla durante la ejecución del baile y es necesario que sea cantada como en el caso de la "Limeña", aunque también se puede bailar con banda de músicos. 
                                    Se trata de un baile de contrapunto donde el varón y la dama deberán demostrar su destreza y habilidad.
                                    En 1960 el presidente del Club Libertad de Trujillo, Juan Julio Ganoza Vargas, requería captar fondos para superar una crisis, y promover el crecimiento y desarrollo del Club. Entonces, en una reunión el 14 de octubre de 1960, don Guillermo Ganoza Vargas, 
                                    quien formaba parte de la directiva, hace la propuesta de organizar actividades pro fondos como una tómbola y un concurso de bailes de marinera.
                                    </div>
                                    
                                    <div style="display:block; margin:10px" onclick="toggleVisibility('moreMarinera', 'mMore', 'mLess')"><span id="mMore" style="display:inline-block" class="danzas-ml">more...</span><span id="mLess" style="display:none" class="danzas-ml">...less</span></div>
                                    
                                    </div>
                               </div> 
                                    
                            
                                <div class="danzas-container dRight">
                                   <img class="danzas-pic" src="/pictures/huaylas.jpg">
                                    <div class="danzas-par">
                                        <h3 class="danzas-header">Huaylas</h3>
                                        En la zona central del Perú, más precisamente en Huancayo, se ejecuta el "huaylas", danza típica peruana con melodías ejecutadas por orquestas compuestas de saxos, clarinetes, violines y arpas.
                                        Huaylas es un vocablo quechua significa ''juventudes''. Esta palabra designa tanto a la música como a la actividad misma.
                                        
                                        
                                        <div id="moreHuaylas" style="display:none">
                                            Su origen es la trilla nocturna de los granos tras la cosecha. De allí, proviene el fuerte zapateo característico y la danza, representa el vistoso galanteo del macho a la mujer del chihuaco o zorzal, ave que abunda en Junín.
                                            El origen exacto de esta danza se desconoce, la única referencia que se tiene es que pertenece al valle del Mantaro, donde se ejecuta este estilo de huaino, muy típico con sus paradas y alegría. Ejecutado normalmente por bandas y orquestas de metales, 
                                            tiene una identidad propia que ha ido a más con el pasar de los años, dando a luz maestros en el género, como el Picaflor de los Andes o Zenobio Dagha.
                                            La orquesta normalmente está compuesta de saxos de diversos tamaños, clarinetes, violines y arpa. La peculiaridad con la que compiten estas orquestas hace que interpreten cada una las piezas con su propio sello musical, 
                                            de tal forma que acaben siempre todos los temas con un final propio y distintivo del resto. Igualmente dada la fuerza de la danza que acompaña la música hay predilección por denominar las piezas musicales con la frase: "Rompe...".
                                            Originalmente simbolizaba la plantación de la papa y se ejecutaba con flautas y tambor. El zapateo característico puede ser una reminiscencia de la época.
                                        </div>
                                        <div style="display:block; margin:10px" onclick="toggleVisibility('moreHuaylas', 'hMore', 'hLess')"><span id="hMore" style="display:inline-block" class="danzas-ml">more...</span><span id="hLess" style="display:none" class="danzas-ml">...less</span></div>
                                    </div>
                               </div>
                               
                               <div class="danzas-container dLeft">
                                   <img class="danzas-pic" src="/pictures/festejo.jpg">
                                    <div class="danzas-par">
                                        <h3 class="danzas-header">Festejo</h3>
                                        El festejo es la danza representativa del negro criollo en la costa peruana. Los instrumentos musicales para esta danza debieron ser originalmente tambores de cuero, el que luego se reemplazaron con el cajón y la maraca por la quijada de burro, agregándole guitarra acústica y canto.
                                        
                                        <div id="moreFestejo" style="display:none">
                                            El festejo fue creado por habitantes africanos que fueron traídos al Perú (Congo, Angola y Mozambique) durante el siglo XVII por los conquistadores españoles para realizar trabajos agrícolas, aunque el objetivo real era el trabajo en las minas debido al robusto físico que portaban.
                                            Sin embargo, el clima frío de la sierra era adverso para ellos, relegándolos al trabajo de campo y doméstico. Por ello, su letra narra las costumbres, alegrías, penas y sufrimientos de la raza negra de aquel entonces.
                                            La base de todo festejo es el ritmo, que se logra mediante una serie de melodías sobre el cajón peruano y la quijada de burro, más cajita, congas y bongó.
                                            Los gestos, movimientos de brazos, los contorneos de cadera, movimientos de polleras o faldas, son elementos que distinguen rápidamente el festejo de otra danza, complementándose desde luego con el proceso de enamoramiento en las que las parejas se han propuesto.
                                        </div>
                                        <div style="display:block; margin:10px" onclick="toggleVisibility('moreFestejo', 'fMore', 'fLess')"><span id="fMore" style="display:inline-block" class="danzas-ml">more...</span><span id="fLess" style="display:none" class="danzas-ml">...less</span></div>
                                    </div>
                               </div> 
                               
                               <div class="danzas-container dRight">
                                   <img class="danzas-pic" src="/pictures/saya.jpg">
                                    <div class="danzas-par">
                                        <h3 class="danzas-header">Saya</h3>
                                       La Saya es una danza que se origino en la región andina de Bolivia, esta nace de la expresión de los esclavos negros traídos desde África que habitan las regiones de los Yungas en Bolivia. El baile se realiza liderado por una voz cantante, 
                                       es un estilo de música y danza que puede ser considerado como el producto de la fusión de elementos africanos, aymaras y españoles. 
                                       
                                       <div id="moreSaya" style="display:none">
                                           La saya fue producto de una manifestación cultural de los esclavos africanos llevados a la Real audiencia de Charcas (actual Bolivia) que estaba bajo el control de la corona española. 
                                            Los intereses económicos que movían la práctica del comercio de esclavos en el siglo XVIII hicieron que la población africana emigre a Latinoamérica. Y como la música y la danza es parte de la vida del ser humano, 
                                            esta también viajó a la tierra de Los Andes, donde se adaptó a prácticas ancestrales ya existentes.
                                            Su origen africano está implícito en la deformación del vocablo Nsaya de Origen Kikongo (Africa); así la saya etimológicamente significa: trabajo en común bajo el mando de un (a) cantante principal. 
                                            Está compuesta de música, danza, poesía y ritmo donde se utiliza bastante la metáfora y la sátira, tocando temas de la esclavitud y de la situación actual.
                                            La Saya presenta elementos del ancestro africano; sin embargo posee algunas peculiaridades sincréticas aymaras como la vestimenta, especialmente en las mujeres.
                                            Los esclavos que eran traídos desde el África ingresaban a las fronteras del Virreinato a través del puerto del Callao; desde allí eran distribuidos hacia todos los enclaves productivos del territorio, 
                                            entre ellos los enclaves mineros ubicados en la zona del altiplano. Con las primeras manifestaciones de la danza, ésta obtiene difusión entre los pueblos afroantillanos de la administración.
                                        </div>
                                        <div style="display:block; margin:10px" onclick="toggleVisibility('moreSaya', 'sMore', 'sLess')"><span id="sMore" style="display:inline-block" class="danzas-ml">more...</span><span id="sLess" style="display:none" class="danzas-ml">...less</span></div>
                                        
                                    </div>
                               </div> 
                            
                                    
                            
                                    
                            
                            
                            
                        
                        </div>    
                   
                    </div>
            </div>
            
            
            <div class="section fp-auto-height">

                <div class="main-container">
                    
                        <!--<div style="display:inline-block; margin-left:5%; color:black">-->
                        <!--   <h2 class="header-color">CONTACTANOS</h2>-->
                            
                        <!--    <div style="width:100%">-->
                        <!--       @if (session('status'))-->
                        <!--            <div class="email-status">-->
                        <!--                {{ session('status') }}-->
                        <!--            </div>-->
                        <!--        @endif-->
                        <!--        @foreach ($errors->all() as $error)-->
                        <!--            <p class="email-error">*{{$error}}</p>-->
                        <!--        @endforeach-->
                        <!--    </div>-->
                            
                        <!--    <form class="contactForm" method="post" action="/sendEmail">-->
                        <!--        {!! csrf_field() !!}-->
                                
                        <!--        <div class="message">-->
                        <!--            <div class="m-name">-->
                        <!--                <input class="message-text" type="text" placeholder="Tu Nombre" name="name"  value="{{ old('name') }}" required>-->
                        <!--            </div>-->
                        <!--            <div class="m-email">-->
                        <!--                <input class="message-text" type="email" placeholder="Tu email" name="email"  value="{{ old('email') }}" required>-->
                        <!--            </div>-->
                        <!--        </div>-->
                                
                                
                        <!--        <div class="message">-->
                        <!--            <textarea class="message-textArea" placeholder="mensaje" name="content"  value="{{ old('content') }}" required></textarea>-->
                        <!--        </div>-->
                        <!--        <div class="message" style="margin-top:10px">-->
                        <!--            <button class="mbutton">send message</button>-->
                        <!--        </div>-->
                          
                        <!--    </form> -->
                        <!--</div>-->
                        
                        <div style="padding:50px">
                            <h2 style="color:black; text-decoration:underline" class="headSpan">CONTACTANOS</h2>
                        </div>
                        
                        
                        
                        <div style="display:inline-block; vertical-align:top; font-size:130%; color:black">
                            <div class="link"><span class="bold head3">Email: </span>&nbsp;itpusa07@gmail.com</div>
                            <br>
                            <div class="link" style="margin: 10px 0px 10px 0px"><span class="bold head3">Our Facebook: </span><a style="text-decoration:none; color:inherit; cursor:pointer;" href="https://www.facebook.com/imagenes.tradiciones">&nbsp; <i class="fa fa-facebook-square"></i> </a></div>
                            <div class="link"><span class="bold head3">Telefono: </span>&nbsp;(908)334-1286</div>
                        </div>
                            
                        <div style="display:block; font-size: 11px; text-align:center; margin-top:10%; padding-bottom:20px">
                            Designed by Brenda Castillo - brendamrl816@gmail.com
                        </div>
                 </div>
                    
            </div>
            

            
        </div>
@endsection
