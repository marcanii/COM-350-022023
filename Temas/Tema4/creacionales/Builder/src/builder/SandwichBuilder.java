/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package builder;

/**
 *
 * @author Carlos
 */
abstract class SandwichBuilder {
     protected  Sandwich sandwich;

        public Sandwich getSandwich()
        {
            return sandwich;
        }

        public void createSandwich()
        {
             sandwich = new Sandwich();
        }

        public abstract void prepararPan();
        public abstract void aplicarCarneQueso();
        public abstract void aplicarVegetales();
        public abstract void addCondimentos();
    
}
