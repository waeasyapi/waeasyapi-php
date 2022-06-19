<?php

namespace WAEasyAPI\Api;

use Requests;

class Message extends Entity
{
    public function sendMessage($attributes = array())
    {
        $relativeUrl = $this->getEntityUrl() . '/send/message';

        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendTemplate($attributes = array())
    {
        $relativeUrl = $this->getEntityUrl() . '/send/template';

        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendMedia($attributes = array())
    {
        $relativeUrl = $this->getEntityUrl() . '/send/media';

        return $this->request('POST', $relativeUrl, $attributes);
    }
}
