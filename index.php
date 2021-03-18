<?php
    $colunn1a = array("H");
    $colunn1b = array("Li","Na","K","Rb","Cs","Fr");

    $colunn2 = array("Be","Mg","Ca","Sr","Ba","Ra");

    $colunn3 = array("Li","Na");
    $colunn4 = array("Ti","Zr","Hf","Rf");
    $colunn5 = array("V","Nb","Ta","Db");
    $colunn6 = array("Cr","Mo","W","Sg");
    $colunn7 = array("Mn","tC","Re","Bh");
    $colunn8 = array("Fe","Ru","Os","Hs");
    $colunn9 = array("Co","Rh","Ir","Mt");
    $colunn10 = array("Ni","Pd","Pt","Ds");
    $colunn11 = array("Cu","Ag","Au","Rg");
    $colunn12 = array("Zn","Cd","Hg","Cn");

    $colunn13 = array("Al","Ga","In","Ti","Nh");

    $colunn14a = array("Si","Ge");
    $colunn14b = array("Sn","Pb","Fl");

    $colunn15a = array("N","P");
    $colunn15b = array("As","Sb");
    $colunn15c = array("Bi","Mc");

    $colunn16a = array("O","S","Se");
    $colunn16b = array("Te","Po");

    $colunn17 = array("F","Cl","Br","I","At","Ts");
    $colunn18 = array("He","Ne","Ar","Kr","Xe","Rn","Og");

    $colunn19 = ["La","Ce","Pr","Nd","Pm","Sm","Eu","Gd","Tb","Dy","Ho","Er","Tm","Yb","Lu"];
    $colunn20 = ["Ac","Th","Pa","U","Np","Pu","Am","Cm","Bk","Cf","Es","Fm","Nd","Mo","Lr"];
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periodica</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: #303030f5;
            font-family: "Roboto Mono",monospace;
            color: white;
        }
    </style>

</head>
<body>
    
<h1>Tabla Preriodica de los Elementos</h1>

<div class="periodit-table-container">
    <div class="group">
        <div class="elements otros-no-metales"><abbr class="symbol"><?php echo $colunn1a[0]?></abbr></div>
        <?php foreach($colunn1b as  $colunn1b): ?>
            <div class="elements alcalinos">
                <div class="symbol"><?php echo $colunn1b?></div>
            </div>
        <?php endforeach;?>
        
    </div>
    <div class="group">
        <?php foreach($colunn2 as  $colunn2): ?>
            <div class="elements alcalinos-terreos">
                <abbr class="symbol"><?php echo $colunn2 ?></abbr>
            </div>
        <?php endforeach;?>        
        
    </div>
    <div class="group">
        <?php foreach($colunn3 as  $colunn3): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn3 ?></abbr>
            </div>
        <?php endforeach;?>  
        
        
        <div class="elements lantanidos">
            <abbr class="symbol2">La-Lu</abbr>
        </div>
        <div class="elements acdtinidos">
            <abbr class="symbol2" >Ac-Lr</abbr>
        </div> 
    </div>
    <div class="group">
        <?php foreach($colunn4 as  $colunn4): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn4 ?></abbr>
            </div>
        <?php endforeach;?>          
        
    </div>
    <div class="group">
        <?php foreach($colunn5 as  $colunn5): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn5 ?></abbr>
            </div>
        <?php endforeach;?>
        
    </div>
    <div class="group">
        
        <?php foreach($colunn6 as  $colunn6): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn6 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <?php foreach($colunn7 as  $colunn7): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn7 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <?php foreach($colunn8 as  $colunn8): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn8 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <?php foreach($colunn9 as  $colunn9): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn9 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <?php foreach($colunn10 as  $colunn10): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn10 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <?php foreach($colunn11 as  $colunn11): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn11 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <?php foreach($colunn12 as  $colunn12): ?>
            <div class="elements metales-de-transicion">
                <abbr class="symbol" ><?php echo $colunn12 ?></abbr>
            </div>
        <?php endforeach;?>
    </div>
    <div class="group">
        
        <div class="elements metaloide">
            <abbr class="symbol">B</abbr>
        </div>
        <?php foreach($colunn13 as  $colunn13): ?>
            <div class="elements otros-metales">
                <abbr class="symbol" ><?php echo $colunn13 ?></abbr>
            </div>
        <?php endforeach;?>

    </div>
    <div class="group">
        
        <div class="elements otros-no-metales">
            <abbr class="symbol">C</abbr>
        </div>
        <?php foreach($colunn14a as  $colunn14a): ?>
            <div class="elements metaloide">
                <abbr class="symbol" ><?php echo $colunn14a ?></abbr>
            </div>
        <?php endforeach;?>
        <?php foreach($colunn14b as  $colunn14b): ?>
            <div class="elements otros-metales">
                <abbr class="symbol" ><?php echo $colunn14b ?></abbr>
            </div>
        <?php endforeach;?>
                       
    </div>
    <div class="group">
        <?php foreach($colunn15a as  $colunn15a): ?>
            <div class="elements otros-no-metales">
                <abbr class="symbol" ><?php echo $colunn15a ?></abbr>
            </div>
        <?php endforeach;?>
        <?php foreach($colunn15b as  $colunn15b): ?>
            <div class="elements metaloide">
                <abbr class="symbol" ><?php echo $colunn15b ?></abbr>
            </div>
        <?php endforeach;?>
        <?php foreach($colunn15c as  $colunn15c): ?>
            <div class="elements otros-metales">
                <abbr class="symbol" ><?php echo $colunn15c ?></abbr>
            </div>
        <?php endforeach;?>               
    </div>
    <div class="group">

        <?php foreach($colunn16a as  $colunn16a): ?>
            <div class="elements otros-no-metales">
                <abbr class="symbol" ><?php echo $colunn16a ?></abbr>
            </div>
        <?php endforeach;?> 
        <?php foreach($colunn16b as  $colunn16b): ?>
            <div class="elements metaloide">
                <abbr class="symbol" ><?php echo $colunn16b ?></abbr>
            </div>
        <?php endforeach;?> 
        <div class="elements otros-metales">
            <abbr class="symbol">Lv</abbr>
        </div>                
    </div>
    <div class="group">
        <?php foreach($colunn17 as  $colunn17): ?>
            <div class="elements halogenos">
                <abbr class="symbol" ><?php echo $colunn17 ?></abbr>
            </div>
        <?php endforeach;?>         
                    
    </div>
    <div class="group">
        <?php foreach($colunn18 as  $colunn18): ?>
            <div class="elements gases-nobles">
                <abbr class="symbol" ><?php echo $colunn18 ?></abbr>
            </div>
        <?php endforeach;?>                
    </div>
</div>

<br>
<br>

<div class="secundary-periodit-table-container">
    <?php foreach($colunn19 as $colunn19):?>
        <div class="group ">
            <div class="elements lantanidos">
                <abbr class="symbol"><?php echo $colunn19 ?></abbr>
            </div>                  
        </div>
       
    <?php endforeach;?>
    <br>
    
</div>
<div class="secundary-periodit-table-container">
    <?php foreach($colunn20 as $colunn20):?>
        <div class="group ">
            <div class="elements acdtinidos">
                <abbr class="symbol"><?php echo $colunn20 ?></abbr>
            </div>                  
        </div>
       
    <?php endforeach;?>
    <br>
    
</div>
    
<br>
<div class="legend text-center fuente " >
    <div class="group ">
        <div class="row border">
            <div class="col-md-6">
                <div class="row border">
                    <div class="col-md 12 bg-grey" >Metales</div>
                </div>
                <div class="row border">
                    <div class="col-md-2 alcalinos border">Alcalinos</div>
                    <div class="col-md-3 alcalinos-terreos border">Alcalinoterreos</div>
                    <div class="col-md-3 metales-de-transicion border">Metales de Transicion/Bloque D</div>
                    <div class="col-md-2">
                        <div class="row border">
                            <div class="col-md-12 lantanidos">Lantanidos</div>
                        </div>
                        <div class="row border">
                            <div class="col-md-12 acdtinidos">Actinidos</div>
                        </div>
                    </div>
                    <div class="col-md-2 otros-metales">Otros Metales</div>
                </div>
            </div>
            <div class="col-md-2 metaloide" >Metaloides</div>
            <div class="col-md-4">
                <div class="row border">
                    <div class="col-md-12 bg-grey">No Metales</div>
                </div>
                <div class="row border">
                    <div class="col-md-4 otros-no-metales border">Otros No Metales</div>
                    <div class="col-md-4 halogenos border">Halogenos</div>
                    <div class="col-md-4 gases-nobles border">Gases nobles</div>
                </div>
            </div>
        </div> 
    </div>  
      
    
</div>

    
<script src="assets/js/index.js"></script>
</body>
</html>