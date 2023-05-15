<?php
include_once('templates/header.php');
?>
<div id="main-banner">
    <h1>Faça seu pedido</h1>
</div>

<div id="main-banner">
    <div class="container">
        <div class="rowns">
            <div class="col-md-12">
                <h2>Monte sua pizza</h2>
                <form action="process/pizza.php" method="POST" id="pizza-form">
                    <div class="form-group">
                        <label for="borda">Borda:</label>
                        <select name="borda" id="borda" class="form-control">
                            <option value="">Selecione a borda da pizza</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="massa">Massa:</label>
                        <select name="massa" id="massa" class="form-control">
                            <option value="">Selecione a massa da pizza</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sabores">Sabores Máximo 3:</label>
                        <select multiple name="sabores[]" id="sabores" class="form-control">

                        </select>
                    </div>
                    <form class="form-group">
                        <input type="submit" class="btn - btn-primary" value="fazer pedido">
                    </form>

                </form>
            </div>
        </div>
    </div>
</div>


<?php
include_once('templates/footer.php');
?>