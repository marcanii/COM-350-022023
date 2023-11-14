/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package builder;

import java.util.List;

/**
 *
 * @author Carlos
 */
class Sandwich {

    public TipoPan tipopan;
    public boolean estostado;
    public TipoQueso tipoqueso;
    public TipoCarne tipocarne;
    public boolean tienemostaza;
    public boolean tienemayonesa;
    public List<String> vegetales;

    public void Mostrar() {
        System.out.println("Sandwich pan tipo  " + tipopan + " ");
        if (estostado) {
            System.out.println("Tostado");
        }
        if (tienemayonesa) {
            System.out.println("Con Mayonesa ");
        }
        if (tienemostaza) {
            System.out.println("Con Mostaza");
        }
        System.out.println("Carne: " + tipocarne);
        System.out.println("Quesi: " + tipoqueso);
        System.out.println("Vegetales:");
        for (String vegetal : vegetales) {
            System.out.println("   " + vegetal);
        }
    }
}

enum TipoPan {
    Blanco,
    Integral
}

enum TipoCarne {
    Pavo,
    Jamon,
    Pollo,
    Salame
}

enum TipoQueso {
    Americano,
    Swiss,
    Cheddar,
    Provolone
}
