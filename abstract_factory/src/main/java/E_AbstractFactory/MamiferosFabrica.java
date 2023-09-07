package E_AbstractFactory;

public class MamiferosFabrica implements IFabricaAbstracta{
    @Override
    public I_Peces crearPez(String animal){
        return null;
    }

    @Override
    public I_Mamifero crearMamifero(String animal){
        if(animal.equals("Leon")){
            return new Leon("Alex", 36, 4, "Amarillo");
        } else if (animal.equals("Oso")){
            return new Oso("Shere Khan", 38, 4, "Naranja");
        } else if (animal.equals("Mono")){
            return new Mono("Baloo", 37, 4, "Café");
        } else {
            return null;
        }
    }
    @Override
    public I_Aves crearAve(String animal){
        return null;
    }
}