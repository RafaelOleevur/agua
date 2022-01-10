<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Você já bebeu água o suficiente hoje?</title>

    <link rel="stylesheet" href="assets/estilo.css">

</head>
<body>
    <div id="caixa">
        <header>
            <h1 id="titulo-site">Você já bebeu água o suficiente hoje?</h1>
           
            <p id="descricao"><i>Descubra agora quanto de água ainda é necessário ingerir hoje</i></p>
        </header>

        <nav>
            <ul id="menu">
                <li><a href="#">HOME</a></li>
                <li><a href="dicas.php">DICAS</a></li>
            </ul>
        </nav>

        <main>
            <div class="formulario"> 
                <form action="">
                    </br>   
                    <label for="Nome:">Qual é o seu nome?</label>
                
                    <input type="text" name="nome" id="nome" required>
                    </br>
                    
                    <label for="idade">Qual a sua idade?</label>
                
                    <input type="number" name="idade" id="idade" min=0 max=120 required> anos.
                    </br>
                    
                
                        <label for="idade">Qts copos de água já bebeu hoje? (valor aproximado)</label>
                        
                        <input type="number" name="idade" id="idade" min=0 required>
                        </br>
                        <label for="">Qual o tamanho do copo geralmente utilizado?</label>
                    
                        <select name="" id="">
                            <option value="0">Não se aplica</option>
                            <option value="250">copo americado (até 250ml)</option>
                            <option value="350">copo médio (até 350ml)(</option>
                            <option value="500">copo grande (até 500ml)</option>
                            <option value="700">copo gigante (até 700ml)</option>
                            </br>
                        </select>
                        <br>
                        <div class="botao-container">
                            <input class="botao" type="submit" value="verificar!">
                        </div>
                    </form>
            </div>
        </main>

        <footer>
            <p>Mantenha-se hidratado!</p>

        </footer>
    </div>
</body>
</html>