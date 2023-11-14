/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package adapter;

import java.util.Scanner;

/**
 *
 * @author Carlos
 */
public class Adapter {

    public static void main(String[] args) {
          Scanner S = new Scanner(System.in);
        
        System.out.println("");
        int opcion;
        do {
            System.out.print(
                    "MENÚ DE OPCIONES\n"
                    + "---- -- --------\n"
                    + "1. Encender motor común.\n"
                    + "2. Encender motor económico.\n"
                    + "3. Encender motor eléctrico.\n"
                    + "4. Salir.\n"
                    + "Seleccione opción: "
            );

            opcion = S.nextInt();
            switch (opcion) {
                case 1:
                    IMotor motor =new MotorComun();
                    motor.encender();
                    motor.acelerar();
                    motor.apagar();
                    break;
                case 2:
                    motor =(MotorEconomico) new MotorEconomico();
                    motor.encender();
                    motor.acelerar();
                    motor.apagar();
                    break;
                case 3:
                    motor =(MotorElectricoAdapter) new MotorElectricoAdapter();
                    motor.encender();
                    motor.acelerar();
                    motor.apagar();
                    break;
                case 4:
                    System.out.println("¡Cerrando programa!");
                    break;
                default:
                    System.out.println("La opción ingresada NO es válida.");
            }

            System.out.print("\n\n");
        } while (opcion != 4);
    }
}
