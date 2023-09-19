package E_AbstractFactory;

public class AvesFabrica implements IFabricaAbstracta {
    @Override
    public I_Peces crearPez(String animal){
        return null;
    }

    @Override
    public I_Mamifero crearMamifero(String animal){
        return null;
    }

    @Override
    public I_Aves crearAve(String animal){
        if(animal.equals("Loro")){
            return new Loro("Juan", 5, "pequeño");
        } else if (animal.equals("Aguila")){
            return new Aguila("Pepe", 10, "mediano");
        } else if (animal.equals("Condor")){
            return new Condor("Jose", 20, "grande");
        } else {
            return null;
        }
    }
}
