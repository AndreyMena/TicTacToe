
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
 *         &lt;element name="searchWinResult" type="{http://www.w3.org/2001/XMLSchema}string"/&gt;
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
    "searchWinResult"
})
@XmlRootElement(name = "searchWinResponse")
public class SearchWinResponse {

    @XmlElement(required = true)
    protected String searchWinResult;

    /**
     * Obtiene el valor de la propiedad searchWinResult.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getSearchWinResult() {
        return searchWinResult;
    }

    /**
     * Define el valor de la propiedad searchWinResult.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setSearchWinResult(String value) {
        this.searchWinResult = value;
    }

}
