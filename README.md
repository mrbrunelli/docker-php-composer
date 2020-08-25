# :elephant: Ambiente de desenvolvimento PHP + Composer + Apache + MySQL
> Ambiente de desenvolvimento com gerenciador de dependências do PHP

## Como executar
#### Clone este repositório
```bash
$ git clone https://github.com/mrbrunelli/docker-php-composer
$ cd docker-php-composer/
```
#### Suba os containers
```bash
$ docker-compose up -d
```

## Acessar container PHP
> Será necessário acessar o container do PHP para executar os comandos do composer. Também pode ser feito pela extensão *Docker* do *Visual Studio Code*.
```bash
$ docker container exec -it alfa-php bash
$ composer init
$ composer install # Caso já tenha dependencias no composer.json
```
> A pasta *src* está mapeada com o container. Todo o conteúdo referente ao *PHP* deve estar dentro dessa pasta, pois o *Apache* irá buscar nela.
### Importante
> :watch: Este repositório levou cerca de 2 horas para ser construído.
> :smile: Caso ele tenha te ajudado, deixe uma estrela, obrigado!

