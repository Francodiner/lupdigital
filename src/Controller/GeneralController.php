<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Email;

class GeneralController extends AppController
{
    public function contacto()
    {

        $nombre = $this->request->getData('name');
        $delEmail = $this->request->getData('email');
        $asunto = $this->request->getData('asunto');
        $mensaje = $this->request->getData('message');


        $this->loadComponent('Email');

        $this->Email->enviarEmail(['to' => ['info@lupdigital.com']], ['nombre' => $nombre, 'delEmail' => $delEmail, 'asunto' => $asunto, 'mensaje' => $mensaje], 'nuevo_cliente');
        debug($this->Email->enviarEmail(['to' => ['info@lupdigital.com']], ['nombre' => $nombre, 'delEmail' => $delEmail, 'asunto' => $asunto, 'mensaje' => $mensaje], 'nuevo_cliente'));
    }

    public function equipo()
    {
    }
}
