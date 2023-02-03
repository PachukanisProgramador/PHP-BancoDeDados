<?php
    namespace POO\Banco\Modelo;

    require_once('Pessoa.php'); //Chamar a conta criada
    require_once('DAO/Conexao.php');//Chamando a abertura do banco de dados
    require_once('DAO/Inserir.php');//Chamando a abertura do banco de dados
    require_once('DAO/Consultar.php');//Chamando a abertura do banco de dados
    require_once('DAO/Atualizar.php');//Chamando a abertura do banco de dados
    require_once('DAO/Excluir.php');//Chamando a abertura do banco de dados
    require_once('Funcionarios/Funcionario.php'); //Chamar a conta criada
    require_once('Conta/Cliente.php');
    require_once('Conta/Conta.php');
    require_once('Funcionarios/Gerente.php');
    require_once('Funcionarios/Atendente.php');

    //Direciona o uso para o namespace, o POO e Banco são diretórios padrões, Modelo e Conta são pastas onde estão os arquivos
    use POO\Banco\Modelo\Conta\Cliente;
    use POO\Banco\Modelo\Conta\Conta;
    use POO\Banco\Modelo\Funcionarios\Gerente;
    use POO\Banco\Modelo\Funcionarios\Atendente;
    use POO\Banco\Modelo\DAO\Conexao;
    use POO\Banco\Modelo\DAO\Inserir;
    use POO\Banco\Modelo\DAO\Consultar;
    use POO\Banco\Modelo\DAO\Atualizar;
    use POO\Banco\Modelo\DAO\Excluir;
    
    //Cadastrando um cliente e mostrando seus dados
    //Endereço cliente 1
    $endereco = new Endereco(
        "Rua Manuel Leriz",
        "345",
        "Vila Penteado",
        "São Paulo",
        "São Paulo",
        "SP",
        "Brasil"         
    );
    //Cliente 1
    $client = new Cliente(
        "12345678910",
         "Allan Sobral", 
         "11981927329",
         $endereco,
         90
    );
    //Conta Cliente 1
    $cont = new Conta(
        $client,
        10000
    );

    echo $client->getCPF();
    echo "<br>";
    echo $client->getNome();
    echo "<br>";
    echo $client->getTelefone();
    echo "<br>";
    echo $endereco->getRua();
    echo "<br>";
    echo $endereco->getNumero();
    echo "<br>";
    echo $endereco->getBairro();
    echo "<br>";
    echo $endereco->getCidade();
    echo "<br>";
    echo $endereco->getEstado();
    echo "<br>";
    echo $endereco->getUF();
    echo "<br>";
    echo $endereco->getPais();
    echo "<br>";
    echo $client->getMensalidade();
    echo "<br>";
    echo $cont->getSaldo();

    //Adicionando um dinheiro na conta
    echo "<br>";
    echo $cont->Depositar($cont,15000);
    echo "<br>Depósito realizado com sucesso!";

    //Verificando se o saldo foi alterado
    echo "<br>Saldo Atual: ";
    echo $cont->getSaldo();

    //Realizando um saque
    echo "<br>";
    echo $cont->Sacar($cont,8000);
    echo "<br>Saque realizado com sucesso!";

    //Verificando se o saldo foi alterado
    echo "<br>Saldo Atual: ";
    echo $cont->getSaldo();

    echo "<br><br><br>---- Gerente ------ <br><br><br>";
    $gerente = new Gerente("1234", "Allan", "1111", $endereco, "1233", "Gerente Sênior",1300);
    echo "Salário R$: ".$gerente->getSalario();
    echo "<br>".$gerente->calcularBonificacao($gerente->getSalario());

    echo "<br><br><br>---- Atendente ------ <br><br><br>";
    $atendent = new Atendente("1234", "Allan", "1111", $endereco, "1500", "Atendente Sênior",1300);
    echo "Salário R$: ".$atendent->getSalario();
    echo "<br>".$atendent->calcularBonificacao($atendent->getSalario());

    echo "<br><br><br> Endereço completo: ".$endereco;
    echo "<br><br>".$endereco->rua;//Usando o método mágico __get
    $atributo = "Rua Jeribatuba";
    echo "<br> Modificando o dado: ".$atributo;
    $endereco->rua = $atributo;//Usando o método mágico __set
    echo "<br><br>".$endereco->rua;

    //------------ BANCO DE DADOS ---------------
    echo "<br><br><br> Testando o Banco de Dados";
    $conexao = new Conexao();

    echo "<br><br><br> Testando o Banco de Dados";
    $insert = new Inserir();
    echo $insert->Insert($conexao,"pessoa","Allan","1234");
    //Consultar um dado
    $consult = new Consultar();
    echo $consult->ConsultarIndividual($conexao,"pessoa",12);
    echo $consult->ConsultarTudo($conexao,"pessoa");

    //Atualizar Dados
    $atu = new Atualizar();
    echo $atu->Atual($conexao, "pessoa", 19, "telefone", "90");

    //Excluir Dados
    $exc = new Excluir();
    echo $exc->Deletar($conexao,"pessoa",19);
   

?>