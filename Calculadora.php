<?php
/**
 * Clase Calculadora - Realiza operaciones matemáticas básicas
 * 
 * @author Tu Nombre
 * @version 1.0
 */
class Calculadora {
    /**
     * Suma dos números
     * 
     * @param float $a Primer número
     * @param float $b Segundo número
     * @return float Resultado de la suma
     */
    public function sumar($a, $b) {
        return $a + $b;
    }

    /**
     * Resta dos números
     * 
     * @param float $a Primer número
     * @param float $b Segundo número
     * @return float Resultado de la resta
     */
    public function restar($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplica dos números
     * 
     * @param float $a Primer número
     * @param float $b Segundo número
     * @return float Resultado de la multiplicación
     */
    public function multiplicar($a, $b) {
        return $a * $b;
    }

    /**
     * Divide dos números
     * 
     * @param float $a Dividendo
     * @param float $b Divisor
     * @return float Resultado de la división
     * @throws Exception Si el divisor es cero
     */
    public function dividir($a, $b) {
        if ($b == 0) {
            throw new Exception("División por cero no permitida");
        }
        return $a / $b;
    }
}

// Ejemplo de uso
$calc = new Calculadora();
//EJEMPLO SUMA
echo "Suma: " . $calc->sumar(5, 3) . "\n";
//EJEMPLO RESTA
echo "Resta: " . $calc->restar(5, 3) . "\n";
//EJEMPLO MULTIPLICACION
echo "Multiplicación: " . $calc->multiplicar(5, 3) . "\n";
//EJEMPLPO DIVISION
echo "División: " . $calc->dividir(5, 3) . "\n";
?>