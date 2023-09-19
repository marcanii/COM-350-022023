package E_AbstractFactory;

/**
 *
 * @author marcani
 */
public class Abstract_factory {

    /**
     * @param args
     */
    public static void main(String[] args) {
        // mamiferos
        System.out.println("----------Mamiferos----------");
        IFabricaAbstracta Mamiferos = PrepararAnimal.getFamilia("Mamiferos");
        I_Mamifero leon = Mamiferos.crearMamifero("Leon");
        leon.mostrar();

        // aves
        System.out.println("\n----------Aves----------");
        IFabricaAbstracta Aves = PrepararAnimal.getFamilia("Aves");
        I_Aves loro = Aves.crearAve("Loro");
        loro.mostrar();

        // peces
        System.out.println("\n----------Peces----------");
        IFabricaAbstracta Peces = PrepararAnimal.getFamilia("Peces");
        I_Peces sabalo = Peces.crearPez("Sabalo");
        sabalo.mostrar();

        // zoologico
        Jaula listaJaulas[] = new Jaula[3];
        listaJaulas[0] = new Jaula(10, 10, 10, leon);
        listaJaulas[1] = new Jaula(5, 5, 5, loro);
        listaJaulas[2] = new Jaula(2, 2, 2, sabalo);
        System.out.println("\n----------Zoologico----------");
        Zoologico zoo = new Zoologico("Zoo", "Calle 1", 123, listaJaulas);
        System.out.println("Nombre: " + zoo.getNombre());
        System.out.println("Direccion: " + zoo.getDireccion());
        System.out.println("Telefono: " + zoo.getTelefono());
        System.out.println("Lista de jaulas: ");
        for (int i = 0; i < zoo.getListaJaulas().length; i++) {
            System.out.println("-----------------------------");
            System.out.println("Jaula " + (i + 1) + ": ");
            System.out.println("Alto: " + zoo.getListaJaulas()[i].getAlto());
            System.out.println("Ancho: " + zoo.getListaJaulas()[i].getAncho());
            System.out.println("Largo: " + zoo.getListaJaulas()[i].getLargo());
            System.out.println("Animal: " + zoo.getListaJaulas()[i].getAnimal());
        }
    }
}
