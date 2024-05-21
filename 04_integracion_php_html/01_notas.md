# Formas de renderizar una web

- **Client Side Rendering (CSR)**: El navegador del cliente arma la estructura de la página web con JavaScript

El renderizado del lado del cliente (CSR) es un enfoque en el que el servidor envía al cliente un archivo HTML vacío con un archivo JavaScript adjunto. El navegador del cliente ejecuta el código JavaScript, que a su vez realiza solicitudes al servidor para obtener los datos y plantillas necesarios para renderizar la página. CSR es útil para aplicaciones web interactivas que requieren actualizaciones dinámicas sin tener que recargar la página completa. Sin embargo, puede haber una menor velocidad de carga inicial debido a que el cliente debe esperar al archivo JavaScript y realizar solicitudes adicionales al servidor.

- **Static Side Generation (SSG)**: La página web se construye al momento del build o compilación de la aplicación.

La generación estática del sitio (SSG) es un enfoque en el que las páginas web se generan de antemano durante la compilación o el tiempo de construcción del sitio. Esto significa que cada página se crea como un archivo HTML estático y se almacena en el servidor. Cuando un usuario solicita una página, se entrega el archivo HTML estático correspondiente. SSG es útil para sitios web con contenido estático que no requiere actualizaciones frecuentes. Proporciona una alta velocidad de carga y un menor uso de recursos del servidor, ya que no es necesario generar la página en cada solicitud.

Es importante considerar los requisitos y características de tu proyecto al elegir el tipo de renderizado que mejor se ajuste a tus necesidades. Cada enfoque tiene sus ventajas y desventajas, y la elección adecuada dependerá del contexto y los objetivos de tu aplicación.

- **Sever Side Rendering (SSR)**: El servidor se encarga de procesar y generar la página web

El renderizado del lado del servidor (SSR) es un enfoque en el cual el servidor genera una respuesta HTML completa y la envía al cliente. Esto significa que la página se renderiza completamente en el servidor antes de ser enviada al navegador del usuario. SSR es útil cuando se requiere un contenido dinámico que debe mostrarse en el primer renderizado de la página. Sin embargo, puede haber una mayor carga en el servidor debido a que se genera toda la página en cada solicitud

