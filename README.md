# Sylius Recipes
## Based on Symfony Flex

```bash
composer config --global --auth http-basic.sylius.repo.packagist.com token YOUR_TOKEN
composer config repositories.plus composer https://sylius.repo.packagist.com/ShortNameOfYourOrganization/
composer require "sylius/plus:^1.0.0-ALPHA.6" --no-update
composer update --no-scripts
composer sync-recipes
composer recipes:install sylius/plus --force -v
```

## Maintenance

Each change in recipes requires change in `ref` via `php -r 'echo bin2hex(random_bytes(20)) . PHP_EOL;'`

## Guide

https://github.com/symfony/recipes
