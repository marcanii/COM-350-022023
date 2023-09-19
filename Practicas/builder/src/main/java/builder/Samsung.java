
package com.mycompany.builder;

/**
 *
 * @author marcani
 */
public class Samsung extends CelularBuilder {
    @Override
    public void setModelo() {
        celular.modelo = Modelo.SAMSUNG_GALAXY_A51;
    }
    @Override
    public void setMarca() {
        celular.marca = Marca.SAMSUNG;
    }

    @Override
    public void setTamanio() {
        celular.tamanio = Tamanio.GRANDE;
    }

    @Override
    public void setColor(){
        celular.color = Color.NEGRO;
    }

    @Override
    public void setMemoria(){
        celular.memoria = Memoria.CUARTO_GB;
    }

    @Override
    public void setBateria(){
        celular.bateria = Bateria.mA4000;
    }

    @Override
    public void setProcesador(){
        celular.procesador = Procesador.Tensor_G2;
    }
}
