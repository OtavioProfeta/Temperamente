<?php
include_once ("validarcookie.php");
include_once ("verurl.php");
?>
<?php include ("includes/topo.php"); ?>
        <nav>
            <?php include ("includes/menu.php"); ?>
        </nav>
        <section>
            <article>
                <?php
                    $red = new verURL();
                    $red->trocarUrl(@$_GET['secao']);
                ?>
            </article>
        </section>
        
<footer>
    <?php include ("includes/rodape.php"); ?>
</footer>
       