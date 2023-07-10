
package TicTacToe;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Clase Java para anonymous complex type.
 * 
 * <p>El siguiente fragmento de esquema especifica el contenido que se espera que haya en esta clase.
 * 
 * <pre>
 * &lt;complexType&gt;
 *   &lt;complexContent&gt;
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType"&gt;
 *       &lt;sequence&gt;
 *         &lt;element name="row" type="{http://www.w3.org/2001/XMLSchema}int"/&gt;
 *         &lt;element name="column" type="{http://www.w3.org/2001/XMLSchema}int"/&gt;
 *         &lt;element name="player" type="{http://www.w3.org/2001/XMLSchema}int"/&gt;
 *       &lt;/sequence&gt;
 *     &lt;/restriction&gt;
 *   &lt;/complexContent&gt;
 * &lt;/complexType&gt;
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "", propOrder = {
    "row",
    "column",
    "player"
})
@XmlRootElement(name = "tick")
public class Tick {

    protected int row;
    protected int column;
    protected int player;

    /**
     * Obtiene el valor de la propiedad row.
     * 
     */
    public int getRow() {
        return row;
    }

    /**
     * Define el valor de la propiedad row.
     * 
     */
    public void setRow(int value) {
        this.row = value;
    }

    /**
     * Obtiene el valor de la propiedad column.
     * 
     */
    public int getColumn() {
        return column;
    }

    /**
     * Define el valor de la propiedad column.
     * 
     */
    public void setColumn(int value) {
        this.column = value;
    }

    /**
     * Obtiene el valor de la propiedad player.
     * 
     */
    public int getPlayer() {
        return player;
    }

    /**
     * Define el valor de la propiedad player.
     * 
     */
    public void setPlayer(int value) {
        this.player = value;
    }

}
