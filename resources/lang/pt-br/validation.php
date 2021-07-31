<?php

return [

    /*
    | ------------------------------------------------- -------------------------
    | Linhas de Validação de Idioma
    | ------------------------------------------------- -------------------------
    |
    | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas por
    | a classe validadora. Algumas dessas regras têm várias versões, como
    | como as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas mensagens aqui.
    |
    */

    'aceito'              => 'O campo :atributo deve ser aceito.' ,
    'active_url'            => 'O campo: attribute não é uma URL válida.' ,
    'após'                 => 'O campo: atributo deve ser uma data posterior a: date.' ,
    'after_or_equal'        => 'O campo: atributo deve ser uma data posterior ou igual a: date.' ,
    'alpha'                 => 'O campo: attribute só pode conter letras.' ,
    'alpha_dash'            => 'O campo: atributo só pode conter letras, números e traços.' ,
    'alpha_num'             => 'O campo: atributo só pode conter letras e números.' ,
    'array'                 => 'O campo: atributo deve ser uma matriz.' ,
    'antes'                => 'O campo: atributo deve ser uma data anterior: data.' ,
    'before_or_equal'       => 'O campo: atributo deve ser uma data anterior ou igual a: date.' ,
    'entre'               => [
        'numérico' => 'O campo: atributo deve ser entre: min e: max.' ,
        'arquivo'     => 'O campo: atributo deve ser entre: min e: max kilobytes.' ,
        'string'   => 'O campo: atributo deve ser entre: min e: max caracteres.' ,
        'array'    => 'O campo: atributo devedor entre: min e: itens máximos.' ,
    ],
    'boolean'               => 'O campo: attribute deve ser verdadeiro ou falso.' ,
    'confirmado'             => 'O campo: atributo de confirmação não confere.' ,
    'date'                  => 'O campo: attribute não é uma data válida.' ,
    'date_equals'           => 'O campo: atributo deve ser uma data igual a: date.' ,
    'date_format'           => 'O campo: atributo não corresponde ao formato: formato.' ,
    'different'             => 'Os campos: attribute e: other devem ser diferentes.' ,
    'dígitos'                => 'O campo: programador de atributos: dígitos dígitos.' ,
    'digits_between'        => 'O campo: atributo deve ter entre: min e: max dígitos.' ,
    'dimensões'            => 'O campo: atributo tem dimensões de imagem verdadeiro.' ,
    'distinto'              => 'O campo: atributo campo tem um valor duplicado.' ,
    'email'                 => 'O campo: o atributo deve ser um endereço de e-mail válido.' ,
    'ends_with'             => 'O campo: atributo deve terminar com um dos seguintes:: valores' ,
    'existe'                => 'O campo: atributo selecionado é inválido.' ,
    'arquivo'                  => 'O campo: atributo deve ser um arquivo.' ,
    'preenchido'                => 'O campo: atributo deve ter um valor.' ,
    'gt' => [
        'numeric' => 'O campo: atributo deve ser maior que: valor.' ,
        'arquivo'     => 'O campo: atributo deve ser maior que: valor kilobytes.' ,
        'string'   => 'O campo: atributo deve ser maior que: caracteres de valor.' ,
        'array'    => 'O campo: atributo deve conter mais de: itens de valor.' ,
    ],
    'gte' => [
        'numeric' => 'O campo: attribute deve ser maior ou igual a: value.' ,
        'arquivo'     => 'O campo: atributo deve ser maior ou igual a: valor kilobytes.' ,
        'string'   => 'O campo: atributo deve ser maior ou igual a: caracteres de valor.' ,
        'array'    => 'O campo: atributo deve conter: itens de valor ou mais.' ,
    ],
    'imagem'                 => 'O campo: atributo deve ser uma imagem.' ,
    'in'                    => 'O campo: atributo selecionado é inválido.' ,
    'in_array'              => 'O campo: atributo não existe em: outro.' ,
    'inteiro'               => 'O campo: atributo deve ser um número inteiro.' ,
    'ip'                    => 'O campo: atributo deve ser um endereço de IP válido.' ,
    'ipv4'                  => 'O campo: o atributo deve ser um endereço IPv4 válido.' ,
    'ipv6'                  => 'O campo: o atributo deve ser um endereço IPv6 válido.' ,
    'json'                  => 'O campo: o atributo deve ser uma string JSON válida.' ,
    'lt' => [
        'numeric' => 'O campo: atributo deve ser menor que: valor.' ,
        'arquivo'     => 'O campo: atributo deve ser menor que: valor kilobytes.' ,
        'string'   => 'O campo: atributo deve ser menor que: caracteres de valor.' ,
        'array'    => 'O campo: atributo deve conter menos de: itens de valor.' ,
    ],
    'lte' => [
        'numeric' => 'O campo: attribute deve ser menor ou igual a: value.' ,
        'arquivo'     => 'O campo: atributo deve ser menor ou igual a: valor kilobytes.' ,
        'string'   => 'O campo: atributo deve ser menor ou igual a: caracteres de valor.' ,
        'array'    => 'O campo: atributo não deve conter mais que: itens de valor.' ,
    ],
    'max' => [
        'numérico' => 'O campo: atributo não pode ser superior a: max.' ,
        'arquivo'     => 'O campo: atributo não pode ser superior a: max kilobytes.' ,
        'string'   => 'O campo: atributo não pode ser superior a: caracteres max.' ,
        'array'    => 'O campo: atributo não pode ter mais do que: itens máximos.' ,
    ],
    'mimes'                 => 'O campo: atributo deve ser um arquivo do tipo:: valores.' ,
    'mimetypes'             => 'O campo: atributo deve ser um arquivo do tipo:: valores.' ,
    'min' => [
        'numeric' => 'O campo: attribute deve ser pelo menos: min.' ,
        'arquivo'     => 'O campo: atributo deve ter pelo menos: min kilobytes.' ,
        'string'   => 'O campo: atributo deve ter pelo menos: min caracteres.' ,
        'array'    => 'O campo: atributo deve ter pelo menos: itens mínimos.' ,
    ],
    'not_in'                => 'O campo: atributo selecionado é inválido.' ,
    'multiple_of'           => 'O campo: attribute deve ser um múltiplo de: value.' ,
    'not_regex'             => 'O campo: atributo possui um formato inválido.' ,
    'numeric'               => 'O campo: attribute deve ser um número.' ,
    'senha'              => 'A senha está incorreta.' ,
    'presente'               => 'O campo: o atributo deve estar presente.' ,
    'regex'                 => 'O campo: atributo tem um formato inválido.' ,
    'obrigatório'              => 'O campo: attribute é obrigatório.' ,
    'required_if'           => 'O campo: attribute é obrigatório quando: other for: value.' ,
    'required_unless'       => 'O campo: attribute é obrigatório exceto quando: other for: values.' ,
    'required_with'         => 'O campo: attribute é obrigatório quando: values ​​está presente.' ,
    'required_with_all'     => 'O campo: attribute é obrigatório quando: values ​​está presente.' ,
    'required_without'      => 'O campo: attribute é obrigatório quando: values ​​não está presente.' ,
    'required_without_all' => 'O campo: attribute é obrigatório quando nenhum dos: values ​​estão presentes.' ,
    'proibido'            => 'O campo: atributo é proibido.' ,
    'proibido_if'         => 'O campo: atributo é proibido quando: outro para: valor.' ,
    'proibido_unless'     => 'O campo: atributo é proibido exceto quando: outro para: valores.' ,
    'same'                  => 'Os campos: attribute e: other devem corresponder.' ,
    'tamanho'                  => [
        'numérico' => 'O campo: atributo deve ser: tamanho.' ,
        'arquivo'     => 'O campo: atributo deve ser: tamanho kilobytes.' ,
        'string'   => 'O campo: atributo deve ser: caracteres de tamanho.' ,
        'array'    => 'O campo: atributo deve conter: itens de tamanho.' ,
    ],
    'starts_with'           => 'O campo: o atributo deve começar com um dos seguintes valores:: valores' ,
    'string'                => 'O campo: atributo deve ser uma string.' ,
    'timezone'              => 'O campo: o atributo deve ser uma zona válida.' ,
    'unique'                => 'O campo: atributo já está sendo utilizado.' ,
    'Upload'              => 'Ocorreu uma falha no upload do campo: atributo.' ,
    'url'                   => 'O campo: atributo tem um formato inválido.' ,
    'uuid' => 'O campo: atributo deve ser um UUID válido.' ,

    /*
    | ------------------------------------------------- -------------------------
    | Linhas de linguagem de validação personalizada
    | ------------------------------------------------- -------------------------
    |
    | Aqui você pode especificar mensagens de validação personalizadas para atributos usando o
    | convenção "attribute.rule" para nomear as linhas. Isso torna mais rápido
    | especificar uma linha de idioma personalizada específica para uma determinada regra de atributo.
    |
    */

    'custom' => [
        'nome do atributo' => [
            'regra-nome' => 'mensagem personalizada' ,
        ],
    ],

    /*
    | ------------------------------------------------- -------------------------
    | Atributos de validação personalizados
    | ------------------------------------------------- -------------------------
    |
    | As seguintes linhas de linguagem são usadas para trocar o nosso marcador de posição de atributo
    | com algo mais fácil de ler, como "Endereço de e-mail" em vez
    | de "e-mail". Isso simplesmente nos ajuda a tornar nossa mensagem mais expressiva.
    |
    */

    'atributos' => [
        'endereço'    => 'endereço' ,
        'idade'        => 'idade' ,
        'body'       => 'conteúdo' ,
        'célula'       => 'celular' ,
        'cidade'       => 'cidade' ,
        'país'    => 'país' ,
        'data'       => 'dados' ,
        'dia'        => 'dia' ,
        'excerto'    => 'resumo' ,
        'first_name' => 'primeiro nome' ,
        'gênero'     => 'gênero' ,
        'hora'       => 'hora' ,
        'last_name' => 'sobrenome' ,
        'mensagem'    => 'mensagem' ,
        'minuto'     => 'minuto' ,
        'móvel'     => 'celular' ,
        'mês'      => 'mês' ,
        'nome'       => 'nome' ,
        'bairro' => 'bairro' ,
        'número'     => 'número' ,
        'senha'   => 'senha' ,
        'telefone'      => 'telefone' ,
        'segundo'     => 'segundo' ,
        'sexo'        => 'sexo' ,
        'estado'      => 'estado' ,
        'rua'     => 'rua' ,
        'assunto'    => 'assunto' ,
        'text'       => 'texto' ,
        'hora'       => 'hora' ,
        'título'      => 'título' ,
        'username'   => 'usuário' ,
        'ano'       => 'ano' ,
        'descrição' => 'descrição' ,
        'password_confirmation' => 'confirmação da senha' ,
        ' senha atual' => 'senha atual' ,
    ],

];