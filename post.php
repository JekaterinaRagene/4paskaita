<?php
if (isset($_GET['alga'])){
    $alga = $_GET['alga'];
}
if (isset($_GET['proc'])){
    $proc = $_GET['proc'];
}
if (isset($_GET['norimaAlga'])){
    $norimaAlga = $_GET['norimaAlga'];
}
$suma = $alga;
$kiekMetu = 0;
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Algos skaiciuokle</title>
</head>
<body>
    
    <main role="main" class="container">        
        <br>
        
        <a href="index.php" class="btn btn-primary">Grįžti</a> 
        
<br><br>
        <table class="table table-striped">
        <thead>
        <th>Metai</th>
        <th>Alga</th>
        </thead>
        <tbody>
            <?php while ($suma <= $norimaAlga){
                $suma = $suma + $alga * $proc / 100;
                $kiekMetu++;
                echo '<tr><td>'.$kiekMetu.'</td><td>'.round($suma, 2).'</td></tr>'; 
                }?>
        </tbody>
        </table>
    </main>
</html>

                   
                        
   