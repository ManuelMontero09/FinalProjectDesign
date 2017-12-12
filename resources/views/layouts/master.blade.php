<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') | JETRO</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" />
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="images/logo.png" >
            </div>

            <nav>
                <a href='#'>HOME</a>
                <a href='#'>ABOUT US</a>
                <a href='#'>BLOG</a>
                <a href='#'>PORTFOLIO</a>
                <a href='#'>CONTACT US</a>
            </nav>
        </header>
        <section class="main">
            <div class="image-principal">
                <div class="imagen-costado-principal">
                    <img src="images/slider-decoration.png" alt="">
                </div>

                <div class="imagen-central-principal">
                    <img src="images/slider-1.png" alt="">
                </div>

                <div class="imagen-costado-principal">
                    <img src="images/slider-decoration.png" alt="">
                </div>
            </div>

            
            <div class="shape-main-principal">
                <div class="shape-main-1">
                    <img src="images/imagen1.png">
                    <img src="images/imagen2.png">

                    <h2>CHECK OUT MY LATEST PORTFOLIO ITEMS</h2>
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis. Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                    <a class="button-orange">MORE</a>
                </div>
                
                <div class="shape-main-2">
                    <img src="images/imagen3.png">
                    <img src="images/imagen4.png">
            
                    <h2>TOP NOTCH QUALITY WORK &amp; SERVICES</h2>
                        <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis. Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                        <a class="button-orange">MORE</a>
                </div>

                <div class="shape-main-3">
                    <img src="images/imagen5.png">
                    <img src="images/imagen6.png">
            
                    <h2>FOLLOW ME ON TWITTER FACEBOOK &amp; PINTEREST</h2>
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis. Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                    <a class="button-orange">MORE</a>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="colorFooterSimple"></div>
        <div class="colorFooterContainer">
            <div class="infoFooter">
                <p class="titleFooter">ABOUT JETRO</p>
                <p>El algoritmo en cuestión se basa en una entrada
                    suficientemente grande de texto sobre</p>
                    <p>y en un generador aleatorio que posteriormente encadena las mismas palabras,
                        según dichas frecuencias.</p>
            </div>

            <div class="infoFooter">
                <p class="titleFooter">TWITTER WIDGET</p>
                <p class="textColorChange">El algoritmo </p> 
                <p class="text">en cuestión se basa en una entrada suficientemente grande de texto sobre
                    <p class="textColorOrange">Parrafo al azar</p>
                    el que realiza un análisis de frecuencias («gramatical»)</p>
                    
            </div>

            <div class="infoFooter">
                <p class="titleFooter">CONTACT US</p>
                <p>El algoritmo en cuestión se basa en una entrada suficientemente grande de texto sobre
                    el que realiza un análisis de frecuencias.</p>
                    <div>
                        <img SRC="images/fb.png" WIDTH=30 HEIGHT=30 ALT="">
                        <img SRC="images/twiter.png" WIDTH=30 HEIGHT=30 ALT="">
                        <img SRC="images/mail.png" WIDTH=30 HEIGHT=30 ALT="">
                        <img SRC="images/red.png" WIDTH=30 HEIGHT=30 ALT="">
                        <img SRC="images/vimeo.png" WIDTH=30 HEIGHT=30 ALT="">
                    </div>
            </div>
        </div>
        <div class="colorFooterSimple"></div>
    </footer>

</body>
</html>