<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projeto crud de endereços - Back end

## Instalação

1. Renomear o arquivo .env-exemple para .env

2. Configurar o arquivo .env de sua preferencia, com nome do banco, usuario e senha
    ```shell
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
    ```
3. Criar a tabela do banco
   ```shell
   nome da tabela: address
   colunas:
   idAddress -> id,
   cep -> varchar,
   logradouro -> varchar,
   bairro -> varchar,
   cidade -> varchar,
   uf -> varchar
   ```

5. Instalar os pacotes composer
   ```shell
   composer install
   ```
6. Iniciar o projeto
    ```shell
   php artisan serve
   ```
   
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
