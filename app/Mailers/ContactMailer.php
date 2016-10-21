<?php namespace App\Mailers;


class ContactMailer extends Mailer{

    protected $listLocalEmail = ['alonso@avotz.com'];
    protected $listProductionEmail = ['alons182@hotmail.com'];
    

    public function contact($data)
    {
        $view = 'emails.notifications.notificationTasks';//'emails.contact.contact';
        $subject = 'Información desde formulario de contacto';
        $emailTo = $this->listProductionEmail;

        return $this->sendTo($emailTo, $subject, $view, $data);
    }

    public function notificationTasks($data)
    {
        $view = 'emails.notifications.notificationTasks';
        $subject = 'Recordatorio de tarea';
        $emailArray = explode(',', $data['task']->notification_to);
        $emailTo = $emailArray;

        return $this->sendTo($emailTo, $subject, $view, $data);
    }
   
} 