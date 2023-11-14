/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package factory;

import java.util.Scanner;

/**
 *
 * @author Carlos
 */
public class Factory {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
         PlanFactory fabrica=new PlanFactory(); 
         Scanner sc =new Scanner(System.in);
         
        System.out.println("introduzca el plan");
        String plan=sc.next();
        IPlan plan1=fabrica.getPlan(plan);
        plan1.generarPlan();
        
    }
    
}
