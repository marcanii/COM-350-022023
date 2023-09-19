
package com.mycompany.builder;

/**
 *
 * @author marcani
 */
abstract class CelularBuilder {
    protected Celular celular;

    public Celular getCelular(){
        return celular;
    }

    public void createCelular(){
        celular = new Celular();
    }

    public abstract void setModelo();
    public abstract void setMarca();
    public abstract void setTamanio();
    public abstract void setColor();
    public abstract void setMemoria();
    public abstract void setBateria();
    public abstract void setProcesador();
}
