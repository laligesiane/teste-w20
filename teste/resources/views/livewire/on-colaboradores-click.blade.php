<div class="container">
    <h1>Empresas Cadastradas</h1>
        <table class="table">
        <tr>
            <th scope="col">Razão Social</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Endereço</th>
        </tr>

        <?php
        use App\Models\Empresas;
        use App\Models\Colaboradores;

        $empresas = Empresas::all();
        foreach ($empresas as $empresas) {
            echo "<tr> <td> {$empresa->colaboradores->nome} </td> <td> {$empresa->colaboradores->telefone} </td> <td> {$empresa->colaboradores->email} </td> <td> {$empresa->colaboradores->data_nascimento} </td> </tr> <br>";
        }
        ?>

</div>
