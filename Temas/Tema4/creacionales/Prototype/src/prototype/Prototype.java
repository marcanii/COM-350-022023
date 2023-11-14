/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package prototype;

/**
 *
 * @author Carlos
 */
public class Prototype {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        CuentaAhorro cuentaAhorro1 = new CuentaAhorro();
        cuentaAhorro1.setMonto(200);

        CuentaAhorro cuentaClonada = (CuentaAhorro) cuentaAhorro1.clonar();

        System.out.println(cuentaAhorro1);
        System.out.println(cuentaClonada);
        cuentaClonada.setMonto(300);
        System.out.println(cuentaAhorro1);
        System.out.println(cuentaClonada);
    }

}
