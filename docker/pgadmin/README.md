# PostgreSQL Administration with pgAdmin

This launches **pgAdmin 4**, a web-based UI for managing PostgreSQL, connected to the `pgsql` service.

## Environment Variables

| Variable                   | Description                                   |
|----------------------------|-----------------------------------------------|
| **PGADMIN_DEFAULT_EMAIL**    | Login email (default: admin@admin.com)         |
| **PGADMIN_DEFAULT_PASSWORD** | Login password (default: admin)                |
| **PGADMIN_PORT**             | Host port for web UI (default: 5050)           |

Override these in your `.env`:
```dotenv
PGADMIN_PORT=5050
PGADMIN_DEFAULT_EMAIL=your@email
PGADMIN_DEFAULT_PASSWORD=secret
```

## Starting pgAdmin

```bash
# via Laravel Sail
./vendor/bin/sail up -d pgadmin

# or Docker Compose
docker-compose up -d pgadmin
```

## Accessing the UI

Visit `http://localhost:${PGADMIN_PORT:-5050}` in your browser.

## Adding the PostgreSQL Server

1. Click **Add New Server**.
2. Under **General**, set **Name** (e.g., `pgsql`).
3. Under **Connection**, fill in:
   - Host name/address: `pgsql`
   - Port: `5432`
   - Maintenance database: `${DB_DATABASE}` (from your `.env`)
   - Username: `${DB_USERNAME}` (from your `.env`)
   - Password: `${DB_PASSWORD}` (from your `.env`)
4. Click **Save** to connect.

## Troubleshooting

```bash
docker-compose logs pgadmin
```