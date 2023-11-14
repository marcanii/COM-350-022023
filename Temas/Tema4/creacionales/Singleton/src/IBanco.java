/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Interface.java to edit this template
 */

/**
 *
 * @author Carlos
 */
public interface IBanco {
  public Factura[] Calcular(int idcliente);
 public String Pagar(Factura[] fact); 
}
