<?php

namespace WAEasyAPI\Api;

use Requests;

class Message extends Entity
{
    public function sendTextMessage($attributes = array())
    {
        $relativeUrl = 'send/text';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendTemplateMessage($attributes = array())
    {
        $relativeUrl = 'send/template';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendImageMessage($attributes = array())
    {
        $relativeUrl = 'send/image';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendDocumentMessage($attributes = array())
    {
        $relativeUrl = 'send/document';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendAudioMessage($attributes = array())
    {
        $relativeUrl = 'send/audio';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendVideoMessage($attributes = array())
    {
        $relativeUrl = 'send/video';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendURLMessage($attributes = array())
    {
        $relativeUrl = 'send/url';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendStickerMessage($attributes = array())
    {
        $relativeUrl = 'send/sticker';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendContactMessage($attributes = array())
    {
        $relativeUrl = 'send/contacts';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendLocationMessage($attributes = array())
    {
        $relativeUrl = 'send/location';
        return $this->request('POST', $relativeUrl, $attributes);
    }

    public function sendInteractiveMessage($attributes = array())
    {
        $relativeUrl = 'send/interactive';
        return $this->request('POST', $relativeUrl, $attributes);
    }
}
