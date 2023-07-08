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
        //tictactoe.tick(1, 2, 2);
        new TicTacToeInterface().setVisible(true);
        //System.out.println(tictactoe.getBoardStr());
        //tictactoe.playComputerRand(2);
          
        
    }
    
}
