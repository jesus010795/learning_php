# Envio de archivos 

El envío de archivos desde una petición POST en PHP se realiza utilizando la variable superglobal `$_FILES`. Esta variable contiene un array asociativo con información sobre cada archivo subido, como el nombre, el tamaño, el tipo y la ubicación temporal en el servidor.


- **Pasos para enviar un archivo:**

    - Crear un formulario HTML: El formulario debe incluir un campo de tipo file para que el usuario pueda seleccionar el archivo que desea subir. El atributo name del campo debe coincidir con el nombre que se utilizará para acceder al archivo en el script PHP.

    - Procesar el archivo en el script PHP: En el script PHP, se utiliza la variable global  `$_FILES` para acceder a la información del archivo subido. Luego, se puede mover el archivo a una ubicación permanente en el servidor y realizar otras operaciones con él.

 > Por defecto, al enviar formularios en html tenemos un tipo de encriptacion `application/x-www-form-urlencoded`, sin embargo cuando trabajamos con archivos debempos cambiar este tipo a `multipar/form-data`