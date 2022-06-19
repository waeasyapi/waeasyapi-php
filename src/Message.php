<?php

namespace WAEasyAPI\Api;

use Requests;

class Message extends Entity
{
    public function sendMessage($attributes = array())
    {
        $relativeUrl = '/send/message';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendTemplate($attributes = array())
    {
        $relativeUrl = '/send/template';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendMedia($attributes = array())
    {
        $relativeUrl = '/send/media';
        return $this->request('POST', $relativeUrl, $attributes);
    }
}
