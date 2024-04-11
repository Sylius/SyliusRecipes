<p align="center">
    <a href="https://sylius.com" target="_blank">
        <picture>
          <source media="(prefers-color-scheme: dark)" srcset="https://media.sylius.com/sylius-logo-800-dark.png">
          <source media="(prefers-color-scheme: light)" srcset="https://media.sylius.com/sylius-logo-800.png">
          <img alt="Sylius Logo." src="https://media.sylius.com/sylius-logo-800.png">
        </picture>
    </a>
</p>

<h1 align="center">Sylius Recipes</h1>

<p align="center">Based on Symfony Flex</p>

## Configure Access to Recipes

Update `composer.json` file with Flex endpoint
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
