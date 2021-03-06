<?php

/*
 * Código de propriedade da empresa SimplesTI.
 * É restrita qualquer alteração, cópia ou
 * utilização não autorizada do mesmo.
 * Todos os direitos reservados. SimplesTI - 2018
 */

namespace SimplePHP\Exception;

class ConnectionException extends SimpleException {

    protected $userMessage = "Não foi possível realizar a conexão com o banco de dados.";

}
