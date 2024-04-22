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
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(250),
    Correo VARCHAR(250),
    Telefono VARCHAR(20),
    Estilo VARCHAR(250),
    Descripcion text,
    ruta_imagen VARCHAR(250)
);

CREATE TABLE EVENTO_AGENDA(
    Id_Fecha INT PRIMARY KEY AUTO_INCREMENT,
    Fecha DATE  ,
    Disponibilidad INT,
    Descripcion varchar(230),
    correo varchar(230),
    telefono varchar(230)
);

CREATE TABLE ADMINISTRADORES(
    AdminID INT PRIMARY KEY,
    CorreoElectronico Varchar(250),
    Contraseña varchar(250)
);

CREATE TABLE Contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    correo VARCHAR(255),
    mensaje TEXT,
    telefono VARCHAR(255)
);

CREATE TABLE Galeria (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(250),
    ruta_imagen VARCHAR(250)
);


/*INSERTS EVENTOS_FECHA*/
INSERT INTO `evento_agenda`(`Fecha`, `Disponibilidad`, `Descripcion`, `correo`, `telefono`) VALUES ('2024-01-02',0,null,null,null);

INSERT INTO `evento_agenda`(`Fecha`, `Disponibilidad`, `Descripcion`, `correo`, `telefono`) VALUES ('2024-01-03',0,null,null,null);

INSERT INTO `evento_agenda`(`Fecha`, `Disponibilidad`, `Descripcion`, `correo`, `telefono`) VALUES ('2024-01-04',0,null,null,null);

INSERT INTO `evento_agenda`(`Fecha`, `Disponibilidad`, `Descripcion`, `correo`, `telefono`) VALUES ('2024-01-05',0,null,null,null);

INSERT INTO `evento_agenda`(`Fecha`, `Disponibilidad`, `Descripcion`, `correo`, `telefono`) VALUES ('2024-01-06',0,null,null,null);