<?php

require __DIR__ . '/../vendor/autoload.php';

use Faker\Factory;
use Carbon\Carbon;
use JoaoPedroPansiere\CodificaComposer\Cafe;

/*
    Composer facilita instalar libs prontas e úteis
*/

// Caso o usuário não tenha selecionado nenhuma opção, exibe as opções padrões
$carbon = '<a href="/?opcao=CARBON">Carbon</a>';
$faker = '<a href="/?opcao=FAKER">Faker</a>';
$debugBonito = '<a href="/?opcao=DEBUG">Debug bonito e moderno</a>';
$cafezinho = '<a href="/?opcao=CAFEZINHO"><svg style="width:24px;height:24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M184 48C170.7 48 160 58.7 160 72C160 110.9 183.4 131.4 199.1 145.1L200.2 146.1C216.5 160.4 224 167.9 224 184C224 197.3 234.7 208 248 208C261.3 208 272 197.3 272 184C272 145.1 248.6 124.6 232.9 110.9L231.8 109.9C215.5 95.7 208 88.1 208 72C208 58.7 197.3 48 184 48zM128 256C110.3 256 96 270.3 96 288L96 480C96 533 139 576 192 576L384 576C425.8 576 461.4 549.3 474.5 512L480 512C550.7 512 608 454.7 608 384C608 313.3 550.7 256 480 256L128 256zM480 448L480 320C515.3 320 544 348.7 544 384C544 419.3 515.3 448 480 448zM320 72C320 58.7 309.3 48 296 48C282.7 48 272 58.7 272 72C272 110.9 295.4 131.4 311.1 145.1L312.2 146.1C328.5 160.4 336 167.9 336 184C336 197.3 346.7 208 360 208C373.3 208 384 197.3 384 184C384 145.1 360.6 124.6 344.9 110.9L343.8 109.9C327.5 95.7 320 88.1 320 72z"/></svg></a>';

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
    $faker = Factory::create('pt_BR'); // Gera dados em português do Brasil

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
    $cafe->informacoesCafe();

    exit();
}
