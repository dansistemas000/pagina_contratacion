<?php

namespace App\Http\Controllers;

// controlador para enviar correo electronico
class SendEmailController extends Controller
{
    public function __construct($data)
    {
        \Mail::send($data["view"], ["data"=>$data], function($message) use ($data)
        {
            $message->from('fuerzamaestra@creditomaestro.com', 'Fuerza Maestra');
            $message->subject($data["subject"]);
            $message->to($data["email"]);
            if(isset($data["cc"])){
                $message->cc($data["cc"]);
            }
        });
        return true;
    }

}