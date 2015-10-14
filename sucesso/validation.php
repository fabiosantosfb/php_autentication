<html>
    <body >

<script language="JavaScript">
    function validationForm(){
        var size_name = document.forms['FormCadastro'].name.value.length;
        if(size_name < 2 || size_name > 10){
            alert("O nome deve ter mais que duas letras e menor que dez!");
            return false;
        }
        
        var size_sobre_name = document.forms['FormCadastro'].sobreName.value.length;
        if(size_sobre_name < 2 || size_sobre_name > 10){
            alert("O sobre nome deve ter mais que duas letras e menor que dez!");
            return false;
        }
        
        var statu_civil = document.forms['FormCadastro'].estadoCivil.selectedIndex;        
        if(statu_civil == 0){
            alert("Qual seu estado civil?");
            return false;
        }
        
        var type_sexo = document.forms['FormCadastro'].sexo.value;
        if(type_sexo == false){ 
            alert("Peencha seu sexo!");
            return false;
        }
        
        var passwordPr = document.forms['FormCadastro'].password.value;
        if(passwordPr == false){ 
            alert("Peencha sua senha!");
            return false;
        }
        
        var passwordCf = document.forms['FormCadastro'].passwordConfirm.value;
        if(passwordCf == false){ 
            alert("Confirme sua senha!");
            return false;
        }
        if(passwordPr != passwordCf){
            alert("Senhas diferente! ");
            return false;
        }
        document.forms['FormCadastro'].submit();
    }
</script>    
</body>
</html>
<?php

if($_REQUEST["action"]=== "save"){
   $formValid = true; 

        $size_name = strlen($_POST[name]);
        if($size_name < 2 || $size_name > 10){
            echo("O nome deve ter mais que duas letras e menor que dez!");
            $formValid = false;
        }
        
        $sobre_name = strlen($_POST[sobreName]);
        if($size_sobre_name < 2 || $size_sobre_name > 10){
            echo("O sobre nome deve ter mais que duas letras e menor que dez!");
            $formValid = false;
        }
        
        $statu_civil = $_POST[estadoCivil];        
        if($statu_civil == "" || $statu_civil == "selecione..."){
            echo("Qual seu estado civil?");
            $formValid = false;
        }
        
        $type_sexo = $_POST[sexo];
        if($type_sexo != "Masculino" && $type_sexo != "Feminino"){ 
            echo("Peencha seu sexo!");
            $formValid = false;
        }
        
        $passwordPr = $_POST[password];
        if($passwordPr == ""){ 
            echo("Peencha sua senha!");
           $formValid = false;
        }
        
        $passwordCf = $_POST[passwordConfirm];
        if($passwordCf == false){ 
            echo("Confirme sua senha!");
            $formValid = false;
        }
        if($passwordPr != $passwordCf){
            echo("Senhas diferente!");
            $formValid = false;
        }
        if($formValid){
            exit();
        }
}
?>