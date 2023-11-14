/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package singleton;

/**
 *
 * @author Carlos
 */
public class SingleObject {
    private static SingleObject instance;
    private String mensaje; 
    private SingleObject() {
    }
     
    public  static SingleObject getInstance()
    {
        if (instance==null)    
            instance=new SingleObject();
       return instance; 
    }

    public String getMensaje() {
        return mensaje;
    }

    public void setMensaje(String mensaje) {
        this.mensaje = mensaje;
    }
    public void Mensaje ()
    {
        System.out.println(mensaje);
    }
}
