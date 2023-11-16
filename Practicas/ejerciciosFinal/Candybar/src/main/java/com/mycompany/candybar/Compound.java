/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.candybar;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

/**
 *
 * @author Daniel
 */
public class Compound extends ProductoBase{
    protected List<Producto> children = new ArrayList<>();
    protected double descuento;
    
    public Compound(String nombre, double descuento, Producto... components) {
        super();
        this.nombre = nombre;
        this.descuento = descuento;
        add(components);
    }

    public void add(Producto component) {
        children.add(component);
    }

    public void add(Producto... components) {
        children.addAll(Arrays.asList(components));
    }
    
    public void get(){
        for (Producto c : children) {
            System.out.println(c.getInformacion()+" -> "+c.getPrecio()+"Bs");
        }
    }
    
    @Override
    public double getPrecio(){
        this.precio = 0;
        for (Producto c : children) {
            this.precio += c.getPrecio();
        }
        return this.precio - this.descuento;
    }
    
    @Override
    public String getInformacion(){
        return this.nombre;
    }
}
