/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package builder;

/**
 *
 * @author Carlos
 */
public class Builder {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        SandwichMaker preparadorMiSandwich = new SandwichMaker(new MiSandwichBuilder());
        preparadorMiSandwich.BuildSandwich();
        Sandwich sandwich1 = preparadorMiSandwich.getSandwhich();
        sandwich1.Mostrar();

        SandwichMaker preparadorClubSandwich = new SandwichMaker(new ClubSandwichBuilder());
        preparadorClubSandwich.BuildSandwich();
        Sandwich sandwich2 = preparadorClubSandwich.getSandwhich();
        sandwich2.Mostrar();

        SandwichMaker preparadorSuperSandwich = new SandwichMaker(new SuperSandwichBuilder());
        preparadorSuperSandwich.BuildSandwich();
        Sandwich sandwich3 = preparadorSuperSandwich.getSandwhich();

        sandwich3.Mostrar();

    }

}
