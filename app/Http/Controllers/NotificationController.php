<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notificacao(NotificationService $service) {
        return $service->send("Juliana", "Sua compra foi confirmada!");
    }
}
