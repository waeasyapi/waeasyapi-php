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

Documentation of WAEasyAPI's API and their usage is available at <https://docs.waeasyapi.com>

## Basic Usage

Instantiate the waeasyapi php instance with `acc_id` & `acc_secret`. You can obtain the keys from the dashboard app ([https://app.waeasyapi.com/#/app/keys](https://app.waeasyapi.com/))

```php
use WAEasyAPI\Api\Api;

$api = new Api($acc_id, $acc_secret);
```

The resources can be accessed via the `$api` object. All the methods invocations follows the following pattern

```php
    //Example - Send Message
    $api->message->sendMessage(array('number' => $number, 'message' => $message));

    //Example - Send Template
    $api->message->sendTemplate(array('number' => $number, 'template' => $template, 'params' => array()));

    //Example - Send Media
    $api->message->sendMedia(array('number' => $number, 'template' => $template, 'params' => array()));
```

## Development

See the [doc.md](doc.md) file for getting started with development.

## Release

Steps to follow for a release:

0. Merge the branch with the new code to master.
1. Bump the Version in `src/Api.php`.
2. Rename Unreleased to the new tag in `CHANGELOG.md`
3. Add a new empty "Unreleased" section at the top of `CHANGELOG.md`
4. Fix links at bottom in `CHANGELOG.md`
5. Commit
6. Tag the release and push to GitHub
7. A release should automatically be created once the travis build passes. Edit the release to add some description.

## License

The WAEasyAPI PHP SDK is released under the MIT License. See [LICENSE](LICENSE) file for more details.
