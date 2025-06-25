# PostgreSQL Administration with Adminer

This service launches **Adminer**, a lightweight web-based interface for PostgreSQL.

## Start Adminer

```bash
# via Laravel Sail
./vendor/bin/sail up -d adminer

# or with Docker Compose directly
docker-compose up -d adminer
```

## Access the UI

Open your browser to `http://localhost:${ADMINER_PORT:-8080}`.

### Login Details

| Field      | Value                          |
|------------|--------------------------------|
| **Server** | `pgsql`                        |
| **Username** | `${DB_USERNAME}` from your `.env` |
| **Password** | `${DB_PASSWORD}` from your `.env` |
| **Database** | `${DB_DATABASE}` from your `.env` |

You can override the web UI port via your `.env`:
```dotenv
ADMINER_PORT=8080
```