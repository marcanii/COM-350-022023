package E_AbstractFactory;

public class PecesFabrica implements IFabricaAbstracta {
    @Override
    public I_Peces crearPez(String animal){
        if(animal.equals("Pacu")){
            return new Pacu("Alex", 100);
        } else if (animal.equals("Sabalo")){
            return new Sabalo("Perez", 50);
        } else {
            return null;
        }
    }

    @Override
    public I_Mamifero crearMamifero(String animal){
        return null;
    }

    @Override
    public I_Aves crearAve(String animal){
        return null;
    }
}
