
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
 *         &lt;element name="checkWinResult" type="{http://www.w3.org/2001/XMLSchema}boolean"/&gt;
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
    "checkWinResult"
})
@XmlRootElement(name = "checkWinResponse")
public class CheckWinResponse {

    protected boolean checkWinResult;

    /**
     * Obtiene el valor de la propiedad checkWinResult.
     * 
     */
    public boolean isCheckWinResult() {
        return checkWinResult;
    }

    /**
     * Define el valor de la propiedad checkWinResult.
     * 
     */
    public void setCheckWinResult(boolean value) {
        this.checkWinResult = value;
    }

}
