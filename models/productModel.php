
<?php
/**
* evaluación agencia demoños
*@author $Luis Fernando Mendez Barrera
 * @since 2025-01-30
 * @version 1.0.0
 *Clase Product Model
 *En esta clase se tienen almacenadas las consultas que van en la base de datos de producto
. */
class productModel{
    public $db;
/**
 * la función getAllProducts permite visualizar toda la lista de productos'.
 * 
 * 
 * @return regresa la búsqueda de todos los productos mediante arrays.
 */
    public function getAllProducts() {
        $query = "SELECT * FROM producto";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
/**
 * La función `UserRegister`insertan nuevos registros a la tabla producto
 * 
 * @param titulo inserta el titulo del producto a la bases.
 * @param description inserta la descripción del producto a la base 
 * 
 * @return The `UserRegister` regresa el valor de la tabla que es 1.
 */
    public function UserRegister($titulo,$description){
        $query="INSERT INTO producto (name,description) VALUES ('".$titulo."','".$description."')";
        $stmt=$this->db->query($query);
        return 1;
    }
/**
 * la función deleteProduct permite borrar registros de la base de datos .
 * 
 * @param id es el identificador que permitira la eliminación de datos.
 * 
 * @return execute permite ejecutar la función para el borrado de datos.
 */
    public function deleteProduct($id) {
        $query = "DELETE FROM producto WHERE id_product = :id_product";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_product', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
/**
 * The function `updateProduct` updates a product's name and description in a database table based on
 * the provided ID.
 * 
 * @param id es el identificador que tomara partir de la tabla.
 * @param titulo es el titulo que se empleara para modificar el dato.
 * @param descripcion permite agregar una descripción al producto.
 * 
 * @return execute permite devolver los datos actualizados de los parametros anteriores.
 */
    public function updateProduct($id, $titulo, $descripcion) {
        $query = "UPDATE producto SET name = :name, description = :description WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $titulo, PDO::PARAM_STR);
        $stmt->bindParam(':description', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':id_product', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}