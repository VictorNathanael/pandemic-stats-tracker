<?php 
            if (isset($_POST['pais1']) && isset($_POST['pais2'])) {
                $pais1 = $_POST['pais1'];
                $pais2 = $_POST['pais2'];
                
                $url1 = "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=" . urlencode($_POST["pais1"]);
                $response1 = file_get_contents($url1);
                $data1 = json_decode($response1, true);

                $ConfirmadosPais1 = 0;
                $mortosPais1 = 0; 

                if (!is_null($data1)) {
                    foreach ($data1 as $estado) {
                        $ConfirmadosPais1 += $estado['Confirmados'];
                        $mortosPais1 += $estado['Mortos'];
                    }
                }
                $url2 = "https://dev.kidopilabs.com.br/exercicio/covid.php?pais=" . urlencode($_POST["pais2"]);
                $response2 = file_get_contents($url2);
                $data2 = json_decode($response2, true);

                $ConfirmadosPais2 = 0;
                $mortosPais2 = 0;

                if (!is_null($data2)) {
                    foreach ($data2 as $estado) {
                        $ConfirmadosPais2 += $estado['Confirmados'];
                        $mortosPais2 += $estado['Mortos'];
                    }

                }

                function calcularDiferencaTaxaMorte($pais1, $mortosPais1, $ConfirmadosPais1, $pais2, $mortosPais2, $ConfirmadosPais2) {
                    $taxa1 = isset($ConfirmadosPais1) && $ConfirmadosPais1 > 0 ? $mortosPais1 / $ConfirmadosPais1 : 0;
                    $taxa2 = isset($ConfirmadosPais2) && $ConfirmadosPais2 > 0 ? $mortosPais2 / $ConfirmadosPais2 : 0;
                
                    $diferenca = $taxa1 - $taxa2;
                    $diferenca = abs($diferenca);

                    echo "<p>A taxa de morte em " . $pais1 . " é de " . round($taxa1, 2) . "%.</p>";
                    echo "<p>A taxa de morte em " . $pais2 . " é de " . round($taxa2, 2) . "%.</p>";
                    echo "<p>A diferença de taxa de morte entre " . $pais1 . " e " . $pais2 . " é de " . round($diferenca, 2) . "%.</p>";
                }
                
                calcularDiferencaTaxaMorte($pais1, $mortosPais1, $ConfirmadosPais1, $pais2, $mortosPais2, $ConfirmadosPais2);
            }
            ?>