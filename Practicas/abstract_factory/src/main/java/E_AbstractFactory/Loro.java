package E_AbstractFactory;

public class Loro implements I_Aves {
    String nombre;
    int peso;
    String tam_alas;

    public Loro(String nom, int peso, String tam_alas){
        this.nombre = nom;
        this.peso = peso;
        this.tam_alas = tam_alas;
    }
    // implementación del método de la interfaz I_Aves
    @Override
    public void volar(){
        System.out.println("El loro " + this.nombre + " está volando");
    }
    @Override
    public void mostrar(){
        System.out.println("El loro " + this.nombre + " está volando");
        System.out.println("Peso: " + this.peso);
        System.out.println("Tamaño de alas: " + this.tam_alas);
    }
    // getters de los atributos
    @Override
    public int getPeso(){
        return this.peso;
    }
    @Override
    public String getNombre(){
        return this.nombre;
    }
    @Override
    public String getTamAlas(){
        return this.tam_alas;
    }
    // setters de los atributos
    @Override
    public void setPeso(int peso){
        this.peso = peso;
    }
    @Override
    public void setNombre(String nom){
        this.nombre = nom;
    }
    @Override
    public void setTamAlas(String tam_alas){
        this.tam_alas = tam_alas;
    }
    @Override
    public String toString(){
        return "Aguila{ Nombre: " + nombre + ", Peso: " + peso + ", Tamaño de alas: " + tam_alas + " }";
    }
}
