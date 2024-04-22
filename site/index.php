<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleindex.css" />
    <title>Revisão HTML</title>     
</head>

<body>
    <form method="post" action="controller/loginController.php">
        <!-- Menu -->
        <ul>
            <li><a href="cadastroprodutos.html">Cadastro de produtos</a></li>
            <li><a href="cadastroclientes.php">Cadastro de clientes</a></li>
            <li><a href="#">Cadastro de propriedades</a></li>
            <li><a href="#">Relatórios</a></li>
            <li><a href="controller/logoutController.php">Logout</a></li>
        </ul>
        <fieldset>
            <legend>Login</legend>
            <table>
                
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" required></td>
                </tr>

                <tr>
                    <td><label>Senha:</label></td>
                    <td><input type="password" name="senha" required></td>
                </tr>

                <tr>
                    <td></td>
                    <td><button>Entrar no sistema</button></td>

                
                </tr>
                <tr>
                    <!--expande a coluna-->
                    <td colspan="2">
                       <?php 
                            if(isset($_REQUEST) && @$_REQUEST['cod']=='171'){
                                echo'<div style="border:2px solid red; background color:orange">';
                                echo'o E-mail ou a senha não conferem';
                                echo'</div>';
                            }

                        ?>
                    </td>
                </tr>

            </table>
            <p>
                Ao continuar, você concorda com as Condições de Uso da Amazon. Por favor verifique a Notificação de Privacidade, Notificação de Cookies e a Notificação de Anúncios Baseados em Interesse.
                <br>
                </p>
                <p2>
               <li><a href="#" >Precisa de ajuda?</a></li>
                </p2>
        </fieldset>

    </form>
</body>
</html>