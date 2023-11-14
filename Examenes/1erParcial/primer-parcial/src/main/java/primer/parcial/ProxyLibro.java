/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package primer.parcial;

/**
 *
 * @author israe
 */
public class ProxyLibro implements ILibro {
    private Libro libro;
    public ProxyLibro(Libro l){
        this.libro = l;
    }
    @Override
    public void leer(){
        System.out.println("--------Accediendo con Proxy--------");
        System.out.println("Verificando permisos...");
        System.out.println(libro.toString());
    }
}
