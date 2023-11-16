/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.candybar;
import java.util.Scanner;

/**
 *
 * @author Daniel
 */
public class Candybar {

    public static void main(String[] args) {
        System.out.println("Funciona");
        Scanner scanner = new Scanner(System.in);
        FachadaCandyBar f = new FachadaCandyBar();
        boolean e = true;
        while (e){
            System.out.println("MEMU");
            System.out.println("1) Comprar");
            System.out.println("2) Pedido");
            System.out.println("3) Salir");
            System.out.print("opcion: ");
            int opcion = scanner.nextInt();
            switch (opcion) {
                case 1 -> {
                    System.out.println("1) pipoca pequena");
                    System.out.println("2) pipoca mediana");
                    System.out.println("3) pipoca grande");
                    System.out.println("4) soda pequena");
                    System.out.println("5) soda mediana");
                    System.out.println("6) soda grande");
                    System.out.println("7) combo 1");
                    System.out.println("8) combo 2");
                    System.out.println("9) combo 3");
                    System.out.print("opcion: ");
                    int o = scanner.nextInt();
                    switch (o){
                        case 1 -> f.agregarSimple("pipoca", Tamanio.pequeno);
                        case 2 -> f.agregarSimple("pipoca", Tamanio.mediano);
                        case 3 -> f.agregarSimple("pipoca", Tamanio.grande);
                        case 4 -> f.agregarSimple("soda", Tamanio.pequeno);
                        case 5 -> f.agregarSimple("soda", Tamanio.mediano);
                        case 6 -> f.agregarSimple("soda", Tamanio.grande);
                        case 7 -> f.agregarCom("combo1");
                        case 8 -> f.agregarCom("combo2");
                        case 9 -> f.agregarCom("combo3");
                        default -> System.out.println("Seleccione una opcion valida");
                    }
                    break;
                }
                case 2 -> f.mostrar();
                case 3 -> e = false;
                default -> System.out.println("Seleccione una opcion valida");
            }            
        }
    }
}