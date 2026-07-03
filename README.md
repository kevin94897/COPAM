# COPAM — Tema de WordPress

Tema de WordPress para **COPAM S.A. (Concesionaria Puerto Amazonas)**, operador del terminal portuario fluvial de Yurimaguas. Es una landing page corporativa de una sola página (portada, secciones institucionales, Zona Clientes, SUNAT, Libro de Reclamaciones y contacto), con dos páginas legales adicionales.

## Requisitos

- WordPress 6.0+
- PHP 7.4+

## Instalación

1. Copia esta carpeta a `wp-content/themes/copam` en tu instalación de WordPress.
2. Activa el tema desde **Apariencia → Temas**.
3. El home se sirve automáticamente vía `front-page.php`, sin configuración adicional en **Ajustes → Lectura**.

## Estructura

```
copam/
├── functions.php              Setup del tema, assets encolados, requires de inc/
├── front-page.php             Home: ensambla todas las secciones (template-parts/)
├── header.php / footer.php    Header y footer del sitio
├── template-parts/            Una sección por archivo (hero, nosotros, servicios, sunat, reclamos, contacto, etc.)
├── template-politica-*.php    Plantillas de página seleccionables en el editor de Páginas
├── inc/
│   ├── reclamos-mail.php      Handler del formulario del Libro de Reclamaciones (admin-post.php)
│   ├── reclamos-cpt.php       Custom Post Type para guardar cada reclamo recibido
│   └── template-helpers.php   Helpers compartidos (botones, URLs de páginas legales)
└── assets/                    CSS, JS e imágenes
```

## Libro de Reclamaciones

El formulario en `template-parts/contacto.php` envía por POST a `admin-post.php` (acción `copam_reclamo_submit`), manejado en `inc/reclamos-mail.php`:

1. Valida y sanitiza los campos.
2. Guarda el registro como un post del tipo `copam_reclamo` (visible en wp-admin bajo **Libro de Reclamaciones**), para que quede constancia aunque falle el envío del correo.
3. Envía una notificación por correo al destino definido en la constante `COPAM_RECLAMO_TO` (actualmente `servicioclientes@copam.com.pe`).

## Páginas legales

`template-politica-privacidad.php` y `template-politica-cookies.php` son plantillas de página. Para publicarlas:

1. **Páginas → Añadir nueva**, crea "Política de Privacidad" y "Política de Cookies".
2. En el panel **Atributos de página**, asigna la plantilla correspondiente.
3. Publica. El footer y el banner de cookies enlazan a estas páginas automáticamente (vía `copam_legal_page_url()` en `inc/template-helpers.php`), sin necesidad de fijar el slug a mano.

## Notas

- Varios enlaces a documentos (tarifarios, reglamentos, formularios) apuntan a enlaces de SharePoint corporativo. Si algún visitante público reporta que le pide iniciar sesión, hay que revisar los permisos de esos enlaces ("cualquiera con el vínculo" vs. restringido a la organización).
- El correo `sistemas@copam.com.pe` ya no se usa en el sitio público; el contacto visible es `servicioclientes@copam.com.pe`.
