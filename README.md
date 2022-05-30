# Sylius Recipes
## Based on Symfony Flex

### Configure Access to Recipes

1. Configure access to recipes repository (if private)
```bash
composer config --global --auth github-oauth.github.com [token]
```

> Your Github Token: https://github.com/settings/tokens

2. Update `composer.json` file with Flex endpoint
```json
{
    "extra": {
        "symfony": {
            "endpoint": [
                "https://api.github.com/repos/Sylius/SyliusRecipes/contents/index.json",
                "flex://defaults"
            ]
        }
    }
}
```

### Plus Installation

```bash
composer config --global --auth http-basic.sylius.repo.packagist.com token YOUR_TOKEN
composer config repositories.plus composer https://sylius.repo.packagist.com/ShortNameOfYourOrganization/
composer require "sylius/plus:^1.0.0-ALPHA.6" --no-update
composer update --no-scripts
composer sync-recipes
composer recipes:install sylius/plus --force -v
```

## Maintenance

Each change in recipes requires change `ref` parameter. You can generate it via `php -r 'echo bin2hex(random_bytes(20)) . PHP_EOL;'` command.

## Guide

https://github.com/symfony/recipes
