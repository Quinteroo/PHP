


//! INSTALACIÓN ENTORNO DE DESARROLLO
A diferencia de otros lenguajes, PHP es necesario instalarlo en el ordenador.

JavaScript al ejecutarse del lado del cliente, es decir en la pantalla del usuario, no necesita instalación previa, 
en cambio PHP si porque el lenguaje se ejecuta del lado del servidor.

Por tanto, tenemos que instalar un entorno de desarrollo que //* simule un servidor web.



//! SOFTWARE DE ENTORNO 
Herramientas como XAMPP, MAMP, o WAMP ofrecen todo el conjunto de tecnologías necesarias para crear dicho entorno.
Estas tecnologías son:
- PHP
- MySQL
- Apache



//! MAMP (Mac, Apache, MySQL, PHP)
//? https://www.mamp.info/en/windows/
Aunque MAMP se originó como una solución para MacOS, sus componentes principales —Apache, MySQL y PHP— son multiplataforma, 
lo que significa que pueden ejecutarse en varios sistemas operativos, incluidos Windows, Linux y MacOS.


Explicación de cómo funciona:
Apache:
- Apache es un servidor web que es compatible con múltiples sistemas operativos, incluidos Windows y MacOS.
- MAMP incluye una versión de Apache que está configurada para funcionar correctamente en ambos sistemas operativos.

MySQL:
- MySQL es un sistema de gestión de bases de datos que también está disponible para Windows. MAMP incluye una versión 
preconfigurada de MySQL que se ejecuta sin problemas en ambos sistemas operativos.

PHP:
- PHP es un lenguaje de programación que puede ejecutarse en Windows, MacOS y otros sistemas operativos. MAMP incluye PHP 
configurado para ambos, lo que permite desarrollar aplicaciones web sin preocuparte por la instalación y configuración.

Interfaz de usuario:
- La interfaz gráfica de MAMP (el panel de control) se adapta a las plataformas correspondientes. En MacOS, usa las 
características específicas del sistema, y en Windows, se adapta a la interfaz gráfica de ese sistema.



//! PUERTOS MAMP
Si le damos a MAMP > Preferencias > Puertos : podemos ver el número del puerto que se le ha asignado por defecto al servidor, 
pudiéndolo modificar.

Si modificamos el puerto de Apache (8888) y el de MySQL (8889) al iniciar el WebStar Page en la
url del navegador nos aparecerá //* localhost:8888/MAMP/