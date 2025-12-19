Decisiones de Diseño 

1) Tabla  
Nombre de la tabla: “sastrerias”  

## Estructura de la Tabla

| Campo | Tipo | Opcional |
|------|------|----------|
| Id | BIGINT | No |
| Placa | Varchar | No |
| Tipo | Varchar | No |
| Arreglo | Varchar | No |
| Telefono | Text | Si |
| Estado | Varchar | No |
| Observaciones | Text | Si |
| FechaEntrega | Date | Si |
| Created_at | Timestamp | No |
| Updated_at | Timestamp | No |

2) Tipos de arreglo  
- Reparar 
- Ajustar

 3) Tipos de estado
-Recibido
-En proceso
-Entregado

4) Tipos de prenda
-Camisa
-Pantalon
-Leva
-Chaqueta

3) ¿Se puede eliminar registros?  
No el sistema no permite la eliminación de registros, la razón de esto es para mantener la integridad de la información, no podemos eliminar registros de un trabajo, porque esto podría ocasionar la perdida de información y errores en cuentas para el negocio, al ser la clave primaria manejada por un id distinto a la cedula del dueño de la cuenta permite registrar multiples prendas de la misma persona, ademas, al poder existir problemas con las personas entonces se quedan los registros de cuando se hizo la enterga
