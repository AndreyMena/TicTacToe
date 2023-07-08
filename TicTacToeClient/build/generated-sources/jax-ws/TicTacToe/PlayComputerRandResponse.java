
package TicTacToe;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
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
 *         &lt;element name="playComputerRandResult" type="{http://www.w3.org/2001/XMLSchema}string"/&gt;
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
    "playComputerRandResult"
})
@XmlRootElement(name = "playComputerRandResponse")
public class PlayComputerRandResponse {

    @XmlElement(required = true)
    protected String playComputerRandResult;

    /**
     * Obtiene el valor de la propiedad playComputerRandResult.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getPlayComputerRandResult() {
        return playComputerRandResult;
    }

    /**
     * Define el valor de la propiedad playComputerRandResult.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setPlayComputerRandResult(String value) {
        this.playComputerRandResult = value;
    }

}
