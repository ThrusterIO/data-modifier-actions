# DataModifier Actions

[![Latest Version](https://img.shields.io/github/release/ThrusterIO/data-modifier-actions.svg?style=flat-square)]
(https://github.com/ThrusterIO/data-modifier-actions/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)]
(LICENSE)
[![Build Status](https://img.shields.io/travis/ThrusterIO/data-modifier-actions.svg?style=flat-square)]
(https://travis-ci.org/ThrusterIO/data-modifier-actions)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ThrusterIO/data-modifier-actions.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/data-modifier-actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/ThrusterIO/data-modifier-actions.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/data-modifier-actions)
[![Total Downloads](https://img.shields.io/packagist/dt/thruster/data-modifier-actions.svg?style=flat-square)]
(https://packagist.org/packages/thruster/data-modifier-actions)

[![Email](https://img.shields.io/badge/email-team@thruster.io-blue.svg?style=flat-square)]
(mailto:team@thruster.io)

The Thruster DataModifier Component Actions.


## Install

Via Composer

``` bash
$ composer require thruster/data-modifier-actions
```

## Usage

```php
$actionExecutor = new DataModifyActionExecutor(new DataModifierGroups());
$executor->addExecutor($actionExecutor::getSupportedAction, $actionExecutor);

$executor->execute(new DataModifyAction('demo_modifier_group', $input));
```


## Testing

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.
