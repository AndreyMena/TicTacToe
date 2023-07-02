
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
 *         &lt;element name="fila" type="{http://www.w3.org/2001/XMLSchema}int"/&gt;
 *         &lt;element name="columna" type="{http://www.w3.org/2001/XMLSchema}int"/&gt;
 *         &lt;element name="jugador" type="{http://www.w3.org/2001/XMLSchema}int"/&gt;
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
    "fila",
    "columna",
    "jugador"
})
@XmlRootElement(name = "tick")
public class Tick {

    protected int fila;
    protected int columna;
    protected int jugador;

    /**
     * Obtiene el valor de la propiedad fila.
     * 
     */
    public int getFila() {
        return fila;
    }

    /**
     * Define el valor de la propiedad fila.
     * 
     */
    public void setFila(int value) {
        this.fila = value;
    }

    /**
     * Obtiene el valor de la propiedad columna.
     * 
     */
    public int getColumna() {
        return columna;
    }

    /**
     * Define el valor de la propiedad columna.
     * 
     */
    public void setColumna(int value) {
        this.columna = value;
    }

    /**
     * Obtiene el valor de la propiedad jugador.
     * 
     */
    public int getJugador() {
        return jugador;
    }

    /**
     * Define el valor de la propiedad jugador.
     * 
     */
    public void setJugador(int value) {
        this.jugador = value;
    }

}
