
<div class="container pt-1">
        <main  class="bg-secondary bg-gradient bg-opacity-10 p-3">
            <h1>Lista Contatos</h1>
            <hr>
            
            <table class= "table table-hover talble-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contatos as $cadaContato){//percorre array
                        $partes = explode(';', $cadaContato);//separa string recuperada do array
                        // imprime dados recuperados do array na tabela
                         echo "<tr>
                            <td>{$partes[0]}</td>
                            <td>{$partes[1]}</td>
                            <td>{$partes[2]}</td>
                            </tr>";
                        
                    }
                    
                    ?>
                </tbody>

            </table>
        </main>
</div>


