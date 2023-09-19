
package com.mycompany.builder;

/**
 *
 * @author marcani
 */
public class Celular {
    public Modelo modelo;
    public Marca marca;
    public Tamanio tamanio;
    public Color color;
    public Memoria memoria;
    public Bateria bateria;
    public Procesador procesador;

    public void Mostrar(){
        System.out.println("-----------------Celular-----------------");
        System.out.println("Modelo: " + modelo);
        System.out.println("Marca: " + marca);
        System.out.println("Tamaño: " + tamanio);
        System.out.println("Color: " + color);
        System.out.println("Memoria: " + memoria);
        System.out.println("Bateria: " + bateria);
        System.out.println("Procesador: " + procesador);
    }
}

enum Modelo {
    IPHONE_12, SAMSUNG_GALAXY_A51, MI_11
}

enum Marca {
    SAMSUNG, APPLE, XIAOMI, HUAWEI, LG, MOTOROLA
}

enum Tamanio {
    PEQUENO, MEDIANO, GRANDE
}

enum Color {
    NEGRO, BLANCO, GRIS
}

enum Memoria {
    DOS_GB, CUARTO_GB, OCHO_GB
}

enum Bateria {
    mA3000, mA4000, mA5000
}

enum Procesador {
    Snapdragon_888, A15_Bionic, Tensor_G2, Dimensity_8000
}