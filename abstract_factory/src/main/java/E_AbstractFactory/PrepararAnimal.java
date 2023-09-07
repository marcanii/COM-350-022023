package E_AbstractFactory;

public class PrepararAnimal {
    // metodo para obtener la familia de animales
    public static IFabricaAbstracta getFamilia(String familia) {
        if (familia.equals("Mamiferos")) {
            return new MamiferosFabrica();
        } else if (familia.equals("Aves")) {
            return new AvesFabrica();
        } else if (familia.equals("Peces")) {
            return new PecesFabrica();
        } else {
            return null;
        }
    }  
}
