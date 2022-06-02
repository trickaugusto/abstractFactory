# Abstract Factory

Recentemente no trampo precisei trazer uma explicação sobre Abstract Factory, e decidi subir o código de exemplo no git também.

## Apresentando o tema:
O Abstract Factory é um padrão de projeto criacional que permite que você produza famílias de objetos relacionados sem ter que especificar suas classes concretas.

## Aplicando o padrão
Sobre o código: usei como base um código de um curso da Alura. Teremos um sistema de vender produto ou serviço, e teremos imposto sobre produto e imposto sobre o serviço. E pra não ocorrer a possibilidade de inverter os impostos, aplicaremos o Abstract Factory.

Criamos formas de criar famílias de objetos relacionados (uma venda é relacionada com um imposto, de alguma forma), só que não estou informando a implementação concreta. Só estou criando uma venda, com um imposto.

No nosso exemplo, temos as famílias de serviço ou produto, e a relação entre elas é a venda e o imposto. Sempre que eu crio uma venda relacionada ao SERVIÇO, o imposto também deve estar relacionado ao serviço.

## Código
Quando a aplicação inicia no 'venda.php', é definido o que vou chamar, se será instanciado a classe 'VendaServicoFactory', ou 'VendaProdutoFactory'. A aplicação usa essa informação para criar um objeto fábrica de uma classe que corresponde com a venda solicitada. O resto do código usa essa fábrica pra criar a venda produto, ou venda serviço. Isso previne que impostos errados sejam criados.
## Outros exemplos
[Aqui](https://refactoring.guru/design-patterns/abstract-factory) você pode ler alguns outros exemplos sobre o pattern.