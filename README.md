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
