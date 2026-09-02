<?php

//Exercício 1 - comparações

$a = "10";
$b = 10;
$c = 10;

echo"Exercício 1 - Comparações<br>";
echo"$a <br>";
echo "$b <br>";
echo "$c <br>";


echo "\$a == \$b: ";
var_dump($a == $b); // true, porque o valor é igual, mesmo sendo tipos diferentes
echo"a é igual a b <br>";

echo "\$a === \$b: ";
var_dump($a === $b); // false, porque o tipo é diferente (string vs int)
echo"a é diferente de b <br>";

echo "\$b == \$c: ";
var_dump($b == $c); // true, porque o valor é igual e os tipos
echo"b é igual a c <br>";

echo "\$b === \$c: ";
var_dump($b === $c); // true, porque o valor e o tipo são iguais
echo"b é igual a c <br><br>";

//== é diferente de ===, pois o primeiro compara apenas o valor, enquanto o segundo compara o valor e o tipo.

//__________________________________________________________________________________________________________________

//Exercício 2 - Contagem com 'for'

echo "Exercício 2 - Contagem com 'for'<br>";
$quantidade = 0;
 for($i=3; $i<=30; $i+=3){
    $quantidade++;
    echo "$i <br>";
 }
 echo "Quantidade de múltiplos encontrados: ".$quantidade."<br><br>";

 //__________________________________________________________________________________________________________________
 //Exercício 3 - Função com retorno

echo "Exercício 3 - Função com retorno<br>";
function areaRetangulo($base, $altura) { //abre a função
    if ($base < 0 || $altura < 0) { // verifica se a base ou altura são negativas
        return "Valores inválidos";
    } // fecha a verificação
    return $base * $altura;
} // fecha a função  

$area1 = areaRetangulo(5, 10);
$area2 = areaRetangulo(3, 7);
$area3 = areaRetangulo(-2, 4);

echo"Área 1 (5 x 10): $area1 <br>";
echo"Área 2 (3 x 7): $area2 <br>";
echo"Área 3 (-2 x 4): $area3 <br><br>";

//__________________________________________________________________________________________________________________
// Exercício 4 - Categorizando com 'switch'

echo "Exercício 4 - Categorizando com 'switch'<br>";
$dia = null;

if (isset($_GET['dia'])) {
    $dia = (int)$_GET['dia'];
}

switch ($dia) {
    case 1:
        echo "Frango grelhado<br>";
        break;
    case 2:
        echo "Fricasse<br>";
        break;
    case 3:
        echo "Feijoada<br>";
        break;
    case 4:
        echo "Carne de panela<br>";
        break;
    case 5:
        echo "Strogonoff";
        break;
    case 6:
    case 7:
        echo "Restaurante fechado<br>";
        break;
    default: 
        echo "Número inválido.";
}
?>
<form method="GET">
    <label>Digite o número do dia (1-7): </label>
    <input type="number" name="dia" min="1" max="7">
    <button type="submit">Consultar</button>
</form>

<?php

//__________________________________________________________________________________________________________________

//Exercício 5 - Ranking

echo "Exercício 5 - Ranking<br>";   
$participantes = [
    ["nome" => "Ana", "pontos" => 850],
    ["nome" => "João", "pontos" => 920],
    ["nome" => "Maria", "pontos" => 780]
];

usort ($participantes, function($a, $b) { //negativo ($a antes de $b), positivo ($b antes de $a), zero (iguais)
    return $b['pontos'] - $a['pontos']; //ordena maior para o menor, pois se $b tem mais pontos que $a, o resultado será positivo, e $b será colocado antes de $a
});

$posicao = 1;
foreach ($participantes as $pessoas) {
    echo $posicao. "º lugar: ".$pessoas['nome']." - ".$pessoas['pontos']." pontos<br>";
    $posicao++; //adiciona 1 à posição para o próximo participante
}

//__________________________________________________________________________________________________________________

//Exercício 6 - Percorrendo e pulando itens

echo "<br>Exercício 6 - Percorrendo e pulando itens<br>";

$itens = ["Teclado", "Mouse", "Monitor", "Cabo HDMI", "Headset"];
echo implode(", ", $itens); // exibe todos os itens separados por vírgula
echo "<br>Itens sem o 'Cabo HDMI':<br>";

foreach ($itens as $item) {
    if ($item === "Cabo HDMI") {
        continue; // pula o item "Cabo HDMI"
    }
    echo $item . "<br>";
}

//__________________________________________________________________________________________________________________
//Exercício 7 - Lendo parâmetros de URL
echo "<br>Exercício 7 - Lendo parâmetros de URL<br>";
$_GET = [
    "id" => 15,
    "categoria" => "eletronicos"
];

$id = $_GET['id'];
$categoria = $_GET['categoria'];

echo "Produto $id da categoria $categoria<br><br>";

// $_GET é um array associativo (chave => valor), onde cada parâmetro da URL vira uma entrada, com a chave sendo o nome do parâmetro e o valor sendo o que foi passado nele.

//__________________________________________________________________________________________________________________

//Exercício 8 - Criando uma classe simples 

echo "Exercício 8 - Criando uma classe simples<br>";

class Veiculo {
    public $quilometragem = 0;

    public function rodar($km) {
        $this->quilometragem += $km;
    }

    public function exibirQuilometragem() {
        return "Quilometragem atual: ". $this->quilometragem ."km";
    }
}

$meuCarro = new Veiculo();
$meuCarro->rodar(150);
$meuCarro->rodar(80);

echo $meuCarro->exibirQuilometragem(); // Exibe a quilometragem atual do veículo

//__________________________________________________________________________________________________________________

// Exercício 9 — Herança e visibilidade

// "1: O método `exibirResumo()` vai funcionar sem erros? Por quê?<br>"
// 'Sim, ($nome) é public (acessível de qualquer lugar), e ($salario) é protected (acessível dentro da classe) e como Gerente herda de Funcionario, ela tem acesso a tudo que é protected da classe mãe.';

// '2. Seria possível acessar `$senhaAcesso` de dentro da classe `Gerente`? Justifique.<br>'
// 'Não, ($senhaAcesso) é private, e private significa que só a própria classe onde foi declarada (Funcionario) pode acessar, nem uma classe filha tem acesso.';

// '3. Se você criasse uma terceira classe, `Diretor`, que **não** estendesse `Funcionario`, ela teria acesso a `$salario`?'
// 'Não, protected so libera acesso para a própria classe e suas subclasses. Sem herança, Diretor é uma classe completamente separada e não tem nenhum acesso a ($salario), e nem a ($nome), nem nada de Funcionario.';

//__________________________________________________________________________________________________________________

//Exercício 10 - Desafio final: login com sessão, cookie e classe

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
        return "Nome: $this->nome<br> Salário: $this->salario,00R$";
    }
}

$gerente = new Gerente("Pedro", 8000);
echo $gerente->exibirResumo(); // Exibe o resumo do gerente

?>