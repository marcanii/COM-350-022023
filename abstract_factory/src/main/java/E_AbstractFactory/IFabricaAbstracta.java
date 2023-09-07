package E_AbstractFactory;

public interface IFabricaAbstracta {
    public I_Peces crearPez(String animal);
    public I_Mamifero crearMamifero(String animal);
    public I_Aves crearAve(String animal);
}
