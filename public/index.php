<?php

require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use JoaoPedroPansiere\CodificaComposer\Cafe;

/*
    Composer facilita instalar libs prontas e úteis
*/

// Caso o usuário não tenha selecionado nenhuma opção, exibe as opções padrões
$carbon = '<a href="/?opcao=CARBON">Carbon</a>';
$faker = '<a href="/?opcao=FAKER">Faker</a>';
$debugBonito = '<a href="/?opcao=DEBUG">Debug bonito e moderno</a>';
$cafezinho = '<a href="/?opcao=CAFEZINHO">Função CAFÉZINHO</a>';

echo $carbon . ' - ' . $faker . ' - ' . $debugBonito . ' - ' . $cafezinho . '<br><br>';

$opcao = $_GET['opcao'] ?? null;

// Carbon - Ferramenta de datas e horários.
if ($opcao === 'CARBON') {
    $now = Carbon::now('America/Sao_Paulo');

    echo '<strong>Agora:</strong> ' . $now->toDateTimeString() . '<br>';
    echo '<strong>Daqui a 10 dias:</strong> ' . $now->copy()->addDays(10)->toFormattedDateString() . '<br>';
    echo '<strong>Ontem:</strong> ' . $now->copy()->subDay()->toFormattedDateString() . '<br>';
    echo '<strong>Semana que vem:</strong> ' . $now->copy()->addWeek()->toFormattedDateString() . '<br>';
    echo '<strong>Primeiro dia do mês:</strong> ' . $now->copy()->startOfMonth()->toDateString() . '<br>';
    echo '<strong>Último dia do mês:</strong> ' . $now->copy()->endOfMonth()->toDateString() . '<br>';
    echo '<strong>Diferença entre datas:</strong> ' . $now->diffInDays($now->copy()->addDays(45)) . ' dias<br>';
    echo '<strong>Formato personalizado:</strong> ' . $now->format('d/m/Y H:i') . '<br>';
    echo '<strong>Hoje é fim de semana?</strong> ' . ($now->isWeekend() ? 'Sim' : 'Não') . '<br>';
    echo '<strong>Dia da semana:</strong> ' . $now->dayName . '<br>';
    echo '<strong>Data + hora formatada em inglês:</strong> ' . $now->translatedFormat('l, d \\d\\e F \\d\\e Y H:i') . '<br>';

    exit();
}

// Faker - Gerador de dados falsos realistas
if ($opcao === 'FAKER') {
    $faker = Faker\Factory::create('pt_BR'); // Gera dados em português do Brasil

    echo '<strong>Nome completo:</strong> ' . $faker->name() . '<br>';
    echo '<strong>E-mail:</strong> ' . $faker->email() . '<br>';
    echo '<strong>Telefone:</strong> ' . $faker->phoneNumber() . '<br>';
    echo '<strong>Endereço completo:</strong> ' . $faker->address() . '<br>';
    echo '<strong>Cidade:</strong> ' . $faker->city() . '<br>';
    echo '<strong>Estado:</strong> ' . $faker->state() . '<br>';
    echo '<strong>CEP:</strong> ' . $faker->postcode() . '<br>';
    echo '<strong>Data de nascimento:</strong> ' . $faker->date('d/m/Y', '2005-01-01') . '<br>';
    echo '<strong>Profissão:</strong> ' . $faker->jobTitle() . '<br>';
    echo '<strong>Empresa:</strong> ' . $faker->company() . '<br>';
    echo '<strong>Texto curto (descrição):</strong> ' . $faker->sentence(8) . '<br>';
    echo '<strong>Texto longo (exemplo de biografia):</strong> ' . $faker->paragraph(3) . '<br>';
    echo '<strong>Número de cartão de crédito:</strong> ' . $faker->creditCardNumber() . '<br>';
    echo '<strong>IP público:</strong> ' . $faker->ipv4() . '<br>';
    echo '<strong>UUID:</strong> ' . $faker->uuid() . '<br>';
    echo '<strong>Senha simulada:</strong> ' . $faker->password(8, 12) . '<br>';

    exit();
}

// VarDumper - Ferramenta de debug moderna
if ($opcao === 'DEBUG') {
    $dadosParaDebugar = [
        'usuario' => [
            'nome' => 'João Pedro',
            'idade' => 123,
            'preferencias' => [
                'bebida' => 'Café',
                'linguagens' => ['PHP', 'JavaScript', 'MySql'],
                'sistemas' => [
                    'Linux',
                    'Windows',
                    'Docker' => [
                        'containers' => ['nginx', 'mysql', 'php-fpm'],
                        'volumes' => [
                            'src' => '/var/www/html',
                            'logs' => '/var/log/nginx'
                        ]
                    ]
                ]
            ]
        ],
        'anoAtual' => 2025,
        'curso' => 'CODIFICA+ PHP Avançado'
    ];

    echo "<h3>Debug bonito com Symfony VarDumper:</h3>";
    Symfony\Component\VarDumper\VarDumper::dump($dadosParaDebugar);

    echo "<hr><h3>Debug feio com var_dump:</h3>";
    var_dump($dadosParaDebugar);

    echo "<hr><h3>Debug menos feio com print_r:</h3><pre>";
    print_r($dadosParaDebugar);
    echo "</pre>";

    exit();
}

// Função teste
if ($opcao === 'CAFEZINHO') {

    $cafe = new Cafe();
    echo $cafe->informacoesCafe();

    exit();
}
