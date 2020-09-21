<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Mailer\Email;

class EmailComponent extends Component
{

    public $datosEnviados = array();
    public $perfiles = array();

    function __construct()
    {
        $this->datosEnviados = ['from' => 'info@lupdigital.com'];
        $this->datosEnviados = $this->datosEnviados + ['formato' => 'html'];

        $this->perfiles = [
            'default' => [
                'transport' => 'default',
                'from' => ['info@lupdigital.com' => 'Lup Digital'],
                'charset' => 'utf-8',
                'headerCharset' => 'utf-8',
                'emailFormat' => 'html'
            ],

            'nuevo_cliente' => [
                'transport' => 'default',
                'from' => ['info@lupdigital.com' => 'Lup Digital'],
                'charset' => 'utf-8',
                'headerCharset' => 'utf-8',
                'subject' => 'Nueva consulta',
                'template' => 'nuevo_cliente',
                'emailFormat' => 'html'
            ]
        ];
    }

    public function enviarEmail($recipients, $viewVars, $profile = 'default')
    {
        try {
            $to = $co = $cco = [];
            if (array_key_exists('to', $recipients)) {
                $to = $recipients['to'];
            } else {
                throw new Exception('No existe el destinatario');
            }
            if (array_key_exists('co', $recipients)) {
                $co = $recipients['co'];
            }
            if (array_key_exists('cco', $recipients)) {
                $cco = $recipients['cco'];
            }

            $email = new Email();

            $email->profile($this->perfiles[$profile])
                ->to($to)
                ->viewVars($viewVars);
            if (!empty($co)) {
                $email->co($co);
            }
            if (!empty($cco)) {
                $email->cco($cco);
            }
            //return true;
            if ($email->send()) {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return false;
        }
    }
}
