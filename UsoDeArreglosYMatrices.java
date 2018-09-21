
package uso.de.arreglos.y.matrices;
import  java.util.Scanner;


public class UsoDeArreglosYMatrices {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    System.out.println("introduce un nombre: ");
    
    Scanner sc=new Scanner(System.in);
    String nombre;
    nombre=sc.nextLine();
    
    nombre= nombre.toUpperCase();//en el caso de minusculas solo se cambia ESTE
    System.out.println("en mayusuclas es\n :  "+nombre );
    }
    
}
