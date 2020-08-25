<?php

require_once('vendor/autoload.php');

use League\CLImate\CLImate;

$climate = new CLImate;

$climate->out('[1] Somar');
$climate->out('[2] Subtrair');
$climate->out('[3] Multiplicar');
$climate->out('[4] Dividir');

$input = $climate->input('Escolha uma das opções acima: ');
$input->accept(['1', '2', '3', '4']);
$menu = $input->prompt();

class Operacao
{
    public $numero1;
    public $numero2;
    protected $climate;

    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function input()
    {
        $numero1Input = $this->climate->input('Insira o primeiro número: ');
        $this->numero1 = $numero1Input->prompt();
        $numero2Input = $this->climate->input('Insira o segundo número: ');
        $this->numero2 = $numero2Input->prompt();
    }
}

$operacao = new Operacao($climate);
$operacao->input();

switch ($menu) {
    case '1':

        echo sprintf('Resultado: %s', (int) $operacao->numero1 + (int) $operacao->numero2);
        break;
    case '2':
        echo sprintf('Resultado: %s', (int) $operacao->numero1 - (int) $operacao->numero2);
        break;
    case '3':
        echo sprintf('Resultado: %s', (int) $operacao->numero1 * (int) $operacao->numero2);
        break;
    case '4':
        echo sprintf('Resultado: %s', (int) $operacao->numero1 / (int) $operacao->numero2);
        break;

    default:
        # code...
        break;
}
