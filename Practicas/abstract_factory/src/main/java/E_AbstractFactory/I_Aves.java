package E_AbstractFactory;

public interface I_Aves {
    void volar();
    // getters y setters de los atributos
    public String getNombre();
    public int getPeso();
    public String getTamAlas();
    public void setNombre(String nombre);
    public void setPeso(int peso);
    public void setTamAlas(String tam_alas);

    public void mostrar();
    public String toString();
}
