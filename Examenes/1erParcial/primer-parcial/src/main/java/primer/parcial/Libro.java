/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package primer.parcial;

/**
 *
 * @author israe
 */
public class Libro {
    private String titulo;
    private String contenido;
    private int num_pag;
    
    public Libro(String ti, String cont, int np){
       this.titulo = ti;
       this.contenido = cont;
       this.num_pag = np;
    }
    
    public String getTitulo() {
        return titulo;
    }

    public String getContenido() {
        return contenido;
    }

    public int getNum_pag() {
        return num_pag;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public void setContenido(String contenido) {
        this.contenido = contenido;
    }

    public void setNum_pag(int num_pag) {
        this.num_pag = num_pag;
    }
    
    @Override
    public String toString() {
        return "Libro: "+titulo+"\nContenido: "+contenido+"\nNum. paginas: "+num_pag;
    }
}
