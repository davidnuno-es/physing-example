# Physing/Phishing

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
* **Mike Woodward** - *Facebook Login Page Clon* - [@citizenwoodward](https://codepen.io/citizenwoodward)

## Licencia

El presente proyecto está protegido por la Licencia MIT - ver [LICENSE](LICENSE) para más detalles.

## Agradecimientos

Gracias a [Mike Woodward](https://codepen.io/citizenwoodward/pen/emBRXW) (@citizenwoodward) por la codificación de la página clon del login de facebook

## Ayudas y consejos de mejora

* NO USAR CON PROPÓSITOS DELICTIVOS NI DE NINGÚN ÁMBITO FUERA DEL EDUCATIVO
* El presente proyecto se puede mejorar de muchas formas, por ejemplo, almacenando los datos de las víctimas en una base de datos.

# English Translation: 


# Physing / Phishing

Project with educational purpose. It pretends to be the Facebook Login page. A victim accesses it, enters their access credentials, and these are stored in a file for later consultation. The victim is redirected to the original Facebook page.

`` ''
THIS REPOSITORY HAS BEEN CREATED FOR EDUCATIONAL PURPOSES ONLY. DO NOT USE FOR OTHER PURPOSES.
`` ''

## To get started

These instructions will help you keep a copy of the project for development and testing purposes. Go to the "Getting Started" section for notes on how to launch this project.

### Pre requirements

You must have the following software installed on your machine in order to run the project:
What things you need to install the software and how to install them

`` ''
    - Docker
    - Docker-compose
`` ''

### Installation

You only have to clone the project to be able to launch it on your machine.

`` ''
    git clone https://github.com/davidnuno-es/physing-example.git
`` ''

## Start up

To start the project run `docker-compose up` at the root of the project.
Once started, check that two containers are running with `docker container ps`:
- Nginx container, port 80 exposed
- PHP container

Finally, navigate to the IP address of the Docker instance.

## Built with

* [Docker] (http://www.docker.com/) - Application container
* [Docker-compose] (https://maven.apache.org/) - Container manager

## Author

* ** David Nuño ** - * Initial work * - [DavidNuno.es] (https://github.com/davidnuno-es)
* ** Mike Woodward ** - * Facebook Login Page Clone * - [@citizenwoodward] (https://codepen.io/citizenwoodward)

## License

This project is protected by the MIT License - see [LICENSE] (LICENSE) for more details.

## Thanks

Thanks to [Mike Woodward] (https://codepen.io/citizenwoodward/pen/emBRXW) (@citizenwoodward) for coding the clone page of the facebook login

## Help and improvement tips

* DO NOT USE FOR CRIMINAL PURPOSES OR FOR ANY FIELD OUTSIDE OF EDUCATIONAL
* This project can be improved in many ways, for example, by storing victim data in a database.
