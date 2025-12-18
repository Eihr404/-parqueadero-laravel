Decisiones de Diseño 

1) Tabla  
Nombre de la tabla: “vehículos”  

## Estructura de la Tabla

| Campo | Tipo | Opcional |
|------|------|----------|
| Id | BIGINT | No |
| Placa | Varchar | No |
| Tipo | Varchar | No |
| Propietario | Varchar | Si |
| Observaciones | Text | Si |
| Salida | Date | Si |
| Created_at | Timestamp | No |
| Updated_at | Timestamp | No |

2) Tipos de vehículo  
- Automóvil  
- Motocicleta  
- Camión  

3) ¿Se puede eliminar registros?  
No el sistema no permite la eliminación de registros, la razón de esto es para mantener la integridad de la información, no podemos eliminar registros de un automóvil, porque esto podría ocasionar la perdida de información y errores en cuentas para el negocio, al ser la clave primaria manejada por un id distinto a la placa, las placas pueden repetirse, permitiendo registrar a un automóvil varias veces, identificando por ejemplo un cliente frecuente. Lo que hace en su lugar es registrar la hora de salida de un vehículo.
