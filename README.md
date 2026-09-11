# Dallassi E-commerce

Base inicial da aplicação Dallassi (Laravel + Tailwind + Alpine + Vite) para e-commerce de impressão 3D.

## Stack

- PHP 8.3+
- Laravel 13
- MySQL
- TailwindCSS + Vite
- Alpine.js
- SweetAlert2

## O que já está implementado (FASE 1)

- estrutura Laravel configurada;
- autenticação base (registro, login, logout);
- cadastro com `first_name`, `last_name`, `email`, `phone`;
- roles `CLIENT` e `ADMIN` com enum;
- registro público forçando role `CLIENT`;
- middleware para proteger `/admin`;
- área inicial de conta (`/minha-conta`) e dashboard admin (`/admin`);
- seeders iniciais para admin e cliente local.

## Instalação

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
```

## Credenciais locais (seed)

- Admin: `admin@dallassi.local` / `password`
- Cliente: `cliente@dallassi.local` / `password`

> Use apenas em ambiente local de desenvolvimento.
