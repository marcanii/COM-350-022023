
package com.mycompany.builder;

/**
 *
 * @author marcani
 */
public class Apple extends CelularBuilder {

    @Override
    public void setModelo() {
        celular.modelo = Modelo.IPHONE_12;
    }
    @Override
    public void setMarca() {
        celular.marca = Marca.APPLE;
    }

    @Override
    public void setTamanio() {
        celular.tamanio = Tamanio.MEDIANO;
    }

    @Override
    public void setColor() {
        celular.color = Color.BLANCO;
    }

    @Override
    public void setMemoria() {
        celular.memoria = Memoria.OCHO_GB;
    }

    @Override
    public void setBateria() {
        celular.bateria = Bateria.mA5000;
    }

    @Override
    public void setProcesador(){
        celular.procesador = Procesador.A15_Bionic;
    }
}
