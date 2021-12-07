<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <title>Campo Minado</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- fonte usada em algumas partes do site-->
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap');
    </style>
</head>

<body>
    <section id="tela">
        <section class="cabecalho">
            <h1 class="titulo">Campo Minado</h1>
        </section>

        <aside class="lateral">
            <h4>Informações</h4>
            Tempo: <div id="tempo"></div><br/><br/>
            Dimensão: <div id="dimensao"><p id="dimensaoX" class="box"></p>x<p id="dimensaoY" class="box"></p></div><br/><br/>
            Bombas: <div id="bombas"></div><br><br>
            Modalidade: <div id="modalidade" class="box"></div><br><br>
            <div id="rivotril" class="box"></div><div id="tempoRivotril"></div>
        </aside>

        <!-- onde o jogo irá rodar -->
        <section id="jogo">
            <table id=grid onclick="start(); this.onclick=null;">
            </table>
        </section>             
            
        <section class="botoes">  
            <button class="normal" type="button" onclick="cheatButton();">Trapaça</button>
            <!-- <button class="normal" type="button" onclick="window.location.href='index.html'">Voltar</button> -->
        </section>
    </section>

    <script src="campominado.js"></script>

</body>
</html>