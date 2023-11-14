/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package proxy;

/**
 *
 * @author Carlos
 */
public class Proxy {

    public static void main(String[] args) {
        Cuenta c= new Cuenta(1, "2530", 100);
        ICuenta b1=new CuentaBancoA();
        b1.depositarDinero(c, 100);
        b1.mostrarSaldo(c);
        b1.retirarDinero(c, 20);
        b1.mostrarSaldo(c);
        ICuenta proxy=new CuentaProxy(new CuentaBancoB());
        proxy.depositarDinero(c, 100);
        proxy.mostrarSaldo(c);
        proxy.retirarDinero(c, 10);
        proxy.mostrarSaldo(c);
    }
}
