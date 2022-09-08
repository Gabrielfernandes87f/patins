<p align="center"><a href="https://laravel.com" target="_blank">Turma do Patins</a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Project - Sobre Projeto


- Projeto Criado com finalidade de divulgar o esporte de patins no Brasil.
- O projeto ainda está em fase de desenvolvimento, mas já está disponível para uso.
- Esse site foi tirado do ar, motivos finaceiros. 
- Usando a versao php 7.3
- Usando systema de login (Jetstream)

Com o conhecimento adquirido no curso de laravel 8, eu decidi criar esse projeto e colocar em pratica tudo que havia estudado.

- Também foi criado uma area de apoiador, caso vc queira ver esse projetos no ar novamento deixe seu apoio clicando no botão abaixo.
´
- **[Seja um apoioador](https://nubank.com.br/pagar/1f5hpu/9KdPwdRMEt)**



## :checkered_flag: Starting ## - iniciando projeto

```bash
## Iniciando projeto
Para testar o projeto, siga os passos descritos abaixo

### Passo a passo
Clone Repositório
```sh
git clone  https://github.com/Gabrielfernandes87f/patins.git
```

```sh
cd patins
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=laravel-api
APP_URL=http://localhost:8180

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=userdb
DB_PASSWORD=senhadb

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d --build
```
```


Acessar o container do projeto
```sh
docker-compose exec laravel_8 bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8180](http://localhost:8180)
```

<img alt="header" src="https://github.com/Gabrielfernandes87f/patins/blob/main/public/assets/img/header.png">
<br/>

<img alt="index" src="https://github.com/Gabrielfernandes87f/patins/blob/main/public/assets/img/index.png">

<img alt="dicas e eventos" src="https://github.com/Gabrielfernandes87f/patins/blob/main/public/assets/img/dicas-eventos.png">

<img alt="price" src="https://github.com/Gabrielfernandes87f/patins/blob/main/public/assets/img/price.png">

<img alt="footer" src="https://github.com/Gabrielfernandes87f/patins/blob/main/public/assets/img/footer.png">




## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



