# Physing

Proyecto con propósito educativo. Simula ser la página de Login de Facebook. Una víctima accede a ella, introduce sus credenciales de acceso, y éstas son almacenadas en un fichero para su posterior consulta. La víctima es redireccionada a la página original de Facebook. 

```
ESTE REPOSITORIO HA SIDO CREADO CON PROPÓSITOS MERAMENTE EDUCATIVOS. NO USAR CON OTROS PROPÓSITOS.
```

## Para empezar

Estas instrucciones te ayudarán a tener una copia del proyecto para propósitos de desarrollo y testing. Ve a la sección "Puesta en marcha" para consultar las notas sobre como lanzar el presente proyecto.

### Prerequisitos

Debes de tener el siguiente software instalado en tu máquina para poder ejecutar el proyecto:
What things you need to install the software and how to install them

```
    - Docker 
    - Docker-compose
```

### Instalación

Unicamente deberás clonar el proyecto para poder lanzarlo en tu máquina.

```
    git clone https://github.com/davidnuno-es/physing-example.git
```

## Puesta en marcha

Para arrancar el proyecto ejecuta `docker-compose up` en la raíz del proyecto.
Una vez arrancado, comprueba que se están ejecutando dos contenedores con `docker container ps`:
- Contenedor Nginx, puerto 80 expuesto
- Contenedor PHP

Por último, navega a la dirección IP de la instancia de Docker. 

## Construido con

* [Docker](http://www.docker.com/) - Contenedor de aplicaciones
* [Docker-compose](https://maven.apache.org/) - Gestor de contenedores

## Autor

* **David Nuño** - *Trabajo inicial* - [DavidNuno.es](https://github.com/davidnuno-es)

## Licencia

El presente proyecto está protegido por la Licencia MIT - ver [LICENSE](LICENSE) para más detalles.

## Agradecimientos

Gracias a [Mike Woodward](https://codepen.io/citizenwoodward/pen/emBRXW) (@citizenwoodward) por la codificación de la página clon del login de facebook

## Ayudas y consejos de mejora

* NO USAR CON PROPÓSITOS DELICTIVOS NI DE NINGÚN ÁMBITO FUERA DEL EDUCATIVO
* El presente proyecto se puede mejorar de muchas formas, por ejemplo, almacenando los datos de las víctimas en una base de datos.

