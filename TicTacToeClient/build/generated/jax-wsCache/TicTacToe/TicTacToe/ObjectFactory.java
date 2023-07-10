
package TicTacToe;

import javax.xml.bind.annotation.XmlRegistry;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the TicTacToe package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {


    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: TicTacToe
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link PlayAgain }
     * 
     */
    public PlayAgain createPlayAgain() {
        return new PlayAgain();
    }

    /**
     * Create an instance of {@link Tick }
     * 
     */
    public Tick createTick() {
        return new Tick();
    }

    /**
     * Create an instance of {@link GetBoardStr }
     * 
     */
    public GetBoardStr createGetBoardStr() {
        return new GetBoardStr();
    }

    /**
     * Create an instance of {@link GetBoardStrResponse }
     * 
     */
    public GetBoardStrResponse createGetBoardStrResponse() {
        return new GetBoardStrResponse();
    }

    /**
     * Create an instance of {@link CheckWin }
     * 
     */
    public CheckWin createCheckWin() {
        return new CheckWin();
    }

    /**
     * Create an instance of {@link CheckWinResponse }
     * 
     */
    public CheckWinResponse createCheckWinResponse() {
        return new CheckWinResponse();
    }

    /**
     * Create an instance of {@link IsFull }
     * 
     */
    public IsFull createIsFull() {
        return new IsFull();
    }

    /**
     * Create an instance of {@link IsFullResponse }
     * 
     */
    public IsFullResponse createIsFullResponse() {
        return new IsFullResponse();
    }

    /**
     * Create an instance of {@link PlayComputerRand }
     * 
     */
    public PlayComputerRand createPlayComputerRand() {
        return new PlayComputerRand();
    }

    /**
     * Create an instance of {@link PlayComputerRandResponse }
     * 
     */
    public PlayComputerRandResponse createPlayComputerRandResponse() {
        return new PlayComputerRandResponse();
    }

    /**
     * Create an instance of {@link AddToRanking }
     * 
     */
    public AddToRanking createAddToRanking() {
        return new AddToRanking();
    }

    /**
     * Create an instance of {@link GetRanking }
     * 
     */
    public GetRanking createGetRanking() {
        return new GetRanking();
    }

    /**
     * Create an instance of {@link GetRankingResponse }
     * 
     */
    public GetRankingResponse createGetRankingResponse() {
        return new GetRankingResponse();
    }

}
