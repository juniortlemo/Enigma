<html>
<head>
  <title>Fase3</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
  <script>
      function pulaLinha() {

          document.write("<br>");
      }

      function mostra(frase) {

          document.write(frase);
          pulaLinha();
      }

      var loginCadastrado = "muito";
      var senhaCadastrada = "bem";

      var tentativas = 1;

      while (tentativas <= 3) {

           loginInformado = prompt("Informe seu login");
           senhaInformada = prompt("Informe sua senha");

           if( loginCadastrado == loginInformado && senhaCadastrada == senhaInformada ) {
                 href="localhost/enigma/fase1.php"
              if (tentativas = 3) {
                      tentativas++;
              }
              } else {
              alert("Login inválido. Tente novamente");
              tentativas++;
          }
      }

  </script>
  <div id="topo">
    <h1>Traços e pontos?</h1>
  </div>
  <img src="imagens\fase3.jpg" usemap="#workmap">

  <map name="workmap">
    <area shape="rect" coords="400,44,760,550" onclick="pulaLinha()" value="Exibir Alert" >

</div>

  </div>
</body>
</html>
