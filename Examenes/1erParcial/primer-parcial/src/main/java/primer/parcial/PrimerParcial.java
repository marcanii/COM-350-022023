/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package primer.parcial;

/**
 *
 * @author israe
 */
public class PrimerParcial {

    public static void main(String[] args) {
        //System.out.println("Hello World!");
        // creamos el libro original
        Libro L1 = new Libro("Cosmos", "Este es el contenido de primer libro", 300);
        ILibro iL1 = new LibroReal(L1);
        iL1.leer();
        
        // creamos el proxy
        ILibro proxy = new ProxyLibro(L1);
        proxy.leer();
    }
}
