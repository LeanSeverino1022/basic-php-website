<?php
include "inc/data.php";
include "inc/functions.php";

$pageTitle = "Full Catalog";
$section = null;

if( isset($_GET["cat"]) )
{
    if($_GET["cat"] == "books") 
    {
        $pageTitle = "Books";
        $section = "books";
    } 
    elseif( $_GET["cat"] == "movies" ) 
    {
        $pageTitle = "Movies";
        $section = "movies";
    }
    elseif ($_GET["cat"] == "music" ) {
        $pageTitle ="Music";
        $section = "music";
    }
}

include "inc/header.php"; 
?>

<div class="section catalog page">
    <div class="wrapper">
        <h1> <?php 
        if( $section != null) {
            echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
        }
        echo $pageTitle ?> </h1>

        <ul class="items">
            <?php
            //  $categories returns the array_keys of all data in the array with category value of $section
            $categories = array_category($catalog, $section);

            // list all elements of $categories array
            foreach($categories as $id) 
            {
                echo get_item_html($id, $catalog[$id] );
            }
            ?> 
        </ul>
    </div>
</div>

<?php include "inc/footer.php" ?>

<!-- $random = array_rand($catalog,4);
var_dump($random);

foreach($random as $id)

get_item($id, $catalog[$id]) -->