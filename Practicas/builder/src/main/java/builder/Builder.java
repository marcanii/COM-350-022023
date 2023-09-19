/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.builder;

/**
 *
 * @author marcani
 */
public class Builder {

    public static void main(String[] args) {
        CelularMaker SamsungMaker = new CelularMaker(new Samsung());
        SamsungMaker.buildCelular();
        Celular samsung = SamsungMaker.getCelular();
        samsung.Mostrar();

        CelularMaker XiaomiMaker = new CelularMaker(new Xiaomi());
        XiaomiMaker.buildCelular();
        Celular xiaomi = XiaomiMaker.getCelular();
        xiaomi.Mostrar();

        CelularMaker AppleMaker = new CelularMaker(new Apple());
        AppleMaker.buildCelular();
        Celular apple = AppleMaker.getCelular();
        apple.Mostrar();
        
    }
}
