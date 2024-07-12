<head>
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>TecnoVerso</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="inserir_cliente.php" method = "POST">
            <h1>Crie sua conta</h1>
            <span>Use seu e-mail para cadastro</span>
            <input type="text"required placeholder="Nome" id="nome" name="nome"/>
            <input type="text"required placeholder="CPF" id="cpf" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="14">
            <input type="email"required placeholder="Email" id="email" name="email"/>
            <input type="password"required placeholder="Senha" id="senha" name="senha"/>
            <button>Criar</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="login.php" method="POST">
            <h1>Entrar</h1>
            <span>Use sua conta</span>
            <input type="email" required name="email" placeholder="email" />
            <input type="password" required name="senha" placeholder="senha" />
            <a href="#">Esqueceu a senha?</a>
            <button>Entrar</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bem vindo!</h1>
                <p>Para se manter conectado conosco, faça login com suas informações pessoais</p>
                <button class="ghost" id="signIn">Entrar</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Ola amigo!</h1>
                <p>Entre com sua conta pessoal para começar</p>
                <button class="ghost" id="signUp">Criar</button>
            </div>
        </div>
    </div>
</div>
</body>

<script>
document.getElementById('cpf').addEventListener('input', function (e) {
    var value = e.target.value;
    var cpfPattern = value.replace(/\D/g, '') // Remove qualquer coisa que não seja número
        .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após o terceiro dígito
        .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona ponto após o sexto dígito
        .replace(/(\d{3})(\d)/, '$1-$2') // Adiciona traço após o nono dígito
        .replace(/(-\d{2})\d+?$/, '$1'); // Impede entrada de mais de 11 dígitos
    e.target.value = cpfPattern;
});

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});




</script>
