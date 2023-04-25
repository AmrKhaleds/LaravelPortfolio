<?php

namespace App\Listeners;

use App\Http\Controllers\Admin\FcmContoller;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Queue\InteractsWithQueue;


class LogNotification implements ShouldQueue
{
    use  InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NotificationSent  $event
     * @return void
     */
    public function handle(NotificationSent $event)
    {
        // dd("im in event");
        $user_notifications = $event->notifiable;
        // dd($event);
        if ($user_notifications->device_token) {
            $data_notify = $event->response;
            $data = json_encode([
                'id' => $data_notify->id,
                'message' => $data_notify->data['message'],
                'created_at' => $data_notify->created_at->diffForHumans(),
                'read_at' => $data_notify->read_at,
            ]);
            $body = $data_notify->data['message'];
            $title = env('APP_NAME');
            $icon = null;
            $auth_id = auth()->id();
            $device_token = [$user_notifications->device_token];
            $ob = new FcmContoller;
            $ob->sendTo($device_token, $title, $body, $icon, $data);
            // dd("done in listener first");
        }
    }
}
