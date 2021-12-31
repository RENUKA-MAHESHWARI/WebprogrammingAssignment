<?php

session_start();
require_once 'db.php';
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blog{
            padding 20px;
            margin 30px;
            color: black;
            height 50px;
            width 50px;
            border box;
        }
        h1{
            padding auto;
            margin auto;
            height 50px;
            width 50px;
            background: white;
            color: black;`  
        }
        p{
            
            background: grey;
            color: black; 
            justify center


        }
    </style>
</head>
<body>
    <div class="blog">
        <h1>BLOG POST 1<h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Facere esse unde nihil voluptates eligendi aperiam aut, 
             amet ea consequuntur at? Assumenda asperiores, obcaecati voluptate id commodi,
              velit sint aliquam, dolor harum cum inventore quos quas odit incidunt! Adipisci, 
              numquam nesciunt quam reprehenderit fuga eveniet. Nulla commodi tempora atque voluptas,
               assumenda veritatis aliquid laudantium beatae praesentium nesciunt, quia dicta sequi maxime voluptatibus 
               modi voluptatum molestias accusamus vel impedit dolorum est aliquam minima aut! Quaerat quisquam repellendus
                ratione iure eum rerum, repellat pariatur dolor corporis? Laboriosam totam iusto eum. Repudiandae quos dolorem 
                totam cupiditate, nobis earum fugit cumque libero impedit. Accusantium aut similique mollitia dolorum fugit quia
                 facilis sunt aliquid quibusdam ad repellat beatae dignissimos labore pariatur laborum error rem consectetur, 
                 cum assumenda. .<p>
        <input type="number" name="postlikes" id="likes" placeholder="postlikes">
        <input type="date" name="post date" id="date" placeholder="posted on">
        <h1>BLOG POST 2<h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi ex vel eveniet libero officia corporis
             optio non error, recusandae perspiciatis ipsam necessitatibus maiores, eius iure minima harum dolorum 
             exercitationem consectetur? Expedita earum exercitationem hic excepturi a soluta, vero, iusto harum officiis, 
             molestiae inventore error illo eaque commodi iste dolorum sunt quo nisi voluptatum quasi veritatis? 
             Ab quia error eum exercitationem ut nam tenetur illo aliquam, odio delectus fugit veritatis iure temporibus suscipit
              laborum accusantium vel, distinctio voluptas, assumenda eaque quis explicabo soluta recusandae? Ut illo ea voluptatem
               ex natus saepe id, blanditiis quia architecto, sint, asperiores recusandae ullam beatae maxime..<p>
         <input type="number" name="postlikes" id="likes" placeholder="postlikes">
         <input type="date" name="post date" id="date" placeholder="posted on">

    </div>
</body>
</html>