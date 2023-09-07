
package E_AbstractFactory;

public interface I_Mamifero {
    void mostrar();
    // getters y setters de los atributos
    public String getNombre();
    public int getTemperatura();
    public int getNumPatas();
    public String getColor();
    public void setNombre(String nombre);
    public void setTemperatura(int temperatura);
    public void setNumPatas(int num_patas);
    public void setColor(String color);
}
