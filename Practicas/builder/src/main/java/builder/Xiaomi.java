
package com.mycompany.builder;

/**
 *
 * @author marcani
 */
public class Xiaomi extends CelularBuilder {
    @Override
    public void setModelo() {
        celular.modelo = Modelo.MI_11;
    }
    @Override
    public void setMarca() {
        celular.marca = Marca.XIAOMI;
    }

    @Override
    public void setTamanio() {
        celular.tamanio = Tamanio.MEDIANO;
    }

    @Override
    public void setColor() {
        celular.color = Color.GRIS;
    }

    @Override
    public void setMemoria() {
        celular.memoria = Memoria.DOS_GB;
    }

    @Override
    public void setBateria() {
        celular.bateria = Bateria.mA5000;
    }

    @Override
    public void setProcesador(){
        celular.procesador = Procesador.Dimensity_8000;
    }
    
}
