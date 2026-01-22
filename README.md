# File Mount JSON Docker

Minimal, recruitment-ready project that shows a clear, reproducible way to
apply Docker mounts from a JSON definition. The focus is on transparency:
the JSON config is the source of truth, and the container boundary is explicit.

## Key Features
- Declarative JSON config for mount rules
- Dockerized, reproducible runtime
- Entrypoint logic that validates and applies mounts
- Clear host/container boundary with no hidden behavior

## Tech Stack
- Docker
- JSON configuration
- Shell entrypoint logic

## Requirements
- Docker Desktop or Docker Engine
- docker-compose (if using compose)

## Quick Start
1) Build the image:
   - `docker-compose build`
2) Run:
   - `docker-compose up`

## Project Structure
- `dockerfiles/php` - PHP image definition
- `etc/nginx` - Nginx vhost config
- `etc/php` - PHP config
- `src` - Application sources

## Usage Notes
- Configure mounts in JSON (see `src/config/config.php` for defaults).
- The application is intentionally minimal to keep behavior inspectable.

## Tests
- Example PHPUnit test: `src/tests/phpunit/exampletest.php`

## Status
- Functional prototype
- Built as an internal infrastructure utility
- Designed with extensibility in mind

## Possible Extensions
- JSON Schema validation
- Read-only or policy-based mounts
- CI/CD pipeline integration
- Runtime verification and logging

## Why This Project Fits Recruitment
- Shows infrastructure-first thinking and Docker literacy
- Emphasizes clarity, reproducibility, and auditability
- Keeps scope small while demonstrating clean boundaries
