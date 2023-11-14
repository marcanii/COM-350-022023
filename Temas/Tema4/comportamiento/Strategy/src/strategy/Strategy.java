/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package strategy;

/**
 *
 * @author Carlos
 */
public class Strategy {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Contexto contexto = new Contexto(new AntivirusSimple());
        contexto.ejecutar();
        Contexto contexto2 = new Contexto(new AntivirusAvanzado());
        contexto2.ejecutar();
    }

}
