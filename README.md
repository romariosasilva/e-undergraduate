# E-Undergraduate

[![link](https://img.shields.io/badge/romariosasilva-E--Undergraduate-brightgreen)]()
[![licence mit](https://img.shields.io/badge/licence-MIT-blue.svg)](https://github.com/romariosasilva/e-undergraduate/blob/master/LICENSE)

## Sobre o Projeto
> Projeto criado para a Faculdade de Tecnologia de Carapicuíba como Trabalho de Conclusão de Curso (TCC)

## Pré-requisitos

> ##### PHP >= v7.4 - <https://www.php.net/downloads.php>
> ##### MySQL Installer >= v8.0 - <https://dev.mysql.com/downloads/installer/>
> ##### Composer 2 - <https://getcomposer.org/2>
> ##### Git - <https://git-scm.com/downloads>
> ##### Visual Studio Code - <https://code.visualstudio.com/>

## Instruções para rodar o projeto localmente (na sua máquina)

> #### 1 - Clone este repositório
> ```
> git clone https://github.com/romariosasilva/e-undergraduate.git
> ```
>
> ### 2 - Acesse a pasta do projeto
> ```
> cd e-undergraduate
> ```
>
> ### 3 - Instale as dependências
> ```
> composer install
> ```
>
> ### 4 - Copie o arquivo de variáveis de ambiente
> ```
> copy .env.example .env
> ```
>
> ### 5 - Gere a key do projeto
> ```
> php artisan key:generate
> ```
>
> ### 6 - Execute as migrations
> ```
> php artisan migrate --seed
> ```
>
> ### 7 - Execute o projeto
> ```
> php artisan serve
> ```
>
> #### Sistema disponível em: <http://localhost:8000/>

## Tecnologias Utilizadas
> #### Aplicação e Dados
> [![php](https://img.shields.io/badge/back--end-PHP-777BB4)]()
> [![js](https://img.shields.io/badge/front--end-JavaScript-F7DF1E)]()
> [![bootstrap](https://img.shields.io/badge/front--end-Bootstrap-7952B3)]()
> [![mysql](https://img.shields.io/badge/database-MySQL-4479A1)]()
> [![laravel](https://img.shields.io/badge/framework-Laravel-FF2D20)]()
> 
> #### DevOps
> [![insomnia](https://img.shields.io/badge/software-Insomnia-5849BE)]()
> [![git](https://img.shields.io/badge/software-Git-F05032)]()
> [![heroku](https://img.shields.io/badge/plataforma-Heroku-430098)]()