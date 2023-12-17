<?php
    $sql_code = "call spConsulta('%$username%')";
    $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar! ".$mysqli->error);
    $dados = $sql_query->fetch_assoc();
    
    if (@$dados['Busca'] == "Não existe"){ 
        header('Location: http://192.168.15.20:8221/BIKO/not-found.php');
        die();
    }

    if ($dados['Verified'] == 0){
?>
            <style>
                .verified{
                    display: none;
                }
            </style>
<?php 
            }
?>

<?php 
    if ($dados['MediaAvaliacao'] == 4){
?>
    <style>
        #star-5{
            display: none;
        }
        #no-star{
            display: none;
        }
    </style>
<?php
    } else if ($dados['MediaAvaliacao'] == 3){
?>
    <style>
        #star-5{
            display: none;
        }
        #star-4{
            display: none;
        }
        #no-star{
            display: none;
        }
    </style>
<?php
    } else if ($dados['MediaAvaliacao'] == 2){
?>
    <style>
        #star-5{
            display: none;
        }
        #star-4{
            display: none;
        }
        #star-3{
            display: none;
        }
        #no-star{
            display: none;
        }
    </style>
<?php
    } else if ($dados['MediaAvaliacao'] == 1){
?>
    <style>
        #star-5{
            display: none;
        }
        #star-4{
            display: none;
        }
        #star-3{
            display: none;
        }
        #star-2{
            display: none;
        }
        #no-star{
            display: none;
        }
    </style>
<?php
    } else if ($dados['MediaAvaliacao'] == 0){
        ?>
            <style>
                #star-5{
                    display: none;
                }
                #star-4{
                    display: none;
                }
                #star-3{
                    display: none;
                }
                #star-2{
                    display: none;
                }
                #star-1{
                    display: none;
                }
            </style>
<?php 
    }
?>