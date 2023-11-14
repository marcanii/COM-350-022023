/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package singleton;

/**
 *
 * @author Carlos
 */
public class Singleton {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        SingleObject single=SingleObject.getInstance();
        single.setMensaje("Hola Mundo");
        System.out.println(single.getMensaje());
        
        SingleObject dos=SingleObject.getInstance();
        dos.setMensaje("Hola a todos");
        System.out.println(single.getMensaje());
        System.out.println(dos.getMensaje());
    }
    
}
