package observer;




public class SubjectCasa extends Subject {

    private int monto;
    
    public int getMonto() {
        return monto;
    }

    public void setMonto(int monto) { //disparador
        this.monto = monto; 
	notificarTodosObservadores();
    }

   
}
