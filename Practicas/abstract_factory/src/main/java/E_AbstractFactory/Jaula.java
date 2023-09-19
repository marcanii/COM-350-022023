package E_AbstractFactory;

public class Jaula {
    int alto;
    int ancho;
    int largo;
    Object animal;

    public Jaula(int alto, int ancho, int largo, Object animal) {
        this.alto = alto;
        this.ancho = ancho;
        this.largo = largo;
        this.animal = animal;
    }
    // getters de los atributos
    public int getAlto() {
        return this.alto;
    }
    public int getAncho() {
        return this.ancho;
    }
    public int getLargo() {
        return this.largo;
    }
    public Object getAnimal() {
        return this.animal;
    }
}
