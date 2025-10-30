## 1 - Introdução ao Composer:

» Composer é um gerenciador de dependências para o PHP que permite definir pacotes de códigos de terceiros usados por um
projeto que pode então ser facilmente instalado e atualizado. Ele aproveita os recursos de carregamento automático de
classe do PHP, repositórios de pacotes PHP como» Packagist e convenções comuns de layout e codificação de projetos.

Fonte: https://www.php.net/manual/pt_BR/install.composer.intro.php  
Instruções para instalar o composer: https://getcomposer.org/download/

Criando um arquivo composer.json básico:

```BAS
  composer init
```

Instala as dependências do projeto usando o arquivo composer.lock (se disponível); caso contrário, utiliza o
composer.json.

```BAS
  composer install
```

## 2 - PHP Standard Recommendation (PSR):

A diferença no modo como os desenvolvedores escrevem código pode gerar uma verdadeira salada de frutas dependendo do
tamanho da equipe e quantas pessoas já passaram no projeto ao longo do tempo.

Baseado nisso muitas linguagens e tecnologias definem recomendação de padrões. No PHP essas recomendações são criadas
por um grupo chamado PHP-FIG(PHP Framework Interop Group) e são chamadas de PSR(PHP Standard Recommendation).

PHP-FIG - grupo formado pela comunidade em 2009

Uma PSR basicamente possui recomendações sobre um tema específico, como, por exemplo,
a PSR-12 que fala sobre padronização de sintaxe de código.

Fonte: https://www.treinaweb.com.br/blog/o-que-sao-as-psrs-do-php

### 2.1 - PSR-4

Uma aplicação PHP por menor que seja precisa ser dividida em vários arquivos para manter a organização.
Os arquivos consequentemente precisam ser incluídos para que o código dentro dele possa ser usado.
Com esse intuito usamos o que chamamos em PHP de autoloading, que basicamente é uma lógica para carregar
nossos arquivos automaticamente.

Fonte: https://www.treinaweb.com.br/blog/psr-4-a-recomendacao-de-autoload-do-php

## 3 - Teste prático em projeto demostração com o servidor web local do PHP

Baixe o projeto em: https://github.com/pansiere/CODIFICA-composer

Execute os comandos abaixo na raiz do projeto para instalar as dependencias do projeto e iniciar o servidor embutido do
PHP apontando para a pasta public:

```BASH
  composer require nesbot/carbon
  composer require fakerphp/faker
  composer require symfony/var-dumper
  composer install
  php -S localhost:8000 -t public
```

Depois, abra em seu navegador: http://localhost:8000

//Fluxo:
// 1. Mostrar o composer.json vazio;
// 2. Rodar composer require nesbot/carbon;
// 3. Mostrar que existe um 'repository/google' de pacotes, lá em Packgist
// 4. Mostrar o que apareceu na pasta vendor/, no composer.lock e composer,json;
// 5. Rodar e ver o resultado.
