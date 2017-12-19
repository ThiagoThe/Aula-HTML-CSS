Dados do formulário<br/><br/>

<?php
    $nome=isset($_POST["tName"])?$_POST["tName"]:"[Não informado]";
    echo "Usuário: $nome<br/>";
    $senha=isset($_POST["tPass"])?$_POST["tPass"]:"[Não informado]";
    echo "Senha: $senha<br/>";
    $email=isset($_POST["tEmail"])?$_POST["tEmail"]:"[Não informado]";
    echo "E-mail: $email<br/>";
    $sexo=isset($_POST["tSex"])?$_POST["tSex"]:"[Não informado]";
    echo "Sexo: $sexo<br/>";
    $dtnasc=isset($_POST["tDate"])?$_POST["tDate"]:"[Não informado]";
    echo "Data de nascimento: $dtnasc<br/>";
    $rua=isset($_POST["tStreet"])?$_POST["tStreet"]:"[Não informado]";
    echo "Rua: $rua<br/>";
    $num=isset($_POST["tNum"])?$_POST["tNum"]:"[Não informado]";
    echo "Número: $num<br/>";
    $apt=isset($_POST["tApa"])?$_POST["tApa"]:"[Não informado]";
    echo "Apartamento: $apt<br/>";
    $bairro=isset($_POST["tBairro"])?$_POST["tBairro"]:"[Não informado]";
    echo "Bairro: $bairro<br/>";
    $est=isset($_POST["tEst"])?$_POST["tEst"]:"[Não informado]";
    echo "Estado: $est<br/>";
    $city=isset($_POST["tCity"])?$_POST["tCity"]:"[Não informado]";
    echo "Cidade: $city<br/>";
    $urg=isset($_POST["tUrg"])?$_POST["tUrg"]:"[Não informado]";
    echo "Grau de urgência: $urg<br/>";
    $msg=isset($_POST["tMsg"])?$_POST["tMsg"]:"[Não informado]";
    echo "Mensagem: $msg<br/>";
    $adq=isset($_POST["tAdq"])?$_POST["tAdq"]:"[Não informado]";
    echo "Quero um Google Glass: $adq<br/>";
    $cor=isset($_POST["tCor"])?$_POST["tCor"]:"[Não informado]";
    echo "Cor: $cor<br/>";
    $qua=isset($_POST["tQua"])?$_POST["tQua"]:"[Não informado]";
    echo "Quantidade: $qua<br/>";
    $pre=isset($_POST["tPre"])?$_POST["tPre"]:"[Não informado]";
    echo "Preço Total: $pre<br/>";
?>