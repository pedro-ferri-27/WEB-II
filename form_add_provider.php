<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Fornecedor</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<form action="../controller/Provider.php" method="POST">
        <fieldset class="p-3 m-4 border border-red-800">
            <legend>Dados do Fornecedor</legend>
            <section class="flex flex-col p-4">
                <article>
                    <label for="name">Nome do Fornecedor</label>
                    <input type="text" id="name" name="name" class="m-3 border border-purple-800" required minlength="5">
                </article>
                <article>
                    <label for="cost">CNPJ do Fornecedor</label>
                    <input type="text" id="cnpj" name="cnpj"  class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">Phone</label>
                    <input type="text" id="phone" name="phone" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">Logradouro</label>
                    <input type="text" id="publicPlace" name="publicPlace" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">Numero da Rua</label>
                    <input type="text" id="numberOfStreet" name="numberOfStreet" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">complemento</label>
                    <input type="text" id="complement" name="complement" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">bairro</label>
                    <input type="text" id="neighborhood" name="neighborhood" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">cidade</label>
                    <input type="text" id="city" name="city" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
                <article>
                    <label for="cost">CEP</label>
                    <input type="text" id="zipCode" name="zipCode" class="m-3 border border-purple-800" required min="1" max="1000">
                </article>
            </section>
            <section class="mt-4 columns-2">
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-purple-900 rounded">Cadastrar</button>
            </article>
        </fieldset>
    </form>
</body>
</html>