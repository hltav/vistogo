<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>

<body>
    <main id="container">
        <h1>Formulário de Cadastro</h1>
        <form>
            <h2>Dados do Condutor:</h2>
            <div class="inputstyle">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
            </div>

            <div class="inputstyle">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required><br><br>

                <label for="rg">RG:</label>
                <input type="text" id="rg" name="rg" required><br><br>
            </div>

            <div class="inputstyle">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required><br><br>

                <label for="cnh">CNH:</label>
                <input type="text" id="cnh" name="cnh" required><br><br>
            
            </div>

            <div class="inputstyle">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required><br><br>
            </div>

            <label for="selfie">Selfie com Documento:</label>
            <input type="file" id="selfie" name="selfie" accept="image/*" required><br><br>


            <h2>Dados do Veículo:</h2>

            <div class="inputstyle">
                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" required><br><br>

                <label for="chassi">Chassi:</label>
                <input type="text" id="chassi" name="chassi" required><br><br>
            </div>

            <div class="inputstyle">
                <label for="renavam">Renavam:</label>
                <input type="text" id="renavam" name="renavam" required><br><br>

                <label for="uf">UF:</label>
                <input type="text" id="uf" name="uf" required><br><br>
            </div>

            <div class="inputstyle">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" required><br><br>

                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" required><br><br>
            </div>

            <div class="inputstyle">
                <label for="km">KM:</label>
                <input type="text" id="km" name="km" required><br><br>

                <label for="combustivel">Nível do combustível:</label>
                <select id="combustivel" name="combustivel" required>
                    <option value="">Selecione</option>
                    <option value="Cheio">Cheio</option>
                    <option value="Meio">Meio</option>
                    <option value="Vazio">Vazio</option>
                </select><br><br>
            </div>
            <h2>Fotos do Veículo:</h2>

            <label for="foto_placa">Foto da Placa:</label>
            <input type="file" id="foto_placa" name="foto_placa" accept="image/*" required><br><br>

            <label for="foto_dianteira">Foto Dianteira:</label>
            <input type="file" id="foto_dianteira" name="foto_dianteira" accept="image/*" required><br><br>


            <label for="foto_traseira">Foto Traseira:</label>
            <input type="file" id="foto_traseira" name="foto_traseira" accept="image/*" required><br><br>

            <label for="foto_hodometro">Foto do Hodômetro:</label>
            <input type="file" id="foto_hodometro" name="foto_hodometro" accept="image/*" required><br><br>


            <label for="foto_banco_dianteiro">Foto do Banco Dianteiro:</label>
            <input type="file" id="foto_banco_dianteiro" name="foto_banco_dianteiro" accept="image/*" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    </main>
</body>

</html>