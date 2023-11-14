package state;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Carlos
 */
public class EstadoRojo implements IEstadoSemaforo  {

    @Override
    public void mostrar() {
       System.out.println("Rojo"); 
    }
    
}
