
package com.mycompany.builder;

/**
 *
 * @author marcani
 */
public class CelularMaker {
    private CelularBuilder celularBuilder;

    public CelularMaker(CelularBuilder celularBuilder) {
        this.celularBuilder = celularBuilder;
    }

    public void buildCelular(){
        celularBuilder.createCelular();
        celularBuilder.setModelo();
        celularBuilder.setMarca();
        celularBuilder.setTamanio();
        celularBuilder.setColor();
        celularBuilder.setMemoria();
        celularBuilder.setBateria();
        celularBuilder.setProcesador();
    }

    public Celular getCelular(){
        return celularBuilder.getCelular();
    }
}
