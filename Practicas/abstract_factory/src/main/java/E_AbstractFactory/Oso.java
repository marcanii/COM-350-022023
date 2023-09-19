package E_AbstractFactory;

public class Oso implements I_Mamifero {
    String nombre;
    int temperatura;
    int num_patas;
    String color;

    public Oso(String nom, int temp, int np, String color){
        this.nombre = nom;
        this.temperatura = temp;
        this.num_patas = np;
        this.color = color;
    }
    // método de la interfaz I_Mamifero
    @Override
    public void mostrar(){
        System.out.println("El oso " + this.nombre + " está rugiendo");
        System.out.println("Temperatura: " + this.temperatura);
        System.out.println("Número de patas: " + this.num_patas);
        System.out.println("Color: " + this.color);
    }
    // getters de los atributos
    @Override
    public int getTemperatura(){
        return this.temperatura;
    }
    @Override
    public String getNombre(){
        return this.nombre;
    }
    @Override
    public int getNumPatas(){
        return this.num_patas;
    }
    @Override
    public String getColor(){
        return this.color;
    }
    // setters de los atributos
    @Override
    public void setTemperatura(int temp){
        this.temperatura = temp;
    }
    @Override
    public void setNombre(String nom){
        this.nombre = nom;
    }
    @Override
    public void setNumPatas(int np){
        this.num_patas = np;
    }
    @Override
    public void setColor(String color){
        this.color = color;
    }
    @Override
    public String toString(){
        return "Oso{" + "nombre: " + nombre + ", temperatura: " + temperatura + ", num_patas: " + num_patas + ", color: " + color + '}';
    }
}
