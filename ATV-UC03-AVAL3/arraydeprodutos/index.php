<!-- 2. Crie um array associativo para armazenar informações de um produto: -->
 
<!-- a-Nome do produto, preço, quantidade em estoque. -->
<!-- b-Adicione 05 produtos e exiba as informações formatadas da seguinte forma: -->
    <!-- Produto: TV -->
    <!-- Preço: R$ 5.600,00 -->
    <!-- Qtd: 08 -->
<!-- c-Atualize o preço de todos os produto e exiba todos eles novamente, simulando um desconto de 10% em todos os produtos. -->

<?php

$produtos = [
    [
        "nome" => "Tv",
        "preco" => 5600.00,
        "estoque" => 8,
    ],
    [
        "nome" => "Pc Gamer",
        "preco" => 3600.00,
        "estoque" => 1,
    ],
    [
        "nome" => "Celular",
        "preco" => 1600.00,
        "estoque" => 10,
    ],
    [
        "nome" => "Carta Pokémon",
        "preco" => 20.00,
        "estoque" => 10,
    ],
    [
        "nome" => "Magic",
        "preco" => 400.00,
        "estoque" => 18,
    ],
];

echo "<h2>Produtos sem desconto:</h2>";
foreach ($produtos as $produto) {
    echo "<p>";
    echo "<b>Produto:</b> " . $produto['nome'] . "<br>";
    echo "<b>Preço:</b> R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    echo "<b>Qtd:</b> " . $produto['estoque'] . "<br>";
    echo "</p>";
}

echo "---";

echo "<h2>Produtos com desconto de 10%:</h2>";
foreach ($produtos as &$produto) { // O "&" é usado para passar a referência do item, permitindo a atualização. Com & (referência): O foreach trabalha diretamente com o item original. As alterações modificam o array.
    $produto['preco'] = $produto['preco'] * 0.90; // Aplica o desconto de 10%
    echo "<p>";
    echo "<b>Produto:</b> " . $produto['nome'] . "<br>";
    echo "<b>Preço:</b> R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    echo "<b>Qtd:</b> " . $produto['estoque'] . "<br>";
    echo "</p>";
}



// Para acessar um valor:
//echo $produto["nome"]; // Exibe Tv



?>
