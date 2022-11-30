<?php

class cuadrado
{

    public $tamanio;
    public $matriz;
    public $primeraFila;
    public $magico = true;
    public $filas = true;
    public $columnas = true;
    public $diagonales = true;
    public $datosDelCuadrado;

    function __construct($matriz)
    {
        $this->matriz = $matriz;
        $this->tamanio = count($matriz);
        $this->resultadoPrimeraFila();
        
    }

    function resultadoPrimeraFila()
    {

        $total = 0;

        for ($i = 0; $i < $this->tamanio; $i++) {

            $total += $this->matriz[0][$i];
        }

        $this->primeraFila = $total;
    }

    function sumarFilas()
    {

        $contenidoFilas = [];

        for ($i = 0; $i < $this->tamanio; $i++) {

            $contenidoFilas[$i] = array_sum($this->matriz[$i]);
        }
        return $contenidoFilas;
    }

    function sumarColumnas()
    {

        $contenidoColumnas = [];
        for ($i = 0; $i < $this->tamanio; $i++) {

            $total = 0;
            for ($j = 0; $j < $this->tamanio; $j++) {

                $total += $this->matriz[$j][$i];
            }
            $contenidoColumnas[$i] = $total;
        }
        return $contenidoColumnas;
    }

    function sumarDiagonalA()
    {

        $total = 0;

        for ($i = 0; $i < $this->tamanio; $i++) {

            $total += $this->matriz[$i][$i];
        }
        return $total;
    }

    function sumarDiagonalB()
    {

        $total = 0;
        $contador = $this->tamanio - 1;
        for ($i = 0; $i < $this->tamanio; $i++) {

            $total += $this->matriz[$contador][$i];
            $contador--;
        }
        return $total;
    }

    function pintarCuadradoMagico()
    {

        echo '<table>';
        for ($filas = 0; $filas < $this->tamanio; $filas++) {
            echo '<tr>';
            for ($columnas = 0; $columnas < $this->tamanio; $columnas++) {
                echo "<td>{$this->matriz[$filas][$columnas]}</td>";
            }
            echo '</tr>';
        }
        echo '</table>';

        if ($this->magico) {
            echo "<h2 class='verde'>Es un cuadrado mágico</h2>";
        } else {
            echo "<h2 class='rojo'>No es uncuadrado mágico</h2>";
            echo '<br>';
            echo 'Respecto a la suma de la primera fila que es ' . $this->primeraFila;

            if ($this->filas == false) {
                echo '<br><br>';
                echo "Las filas diferentes a $this->primeraFila son: <br>";
                echo '<br>';


                $eFilas = $this->datosDelCuadrado["filas"];
                for ($i = 0; $i < $this->tamanio; $i++) {
                    if ($eFilas[$i] != $this->primeraFila) {
                        echo "Fila " . $i + 1 . "<br><br>";
                    }
                }
            }

            if ($this->columnas == false) {

                echo "Las columnas diferentes a $this->primeraFila son: <br>";
                echo '<br>';

                $eColumnas = $this->datosDelCuadrado["columnas"];
                for ($i = 0; $i < $this->tamanio; $i++) {
                    if ($eColumnas[$i] != $this->primeraFila) {
                        echo "Columna " . $i + 1 . "<br><br>";
                    }
                }
            }

            if ($this->diagonales == false) {

                echo "<br>Las diagonales diferentes a $this->primeraFila son: <br>";
                echo '<br>';

                $primeraDiagonal = $this->datosDelCuadrado["diagonalA"];
                $segundaDiagonal = $this->datosDelCuadrado["diagonalB"];

                if ($primeraDiagonal != $this->primeraFila) {
                    echo "Primera diagonal <br><br>";
                }

                if ($segundaDiagonal != $this->primeraFila) {
                    echo "Segunda diagonal <br>";
                }
            }
        }
    }

    function analizarCuadradoMagico()
    {
        $contenidoFilas = $this->sumarFilas();
        foreach ($contenidoFilas as $resulatdo) {
            if ($resulatdo != $this->primeraFila) {
                $this->filas = false;
                break;
            }
        }

        $contenidoColumnas = $this->sumarColumnas();
        foreach ($contenidoColumnas as $resulatdo) {
            if ($resulatdo != $this->primeraFila) {
                $this->columnas = false;
                break;
            }
        }


        $diagonalA = $this->sumarDiagonalA();
        $diagonalB = $this->sumarDiagonalB();
        

        if ($diagonalA != $this->primeraFila || $diagonalB != $this->primeraFila) {
            $this->diagonales = false;
        }

        if ($this->filas == false || $this->columnas == false || $this->diagonales == false) {
            $this->magico = false;
        }

        $informacion = array(
            'filas' => $contenidoFilas,
            'columnas' => $contenidoColumnas,
            'diagonalA' => $diagonalA,
            'diagonalB' => $diagonalB
        );

        $this->datosDelCuadrado = $informacion;
    }
}
