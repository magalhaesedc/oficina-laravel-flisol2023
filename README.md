![Logo Flisol](https://flisol.info/moin_static194/sol/img/flisol-top-bar.png)
# Projeto utilizado durante a oficina "Programação WEB na Prática" ofertado durante o Flisol 2023 sediado em Paragominas/PA
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o Laravel

Laravel é um framework de aplicações web com sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência agradável e criativa. O Laravel simplifica o desenvolvimento facilitando tarefas comuns usadas em muitos projetos da web

## Aprendendo Laravel

O Laravel possui a [documentação](https://laravel.com/docs) a mais extensa e completa entre todos os frameworks de aplicativos da web modernos. Trás uma biblioteca de tutoriais em vídeo tornando fácil começar a usar o framework.

Você também pode experimentar o [Laravel Bootcamp](https://bootcamp.laravel.com), onde será guiado na construção de um aplicativo Laravel moderno do zero.

Se você não gosta de ler, o [Laracasts](https://laracasts.com) pode ajudar. O Laracast contém mais de 2.000 tutoriais em vídeo sobre uma variedade de tópicos, incluindo Laravel, PHP moderno, teste de unidade e JavaScript. Aumente suas habilidades explorando nossa abrangente biblioteca de vídeos.

### Tecnologias Utilizadas
- `PHP 8.1`
- `Composer 2.5`
- `Laravel 10`
- `PostgreSQL 14`
- `Bootstrap 5`

### Sofwares Utilizados
- `PGAdmin 4`
- `Sublime Text`
- `Morzila Firefox`

## Preparando o Ambiente

#### Instalando o PostgresSQL

```sh
sudo apt install postgresql
```
##### Caso precise trocar a senha do Postgre
```sh
sudo -u postgres psql postgres
\password postgres
```

#### Instalando o PGAdmin
```sh
sudo apt install curl
curl -fsS https://www.pgadmin.org/static/packages_pgadmin_org.pub | sudo gpg --dearmor -o /usr/share/keyrings/packages-pgadmin-org.gpg
sudo sh -c 'echo "deb [signed-by=/usr/share/keyrings/packages-pgadmin-org.gpg] https://ftp.postgresql.org/pub/pgadmin/pgadmin4/apt/$(lsb_release -cs) pgadmin4 main" > /etc/apt/sources.list.d/pgadmin4.list && apt update'
sudo apt install pgadmin4
```
#### Instalando o PHP
```sh
sudo apt install php8.1
sudo apt install php8.1-mbstring php8.1-xmlrpc php8.1-soap php8.1-gd php8.1-xml php8.1-cli php8.1-zip php8.1-bcmath php8.1-tokenizer php8.1-curl php8.1-pgsql
```
#### Instalando o Composer
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

#### Comandos úteis do Laravel

Criar um Model:
```sh
php artisan make:model Participante --migration
```

Criar um Controller:
```sh
php artisan make:controller ParticipanteController
```

Criar as tabelas na base de dados:
```sh
php artisan migrate
```

Executar o projeto:
```sh
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---
Autor: Edson Magalhães da Costa
Evento: Festival Latino Americano de Instalação de Software Livre - 2023
Local: Instituto de Educação, Ciência e Tecnologia - Campus Paragominas/PA