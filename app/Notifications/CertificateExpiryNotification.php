<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CertificateExpiryNotification extends Notification
{
    protected $certificate;

    public function __construct($certificate)
    {
        $this->certificate = $certificate;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('شهادة على وشك الانتهاء')
            ->greeting('مرحبًا،')
            ->line('الشهادة التالية على وشك الانتهاء:')
            ->line('Product Name: ' . $this->certificate->product_name)
            ->line('Support End Date: ' . $this->certificate->support_end_date)
            ->action('عرض التفاصيل', url('/certificates/' . $this->certificate->id))
            ->line('يرجى اتخاذ الإجراء اللازم.');
    }
}
