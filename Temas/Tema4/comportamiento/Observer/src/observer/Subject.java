/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package observer;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Carlos
 */
public abstract class Subject {

    private List<Observador> observadores = new ArrayList<Observador>();

    public void agregar(Observador observador) {
        observadores.add(observador);
    }

    public void eliminar(Observador observador) {
        observadores.remove(observador);
    }

    public void notificarTodosObservadores() {
        observadores.forEach(x -> x.actualizar());
    }



    

}
