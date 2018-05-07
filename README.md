# Dreipunktnull Twig Extensions

A collection of useful, generic twig extensions.

## Installation

```bash
composer require dreipunktnull/twig-extensions
```

## Configuration

Each extension needs to be added to your Twig_Environment.

## HTML2Text

Convert HTML fragments to text with [html2text](https://github.com/soundasleep/html2text).

```php
$twig->addExtension(new Html2TextExtension());
```

or, if you use Symfony, tag a new service as `twig.extension`:

```yaml
twig.extension.html2text:
    class: DPN\TwigExtensions\Extensions\Html2TextExtension
    tags:
        - { name: twig.extension }
```

### Usage (Twig Filter)

```jinja2
{{ html_fragment | html2text }}
```

## License

MIT
