<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Faster+One&family=Inter:wght@200&family=Noto+Serif+SC:wght@200;300&display=swap');
</style>
</head>
<body>
    <?php
        if (file_exists('carta.xml')) {
        $food = simplexml_load_file('carta.xml');
} else {
    exit('Error abriendolo');
} 
?>
    <img class="banner" src="./img/tfk.png" alt="">
</div>
            <div class = "info">
                <H1 class="invert">Información</H1>
                   <div class="row">
                        <div class="col1">
                        <img class = "icono invert" src= "./img/icon/helao.svg">
                        <br>
                        <p class="invert">Inluye Postre</p>
                        </div>
                        <div class="col2">
                        <img class = "icono invert" src= "./img/icon/picante.svg">
                        <p class="invert">Picante</p>
                        </div>
                        <div class="col3">
                        <img class = "icono invert" src= "./img/icon/gluten.svg">
                        <p class="invert">Sin Gluten</p>
                        </div>
                        <div class="col4">
                        <img class = "icono invert" src= "./img/icon/hamburguesa.svg">
                        <p class="invert">Hamburguesa</p>
                        </div>
                   </div>
            </div>

</div>
<div class="rows">

        <div class="linea1padre">
            <div class = "izq">
                <H1 class="invert">Menús para una persona</H1>
                <br>
                <div class="divcord">
                    <?php
                        $count = 1;
                        /*llamar comida */
                        foreach ($food -> comida as $comida){
                            if($comida['grupo']=='Individual'){                             
                                echo "<span>$comida->nombre</span>";
                                foreach($comida->caracteristicas->item as $item){
                                    if($item=="picante"){
                                        echo'<img class = "icono invert" src= "./img/icon/picante.svg">';
                                    }
                                    if($item=="gluten"){
                                        echo'<img class = "icono invert" src= "./img/icon/gluten.svg">';
                                    }
                                    if($item=="postre"){
                                        echo'<img class = "icono invert" src= "./img/icon/helao.svg">';
                                    }
                                    if($item=="burger"){
                                        echo'<img class = "icono invert" src= "./img/icon/hamburguesa.svg">';
                                    }
                                }
                                $count++;
                        
                                    /* acordeon*/
                                    echo '<div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading'.$count.'">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$count.'" aria-expanded="true" aria-controls="collapse'.$count.'">
                                                    Información
                                                    </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse'.$count.'" class="accordion-collapse collapse" aria-labelledby="heading'.$count.'" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"> 
                                                    <strong>'.$comida -> desc.'</strong>
                                                    </br>
                                                    <strong>'.$comida -> calorías.'</strong>
                                                    </div>
                                                    <strong>'.$comida -> precio.'</strong>
                                                    </br>  
                                                </div>
                                        </div>'; 
                                };                  
                        };
                        ?>
                </div>

            </div>

            <div class = "right">
                <H1>Menús para dos personas</H1>
                <br>
                <!--<h2>Desc platos:</h2>-->
                <div class = "divcord">
                        <?php
                    foreach ($food -> comida as $comida){
                        if($comida['grupo']=='ParaDos'){                             
                            echo "<span>$comida->nombre</span>";
                            foreach($comida->caracteristicas->item as $item){
                                if($item=="picante"){
                                    echo'<img class = "icono" src= "./img/icon/picante.svg">';
                                }
                                if($item=="gluten"){
                                    echo'<img class = "icono" src= "./img/icon/gluten.svg">';
                                }
                                if($item=="postre"){
                                    echo'<img class = "icono" src= "./img/icon/helao.svg">';
                                }
                                if($item=="burger"){
                                    echo'<img class = "icono" src= "./img/icon/hamburguesa.svg">';
                                }
                            }
                            $count++;
                            /* acordeon*/
                         echo '<div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading'.$count.'">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$count.'" aria-expanded="true" aria-controls="collapse'.$count.'">
                            Información
                            </button>
                            </h2>
                        </div>
                        <div id="collapse'.$count.'" class="accordion-collapse collapse" aria-labelledby="heading'.$count.'" data-bs-parent="#accordionExample">
                            <div class="accordion-body"> 
                            <strong>'.$comida -> desc.'</strong>
                            </br>                   
                            <strong>'.$comida -> calorías.'</strong>
                            </div>
                            <strong>'.$comida -> precio.'</strong>
                            </br>
                        </div>
                </div>';    
                        } 
                    }
                    ?>
                </div>
                
            </div>
         </div>
            <div class = "izqbot">
                <H1>Menús Familiares</H1>
                <br>
                <div class="divcord">
                 <?php    
                        /*llamar comida */
                        foreach ($food -> comida as $comida){
                            if($comida['grupo']=='ParaCompartir'){                             
                                echo "<span>$comida->nombre</span>";
                                foreach($comida->caracteristicas->item as $item){
                                    if($item=="picante"){
                                        echo'<img class = "icono " src= "./img/icon/picante.svg">';
                                    }
                                    if($item=="gluten"){
                                        echo'<img class = "icono " src= "./img/icon/gluten.svg">';
                                    }
                                    if($item=="postre"){
                                        echo'<img class = "icono " src= "./img/icon/helao.svg">';
                                    }
                                    if($item=="burger"){
                                        echo'<img class = "icono " src= "./img/icon/hamburguesa.svg">';
                                    }
                                }
                                $count++;
                        
                                    /* acordeon*/
                                    echo '<div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading'.$count.'">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$count.'" aria-expanded="true" aria-controls="collapse'.$count.'">
                                                    Información
                                                    </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse'.$count.'" class="accordion-collapse collapse" aria-labelledby="heading'.$count.'" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body"> 
                                                    <strong>'.$comida -> desc.'</strong>
                                                    </br>
                                                    <strong>'.$comida -> calorías.'</strong>
                                                    </div>
                                                    <strong>'.$comida -> precio.'</strong>
                                                    </br>  
                                                </div>
                                        </div>'; 
                                };                  
                        };
                        ?>
                </div>
         
            </div>
<!-- poco a poco estoy perdiendo la cordura -->            
            <div class = "rightbot">
                <H1 class= "invert">Ofertas</H1>
                <br>
                <div class="divcord">
                                    <?php
                        foreach ($food -> comida as $comida){
                            if($comida['grupo']=='Ofertas'){                             
                                echo "<span>$comida->nombre</span>";
                                foreach($comida->caracteristicas->item as $item){
                                    if($item=="picante"){
                                        echo'<img class = "icono invert" src= "./img/icon/picante.svg">';
                                    }
                                    if($item=="gluten"){
                                        echo'<img class = "icono invert" src= "./img/icon/gluten.svg">';
                                    }
                                    if($item=="postre"){
                                        echo'<img class = "icono invert" src= "./img/icon/helao.svg">';
                                    }
                                    if($item=="burger"){
                                        echo'<img class = "icono invert" src= "./img/icon/hamburguesa.svg">';
                                    }
                                }
                                $count++;
                                /* acordeon*/
                            echo '<div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading'.$count.'">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$count.'" aria-expanded="true" aria-controls="collapse'.$count.'">
                                Información
                                </button>
                                </h2>
                            </div>
                            <div id="collapse'.$count.'" class="accordion-collapse collapse" aria-labelledby="heading'.$count.'" data-bs-parent="#accordionExample">
                                <div class="accordion-body"> 
                                <strong>'.$comida -> desc.'</strong>
                                </br>                   
                                <strong>'.$comida -> calorías.'</strong>
                                </div>
                                <strong>'.$comida -> precio.'</strong>
                                </br>
                            </div>
                            
                    </div>';    
                            } 
                        }
                        ?>
            </div>
              
</body>
</html>
