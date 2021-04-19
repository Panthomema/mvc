# REPASO
antes de nada, ir a entornods y parar docker:
docker-compose down

## Actualizar entornods
alumno@dws:~/entornods$ git fetch 
alumno@dws:~/entornods$ git checkout --track origin/repaso20 


## ACCEDER A MVC
Ir a github:
https://github.com/rafacabeza/mvc/tree/master

Hacer un FORK del repositorio
Asi creais un repositorio propio idéntico  al del profesor
Después lo clonáis dentro de entornods/data:
git clone git@github.com:XXXXXXXX/mvc.git (Vuestra dirección)

Levantar docker-compose
Probar en el navegador mvc.local


## ENRUTAMIENTO MVC:
- No distingue GET/POST
- La ruta sigue este esquema: "/nombre/metodo/argumentos"
- De nombre --> NombreController. Si no existe busca HomeController
- De metodo --> busca el método en "NombreController", si no existe busca index()ç

### EJERCICIO
- Crear el UsuarioController
- Añadir método "crear()". Inicialmente sólo debe "saludar"
- Mostrar los resultados en "mostrar()"
- Probar input text
- Probar select
- Probar array de "checkbox"


## Acceso a BBDD

- Vamos a tomar User y UserController como referencia para completar el CRUD de productos (Product y ProductController).

- Clase repaso 03:
    - Index. Listado de productos. Requiere el método all() del modelo.
    - Show. Detalle de producto. Requiere el método find() del modelo.
    - Delete. Borrado de producto y mensaje usando sesión. Requiere el método delete() del modelo.

    
- Para casa.
    - Hacer lo mismo con la tabla productypes.
    - Recomendable crear una o más tablas propias para practicar y hacer los tres métodos citados.

- Clase repaso 04: create y update 

    - Hemos hecho create+store y edit+update de Product
    - Hacer en casa lo mismo con ProductType
    - Recomiendo hacer una o más tablas propias para practicar.


- Repaso 05:
    - Delete
    - Sesión
    - Relación entre tablas
