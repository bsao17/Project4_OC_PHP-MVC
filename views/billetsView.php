<section class="m-2 p-2 border border-light rounded text-center" id="billet">
    <?php
        foreach($post as $value){
            echo $value['ID']." | ";
            echo "<strong><u class='text-light'>".$value['title']."</u></strong><br><hr>";
            echo $value['content']."<hr class='bg-light'>";
        }
    ?>
</section>

<hr class="border border-dark">
    <section id="comments" class="m-2 border border-light rounded" >
        <?php  include_once('commentFormView.php') ?>
    </section>