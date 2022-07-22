# WA Easy API PHP Library

[![Stable](https://img.shields.io/badge/stable-v1.0.0-blue.svg)](https://packagist.org/packages/waeasyapi/waeasyapi#2.8.0) [![License](https://poser.pugx.org/waeasyapi/waeasyapi/license.svg)](https://packagist.org/packages/waeasyapi/waeasyapi)

Official PHP library for [WAEasyAPI](https://docs.waeasyapi.com/).

Read up here for getting started and understanding the payment flow with WAEasyAPI: <https://docs.waeasyapi.com>

### Prerequisites
- A minimum of PHP 7.3 upto 8.1


## Installation

-   If your project using composer, run the below command

```
composer require waeasyapi/waeasyapi
```

- If you are not using composer, download the latest release from [the releases section](https://github.com/waeasyapi/waeasyapi-php/releases).
    **You should download the `waeasyapi-php.zip` file**.
    After that, include `WAEasyAPI.php` in your application and you can use the API as usual.

##Note:
This PHP library follows the following practices:

- Namespaced under `WAEasyAPI\Api`
- API throws exceptions instead of returning errors
- Options are passed as an array instead of multiple arguments wherever possible
- All requests and responses are communicated over JSON

## Documentation

Documentation of WAEasyAPI's API and their usage is available at <https://waeasyapi.com>

## Basic Usage

Instantiate the waeasyapi php instance with `acc_id` & `acc_secret`. You can obtain the keys from the dashboard ([https://waeasyapi.com/](https://waeasyapi.com/))

```php
use WAEasyAPI\Api\Api;

$api = new Api($acc_id, $acc_secret);
```

The resources can be accessed via the `$api` object. All the methods invocations follows the following pattern

```php
    // number must start with the country's dialing code
    // Example - For USA: 158883993
    // Example - For India: 919876543210

    // Example - Send Text Message
    $api->message->sendTextMessage(
      array('number' => $number, 'message' => $message)
    );

    // Example - Send Template Message
    $api->message->sendTemplateMessage(
      array('number' => $number, 'template' => $template, 'params' => array())
    );

    // Example - Send Image Message
    $api->message->sendImageMessage(
      array('number' => $number, 'params' => array('link' => 'image_url'))
    );

    // Example - Send Video Message
    $api->message->sendVideoMessage(
      array('number' => $number, 'params' => array('link' => 'video_url'))
    );

    // Example - Send Audio Message
    $api->message->sendAudioMessage(
      array('number' => $number, 'params' => array('link' => 'audio_url'))
    );

    // Example - Send Document Message
    $api->message->sendDocumentMessage(
      array('number' => $number, 'params' => array('link' => 'document_url'))
    );

    // Example - Send URL Message
    $api->message->sendURLMessage(
      array('number' => $number, 'url' => 'https://waeasyapi.com')
    );

    // Example - Send Contact Message
    $contacts = array(
      array(
        'name' => array(
          'formatted_name' => 'Robin White', // required
          'first_name' => 'Robin', // optional
          'last_name' => 'White' // optional
        ),

        'phones' => array(
          array(
            'phone' => '+18787878787', // required
            'wa_id' => '18787878787' // optional
          )
        ),

        // emails optional
        'emails' => array(
          array(
            'email' => 'team@waeasyapi.com'
          )
        )
      )
    );
    $api->message->sendContactMessage(
      array('number' => $number, 'params' => $contacts)
    );

    // Example - Send Location Message
    $location = array(
      'longitude' => -122.425332,
      'latitude' => 37.758056,
      'name' => 'Facebook HQ',
      'address' => '1 Hacker Way, Menlo Park, CA 94025'
    );
    $api->message->sendLocationMessage(
      array('number' => $number, 'params' => $location)
    );
  
    // Example - Send Interactive Message
    $api->message->sendInteractiveMessage(
      array('number' => $number, 'params' => array())
    );
```


## License

The WAEasyAPI PHP SDK is released under the MIT License. See [LICENSE](LICENSE) file for more details.
