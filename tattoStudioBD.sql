CREATE DATABASE studio_tatto;

-- Seleccionar la base de datos
USE Studio_tatto;

-- Crear la tabla Clientes
CREATE TABLE Clientes (
    ClienteID INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Apellido VARCHAR(255),
    CorreoElectronico VARCHAR(255),
    Contraseña VARCHAR(255),
    FechaNacimiento DATE
);

-- Crear la tabla Tatuajes
CREATE TABLE Tatuajes (
    TatuajeID INT PRIMARY KEY,
    NombreTatuaje VARCHAR(255),
    Categoria VARCHAR(255),
    ZonaCuerpo VARCHAR(255),
    Tecnica VARCHAR(255),
    DiseñoURL VARCHAR(255)
);

-- Crear la tabla Transacciones
CREATE TABLE Transacciones (
    TransaccionID INT PRIMARY KEY,
    ClienteID INT,
    TatuajeID INT,
    MontoPagado DECIMAL(10, 2),
    FechaTransaccion DATE,
    FOREIGN KEY (ClienteID) REFERENCES Clientes(ClienteID),
    FOREIGN KEY (TatuajeID) REFERENCES Tatuajes(TatuajeID)
);

CREATE TABLE Cotizaciones (
Cotizacion_ID INT PRIMARY KEY,
Cliente_ID INT,
Diseño VARCHAR(250),
DETALLE_COTIZACION VARCHAR(250),
FOREIGN KEY (Cliente_ID) REFERENCES Clientes(ClienteID)
);

CREATE TABLE EVENTO_AGENDA(
Cliente_ID int,
Id_Fecha INT PRIMARY KEY AUTO_INCREMENT,
Fecha DATE  ,
Disponibilidad INT,
Descripcion varchar(230),
Foreign key (Cliente_ID) references Clientes(ClienteID)
);

CREATE TABLE ADMINISTRADORES(
AdminID INT PRIMARY KEY,
Nombre_Usuario Varchar(15),
Contra varchar(10)
);

CREATE TABLE Contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    correo VARCHAR(255),
    mensaje TEXT,
    telefono varchar2(255)
);

