
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
 *         &lt;element name="getBoardStrResult" type="{http://www.w3.org/2001/XMLSchema}string"/&gt;
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
    "getBoardStrResult"
})
@XmlRootElement(name = "getBoardStrResponse")
public class GetBoardStrResponse {

    @XmlElement(required = true)
    protected String getBoardStrResult;

    /**
     * Obtiene el valor de la propiedad getBoardStrResult.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getGetBoardStrResult() {
        return getBoardStrResult;
    }

    /**
     * Define el valor de la propiedad getBoardStrResult.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setGetBoardStrResult(String value) {
        this.getBoardStrResult = value;
    }

}
