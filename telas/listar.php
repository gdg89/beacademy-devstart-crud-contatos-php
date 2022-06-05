
<div class="container pt-1">
        <main  class="bg-secondary bg-gradient bg-opacity-10 p-3">
            <h1>Listar Contatos</h1>
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
                    foreach ($contatos as $cadaContato){
                         echo "<tr>
                            <td>{$cadaContato}</td>
                            </tr>";
                        
                    }
                    
                    ?>
                </tbody>

            </table>
        </main>
</div>


