<?php $flex= get_field('contenu_flexible');
                foreach ($flex as $element) {
                    if ($element['galerie'] == TRUE){
                        echo "<div class='images'>" . "<img src=\"" . $element['galerie'][0]['img']['url'] . "\">". "</div>";
                    } elseif ($element['texte'] == TRUE){
                        echo "<div class='texte'>" . $element['texte'] . "</div>";
                    } elseif ($element['citation'] == TRUE){
                        echo "<div class='quote border'>" . $element['citation']. "</div>";
                    } elseif ($element['chapeau'] == TRUE){
                        echo "<div class='chapeau'>" . $element['chapeau']. "</div>";
                    }
                ;}
                ?>