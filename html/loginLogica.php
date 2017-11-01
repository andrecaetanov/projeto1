        <?php    $conexao = mysqli_connect('localhost', 'root', '', 'projeto1'); 
        session_start();
        function usuarioEstaLogado() {
        	return isset($_SESSION["usuario_logado"]);
        }

        function usuarioLogado() {
        	return $_SESSION["usuario_logado"];
        }

        function logaUsuario($login) {
        	$_SESSION["usuario_logado"] = $login;
        }
        function logout() {
                session_destroy();
                session_start();
        }

        function buscaUsuario($conexao, $login, $senha) {
        	$senhaMd5 = md5($senha);
        	$login = mysqli_real_escape_string($conexao, $login);
        	$query = "select * from usuario where login='{$login}' and senha='{$senhaMd5}'";
        	$resultado = mysqli_query($conexao, $query);
        	$usuario = mysqli_fetch_assoc($resultado);
        	return $usuario;
        }
        