<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Copiladore de vite en css y js --}}
    @vite(['resources/css/app.scss'])
    <title>Inicio - DARKSHOP</title>
</head>
<body>
    
    {{-- Primera sección introductoria a la web --}}
    <section class="section_first">

        {{-- CONTENEDOR BANNER PUBLICITARIO DE INFORMACION DE ENVIOS Y INFORMACIÓN DE LA TIENDA --}}
        <span class="containerBanner_span">
            <div class="span_wrapper">
                {{-- Textos de información --}}
                <p class="span_text">ENVIOS A TODO COLOMBIA</p>
                <p class="span_text">PRODUCTOS DE CALIDAD AL 100%</p>
                <p class="span_text">COMUNIDAD AMANTE A LA ROPA NEGRA</p>
                <p class="span_text">20% DESCUENTO EN TU PRIMERA COMPRA</p>
                <p class="span_text">NO TE PIERDAS LOS EVENTOS QUE HACEMOS</p>
                <p class="span_text">AQUÍ TE VISTES ELEGANTE</p>
                <p class="span_text">SI TE GUSTA EL COLOR NEGRO ¡BIENVENIDO!</p>
            </div>
        </span>

        {{-- CONTENEDOR DEL TITULO Y MENU DE NAVEGACION DE LA TIENDA DE LA TIENDA --}}
        <header class="container_header">

            {{-- Nombre de la tienda --}}
            <h1 class="header_tittle">DARKSHOP</h1>

            {{-- Menu de navegacion de la tienda --}}
            <nav class="header_nav">

                {{-- Lista desordenada para el menu de navegación --}}
                <ul class="listDesordenada_nav">

                    {{-- Lista de opciones del menu --}}
                    <button type="submit" class="btn_nav">Inicio</button>

                    {{-- Lista de opciones del menu --}}
                    <button type="submit" class="btn_nav">Oulet</button>

                    {{-- Lista de opciones del menu --}}
                    <button type="submit" class="btn_nav">Categorías</button>

                    {{-- Lista de opciones del menu --}}
                    <button type="submit" class="btn_nav">Conjuntos</button>

                    {{-- Lista de opciones del menu --}}
                    <button type="submit" class="btn_nav">Nosotros</button>

                    <!-- Icono de Carrito de Compras (solo borde, sin relleno) -->
                    <i class="fa-solid fa-cart-shopping"></i>

                    <!-- Icono de Corazón (solo borde, sin relleno) -->
                    <i class="fa-regular fa-heart"></i>

                    <!-- Icono de Usuario (solo borde, sin relleno) -->
                    <i class="fa-regular fa-user"></i>



                </ul>
             
            </nav>

        </header>

        {{-- CONTENEDOR DEL CARRUSEL DE PRESENTACION DE LA TIENDA --}}
        <figure class="container_figure">

            <div class="figure_carrusel">

                {{-- Imagenes descriptivas de la tienda --}}
                <img src="https://d22fxaf9t8d39k.cloudfront.net/147777a44445bfa8baaafaa57c77c399dae2a8ff9b671a8a6de3a47ee850ab1b32864.jpeg" alt="" class="figure_images">


                 {{-- Imagenes descriptivas de la tienda --}}
                 <img src="https://d22fxaf9t8d39k.cloudfront.net/750d1307e03e48caffb31ca6c80bfaeaab39ee3f82a35fc58b2384c318da03b532864.jpeg" alt="" class="figure_images">

                  {{-- Imagenes descriptivas de la tienda --}}
                <img src="https://d22fxaf9t8d39k.cloudfront.net/cd49cceef2a788a054e36ef4aca25af3f561da76763422ff512037157365273132864.jpg" alt="" class="figure_images">

            </div>
        </figure>

    </section>

    {{-- Segunda sección con el outlet y productos baratos --}}
    <section class="section_second">

       {{--  CONTENEDOR DE OULET DE PRODUCTOS BAJO DE COSTO --}}
       <figure class="containner_oulet">
            <article class="oulet_carrusel">
                <div class="carrusel_track">
                    {{--  Producto de oulet unitario --}}
                    <div class="carrusel_card">FOTO1</div>

                                
                    {{--  Producto de oulet unitario --}}
                    <div class="carrusel_card">FOTO2</div>

                    
                    {{--  Producto de oulet unitario --}}
                    <div class="carrusel_card">FOTO3</div>
                </div>  
            </article>
        </figure>
        
        
        {{-- Carrusel de span de oulet  --}}
        <span class="containerOulet_span">
            <div class="image_carrusel">
                <img src="https://static.wixstatic.com/media/939316_a114c79122024dbdacc77d7f1aa31708~mv2.jpg/v1/fill/w_1932,h_600,al_c/939316_a114c79122024dbdacc77d7f1aa31708~mv2.jpg" alt="Foto1" class="image_oulet">
            </div>
        </span>
    </section>

    {{-- Tercera sección de categorias de la tienda --}}
    <section class="section_three">

        {{-- CONTENEDOR DE CATEGORIA "CHAQUETAS" --}}
        <figure class="container_categories">
            <div class="categoria_united">
                <img src="https://img01.ztat.net/article/spp-media-p1/3936c258f65141e0a7d446ada68afc13/6687ef5beb0e4bdba3213bcb5e4d4096.jpg?imwidth=762" alt="" class="image_categorie">
            </div>
        </figure>

        {{-- CONTENEDOR DE CATEGORIA "ZAPATOS GORRAS CAMISETAS " --}}
        <figure class="container_categories">
            <div class="categoria_united">
                <img src="https://http2.mlstatic.com/D_NQ_NP_660002-MLA78478145775_082024-O.webp" alt="" class="image_categorie">
            </div>
        </figure>

        {{-- CONTENEDOR DE CATEGORIA "CAMISETAS " --}}
        <figure class="container_categories">
            <div class="categoria_united">
                <img src="https://dynamobrand.co/cdn/shop/products/DSC00505.jpg?v=1716588464" alt="" class="image_categorie">
            </div>
        </figure>

        {{-- CONTENEDOR DE CATEGORIA "ZAPATOS GORRAS CAMISETAS " --}}
        <figure class="container_categories">
            <div class="categoria_united">
                <img src="https://www.regalospublicitarios.com/recursos/TopTex/img/descriptivas/TTKP185/639664.jpg" alt="" class="image_categorie">
            </div>
        </figure>

        {{-- CONTENEDOR DE CATEGORIA "ZAPATOS GORRAS CAMISETAS " --}}
        <figure class="container_categories">
            <div class="categoria_united">
                <img src="https://images.asos-media.com/products/pantalones-cargo-negros-de-jack-jones/205761434-2?$n_640w$&wid=513&fit=constrain" alt="" class="image_categorie">
            </div>
        </figure>

    </section>

    <section class="section_fourt">

        <div class="container_nosotros">

            <article class="nosotros_info">


                <figure class="info_icon">
                    <img src="https://i.pinimg.com/564x/97/e5/cf/97e5cfc14fd6930d6b293aee762a3c79.jpg" alt="" class="image_icon">
                </figure>


                <span class="info_texto">

                    <p class="info_nosotros">La moda negra llega a cada rincón del país. Con envíos a nivel
                         nacional y la comodidad del pago contra entrega, la exclusividad está al alcance de todos. Comprar es fácil,
                          rápido y seguro. La elegancia se entrega en tu puerta. La decicisión de hacer un pago ya no es un problema.</p>

                </span>
            </article>

        </div>

        <div class="container_nosotros">

            <article class="nosotros_info">


                <figure class="info_icon">
                    <img src="https://img.freepik.com/vector-premium/grupo-personas-icono-negro-boton-logo-comunidad-diseno_678192-2604.jpg" alt="" class="image_icon">
                </figure>


                <span class="info_texto">

                    <p class="info_nosotros">Más de 45.000 almas oscuras llevan con orgullo la esencia de la moda negra. Cada prenda refleja distinción, 
                        actitud y exclusividad. La elegancia no es una opción, es un estilo de vida. DarkShop viste a los que saben que el negro es más 
                        que un color, es identidad.</p>

                </span>
            </article>

        </div>

        <div class="container_nosotros">

            <article class="nosotros_info">


                <figure class="info_icon">
                    <img src="https://static.vecteezy.com/system/resources/previews/003/678/261/non_2x/quality-badge-icon-design-medal-and-ribbon-illustration-free-vector.jpg" alt="" class="image_icon">
                </figure>


                <span class="info_texto">

                    <p class="info_nosotros">Cada prenda está diseñada con tecnología Coolmax®, un tejido de alto rendimiento que absorbe la humedad, 
                        regula la temperatura y brinda suavidad extrema. Estilo y confort en una sola pieza. Oscuridad con tecnología para quienes exigen lo mejor</p>

                </span>
            </article>

        </div>
    </section>

    <section class="section_five">

             {{-- CONTENEDOR DEL CARRUSEL DE PRESENTACION DE LA TIENDA --}}
             <figure class="container_events">

                <div class="events_carrusel">
    
                    {{-- Imagenes descriptivas de la tienda --}}
                    <img src="https://cdn.shopify.com/s/files/1/0925/7878/files/Black-Friday_Banner_1024x1024.jpg?v=1732576672" alt="" class="carruselEvents_images">
    
                </div>
            </figure>

    </section>

    <section class="section_six">

    </section>

    <section class="section_seven">

    </section>

    {{-- Sección el feedback de la tienda --}}
    <section class="section_eight">

    </section>

   <foote class="container_footer">
        
   </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const containerSpan = document.querySelector(".containerBanner_span");
        const innerContainer = document.createElement("div");
        innerContainer.classList.add("inner_container");
  
        const texts = Array.from(document.querySelectorAll(".span_text"));
    
        // Eliminar los textos del DOM original para evitar duplicados
        texts.forEach(text => text.remove());

        // Agregar los textos al nuevo contenedor
        texts.forEach((text) => {
            innerContainer.appendChild(text);
        });

        // Agregar el contenedor con los textos al banner
        containerSpan.appendChild(innerContainer);
    
        // Iniciar la animación
        let currentIndex = 0;
        const textCount = texts.length;
    
        function showNextText() {

            // Ocultar todos los textos
            texts.forEach(text => {
                text.style.opacity = "0";
                text.style.transform = "translateX(100%)";
        });
        
        // Mostrar el texto actual
        texts[currentIndex].style.opacity = "1";
        texts[currentIndex].style.transform = "translateX(0)";
        
        // Preparar el siguiente índice
        currentIndex = (currentIndex + 1) % textCount;
        
        // Programar la siguiente transición
        setTimeout(hideCurrentText, 3000); // El texto permanece visible durante 3 segundos
    }
    
    function hideCurrentText() {
        // Ocultar el texto actual moviéndolo hacia la izquierda
        const previousIndex = (currentIndex - 1 + textCount) % textCount;
        texts[previousIndex].style.opacity = "0";
        texts[previousIndex].style.transform = "translateX(-100%)";
        
        // Mostrar el siguiente texto después de una pequeña pausa
        setTimeout(showNextText, 1200);
    }
    
    // Iniciar la secuencia
    showNextText();
});

    document.addEventListener("DOMContentLoaded", function () {
        const carrusel = document.querySelector(".figure_carrusel");
        const images = Array.from(document.querySelectorAll(".figure_images"));
        let currentIndex = 0;
        let direction = 1; // 1 para avanzar, -1 para retroceder

            function showNextImage() {
                // Calcular la posición de desplazamiento
                const offset = -currentIndex * 100;
                carrusel.style.transform = `translateX(${offset}%)`;
                carrusel.style.transition = "transform 1s ease-in-out"; // Transición suave

                // Actualizar índice respetando el ciclo correcto
                if (currentIndex === images.length - 1) {
                    direction = -1; // Cuando llega a la última, empieza a regresar
                } else if (currentIndex === 0) {
                    direction = 1; // Cuando llega a la primera, empieza a avanzar
                }

                currentIndex += direction; // Avanza o retrocede según la dirección

                // Esperar 3 segundos antes de mover a la siguiente imagen
                setTimeout(showNextImage, 5000);
            }

        // Iniciar el carrusel
        setTimeout(showNextImage, 3000);
});


document.addEventListener("DOMContentLoaded", function () {
    const carruselTrack = document.querySelector(".carrusel_track");
    const items = ["FOTO1", "FOTO2", "FOTO3"];

    function generarCarrusel() {
        carruselTrack.innerHTML = ""; 
        let totalElementos = items.length * 20; 
        for (let i = 0; i < totalElementos; i++) {
            let div = document.createElement("div");
            div.classList.add("carrusel_card");
            div.textContent = items[i % items.length]; 
            carruselTrack.appendChild(div);
        }
    }

    generarCarrusel();

    const cards = document.querySelectorAll(".carrusel_card");

    cards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transform = "scale(1.01)";
            this.style.zIndex = "10"; 
            this.style.boxShadow = "0px 0px 20px 5px rgba(255,255,255,0.5)";

            cards.forEach((other) => {
                if (other !== this) {
                    other.style.opacity = "0.5";
                }
            });
        });

        card.addEventListener("mouseleave", function () {
            this.style.transform = "scale(1)"; 
            this.style.zIndex = "1";
            this.style.boxShadow = ""; 

            cards.forEach((other) => {
                other.style.opacity = "1"; 
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const carrusel = document.querySelector(".image_carrusel");
    const imagen = document.querySelector(".image_oulet");

    function duplicarImagen() {
        for (let i = 0; i < 100; i++) { 
            let nuevaImagen = imagen.cloneNode(true);
            carrusel.appendChild(nuevaImagen);
        }
    }

    duplicarImagen();
});




    </script>

</body>
</html>