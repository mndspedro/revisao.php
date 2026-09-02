# Lista de Revisão — Programação Back-End (PHP)

## Exercício 1 — Comparando valores

Crie um arquivo `comparacoes.php` e declare as seguintes variáveis:

```php
$a = "10";
$b = 10;
$c = 10;
```

Sem executar o código ainda, escreva no papel o que você espera que cada uma das expressões abaixo retorne (`true` ou `false`):
    
1. `$a == $b`
2. `$a === $b`
3. `$b == $c`
4. `$b === $c`

Depois, escreva os `echo` correspondentes no arquivo, execute e confira suas previsões. Ao final, escreva um comentário no código explicando, com suas próprias palavras, a diferença entre `==` e `===` em PHP.

---

## Exercício 2 — Contagem com `for`

Escreva um script PHP que utilize um laço `for` para exibir na tela todos os múltiplos de 3 entre 3 e 30 (incluindo os dois extremos), separados por espaço.

Em seguida, modifique o seu próprio código para que ele exiba, na mesma execução, também a **quantidade total** de múltiplos encontrados.

---

## Exercício 3 — Função com retorno

Crie uma função chamada `areaRetangulo` que receba dois parâmetros (base e altura) e **retorne** o valor da área calculada (base × altura).

Depois:

- Chame a função três vezes, com valores diferentes, guardando cada resultado em uma variável.
- Exiba os três resultados usando `echo`.
- Modifique a função para que, se algum dos parâmetros for negativo, ela retorne a string `"Valores inválidos"` em vez de calcular a área.

---

## Exercício 4 — Categorizando com `switch`
O restaurante universitário de uma faculdade tem um prato fixo diferente para cada dia da semana, de segunda a sexta. Aos sábados e domingos, o restaurante não abre.

- SEGUNDA:Frango grelhado
- TERÇA: Fricasse
- QUARTA: Feijoada
- QUINTA: Carne de panela
- SEXTA: Strogonoff
- SÁBADO: Restaurante fechado
- DOMINGO: Restaurante fechado

Construa um programa que, a partir de um número informado pelo usuário (1 para segunda-feira, 2 para terça-feira, e assim por diante, até 7 para domingo), mostre o prato do dia ou informe que o restaurante está fechado.
Este exercício deve ser resolvido utilizando a estrutura switch.

Depois de fazer funcionar, remova propositalmente um `break` de dentro de um dos `case` e observe o que muda no comportamento do programa. Escreva um comentário explicando o que aconteceu e por quê.

---

## Exercício 5 — Ranking
Dado um array de participantes contendo nome e pontuação:

```php
$participantes = [
    ["nome" => "Ana", "pontos" => 850],
    ["nome" => "João", "pontos" => 920],
    ["nome" => "Maria", "pontos" => 780]
];
```

Escreva um programa em PHP que gere um ranking, do maior para o menor número de pontos, exibindo a posição, o nome e a pontuação de cada participante, mantendo os dados de nome e pontos associados corretamente durante a ordenação.

---

## Exercício 6 — Percorrendo e pulando itens

Considere o array abaixo, representando itens em um estoque:

```php
$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];
```

Escreva um `foreach` que percorra esse array e exiba todos os itens **exceto** `"Cabo HDMI"`, sem removê-lo do array original.

---

## Exercício 7 — Lendo parâmetros de URL

Suponha que um usuário acesse a seguinte URL:

```
http://localhost/produto.php?id=15&categoria=eletronicos
```

Escreva o conteúdo do arquivo `produto.php` que:

- Recupere os valores de `id` e `categoria` enviados na URL;
- Exiba uma frase formatada como `"Produto 15 da categoria eletronicos"`, usando os valores recebidos.

Depois, explique em um comentário qual é o tipo de estrutura de dados armazenada pela superglobal utilizada.

---

## Exercício 8 — Criando uma classe simples

Crie uma classe chamada `Veiculo` com:

- Uma propriedade `$quilometragem`, iniciando em `0`;
- Um método `rodar($km)` que some o valor recebido à quilometragem atual;
- Um método `exibirQuilometragem()` que retorne uma frase informando a quilometragem atual.

Depois:

- Instancie a classe;
- Chame `rodar()` duas vezes, com valores diferentes;
- Exiba o resultado final usando o método `exibirQuilometragem()`.

---

## Exercício 9 — Herança e visibilidade

Observe (sem executar ainda) o código abaixo:

```php
class Funcionario {
    public $nome;
    protected $salario;
    private $senhaAcesso;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario {
    public function exibirResumo() {
        return "Nome: $this->nome, Salário: $this->salario";
    }
}
```

Antes de rodar o código, responda por escrito:

1. O método `exibirResumo()` vai funcionar sem erros? Por quê?
2. Seria possível acessar `$senhaAcesso` de dentro da classe `Gerente`? Justifique.
3. Se você criasse uma terceira classe, `Diretor`, que **não** estendesse `Funcionario`, ela teria acesso a `$salario`?

Depois, implemente o código, teste suas hipóteses e ajuste sua resposta caso tenha errado alguma.

---

## Exercício 10 — Desafio final: login com sessão, cookie e classe

Construa um pequeno sistema fictício de "acesso à área do aluno", combinando os conceitos anteriores:

1. Crie um arquivo `Usuario.php` contendo uma classe `Usuario` com propriedades `$nomeUsuario` e `$logado` (iniciando como `false`), e um método `autenticar()` que define `$logado` como `true`.
2. Em um arquivo `login.php`, inclua a classe criada (utilize `require_once` e explique, em um comentário, por que essa função é mais adequada aqui do que `include` num contexto de autenticação).
3. Inicie uma sessão, instancie `Usuario`, chame `autenticar()` e armazene o nome do usuário autenticado na superglobal de sessão.
4. Utilize `setcookie()` para gravar a data do último acesso do usuário (pode ser a data atual do servidor).
5. Crie um arquivo `logout.php` que exiba os dados da sessão atual e, em seguida, encerre completamente a sessão do usuário.

Ao final, escreva um breve comentário comparando os dois mecanismos utilizados (sessão e cookie).

___________________________________________________________________________________________________________________

Esses arquivos usam recursos do PHP que só funcionam rodando em um servidor web local:

1. Instale o XAMPP;
2. Copie todos os arquivos deste repositório para dentro da pasta htdocs;
3. Inicie o Apache pelo XAMPP
4. Acesse pelo navegador: http://localhost/revisao-php/revisao.php (exercícios de 1 a 9)
5. Exercício 10 (1° login): http://localhost/revisao-php/login.php 
6. Exercício 10 (2° logout): http://localhost/revisao-php/logout.php

