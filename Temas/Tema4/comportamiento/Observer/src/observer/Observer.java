/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package observer;

/**
 *
 * @author Carlos
 */
public class Observer {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        SubjectCasa subject = new SubjectCasa();

        new BolivianosObservador(subject);
        new PesoARGObservador(subject);
        new PesoMXObservador(subject);

        System.out.println("Si desea cambiar 10 dólares obtendrá : ");
        subject.setMonto(10);
        System.out.println("Si desea cambiar 100 dólares obtendrá : ");
        subject.setMonto(100);
        System.out.println("Si desea cambiar 256 dólares obtendrá : ");
        subject.setMonto(256);
    }

}
