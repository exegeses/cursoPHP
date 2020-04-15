# Sesiones

> ¿qué son?

>Son archivos de texto se guardan 
>EN EL SERVER, en un directorio
>protegido

>¿dónde es ese directorio?
>session.save_path

    c:\\xampp\tmp
    
>tienen nombres como:

    sess_osm5ovpf0anr5daecnk8s5lumi

>la directiva de sesión
 
    session_start();

>crea una sesión si no existe,
>pero por otro lado, si existe 
>te la deja usar

>en una sesión podemos guardar variables de sesión
>estas se guardan en formato serializado

    nombreVar|type:values;
    

>las variables de sesión son
>variables reservadas predefinidas
>de PHP

    $_SESSION['nombreVar']
   

    