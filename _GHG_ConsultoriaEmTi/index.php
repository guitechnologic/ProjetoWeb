<?php require_once("funcoes.php"); ?>

<?php
    if ( isset($_POST['enviar']) ) {
        if ( enviarMensagem($_POST) ) {
            $mensagem = "Mensagem enviada com sucesso.";
        } else {
            $mensagem = "Erro no envio";
        }
    }
?>

<!DOCTYPE html>
    <html>
        <title> GHG Consultoria Em Ti   </title>

            <meta   charset="UTF-8">
            <meta   name="viewport" content="width=device-width,    initial-scale=1">
            <meta   http-equiv="X-UA-Compatible"    content="IE-edge">
            <meta name="geo.region"     content="BR-PR">
            <meta name="geo.placement"  content="Colombo">
            <meta name="geo.position"   content="-25.36997746782584, -49.16598553283551">
            <meta name="ICBM"           content="-25.36997746782584, -49.16598553283551">
            <link rel="icon" href="_imagens/logovetorizadaghg/GHG - Consultoria em TI 2.png" sizes="16x16" type="image/png">
            <link   rel="stylesheet"    href="_css/estilo.css">
            <link   rel="stylesheet"    href="https://fonts.googleapis.com/css?family=Raleway">
            <link   rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   <!-- Icones Minimalistas -->

        <style>

            body,h1,h2,h3,h4,h5,h6  {font-family:   "Raleway",  sans-serif}

            body,   html  {
                height: 100%;
                line-height:    1.8;
                }

            /* 01-Primeiro quadrante da pagina */
            .bgimg-1    {
                background-position:    center;
                background-size:    cover;
                background-color:   rgb(0, 0, 0);      /*url("../_GHG_ConsultoriaEmTi/_imagens/map.jpg");*/
                /*  background: url(_imagens/_BannerComLogo2.png);   */
                min-height: 100%;
            }

            /* Barra de menu superior e botoes na barra */
            .bar    .button    {
                padding:    16px;
            }

        </style>

    <body>

        <!-- 01 - Barra de navegação com os botoes -->
        <!--Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing in C:\xampp\htdocs\ProjetoWeb\_GHG_ConsultoriaEmTi\funcoes.php on line 21-->
        <div    class="top">
            <div    class="bar  white card" id="myNavbar">
                <a  href="#Home"    class="bar-item button  wide">  GHG </a>    <!-- Inserir logo -->

                <!-- 01.1 - Botoes de navegação -->
                <div    class="center    hide-small">
                    <a  href="#Home"            class="bar-item button">       <i class="fa fa-home">       </i> HOME       </a>
                    <a  href="#Consultoria"     class="bar-item button">       <i class="fa fa-group">      </i> A GHG      </a>
                    <a  href="#Servicos"        class="bar-item button">       <i class="fa fa-th">         </i> SERVIÇOS   </a>
                    <a  href="QuemSouEu.html"   class="bar-item button">       <i class="fa fa-user">       </i> QUEM SOU EU?     </a>
                    <a  href="#Contato"         class="bar-item button">       <i class="fa fa-envelope">   </i> CONTATO    </a>
                </div>
                
                <!-- 01.2 - Opçoes do menu de navegaçao para mobile, abertura e fechamento -->
                <a  href="javascript:void(0)"   class="bar-item button  center   hide-large  hide-medium"    onclick="botaoAbre()">
                <i  class="fa   fa-bars"> </i>
                </a>
            </div>
        </div>

        <!-- 01.3 - Configuração dos icones superiores, presentes na barra de navegação mobile -->
        <nav    class="sidebar  bar-block   black   card    animate-left    hide-medium hide-large" style="display:none"    id="mySidebar">
            <a  href="javascript:void(0)"   onclick="botaoFechar()"    class="bar-item button  large   padding-16">    Close X </a>

            <a  href="#Home"            onclick="botaoFechar()"    class="bar-item button">    HOME     </a>
            <a  href="#Consultoria"     onclick="botaoFechar()"    class="bar-item button">    A GHG    </a>
            <a  href="#Servicos"        onclick="botaoFechar()"    class="bar-item button">    SERVIÇOS </a>
            <a  href="QuemSouEu.html"   onclick="botaoFechar()"    class="bar-item button">    QUEM SOU EU?   </a>
            <a  href="#Contato"         onclick="botaoFechar()"    class="bar-item button">    CONTATO  </a>
        </nav>


        <!-- 02 - Tela de apresentação -->
        <header class="bgimg-1  display-container   grayscale-min"  id="Home"> 


            <!-- 02.1 - Textos da Tela de apresentação -->
            <div    class="display-left text-white"    style="padding:48px">
                <span   class="jumbo hide-small">                 Comece algo que importe.  </span> <br>    <!-- Textos da Tela de apresentação quando a tela aumentar  -->
                <span   class="xxlarge hide-large hide-medium">   Comece algo que importe.  </span> <br>    <!-- Textos da Tela de apresentação quando a tela reduzir   -->
                <span   class="large">                            Soluções customizadas para resolver a sua Ti.  </span>

                    <!-- 02.2 - Botão da Tela de apresentação -->
                    <p> <a   href="#Consultoria"   class="button   white   padding-large   large   margin-top  opacity hover-opacity-on">
                        Saiba mais >
                    </a>    </p>
            </div>
            
            <!-- 02.3 - Botoes de rede social -->
            <div    class="display-bottomleft   text-grey   large"  style="padding:24px 48px">
                
                <a  href="https://www.linkedin.com/in/guilherme-goulart-539a90b1/"  target="_blank">    <i  class="fa   fa-linkedin hover-opacity"> </i>    </a>
                <a  href="https://github.com/guitechnologic"    target="_blank">    <i  class="fa   fa-github   hover-opacity"> </i>    </a>
            </div>

        </header>

        <!-- 03 - Tela de valores da empresa - Consultoria - Alocação de recursos - Aplicaçoes - Suporte -->
        <div    class="container"   style="padding:128px    16px"   id="Consultoria">
            
            <!-- 03.1 - Titulo da pagina -->
            <h3 class="center"> GHG Consultoria em Ti   </h3>   

            <!-- 03.2 - SubTitulo da pagina -->
            <p  class="center   large"> Nós podemos fazer o seu pequeno negócio GIGANTE </p>

            <!-- 03.3 - "quadro" que separa os 4 blocos dentro da div -->
            <div    class="row-padding  center" style="margin-top:64px">

                <!-- 03.4 - Quadrante da consultoria -->
                <div class="quarter">
                    <i class="fa fa-desktop margin-bottom jumbo center"></i>
                    <p class="large">Consultoria</p>
                    <p> Planejamos e apresentamos estratégias que ofereçam maior performance para o seu negócio.</p>
                </div>

                <!-- 03.5 - Quadrante de alocação de recursos -->
                <div class="quarter">
                    <i class="fa fa-handshake-o margin-bottom jumbo"></i>
                    <p class="large">Alocação de recursos</p>
                    <p> Precisando de profissionais para serviços especializados, nós encontramos para você.</p>
                </div>

                <!-- 03.6 - Quadrante de aplicaçoes -->
                <div class="quarter">
                    <i class="fa fa-globe margin-bottom jumbo"></i>
                    <p class="large">WebSites</p>
                    <p> Desenvolvemos WebSites personalizados e adequados à necessidade do seu negócio.</p>
                </div>

                <!-- 03.7 - Quadrante do suporte -->
                <div class="quarter">
                    <i class="fa fa-cog margin-bottom jumbo"></i>
                    <p class="large">Suporte</p>
                    <p> Migração de sistemas, gerenciamento de microserviços, gestão de serviços de alta disponibilidade e monitoração.</p>
                </div>

            </div>
            
        </div>

        <!-- 04 - Tela de introdução "Um pouco sobre nós"  -->
        <div    class="container    light-grey" style="padding:128px 16px" id="Servicos">
            <div    class="row-padding">
                <div    class="col  m8">
                    <h1>    Um pouco sobre nós...   </h1>
                    <p> Fundada em 2021 e com o objetivo de idealizar uma oportunidade de descomplicar a tecnologia das empresas, a GHG surgiu com a vontade de aplicar o aprendizado e 
                        técnicas de multinacionais para que todas as empresas se tornem mais competitivos gerando maior receita e buscando seu lugar no mercado.<br>
                        Assim surge a GHG Consultoria em Ti, focada para que a sua empresa tenha os melhores profissionais do mercado administrando, treinando 
                        e mostrando que o departamento de Ti de uma empresa pode ser mais valioso do que se imagina.
                    <p> <a  href="#work"    class="button black">   <i  class="fa   fa-th"> </i>    Nosso modelo de trabalho   </a>    </p>

                </div>
            </div>
        </div>

        <!-- 05 - Nosso Modelo de trabalho  -->
        <div>
            <!-- 05.1 - Nosso Modelo de trabalho  -->
            <div    class="container" style="padding:80px 16px"  id="work">
                <h1 class="center"><b><u>    Nossa maneira de atuação:   </u></b></h1><br>
                <div    class="row-padding">
                    
                    <div    class="col  m8">
                        <h1>    Analisamos suas necessidades   </h1>
                        <h3> -  Mapeamento das necessidades</h3>
                        <p> Uma solução bem aplicada deve ser construida sobre um claro entendimento
                            das necessidades de cada cliente. Realizamos o mapeamento e análise 
                            da atual situação do cliente, identificando o quanto cada necessidade
                            pode ser melhorada.
                    </div>
                    <div    class="col  m3">
                        <img    class="image    round-large"    src="_imagens/metodoDeTrabalho/AnaliseDeEstrutura.jpg"   alt="Buildings" width="300" height="200">
                    </div>
                </div>
            </div>

            <!-- 05.2 - Nosso Modelo de trabalho  -->
            <div    class="container    light-gray"   style="padding:80px 16px"  >
                <div    class="row-padding">
                    <div    class="col  m8">
                        <h1>    Apresentação da solução   </h1>
                        <h3> -  Proposta de soluções possíveis</h3>
                        <p> Após mapeado todos os pontos críticos do cliente, focamos em apresentar
                            todas as oportunidades que podemos oferecer para que cada problema seja solucionado.
                            Apresentamos o projeto adequado ao cliente com as tecnologias que irão levar performance 
                            e produtividade ao seu negócio.
                    </div>
                    <div    class="col  m3">
                        <img    class="image    round-large"    src="_imagens/metodoDeTrabalho/propostaMelhoria.jpg"   alt="Buildings" width="300" height="200">
                    </div>
                </div>
            </div>

            <!-- 05.3 - Nosso Modelo de trabalho  -->
            <div    class="container" style="padding:80px 16px"  >
                <div    class="row-padding">
                    <div    class="col  m8">
                        <h1>    Execução da proposta   </h1>
                        <h3> -  Execução, Acompanhamento e Monitoração</h3>
                        <p> As mudanças precisam ser organizadas para serem colocadas em prática, e assim
                            a execução do projeto ser realizada de maneira positiva. Executamos a proposta 
                            com as principais técnicas de execução de projetos, controlando e apresentando 
                            métricas e resultados de cada etapa.
                    </div>
                    <div    class="col  m3">
                        <img    class="image    round-large"    src="_imagens/metodoDeTrabalho/exec.webp"   alt="ExecuçãoDaProposta" width="300" height="200">
                    </div>
                </div>
            </div>

        </div>

        <!-- 05.1 - Nosso Modelo de trabalho  -->
        <div    class="container light-gray" style="padding:80px 16px" id="ws" >
            <h1 class="center"><b><u>       </u></b></h1><br>
            <div    class="row-padding">

                <div    class="col  m8">
                    <h1>    Desenvolvimento de WebSites   </h1>
                    <h3>—   Conheça as vantagens de se obter um WebSite para a sua empresa ...</h3>
                    <h3>   ... e depois crie seu WebSite conosco</h3>
                </div>
                
                <div    class="col  m3">
                    <a href="porqueTerUmWebSite.html" target="_blank">
                        <img    class="hover-opacity"   src="_imagens/produtos/empresaNaInternet.png" alt="porqueTerUmWebSite"    width="300" height="200">
                        <p>Clique Aqui</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- 07 - Nossos parceiros -->
        <div    id="modal01"    class="modal    black"  onclick="this.style.display='none'">
            <span   class="button   xxlarge black   padding-large   display-topright"   title="Close    Modal   Image"> X   </span>

            <div    class="modal-content    animate-zoom    center  transparent padding-64">
                <img id="img01" class="image">
                <p id="caption" class="opacity large"></p>
            </div>

        </div>

        <!-- 07.1 - Nossos parceiros -->
        <div    class="container "   style="padding:128px    16px"   >
            <h1 class="center"> </h1>
                <h1  class="center   large"> Nossos Parceiros: </h1>

            <!-- 07.2- Nossos parceiros -->
            <div    class="row-padding" style="margin-top:64px">

                <div    class="col  l3  m6">
                    <a href="http://www.itshare.com.br/" target="_blank">
                    <img    src="_imagens/parceiros/ITShare102.png"        style="width:100%"  class="hover-opacity"   alt="ITShare">
                </a>
                </div>
            </div>

        </div>

        <!-- 07.3 -->
        <div    id="modal01"    class="modal    black"  onclick="this.style.display='none'">
            <span   class="button   xxlarge black   padding-large   display-topright"   title="Close    Modal   Image"> X   </span>

            <div    class="modal-content    animate-zoom    center  transparent padding-64">
                <img id="img01" class="image">
                <p id="caption" class="opacity large"></p>
            </div>

        </div>

        <!-- 10 - Opcoes de contato -->
        <div    class="container    black" style="padding:50px    16px"   id="Contato">
            <h2 class="center"> CONTATO </h2>
                <p  class="center   large"> Não espere mais, envie-nos uma mensagem:    </p>

                <div    style="margin-top:48px">
                    <p> <i  class="fa   fa-map-marker   fa-fw   xxlarge margin-right">  </i> Travessa Lago Salto Caxias 91 - Colombo - PR   </p>
                    <p> <i  class="fa   fa-whatsapp     fa-fw   xxlarge margin-right">  </i> Phone: +55 41 9 9284-9781                      </p>
                    <p> <i  class="fa   fa-envelope     fa-fw   xxlarge margin-right">  </i> E-mail: contato@ghgconsultoriaemti.com         </p>
                    <br>


                    
                    <!-- 10.1 - Formulario de contato <a href="obrigado/index.html">-->
                    <form   action="index.php"  method="POST">
                        <p> <input  class="input border"    type="text" placeholder="Name"      required    name="nome">    </p>
                        <p> <input  class="input border"    type="text" placeholder="Email"     required    name="email">   </p>
                        <p> <input  class="input border"    type="text" placeholder="Subject"   required    name="assunto"> </p>
                        <p> <input  class="input border"    type="text" placeholder="Message"   required    name="mensagem"> </p>
                        <p>
                            <button class="button   black"  type="submit" name="enviar" value="submit">
                                <i  class="fa   fa-paper-plane">       </i>    ENVIAR MENSAGEM </a>
                            </button>
                        </p>

                        <?php
                            if( isset($mensagem) ) {
                                echo "<p>" . $mensagem . "</p>";
                            }
                        ?>
                    </form>

                    
                </div>
        </div>
        <!-- 10 - Opcoes de contato -->
        
        <!-- 11.0 - Localização -->
        
        <div    class="container black"   >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.038152404833!2d-49.16817898498699!3d-25.370037783816063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce9fa6cf03153%3A0x29b11f8c4baa0367!2sGHG%20Consultoria%20em%20TI!5e0!3m2!1spt-BR!2sbr!4v1638303290522!5m2!1spt-BR!2sbr" 
                width="100%"    height="600"    style="border:  1px"   allowfullscreen=""   loading="lazy"> </iframe>            
        </div>
        

        <!-- 12 - Rodapé -->
        <footer class="center   black   padding-64">

            <a  href="#Home"    class="button   light-grey">    <i class="fa    fa-arrow-up margin-right">  </i>    Home    </a>
                
                <div    class="xlarge   section">
                    <!--<a  href=""    target="_blank">    <i  class="fa   fa-facebook-official    hover-opacity"> </i>    </a>
                    <a  href=""    target="_blank">    <i  class="fa   fa-instagram            hover-opacity"> </i>    </a>
                    <a  href=""    target="_blank">    <i  class="fa   fa-snapchat             hover-opacity"> </i>    </a>
                    <a  href=""    target="_blank">    <i  class="fa   fa-pinterest-p          hover-opacity"> </i>    </a>
                    <a  href=""    target="_blank">    <i  class="fa   fa-twitter              hover-opacity"> </i>    </a>-->
                    <a  href="https://www.linkedin.com/in/guilherme-goulart-539a90b1/"  target="_blank">    <i  class="fa   fa-linkedin hover-opacity"> </i>    </a>
                    <a  href="https://github.com/guitechnologic"    target="_blank">    <i  class="fa   fa-github   hover-opacity"> </i>    </a>
                </div>

            <p> GHG Consultoria em Ti - Travessa Lago Salto Caxias, 91 - Colombo-PR  </a>  </p>
            
                    Todos os direitos reservados - 2021 </small>
                    <p>Powered by <a href="http://ghgconsultoriaemti.com/" target="_blank">GHG Consultoria em Ti</a></p>
        </footer>

    
        <!-- 13 - JavaScript -->
        <script>

        // Modal Image Gallery
            function    onClick(element)    {
                document.getElementById("img01").src    =   element.src;
                    document.getElementById("modal01").style.display    =   "block";
                var captionText =   document.getElementById("caption");
                    captionText.innerHTML   =   element.alt;
            }


            // 13.1 - Alternancia entre mostrar e ocultar a barra lateral ao clicar no icone de menu
            var mySidebar   =   document.getElementById(    "mySidebar" );

            function    botaoAbre() {
                if  (   mySidebar.style.display    ===  'block' )   {
                    mySidebar.style.display =   'none'  ;
                }   else    {
                    mySidebar.style.display =   'block';
                }
            }

            // 13.2 - Feche a barra lateral com o botão Fechar
            function    botaoFechar()   {
                mySidebar.style.display =   "none"  ;
            }

        </script>
        
    </body>

</html>