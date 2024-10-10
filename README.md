 Carrito de Compras en PHP

Este proyecto es una implementación de un **carrito de compras en PHP** utilizando una estructura modular. El objetivo es ofrecer una funcionalidad completa para gestionar productos en un carrito de compras, con clases y archivos separados para una mejor organización del código.

## Estructura del Proyecto

El proyecto consta de los siguientes archivos principales:
- **`carrito.class.php`**: Clase principal que maneja la lógica del carrito de compras, incluyendo la adición, eliminación y actualización de productos.
- **`carrito.php`**: Página que presenta la interfaz del carrito de compras, mostrando los productos añadidos y sus cantidades.
- **`carro.php`**: Archivo para gestionar las interacciones con el carrito, como el procesamiento de productos añadidos y la actualización del estado del carrito.
- **`global.php`**: Archivo de configuración global que contiene las variables y las constantes necesarias para la operación del carrito.
- **`logout.php`**: Permite al usuario salir del sistema o limpiar la sesión actual.
- **`trash.gif`**: Imagen utilizada para representar la acción de eliminar un producto del carrito.
- **`vercarrito.gif`**: Imagen utilizada para mostrar o visualizar el carrito de compras.

# Funcionalidades

- **Agregar Productos**: Los usuarios pueden añadir productos al carrito de compras y ver sus detalles.
- **Eliminar Productos**: Se pueden eliminar productos específicos del carrito utilizando el ícono de la papelera (`trash.gif`).
- **Actualizar Cantidad**: Permite modificar la cantidad de productos en el carrito en tiempo real.
- - **Visualización del Carrito**: Los usuarios pueden ver el contenido del carrito usando el ícono (`vercarrito.gif`).
- **Gestión de Sesión**: Funcionalidad para cerrar sesión o limpiar el carrito utilizando `logout.php`.

## Requisitos

- **PHP**: Debes tener instalado y configurado PHP en tu servidor.
- **Servidor Web**: Requiere un entorno de servidor local como Apache para ejecutar el código PHP.
