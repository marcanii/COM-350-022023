/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package state;

/**
 *
 * @author Carlos
 */
public class State {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
         IEstadoSemaforo rojo=new EstadoRojo();
        IEstadoSemaforo amarillo=new EstadoAmarillo();
        IEstadoSemaforo verde=new EstadoVerde();
        
        Semaforo s = new Semaforo(verde);
        s.mostrar();
        s.setEstado(amarillo);
        s.mostrar();
        s.setEstado(rojo);
        s.mostrar();
    }
    
}
