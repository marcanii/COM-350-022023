package adapter;

public class MotorEconomico implements IMotor {

    public MotorEconomico(){
        
        System.out.println("Creando motor económico...");
    }

    @Override
    public void encender() {
        System.out.println("Encendiendo motor económico.");
    }

    @Override
    public void acelerar() {
        System.out.println("Acelerando el motor económico.");
    }

    @Override
    public void apagar() {
        System.out.println("Apagando motor económico.");
    }
}

