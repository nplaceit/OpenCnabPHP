<?php

namespace CnabPHP\resources\B136\remessa\cnab400;

use CnabPHP\RegistroRemAbstract;
use CnabPHP\RemessaAbstract;
use CnabPHP\resources\generico\remessa\cnab400\Generico1;

class Registro1 extends Generico1
{

    protected $meta = array(
        //1-1
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true),
        //2-6
        'agencia_debito' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //7-7
        'digito_agencia_debito' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //8-19
        'conta_corrente_pagador' => array(
            'tamanho' => 12,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //20-20
        'digito_conta_corrente_pagador' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //21-21
        'filler0' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => false),
        //22-24
        'carteira_banco' => array(
            'tamanho' => 3,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //25-37
        'zeros' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //38-62
        'n_controle_participante' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        //63-65
        'codigo_banco_debito' => array(
            'tamanho' => 3,
            'default' => '136',
            'tipo' => 'int',
            'required' => true),
        //66-67
        'filler1' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true),
        //68-92
        'filler2' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        //93-93
        'filler3' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //94-94
        'codigo_multa' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        //95-104
        'taxa_multa' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        //105-105
        'tipo_mora' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'alfa',
            'required' => true),
        //106-106
        'identificacao_titulo_descontavel' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true),
        //107-108
        'filler4' => array(
            'tamanho' => 2,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        //109-110
        'identificacao_ocorrencia' => array(
            'tamanho' => 2,
            'default' => '01',
            'tipo' => 'int',
            'required' => true),
        //111-120
        'seu_numero' => array(
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        //121-126
        'data_vencimento' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        //127-139
        'valor' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        //140-149
        'filler5' => array(
            'tamanho' => 10,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //150-150
        'cod_desconto' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true),
        //151-156
        'data_emissao' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true),
        //157-157
        'filler6' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //158-158
        'codigo_protesto' => array(
            'tamanho' => 1,
            'default' => '3',
            'tipo' => 'int',
            'required' => true),
        //159-160
        'dias_protesto' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true),
        //161-173
        'vlr_juros' => array( // 8.3Q
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        //174-179
        'data_desconto' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        //180-192
        'vlr_desconto' => array(      //13.3R
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true),
        //193-202
        'nosso_numero' => array(
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        //203-203
        'nosso_numero_dv' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //204-205
        'filler7' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //206-218
        'valor_abatimento' => array(
            'tamanho' => 13,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
        //219-220
        'tipo_inscricao' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        //221-234
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        //235-274
        'nome_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        //275-314
        'endereco_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        //315-326
        'bairro_pagador' => array(
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        //327-334
        'cep_pagador' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true),
        //335-354
        'cidade_pagador' => array(
            'tamanho' => 20,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        //355-356
        'uf_pagador' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true),
        //357-394
        'pagador_avalista' => array(
            'tamanho' => 38,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true),
        //395-400
        'numero_sequencial_arquivo' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true),
    );

    public function __construct($data = null)
    {
        if (empty($this->data))
            parent::__construct($data);
        $this->inserirMensagem($data);
    }

    public function inserirMensagem($data)
    {
        if (!empty($data['mensagem'])) {
            $class = 'CnabPHP\resources\\B' . RemessaAbstract::$banco . '\remessa\\' . RemessaAbstract::$layout . '\Registro2';
            $this->children[] = new $class($data);
        }
    }

    protected function set_taxa_multa($value)
    {
        $this->data['taxa_multa'] = $value;
        $this->data['codigo_multa'] = ($value > 0) ? 2 : 0;
    }

    protected function set_nosso_numero_dv($value)
    {
        $result = self::modulo11($this->data['nosso_numero']);
        $this->data['nosso_numero_dv'] = $result['digito'];
    }

    protected static function modulo11($num, $base = 9)
    {

        $fator = 2;

        $soma = 0;
// Separacao dos numeros.
        for ($i = strlen($num); $i > 0; $i--) {
//  Pega cada numero isoladamente.
            $numeros[$i] = substr($num, $i - 1, 1);
//  Efetua multiplicacao do numero pelo falor.
            $parcial[$i] = $numeros[$i] * $fator;
//  Soma dos digitos.
            $soma += $parcial[$i];
            if ($fator == $base) {
//  Restaura fator de multiplicacao para 2.
                $fator = 1;
            }
            $fator++;
        }
        $result = array(
            'digito' => ($soma * 10) % 11,
            // Remainder.
            'resto' => $soma % 11,
        );
        if ($result['digito'] == 10) {
            $result['digito'] = 0;
        }
        return $result;
    }

}
