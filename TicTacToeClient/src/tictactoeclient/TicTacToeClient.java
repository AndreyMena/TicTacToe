/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */

package tictactoeclient;
import java.io.*;
import java.lang.Thread;
import javax.xml.ws.BindingProvider;

/**
 *
 * @author andre
 */
public class TicTacToeClient {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        TicTacToe.DWTicTacToeService service = new TicTacToe.DWTicTacToeService();
        TicTacToe.DWTicTacToePort tictactoe = service.getDWTicTacToePort();
        ((BindingProvider)tictactoe).getRequestContext().put(BindingProvider.SESSION_MAINTAIN_PROPERTY,true);
        tictactoe.tick(1, 2, 2);

        System.out.println(tictactoe.getBoardStr());
        tictactoe.playComputerRand(2);
        /*
        try {
            // Hacer que el programa espere durante 5 segundos
            Thread.sleep(5000); // 5000 milisegundos = 5 segundos
        } catch (InterruptedException e) {
            // Manejar una posible excepción si la espera es interrumpida
            e.printStackTrace();
        }  */
        System.out.println(tictactoe.getBoardStr());  
        System.out.println(tictactoe.isFull(0));  
        
    }
    
}
