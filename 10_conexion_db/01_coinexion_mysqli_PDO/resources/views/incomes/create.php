<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create.css">

    <title>Agregar nuevo ingreso</title>
</head>
<body>
    
    <div class="container">
        <h1>Agrega un nuevo ingreso</h1>
        <div class="form-container">
            <form action="/incomes" method="post">
                <div class="form-group">
        
                    <label for="payment_method">Metodo de pago</label>
                    <select name="payment_method" id="payment_method">
                        <option value="1" selected>Cuenta bancaria</option>
                        <option value="2" >Tarjeta de credito</option>
                    </select>
            
                    <label for="type">Tipo de ingreso</label>
                    <select name="type" id="type">
                        <option value="1" selected>Pago de nomina</option>
                        <option value="2" >Reembolso</option>
                    </select>
            
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date">
            
                    <label for="amount">Cantidad</label>
                    <input type="text" name="amount" id="amount">
            
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="description"></textarea>
            
                    <input type="hidden" name="method" value="post">
            
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
        
            </form>
        </div>
    </div>
</body>
</html>


<!-- <div class="container">
        <div class="form-container">
            <form method="POST" action="">
                <?php foreach($campos as $campo): ?>
                    <div class="form-group">
                        <label for="<?php echo $campo['name']; ?>">
                            <?php echo $campo['label']; ?>
                            <?php echo $campo['required'] ? '<span style="color:red;">*</span>' : ''; ?>
                        </label>
                        
                        <?php if($campo['type'] === 'textarea'): ?>
                            <textarea 
                                name="<?php echo $campo['name']; ?>" 
                                id="<?php echo $campo['name']; ?>"
                                <?php echo $campo['required'] ? 'required' : ''; ?>
                            ></textarea>
                        <?php else: ?>
                            <input 
                                type="<?php echo $campo['type']; ?>" 
                                name="<?php echo $campo['name']; ?>" 
                                id="<?php echo $campo['name']; ?>"
                                <?php echo $campo['required'] ? 'required' : ''; ?>
                            >
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <div class="form-group">
                    <button type="submit" class="submit-btn">Enviar Formulario</button>
                </div>
            </form>
        </div>
    </div> -->