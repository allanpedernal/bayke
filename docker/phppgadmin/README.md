# PostgreSQL Administration with phpPgAdmin

This configuration launches **phpPgAdmin**, a web-based interface for managing PostgreSQL, connected to the `pgsql` service.

## Environment Variables

The following variables are set in `docker-compose.yml` (pulled from your `.env` by default):

| Variable               | Description                                  |
|------------------------ |----------------------------------------------|
| **PHPPGADMIN_HOST**     | Hostname of the Postgres service (`pgsql`)    |
| **PHPPGADMIN_PORT**     | Port for PostgreSQL connections (`5432`)      |
| **PHPPGADMIN_DEFAULTDB**| Default database (`DB_DATABASE` from `.env`)   |
| **PHPPGADMIN_USER**     | PostgreSQL user (`DB_USERNAME` from `.env`)   |
| **PHPPGADMIN_PASSWORD** | User password (`DB_PASSWORD` from `.env`)     |

You can override the web‑UI port in your `.env`:
```dotenv
PHPPGADMIN_PORT=8080
```

## Starting phpPgAdmin

```bash
# via Laravel Sail
./vendor/bin/sail up -d phppgadmin

# or Docker Compose directly
docker-compose up -d phppgadmin
```

## Accessing the UI

Open your browser to `http://localhost:${PHPPGADMIN_PORT:-8080}`.

### Login Credentials

| Field      | Value                            |
|------------|----------------------------------|
| **Server** | `pgsql`                          |
| **DB**     | `${DB_DATABASE}` from your `.env`|
| **Username** | `${DB_USERNAME}` from your `.env`|
| **Password** | `${DB_PASSWORD}` from your `.env`|

## Troubleshooting

Check container logs:
```bash
docker-compose logs phppgadmin
```