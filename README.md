# Base para desenvolvimento PHP + React
## Subindo o sistema

Para subir o sistema, você pode executar o comando ``bash ./scripts/start.sh`` na raiz do projeto

Para derrubar o sistema, você pode executar o comando ``bash ./scripts/stop.sh`` na raiz do projeto

Seu sistema estará disponível em [localhost](http://localhost)

## Informações uteis
Logs do sistema são registrados em ``logs/error.log``

Caso precise testar algo dentro do sistema e queira ver algum retoro, você pode usar o error_log para testar conforme exemplo dentro do arquivo ``src/index.php``

## Base de dados
Todo script que você desenvolver ou itens que queira deixar disponível na base, você pode deixar no arquivo sql em ``database/init.sql``

Para acessar o pgadmin você pode usar a url [localhost:8080](http://localhost:8080)

email: root@root.com

senha: root

## Configurando o acesso
1. Acesse o PGADMIN
1. Expanda ``Servers``
1. Expanda ``pgsql_desafio``
1. Preencha a senha ``root``

## Executando comandos
1. Acesse o PGADMIN
1. Expanda ``Servers``
1. Expanda ``pgsql_desafio``
1. Clique em ``applicationphp``
1. Clique com o botão direito em ``applicationphp``
1. Clique na opção ``Query Tool``

## Instalando dependencias no react

Para instalar dependencias no react, você pode usar o script install.sh ou install_dev.sh

O script install.sh irá instalar a dependencia normalmente com npm install

O script install_dev irá instalar a dependencia de dev

Para executar qualquer um deles, você deve executar na raiz do projeto o seguinte comando ``bash ./scripts/install.sh`` seguido da dependencia que você deseja instalar

!!!!ATENÇÃO!!!!!

O script suporta um parametro por vez, então, caso tenha mais de uma dependencia para instalar, execute o comando uma vez para cada dependencia