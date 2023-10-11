<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js"></script>
    <title>CalculadoraIMC</title>
</head>
<body>
    <h1>Calculadora IMC</h1>

    <fieldset>
    <legend><strong>Calculadora IMC</strong></legend>
    <label for="valor01">peso:</label>
        <input
          type="text"
          name="valor01"
          id="valor01"
          required
          placeholder="informe seu peso"
        /><br /><br />
        <label for="valor02">altura:</label>
        <input
          type="text"
          name="valor02"
          id="valor02"
          required
          placeholder="informe sua altura"
        /><br /><br />
        <button type="calcular" id="calcular" Onclick = "calcule()">calcule </button>
        <br><br>
        <label for="resposta">IMC:</label>
        <input
          type="text"
          name="IMC"
          id="IMC"
          required
          placeholder="seu IMC é:"
        <p id="resposta"></p>
            <br><br>

    </fieldset>
    
</body>
</html>