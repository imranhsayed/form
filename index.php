<?php
/**
 * Created by PhpStorm.
 * User: ghafir
 * Date: 12/05/17
 * Time: 4:46 PM
 */

/**
 * Returns the name
 *
 * @param $name
 *
 * @return string
 */
function display_name( $name ) {
	return "This is $name";
}

echo display_name( 'Ravi' );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery Practice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<article>
    <h1>My Awesome Post</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Expedita illo impedit, iusto labore minima necessitatibus
        officia quisquam vero voluptas voluptatem. Dignissimos eaque
        enim fugiat laborum non quos repellendus vitae voluptatem!
    </p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Aliquam aliquid asperiores autem consequatur culpa dolorem
        exercitationem labore nobis nulla odit praesentium quia
        quibusdam quo repellendus sed sint, totam ut vel.
    </p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Dolore, ducimus expedita impedit ipsam labore velit. A,
        aliquam, cupiditate earum enim error eveniet fugiat illum
        libero nam numquam provident, quia rerum.
    </p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Blanditiis dolorem eum, facere fugiat fugit hic libero magni
        quaerat. Beatae delectus dolores minus nobis nostrum, numquam
        perferendis saepe sit vitae voluptates.
    </p>
</article>
<div id="contact" class="contact-form">
    <h2>Contact Me</h2>
    <form action="#">
        <ul>
            <li>
                <label for="name">Name: </label><br>
                <input name="name" id="name" type="text">
            </li>

            <li>
                <label for="email">Email Address:</label><br>
                <input name="email" id="email" type="text">
            </li>

            <li>
                <label for="comments">Whats Up?</label><br>
                <textarea name ="comments" id="comments" columns="30" rows="10"></textarea>
            </li>

            <li>
                <input type="submit" class="submit">
            </li>
        </ul>
    </form>
</div>


<script src="jquery.js"></script>
<script src="javascript.js"></script>
</body>
</html>
