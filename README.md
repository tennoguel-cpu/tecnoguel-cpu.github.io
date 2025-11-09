# ⚡️ TECNOGUEL CORE: ESPECIFICACIONES DE IMPLEMENTACIÓN WEB

## [V. 2.0.1 - INTERFAZ ESTÁTICA CENTRAL]

---
### 🛠️ RESUMEN EJECUTIVO
Este repositorio contiene la arquitectura de la Interfaz Estática de Usuario (UI) para la plataforma **TecnoGuel: Centro Técnico Futurista**. La implementación garantiza una carga rápida (optimización CDN) y una experiencia visual consistente con nuestra identidad de marca (estética Cyber-Tecnológica).

---
### 🖥️ MÓDULOS DEL SISTEMA (ARCHIVOS HTML)

La aplicación opera a través de 6 módulos HTML principales, diseñados para una navegación rápida y una entrega de contenido sin latencia.

| ID MÓDULO | ARCHIVO | DESCRIPCIÓN FUNCIONAL | ENFOQUE DE CONTENIDO |
| :---: | :--- | :--- | :--- |
| **M-001** | `index.html` | **Punto de Entrada (HOME).** Muestra la propuesta de valor, estructura tarifaria (C$50 a C$180) y la navegación principal del sistema. | Oferta de Servicios y Precios |
| **M-002** | `info-adicional.html` | **Módulo de Documentación Técnica.** Información detallada sobre *Mantenimiento Avanzado* y procedimientos de *Recuperación de Dispositivos*. | Especificaciones de Servicio |
| **M-003** | `tecnoguel-ia-android.html`| **Unidad de Asistencia IA (Cliente-Side).** Implementación de un Asesor virtual a través de JavaScript para soporte técnico inmediato. | Chatbot Interactivo |
| **M-004** | `personalizacion-samsung.html`| **Repositorio Exclusivo Samsung.** Listado de herramientas y enlaces curados para la optimización y personalización de *Samsung One UI* y *Good Lock*. | Recursos Samsung |
| **M-005** | `personalizacion-android.html`| **Repositorio Android (General).** Colección de utilidades clave (VPN, *launchers*, gestores de archivos) para la personalización de la experiencia *Android AOSP*. | Recursos Android Genérico |
| **M-006** | `appsbasicas.html` | **Biblioteca de Enlaces Esenciales.** Directorio de aplicaciones de comunicación y utilidad primarias. | Apps Fundamentales |

---
### 🚀 PROTOCOLO DE DEPLOYMENT (IMPLEMENTACIÓN)

El despliegue ha sido configurado para ambientes de CDN estático (Netlify/GitHub Pages).

1.  **Validación de Raíz:** El archivo principal fue renombrado a **`index.html`** para cumplir con el estándar IANA.
2.  **Rutas Validadas:** Todos los enlaces internos han sido actualizados y verificados para asegurar la coherencia de navegación entre módulos.
3.  **Tecnología:** HTML5, **CSS3 (Centralizado en `index.css`)**, JavaScript (Core).
4.  **Copyright:** `&copy; 2025 TecnoGuel. Todos los derechos reservados.`

---
### ⚠️ MÓDULO PHP (ADVERTENCIA)

El archivo `server.php` se incluye únicamente como un *stub* (plantilla) para la gestión de errores 404 en ciertos entornos de hosting. **No es requerido** para el funcionamiento de la lógica de negocio actual del sitio.

---
