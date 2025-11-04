<?php

namespace App\Http\Controllers;

use App\Services\NotificationService; // 1. Importamos o serviço
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    // 2. Criamos o método que usará o serviço
    public function notificacao(NotificationService $service) {
        // 3. Usamos o serviço e retornamos o resultado
        return $service->send("Juliana", "Sua compra foi confirmada!");
    }
}
