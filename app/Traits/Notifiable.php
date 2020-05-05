<?php


namespace App\Traits;

use App\Notification;

trait Notifiable
{

    /**
     * Create new notifications for specified user
     *
     * @param string $content
     */
    public function notify(string $content,string $routeName = null,string $routePramas = null) {
        $this->notifications()->create(['description' => $content,'route_name'=>$routeName,'route_params'=> $routePramas]);

    }

    /**
     * Return user's unread notifications
     *
     * @return mixed
     */
    public function unreadNotifications(){
        return $this->notifications()->where('read',0);
    }
}