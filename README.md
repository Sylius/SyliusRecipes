<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Recipies</h1>

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
