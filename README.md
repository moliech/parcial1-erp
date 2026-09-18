# 🐾 ERP Veterinaria Huellitas - Primer Parcial (Laravel RAD)

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

**Institución:** COTECNOVA - 2026  
**Asignatura:** Software de Gestión Empresarial
**Integrantes:**  
* 👨‍💻 **Esteban Molina** 
* 👨‍💻 **Heiber Lozano**  
**Repositorio GitHub:** [https://github.com/moliech/parcial1-erp](https://github.com/moliech/parcial1-erp)  
**Rama Oficial de Entrega:** `parcial`

---

## 📌 Indice de Entregables del Parcial

| Entregable | Ubicación en el Repositorio | Estado |
| :--- | :--- | :---: |
| 📄 **Documento Completo de Análisis, MER y Solución ERP** | [`docs/parcial/analisis_veterinaria.md`](docs/parcial/analisis_veterinaria.md) | ✅ 100% Completado |
| 📸 **Evidencias y Capturas de Pantalla en MySQL/Tinker** | [`docs/parcial/capturas/`](docs/parcial/capturas/) | ✅ Listo |
| 🛠️ **Migraciones de la Base de Datos (`clients`, `pets`, `products`)** | [`database/migrations/`](database/migrations/) | ✅ Funcional |
| 📦 **Modelos Eloquent y Relaciones (`Client`, `Pet`, `Product`)** | [`app/Models/`](app/Models/) | ✅ Funcional |
| 🌱 **Seeder de Datos de Prueba (5 Clientes)** | [`database/seeders/ClientSeeder.php`](database/seeders/ClientSeeder.php) | ✅ Funcional |

---

## 🚀 Instrucciones de Ejecución Rápida para Evaluación

Para clonar, desplegar y evaluar el proyecto desde cero:

```bash
# 1. Clonar el repositorio
git clone https://github.com/moliech/parcial1-erp.git
cd parcial1-erp

# 2. Pasarse a la rama oficial de evaluación
git checkout parcial

# 3. Configurar entorno (.env) e instalar dependencias
cp .env.example .env
composer install
php artisan key:generate

# 4. Ejecutar migraciones y seeders automáticamente
php artisan migrate:fresh --seed

# 5. Probar registros en Tinker
php artisan tinker
# App\Models\Client::all();
```

---

## 🏗️ Resumen de la Arquitectura del Sistema

* **Backend Framework:** Laravel (PHP 8.3+)
* **Base de Datos:** MySQL / MariaDB (`parcial1_erp`)
* **Modelos & Relaciones Implementadas:**
  * `Client` ──( $1 : N$ )──> `Pet` (`Client hasMany Pet`, `Pet belongsTo Client`).
  * `Product` (Control de código de barras, precio de venta y stock).
* **Poblado de Datos:** `ClientSeeder` genera 5 registros de prueba al correr `php artisan db:seed`.

---

## 📄 Documentación Oficial Completa

Para leer el Análisis de Negocio completo (Punto 1), el Diagrama Entidad-Relación y Diccionario de Datos (Punto 2), y la Propuesta de Solución ERP con 5 Módulos, Flujo Integrado, KPIs y Beneficios (Punto 3), consulta el documento oficial:  
👉 **[`docs/parcial/analisis_veterinaria.md`](docs/parcial/analisis_veterinaria.md)**
