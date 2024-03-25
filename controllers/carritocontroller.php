<?php

class CarritoController {
    private $carrito;

    public function __construct() {
        // Inicializa el carrito de compras
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
        $this->carrito = &$_SESSION['carrito'];
    }

    // Método para agregar un tatuaje al carrito
    public function agregarTatuaje($idTatuaje, $cantidad = 1) {
        if (isset($this->carrito[$idTatuaje])) {
            $this->carrito[$idTatuaje]['cantidad'] += $cantidad;
        } else {
            $this->carrito[$idTatuaje] = ['id' => $idTatuaje, 'cantidad' => $cantidad];
        }
    }

    // Método para eliminar un tatuaje del carrito
    public function eliminarTatuaje($idTatuaje) {
        if (isset($this->carrito[$idTatuaje])) {
            unset($this->carrito[$idTatuaje]);
        }
    }

    // Método para actualizar la cantidad de un tatuaje en el carrito
    public function actualizarCantidad($idTatuaje, $cantidad) {
        if (isset($this->carrito[$idTatuaje])) {
            $this->carrito[$idTatuaje]['cantidad'] = $cantidad;
        }
    }

    // Método para vaciar el carrito
    public function vaciarCarrito() {
        $this->carrito = [];
    }

    // Método para obtener el contenido del carrito
    public function obtenerContenidoCarrito() {
        return $this->carrito;
    }

    // Método para calcular el total de la compra
    public function calcularTotal() {
        $total = 0;
        foreach ($this->carrito as $item) {
            // Aquí podrías obtener el precio del tatuaje desde la base de datos
            // y multiplicarlo por la cantidad
            $total += $item['cantidad'] * obtenerPrecioTatuajePorId($item['id']);
        }
        return $total;
    }
}

// Función para obtener el precio de un tatuaje desde la base de datos (simulada)
function obtenerPrecioTatuajePorId($idTatuaje) {
    // Supongamos que aquí consultas la base de datos para obtener el precio del tatuaje con el ID proporcionado
    // Aquí deberías reemplazar este ejemplo con tu lógica real para obtener el precio
    // Retorna un precio ficticio para este ejemplo
    $precios = [
        1 => 50, // Precio del tatuaje con ID 1
        2 => 70, // Precio del tatuaje con ID 2
        // Agrega más precios según tu base de datos
    ];
    return isset($precios[$idTatuaje]) ? $precios[$idTatuaje] : 0; // Si no se encuentra el precio, retorna 0
}

// Ejemplo de uso
session_start(); // Inicia la sesión si no está iniciada
$carritoController = new CarritoController();
$carritoController->agregarTatuaje(1, 2); // Agregar 2 unidades del tatuaje con ID 1 al carrito
$carritoController->agregarTatuaje(2, 1); // Agregar 1 unidad del tatuaje con ID 2 al carrito
$carritoController->eliminarTatuaje(2); // Eliminar el tatuaje con ID 2 del carrito
$carritoController->actualizarCantidad(1, 3); // Actualizar la cantidad del tatuaje con ID 1 a 3 unidades
$contenidoCarrito = $carritoController->obtenerContenidoCarrito(); // Obtener el contenido actual del carrito
$totalCompra = $carritoController->calcularTotal(); // Calcular el total de la compra

// Imprime el contenido del carrito y el total de la compra (solo para fines de demostración)
echo "Contenido del carrito:<br>";
print_r($contenidoCarrito);
echo "<br>Total de la compra: $totalCompra";