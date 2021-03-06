<?php

/*
 * Código de propriedade da empresa SimplesTI.
 * É restrita qualquer alteração, cópia ou
 * utilização não autorizada do mesmo.
 * Todos os direitos reservados. SimplesTI - 2018
 */

namespace SimplePHP\Exception;

class SimpleException extends \Exception {

    protected $userMessage;

    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null, $file = null, $line = 0) {
        parent::__construct(($message ? $message : ($this->userMessage ?? "Ocorreu um problema inesperado no sistema. Por favor tente novamente em instantes.")), $code, $previous);

        if ($line)
            $this->line = $line;
        if ($file)
            $this->file = $file;
    }

    public function getUserMessage() {
        return $this->userMessage;
    }

    public function adminNotify() {
        if (!getenv('DEBUG')) {
            $GLOBALS['App']->errorsHandler->adminNotify($this);
        }
        return $this;
    }

}
