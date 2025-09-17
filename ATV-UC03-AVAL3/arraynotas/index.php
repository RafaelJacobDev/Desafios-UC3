<?php

$alunos = [
    [
        "nome" => "João",
        "idade" => 20,
        "notaFinal" => 7.5
    ],
    [
        "nome" => "Maria",
        "idade" => 22,
        "notaFinal" => 9.0
    ],
    [
        "nome" => "Juca",
        "idade" => 27,
        "notaFinal" => 8.5
    ],
    [
        "nome" => "Ana",
        "idade" => 21,
        "notaFinal" => 6.8
    ],
    [
        "nome" => "Pedro",
        "idade" => 19,
        "notaFinal" => 5.2
    ],
    [
        "nome" => "Carla",
        "idade" => 23,
        "notaFinal" => 9.5
    ],
    [
        "nome" => "Lucas",
        "idade" => 25,
        "notaFinal" => 7.0
    ],
    [
        "nome" => "Mariana",
        "idade" => 24,
        "notaFinal" => 8.8
    ],
    [
        "nome" => "Rafaela",
        "idade" => 20,
        "notaFinal" => 6.5
    ],
    [
        "nome" => "Fernando",
        "idade" => 26,
        "notaFinal" => 9.2
    ]
];

// 1. Exibir as informações de cada aluno (código da resposta anterior)
foreach ($alunos as $aluno) {
    echo "nome: " . $aluno['nome'] . "<br>";
    echo "idade: " . $aluno['idade'] . " anos<br>";
    echo "notaFinal: " . number_format($aluno['notaFinal'], 1, ',', '.') . "<br><br>";
}

echo "<hr>"; // Adiciona uma linha horizontal para separar as seções

// 2. Calcular e exibir a média das notas
$somaDasNotas = 0;
$numeroDeAlunos = count($alunos);

foreach ($alunos as $aluno) {
    $somaDasNotas += $aluno['notaFinal'];
}

$mediaDasNotas = $somaDasNotas / $numeroDeAlunos;

echo "A média das notas da turma é: " . number_format($mediaDasNotas, 1, ',', '.') . "<br>";

?>