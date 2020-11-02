<?php
require_once("./views/TEMPLATES/accountBaseTemplate.php");
?>
<section class="m-2 p-3 card">
    <p>
        <?php

        function trunc_chain($chain, $lg_max)
        {
            if (strlen($chain) > $lg_max) {
                $chain = substr($chain, 0, $lg_max);
                $last_space = strrpos($chain, " ");
                $chain = substr($chain, 0, $last_space) . "...";
                return $chain;
            }
        }

        foreach ($post as $value) {
            echo "<p class='h4 text-center'><strong>" . $value["ID"] . " <u>" . $value['title'] . "</u></strong></p>";

        ?>
    </p>
    <article>
    <?php

            echo "<span class='lead h5 p-3'>" . trunc_chain($value['content'], 300) . "</span><br>";
            echo "<a href='?action=simplebillet&ID={$value['ID']}' class='btn btn-outline-dark mt-2'>Lire la suite : ".$value['ID']."</a>";
        }
    ?>
    </article>
</section><br><br><br>

<?php require_once("./views/TEMPLATES/footerView.php"); ?>