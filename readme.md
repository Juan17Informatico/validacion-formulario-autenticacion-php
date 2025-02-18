# 📌 Formulario con Validación en PHP y JavaScript

Este proyecto es un formulario de registro con validaciones en el cliente (JavaScript) y en el servidor (PHP). Permite ingresar nombre, correo y contraseña, asegurando la integridad de los datos.

---

## 📂 Estructura del Proyecto

📁 Proyecto 
```
    │── index.php # Formulario principal 
    │── validaciones.js # Validaciones en el cliente 
    │── procesar.php # Procesamiento y validación en el servidor 
    │── styles.css # Estilos del formulario
```

## 🚀 Funcionamiento

### 1️⃣ `index.php` (Formulario)
- Contiene los campos: **nombre, correo y contraseña**.
- Usa atributos `required` y `pattern` para validaciones básicas.
- Incluye `validaciones.js` para verificar datos antes del envío.

### 2️⃣ `validaciones.js` (Validación en Cliente)
- Previene el envío de datos incorrectos al servidor.
- Revisa:
  - Nombre (mín. 2 caracteres).
  - Correo (formato válido).
  - Contraseña (mín. 8 caracteres, una mayúscula, un número y un símbolo especial).
- Muestra errores con `alert()` y detiene el envío si hay problemas.

### 3️⃣ `procesar.php` (Validación en Servidor)
- **Sanitiza** los datos (`htmlspecialchars`, `strip_tags`).
- **Verifica** nuevamente el formato de los datos.
- **Encripta la contraseña** con `password_hash()`.
- Muestra errores si la validación falla o un mensaje de éxito si todo es correcto.

### 4️⃣ `styles.css` (Estilos)
- **Diseño responsivo** con **flexbox**.
- **Colores suaves**, bordes redondeados y efectos al enfocar inputs.
- **Botón con efecto hover**.

---

## 📌 Mejoras Sugeridas
✅ Guardar datos en **MySQL**.  
✅ Implementar **sesiones** para usuarios autenticados.  
✅ Usar **mensajes más amigables** en lugar de `alert()`. 

🔹 **Autor:** Juan Campuzano - JuanCM
🔹 **Tecnologías:** HTML, CSS, JavaScript, PHP