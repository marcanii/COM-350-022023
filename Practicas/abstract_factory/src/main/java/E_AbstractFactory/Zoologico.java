package E_AbstractFactory;

public class Zoologico {
    String nombre;
    String direccion;
    int telefono;
    Jaula listaJaulas[];

    public Zoologico(String nombre, String direccion, int telefono, Jaula[] listaJaulas) {
        this.nombre = nombre;
        this.direccion = direccion;
        this.telefono = telefono;
        this.listaJaulas = listaJaulas;
    }
    // getters de los atributos
    public String getNombre() {
        return this.nombre;
    }
    public String getDireccion() {
        return this.direccion;
    }
    public int getTelefono() {
        return this.telefono;
    }
    public Jaula[] getListaJaulas() {
        return this.listaJaulas;
    }
    // setters de los atributos
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }
    public void setTelefono(int telefono) {
        this.telefono = telefono;
    }
    public void setListaJaulas(Jaula[] listaJaulas) {
        this.listaJaulas = listaJaulas;
    }  
}
