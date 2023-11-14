/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package primer.parcial;

/**
 *
 * @author israe
 */
public class LibroReal implements ILibro {
    private Libro libro;
    public LibroReal(Libro l){
        this.libro = l;
    }
    
    @Override
    public void leer(){
        System.out.println("--------Creando libro real--------");
        System.out.println(libro.toString()+"\n");
    }
}
