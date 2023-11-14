/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package builder;

import java.util.ArrayList;

/**
 *
 * @author Carlos
 */
public class MiSandwichBuilder extends SandwichBuilder {

    @Override
    public void prepararPan() {
        sandwich.tipopan = TipoPan.Blanco;
        sandwich.estostado = true;
    }

    @Override
    public void aplicarCarneQueso() {
        sandwich.tipoqueso = TipoQueso.Cheddar;
        sandwich.tipocarne = TipoCarne.Pavo;
    }

    @Override
    public void aplicarVegetales() {
        sandwich.vegetales = new ArrayList();
        sandwich.vegetales.add("Tomate");
        sandwich.vegetales.add("Cebolla");

    }

    @Override
    public void addCondimentos() {
        sandwich.tienemayonesa = false;
        sandwich.tienemostaza = true;
    }

}
