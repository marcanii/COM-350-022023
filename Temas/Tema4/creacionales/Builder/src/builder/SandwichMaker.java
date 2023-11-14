/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package builder;

/**
 *
 * @author 0
 */
public class SandwichMaker {
     private SandwichBuilder builder;

        public SandwichMaker(SandwichBuilder builder)
        {
            this.builder = builder;
        }

        public void BuildSandwich()
        {
            builder.createSandwich();
            builder.prepararPan();
            builder.aplicarCarneQueso();
            builder.aplicarVegetales();
            builder.addCondimentos();
        }

        public Sandwich getSandwhich()
        {
            return builder.getSandwich();
        }
    
    
}
