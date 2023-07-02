
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
 *         &lt;element name="searchTickResult" type="{http://www.w3.org/2001/XMLSchema}string"/&gt;
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
    "searchTickResult"
})
@XmlRootElement(name = "searchTickResponse")
public class SearchTickResponse {

    @XmlElement(required = true)
    protected String searchTickResult;

    /**
     * Obtiene el valor de la propiedad searchTickResult.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getSearchTickResult() {
        return searchTickResult;
    }

    /**
     * Define el valor de la propiedad searchTickResult.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setSearchTickResult(String value) {
        this.searchTickResult = value;
    }

}
