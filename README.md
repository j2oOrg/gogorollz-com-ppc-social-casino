# gogorollz-com-ppc-social-casino

Single-container WordPress + MariaDB image for Windows Docker.

## Build the image

```powershell
docker build -t wp-single .
```

## Prepare Windows folders for persistence

```powershell
$root="C:\Users\staud\gogorollz-com-ppc-social-casino"
New-Item "$root\db-data" -ItemType Directory -ErrorAction SilentlyContinue | Out-Null
New-Item "$root\wp-data" -ItemType Directory -ErrorAction SilentlyContinue | Out-Null
```

## Run the container

```powershell
docker run -d --name wp-single -p 8080:80 `
  -v C:\Users\staud\gogorollz-com-ppc-social-casino\db-data:/var/lib/mysql `
  -v C:\Users\staud\gogorollz-com-ppc-social-casino\wp-data:/var/www/html `
  -e WORDPRESS_DB_NAME=wordpress `
  -e WORDPRESS_DB_USER=wpuser `
  -e WORDPRESS_DB_PASSWORD=wppassword `
  wp-single
```

- MariaDB and WordPress both run inside the container; the `wp-entrypoint.sh` script initializes `/var/lib/mysql` if empty and creates the database/user.
- DB files persist to `db-data`, WordPress core/uploads/themes/plugins persist to `wp-data`.
- Browse at http://localhost:8080 and finish the WordPress setup wizard; adjust the port, volume paths, or credentials as needed.

## WordPress theme (converted from the current static pages)

- The custom theme lives at `wp-content/themes/gogorollz`. It includes templates for Home (`front-page.php`), Play, Disclaimer, Privacy Policy, and Terms & Conditions.
- After WordPress installs, log in to `/wp-admin`, activate the “Gogorollz” theme, and create pages with these slugs:
  - Home (set as the static front page in Settings → Reading)
  - Play (`/play`)
  - Disclaimer (`/disclaimer`)
  - Privacy Policy (`/privacy-policy`)
  - Terms & Conditions (`/terms-and-conditions`)
- The templates auto-apply by slug; the shared nav/footer match the original static site, and brand assets are bundled in the theme.
