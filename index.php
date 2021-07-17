<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vida de Programador</title>

  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <link rel="shortcun icon" href="imgs/icon-128.png" />
  <link rel="apple-touch-icon" href="imgs/icon-apple.png" />

  <link rel="manifest" href="manifest.json" />
</head>

<body>
  <header>
    <img src="imgs/logo.png" alt="Vida de programador" title="Vida de Devs" />
    <main id="tirinhas"></main>
  </header>


  <div id="alert">
    <p>Deseja adicionar este App na tela do seu dispositivo?</p>
    <button type="button" class="btn" id="btnAdd">Adicionar a Tela</button>
    <button type="button" class="btn" id="btnCancel">Fechar</button>
  </div>

  <script src="js/tirinhas.js"></script>
  <script src="js/funcoes.js"></script>
  <script>
    //varificar se a suporte para o service work
    if ("serviceWorker" in navigator) {
      //registrar o sw em um escopo
      navigator.serviceWorker
        .register("sw.js", {
          scope: "/aula_pwa/"
        })
        .then(function(register) {
          //verificar o que esta sendo feito
          if (register.installing) console.log("Instalado com sucesso");
          else if (register.waiting) console.log("SW em espera");
          else if (register.active) console.log("SW ativo");

          console.log("SW registrado no escopo: " + register.scope);
        })
        .catch(function(error) {
          console.log("Erro ao registrar " + error);
        });
    } else {
      alert("Atualize seu navegador se possível!");
    }
  </script>
</body>

</html>