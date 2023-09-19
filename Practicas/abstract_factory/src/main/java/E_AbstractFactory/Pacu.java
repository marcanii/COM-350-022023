package E_AbstractFactory;

public class Pacu implements I_Peces {
    String nombre;
    int longitud;

    public Pacu(String nom, int longitud){
        this.nombre = nom;
        this.longitud = longitud;
    }
    // implementación del método de la interfaz I_Peces
    @Override
    public void nadar(){
        System.out.println("El pacu " + this.nombre + " está nadando");
    }
    @Override
    public void mostrar(){
        System.out.println("El pacu " + this.nombre + " está nadando");
        System.out.println("Longitud: " + this.longitud);
    }
    // getters de los atributos
    @Override
    public int getLongitud(){
        return this.longitud;
    }
    @Override
    public String getNombre(){
        return this.nombre;
    }
    // setters de los atributos
    @Override
    public void setLongitud(int longitud){
        this.longitud = longitud;
    }
    @Override
    public void setNombre(String nom){
        this.nombre = nom;
    }
    @Override
    public String toString(){
        return "Pacu{" + "nombre: " + nombre + ", longitud: " + longitud + '}';
    }
}
