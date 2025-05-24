Ejercicio 1 – Nivel 1 – S106

El objetivo era enviar información del usuario (nombre, apellido y edad) a un archivo PHP, mostrarla en pantalla y guardar parte de esa información en la sesión del servidor usando $_SESSION

creé dos archivos:
index.php: contiene el formulario que recolecta los datos
procesar.php: recibe los datos, los valida, los guarda y los muestra

El formulario usa POST, ya que los datos no deben aparecer en la URL y, además, esta operación implica el servidor a guardar la información en la sesión
Validé los campos usando required en HTML para evitar envíos vacíos desde el navegador, pero también realicé validaciones del lado del servidor con empty() para garantizar seguridad en el formulario

En el archivo procesar.php, inicié la sesión con session_start() para habilitar el uso de $_SESSION
Verifiqué que todos los campos fueran enviados y que la edad estuviera en un rango lógico (entre 1 y 129)

Si los datos son válidos, guardo nombre y apellido en la sesión para simular una funcionalidad como “recordar al usuario”