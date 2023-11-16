/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.candybar;

/**
 *
 * @author Daniel
 */
public class FachadaCandyBar {
    private Simple pipocaPequena;
    private Simple pipocaMediana;
    private Simple pipocaGrande;
    private Simple sodaPequena;
    private Simple sodaMediana;
    private Simple sodaGrande;
    private Compound combo1;
    private Compound combo2;
    private Compound combo3;
    private final Compound pedido = new Compound("Pedido",0);
    
    public FachadaCandyBar(){
        pipocaPequena = new Simple("Pipoca pequena", Tamanio.pequeno, 5.0);
        pipocaMediana = new Simple("Pipoca mediana", Tamanio.mediano, 8.0);
        pipocaGrande = new Simple("Pipoca grande", Tamanio.grande, 10.0);
        sodaPequena = new Simple("Soda pequena", Tamanio.pequeno, 4.0);
        sodaMediana = new Simple("Soda mediana", Tamanio.mediano, 6.0);
        sodaGrande = new Simple("Soda grande", Tamanio.grande, 8.0);
        combo1 = new Compound(
                "Combo 1", 
                4,
                pipocaMediana,
                pipocaMediana,
                sodaMediana,
                sodaMediana
        );
        combo2 = new Compound(
                "Combo 2", 
                1,
                pipocaMediana,
                sodaMediana
        );
        combo3 = new Compound(
                "Combo 3", 
                8,
                pipocaGrande,
                pipocaGrande,
                sodaMediana,
                sodaMediana
        );
    }
    
    public void agregarSimple(String tipo, Tamanio t) {
        if ("pipoca".equals(tipo)){
            if (t==Tamanio.pequeno){
                pedido.add(pipocaPequena);
            }else if (t==Tamanio.mediano){
                pedido.add(pipocaMediana);
            }else{
                pedido.add(pipocaGrande);
            }
        }else{
            if (t==Tamanio.pequeno){
                pedido.add(sodaPequena);
            }else if (t==Tamanio.mediano){
                pedido.add(sodaMediana);
            }else{
                pedido.add(sodaGrande);
            }
        }
    }
    
    public void agregarCom(String tipo) {
        if ("combo1".equals(tipo)){
            pedido.add(combo1);
        }else if ("combo2".equals(tipo)){
            pedido.add(combo2);
        }else{
            pedido.add(combo3);
        }
    }
    
    public void mostrar(){
        pedido.get();
        System.out.println("Total: "+pedido.getPrecio());
    }
}
