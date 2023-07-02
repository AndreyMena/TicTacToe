
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
 *         &lt;element name="searchBlockResult" type="{http://www.w3.org/2001/XMLSchema}string"/&gt;
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
    "searchBlockResult"
})
@XmlRootElement(name = "searchBlockResponse")
public class SearchBlockResponse {

    @XmlElement(required = true)
    protected String searchBlockResult;

    /**
     * Obtiene el valor de la propiedad searchBlockResult.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getSearchBlockResult() {
        return searchBlockResult;
    }

    /**
     * Define el valor de la propiedad searchBlockResult.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setSearchBlockResult(String value) {
        this.searchBlockResult = value;
    }

}
