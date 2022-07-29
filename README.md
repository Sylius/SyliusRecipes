# Sylius Recipes
## Based on Symfony Flex

### Configure Access to Recipes

1. Configure access to recipes repository (unless we make it public)
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
                "https://api.github.com/repos/Sylius/SyliusRecipes/contents/index.json?ref=flex/main",
                "flex://defaults"
            ]
        }
    }
}
```

## Contributing

As `Sylius/SyliusRecipes` is fully compatible with `symfony/recipes` for guide how to create your own recipes please check https://github.com/symfony/recipes.
