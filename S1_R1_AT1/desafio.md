# Desafio Profissional: 

A melhor forma é criar **classes separadas** para Clientes e Funcionários, utilizando a Herança. 

Embora ambos compartilhem dados básicos por serem pessoas físicas, eles possuem regras de negócio e comportamentos completamente diferentes dentro da empresa.

### Atributos Diferentes por Classe

Para evitar campos vazios ou sem sentido no código e no banco de dados, os atributos específicos de cada papel devem ser isolados:

*   **Atributos do Funcionário:** Dados trabalhistas e internos, como matrícula, cargo, salário e data de admissão.
*   **Atributos do Cliente:** Dados comerciais e de consumo, como limite de crédito, histórico de compras e pontos de fidelidade.

*OBS: Elementos comuns (Nome, CPF e E-mail) ficam guardados em uma classe base chamada "Pessoa", que é reaproveitada por ambas.*

---

# Exercícios de Apropriação

### Classe
É o "molde" ou a "planta" que define como um objeto deve ser criado. 

### Objeto
É a instância real criada a partir do molde da classe. No código comentado, os objetos são:
*   **$p1** (que representa o Batom)
*   **$p2** (que representa o Blush)

### Atributos
São as características ou variáveis que pertencem à classe. No código, os atributos são:
*   **$nome**
*   **$preco**

### Métodos
São as ações ou funções que a classe sabe executar. No código, os métodos são:
*   **__construct()** (o método construtor que inicializa os dados)
*   **cadastrar()** (mostra a mensagem de sucesso)
*   **mostraProduto()** (exibe o nome e o preço na tela)

### O que é o $this?
Explicando de forma simples: o **$this** é uma palavra reservada que serve para o objeto se referir **a ele mesmo**. 

Imagine que a classe é a receita de um bolo, e o objeto é o bolo pronto na mesa. Quando o bolo precisa olhar para os seus próprios ingredientes (como o seu próprio nome ou o seu próprio preço), ele usa o **$this** para dizer: *"olha para o meu atributo nome"* ou *"usa o meu atributo preço"*. Ele serve para diferenciar as variáveis internas daquela instância específica de outras variáveis comuns do código.
