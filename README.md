# City Government of Imus

This project is a small PHP site served from XAMPP with one authored Tailwind source file and one generated runtime stylesheet.

## Live structure

- `index.php`
- `Pages/*.php`
- `includes/*.php`
- `CSS/index.tailwind.input.css`
- `CSS/index.tailwind.min.css`

## Rebuild CSS

The runtime stylesheet is generated from the Tailwind source and the PHP templates scanned by `CSS/tailwind.index.config.js`.

```bash
npx tailwindcss@3.4.17 -i CSS/index.tailwind.input.css -o CSS/index.tailwind.min.css --config CSS/tailwind.index.config.js --minify
```

## Images

There is no responsive-image manifest or responsive variant build step anymore. The site now serves images directly from `IMG/` and `IMG/optimized/`.
