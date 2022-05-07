
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="javascript/highslide-with-gallery.js"></script>
    <title> Poznan </title>
    <link rel="stylesheet" href="boostrap.css" />
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript">
	
        hs.graphicsDir = 'javascript/images/';
        
        hs.align = 'center';
        
        hs.transitions = ['expand', 'crossfade'];
        
        hs.outlineType = 'rounded-white';
        
        hs.fadeInOut = true;
        
        
        if (hs.addSlideshow) hs.addSlideshow({
        
        interval: 5000,
            
        repeat: false,
            
        useControls: true,
            
        fixedControls: 'fit',
            
        overlayOptions: {
                
            opacity: .75,
                
            position: 'bottom center',
                
            hideOnMouseOut: true
            
    }
        });
    
    </script>
</head>
<body>
    <header>

        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            
            <div class="container">
                <!-- <img src="Logo_PP.png" width="100" height="100" align="left">-->
                <!--<img src="ir.png" width="91" height="24" align="left"> -->
                <a class="navbar-brand" href="index.html">Historia miast Polski</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="historia.html">Historia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="spacer.html">Wirtualny spacer</a>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="galeria.php">Galeria zdjęć</a>
                        </li>
                        

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div id="galeria">

            <ul>
            
            <?php
            
            $katalog = "Poznan";
            
            $katalogminiaturki = "Poznan";
            
            $galeria = opendir( $katalog );
            
            while ( $zdjecie = readdir( $galeria ) )
            
            {
               
            $odczyt = pathinfo( $katalog.'/'.$zdjecie );
              
            if ( $odczyt['extension']  == 'jpg' ){
            
               
             echo '<li><a href="'.$katalog.'/'.$zdjecie.'" class="highslide" onclick="return hs.expand(this)" title="Zdjęcie: '.$zdjecie.'"><img width="200" height="150" src="'.$katalogminiaturki.'/'.$zdjecie.'" alt="Zdjęcie: '.$zdjecie.'" /></a></li>';
              
            }
            
            
            }
            
            closedir($galeria);
            
            ?>
            
        </ul>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
         <!--  &copy; 2021 - Maciej Bączyk --> 
        </div>
    </footer>
</body>
</html>
