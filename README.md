# MikroTik API

## Configuration

1. Copy `.env.example` to `.env` and configure your MikroTik credentials:
    ```bash
    cp .env.example .env
    ```

2. Edit the `.env` file with your MikroTik router's credentials (hostname, username, and password).

## Usage

Example usage for connection test:
```bash
php test_connection.php
