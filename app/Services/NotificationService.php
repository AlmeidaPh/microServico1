<?php

namespace App\Services;

class NotificationService {
    /**
     * Simula o envio de uma notificação para um usuário.
     *
     * @param string $user O nome do usuário.
     * @param string $message A mensagem a ser enviada.
     * @return string A confirmação do envio.
     */
    public function send($user, $message) {
        // Em um caso real, aqui estaria a lógica para enviar um e-mail, SMS, etc.
        return "Notificação enviada para ($user): ($message)";
    }
}
