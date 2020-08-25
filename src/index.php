<?php

require_once('vendor/autoload.php');

$climate = new \League\CLImate\CLImate;

$climate->out('[1] Somar');
$climate->out('[2] Subtrair');
$climate->out('[3] Multiplicar');
$climate->out('[4] Dividir');

$input = $climate->input('Escolha uma das opções acima: ');
$input->accept(['1', '2', '3', '4']);
$menu = $input->prompt();

switch ($menu) {
    case '1':
        $numero1Input = $climate->input('Insira o primeiro número: ');
        $numero1 = $numero1Input->prompt();
        $numero2Input = $climate->input('Insira o segundo número: ');
        $numero2 = $numero2Input->prompt();
        echo sprintf('Resultado: %s', (int) $numero1 + (int) $numero2);
        break;
    case '2':
        $numero1Input = $climate->input('Insira o primeiro número: ');
        $numero1 = $numero1Input->prompt();
        $numero2Input = $climate->input('Insira o segundo número: ');
        $numero2 = $numero2Input->prompt();
        echo sprintf('Resultado: %s', (int) $numero1 - (int) $numero2);
        break;
    case '3':
        $numero1Input = $climate->input('Insira o primeiro número: ');
        $numero1 = $numero1Input->prompt();
        $numero2Input = $climate->input('Insira o segundo número: ');
        $numero2 = $numero2Input->prompt();
        echo sprintf('Resultado: %s', (int) $numero1 * (int) $numero2);
        break;
    case '4':
        $numero1Input = $climate->input('Insira o primeiro número: ');
        $numero1 = $numero1Input->prompt();
        $numero2Input = $climate->input('Insira o segundo número: ');
        $numero2 = $numero2Input->prompt();
        echo sprintf('Resultado: %s', (int) $numero1 / (int) $numero2);
        break;

    default:
        # code...
        break;
}
