/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.candybar;

/**
 *
 * @author Daniel
 */
abstract public class ProductoBase implements Producto{
    public String nombre;
    public double precio;
    
    public ProductoBase(){
        this.nombre = "";
        this.precio = 0.0;
    }
    
    @Override
    public double getPrecio(){
        return this.precio;
    }
    
    @Override
    public String getInformacion(){
        return "Informacion";
    }
    
}
