/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.candybar;

/**
 *
 * @author Daniel
 */
public class Simple extends ProductoBase{
    public Tamanio tamanio;
    
    public Simple(String nombre, Tamanio t,double precio) {
        super();
        this.nombre = nombre;
        this.tamanio = t;
        this.precio = precio;
    }
    
    @Override
    public double getPrecio(){
        return this.precio;
    }
    
    @Override
    public String getInformacion(){
        return this.nombre;
    }
}
