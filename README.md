# Instrucciones de Instalación

#### Crear imagen Jenkins:

Debe generarse una imagen de Jenkins para la instalacion de paquetes dentro de la imagen, con esto ya tendriamos configurado lo requerido para trabajar las automatizaciones trayendo el desarrollo con Github mediante un Pipeline.

```bash
docker build -t jenkins-ic -f Dockerfile-jenkins .
```

#### Crear contenedor con toda la configuracion (PHP, MySQL,PHPMyAdmin,Jenkins):

Creamos un entorno para poder tener nuestro entorno de desarrollo y a su vez poder configurar nuestras automatizaciones con Jenkins.

```bash
docker compose up -d --build
```

#### Detener contenedor:

```bash
docker compose down
```