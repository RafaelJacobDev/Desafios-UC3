<?php
$contagem=[1,2,3,4,5,6,7,8,9,10]; //Array original 

$mensagem="";
$mensagem3="";

for ($a = 0; $a < count($contagem); $a++) {
    $mensagem .= "<li>" . $contagem[$a] . "</li>";
   $mensagem2 = array_sum($contagem);
}
rsort($contagem); //precisa iniciar com o rsort para ele fazer a contagem decrescente antes de entrar no for 
for ($i = 0; $i < count($contagem); $i++){
    $mensagem3 .= "<li>" . $contagem[$i] . "</li>";

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Contagem</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>

<body>
    <main class="main-container">
        <div class="content-wrapper">
            <div class="header-section">
                <h1 class="main-title">Bem vindo a sua conta</h1>
                <p class="subtitle">Contas</p>
            </div>


            <?= $mensagem ?>



            <?= $mensagem2 ?>

            <?= $mensagem3 ?>

           



        </div>
    </main>
</body>

</html>