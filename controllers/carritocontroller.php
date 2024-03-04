import com.proyecto.domain.Articulo;
import com.proyecto.domain.Item;
import com.proyecto.domain.Pedido;
import com.proyecto.service.ArticuloService;
import com.proyecto.service.ItemService;
import com.proyecto.service.PedidoService;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
@Slf4j
public class CarritoController {

    @Autowired
    private ItemService itemService;
    @Autowired
    private ArticuloService articuloService;
    @Autowired
    private PedidoService pedidoService;

    //Para ver el carrito
    @GetMapping("/carrito/listado")
    public String inicio(Model model) {
        var items = itemService.gets();
        model.addAttribute("items", items);
        var carritoTotalVenta = 0;
        for (Item i : items) {
            carritoTotalVenta += (i.getCantidad() * i.getPrecio());
        }
        model.addAttribute("carritoTotal", carritoTotalVenta);
        return "/carrito/listado";
    }

    //Para Agregar un tatuaje al carrito
    @GetMapping("/carrito/agregar/{idTatuaje}")
    public ModelAndView agregarItem(Model model, Item item) {
        Item item2 = itemService.get(item);
        if (item2 == null) {
            Tatuaje tatuaje = tatuajeService.getTatuaje(item);
            item2 = new Item(tatuaje);
        }
        itemService.save(item2);
        var lista = itemService.gets();
        var totalCarritos = 0;
        var carritoTotalVenta = 0;
        for (Item i : lista) {
            totalCarritos += i.getCantidad();
            carritoTotalVenta += (i.getCantidad() * i.getPrecio());
        }
        model.addAttribute("listaItems", lista);
        model.addAttribute("listaTotal", totalCarritos);
        model.addAttribute("carritoTotal", carritoTotalVenta);
        return new ModelAndView("/carrito/fragmentosCarrito :: verCarrito");
    }

    //Para mofificar un tatuaje del carrito
    @GetMapping("/carrito/modificar/{idArticulo}")
    public String modificarItem(Item item, Model model) {
        item = itemService.get(item);
        model.addAttribute("item", item);
        return "/carrito/modifica";
    }

    //Para eliminar un tatuaje del carrito
    @GetMapping("/carrito/eliminar/{idArticulo}")
    public String eliminarItem(Item item) {
        itemService.delete(item);
        return "redirect:/carrito/listado";
    } 

    //Para actualizar un tatuaje del carrito (cantidad)
    @PostMapping("/carrito/guardar")
    public String guardarItem(Item item) {
        itemService.actualiza(item);
        return "redirect:/carrito/listado";
    }
    
    //Para facturar los tatuajes del carrito... no implementado...
    @PostMapping("/carrito/facturar")
    public String facturarCarrito(Pedido pedido) {
        return "index";
    }
}