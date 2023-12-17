<?php
        $similar_count = 9;
        $sql_recomendados = "SELECT * 
        FROM tbPrestador
        WHERE recomendado = true";

        $sql_queryRecomendados = $mysqli->query($sql_recomendados) or die("Erro ao consultar! ".$mysqli->error);
        if ($sql_queryRecomendados->num_rows == 0){
            ?>
            <div class="no-results">
                <img class="not-found" src="img/not-found.svg">
                <p>Infelizmente, não foi possível encontrar resultados recomendados neste momento.</p>
            </div>
    <?php
        } else {
            while($dadosRecomendados = $sql_queryRecomendados->fetch_assoc()){
                if($similar_count != 14){
                $similar_count = $similar_count + 1;
                ?>
            <a href="pprofile.php/<?php echo $dadosRecomendados['Username']?>"> 
            <div class="search-result" id="result">
                <img class="profile-picture" src="<?php echo $dadosRecomendados['Foto'];?>">
                <h3><?php echo $dadosRecomendados['Nome'];?></h3>
                <div class="like-button">
                    <div class="favorito-<?php echo $similar_count?>">
                        <input id="favorito-<?php echo $similar_count?>" type="checkbox">
                        <label for="favorito-<?php echo $similar_count?>"></label>
                    </div>
                </div>
            </div>
            </a>
            <style>
                .favorito-<?php echo $similar_count?> > input {
                    display: none;
                }
                .favorito-<?php echo $similar_count?> {
                    box-shadow: none;
                    width: 15px;
                    height: 15px;
                    padding: 0%;
                    margin: 0%;
                }
                .favorito-<?php echo $similar_count?> input + label::before {
                    content: '';
                    width: 15px;
                    height: 15px;
                    border-radius: 10%;
                    background-image: url(/BIKO/img/fav-default.svg);
                    background-size: 15px;
                    display: inline-block;
                    vertical-align: middle;
                    margin-right: 8px;
                    margin-bottom: 3px;
                }
                .favorito-<?php echo $similar_count?> input:checked + label:before {
                    background-image: url(/BIKO/img/fav-filled.svg);
                    background-size: 15px;
                }
            </style>
    <?php
                }
        }
    }
    
    ?>