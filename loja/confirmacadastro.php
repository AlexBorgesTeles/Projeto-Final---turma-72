
include 'conexao.php';
$sqlpessoa="insert into pessoa(nome, cpf, rg, endereco, idade, telefone) VALUES ('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['rg']}','{$_POST['ender']}','{$_POST['idade']}','{$_POST['tel']}')";
$sqlusuario="insert into usuario(email,senha,nivel) VALUES ('{$_POST['email']}','{$_POST['senha']}','{$_POST['nivel']}')";	
$query=mysqli_query($mysql,$sqlpessoa,$sqlusuario);
$dados=mysqli_fecth_assoc($query);
#var_dump($dados);
if(isset($_POST['nome'] and $_POST['cpf'] and $_POST['rg'] and $_POST['endereco'] and $_POST['idade'] and $_POST['telefone'] and $_POST['email'] and $_POST['senha']){
  
echo "Cadastro realizado com sucesso";
}
  
    if($insert){
    
        header("Location: home.php");
    }
    
if(isset($_POST['nome']) and $_POST['nome'] !=$dados['nome']){
echo "Email Incorreto ou Incompleto";
}
if(isset($_POST['cpf']) and $_POST['cpf'] !=$dados['cpf']){
echo "CPF Incorreto ou Incompleto";
}
if(isset($_POST['rg']) and $_POST['rg'] !=$dados['rg']){
echo "RG Incorreto ou Incompleto";
}
if(isset($_POST['endereco']) and $_POST['endereco'] !=$dados['endereco']){
echo "Endereço Incorreto ou Incompleto";
}
if(isset($_POST['idade']) and $_POST['idade'] !=$dados['idade']){
echo "Idade Incorreta ou Incompleta";
}
if(isset($_POST['telefone']) and $_POST['telefone'] !=$dados['telefone']){
echo "Telefone Incorreto ou Incompleto";
}
if(isset($_POST['email']) and $_POST['email'] !=$dados['email']){
echo "Email incorreto ou Incompleto";
}
if(isset($_POST['senha']) and $_POST['senha'] !=$dados['senha']){
echo "Senha Incorreta ou Incompleta";
}
?>
insere a pessoa 
insere o id da pessoa
insere o uduario
