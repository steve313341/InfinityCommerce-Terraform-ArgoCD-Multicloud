# Miravia Connector for PrestaShop 9

Este módulo proporciona una base para conectar PrestaShop 9 con la plataforma Miravia y sincronizar productos de forma bidireccional.

## Instalación
1. Copiar el directorio `miraviaconnector` dentro de la carpeta `modules` de su instalación de PrestaShop.
2. Activar el módulo desde el panel de administración.

## Uso
- `exportProducts()` exporta productos de PrestaShop hacia Miravia.
- `importProducts()` importa productos desde Miravia hacia PrestaShop.

Se deben implementar las llamadas a la API de Miravia en la clase `MiraviaApi`.
