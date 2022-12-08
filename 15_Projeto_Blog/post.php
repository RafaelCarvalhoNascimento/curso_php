<?php
    include_once("templates/header.php");

    if(isset($_GET["id"])){

        $postId = $_GET["id"];
        $currentPost;
        
        foreach($posts as $post) {

            if($post["id"] == $postId){
                $currentPost = $post;
            }

        }

    }
?>

    <main id="post-container">

        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"]?></h1>
            <p id="post-description"><?= $currentPost["description"]?></p>
            
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost["img"]?>" alt="<?= $currentPost["title"]?>">
            </div>
            
            <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Molestiae voluptates officia expedita repudiandae quas ipsum, quod
            veritatis error est labore obcaecati neque autem! Obcaecati qui perspiciatis,
            delectus accusantium voluptate vitae.
            Ducimus officiis, at assumenda exercitationem eos sint doloribus odit, fugit,
            illum dolorum quisquam ipsa tempore porro perspiciatis hic soluta mollitia
            ipsum laboriosam voluptatum. Veritatis veniam odio repellendus debitis deleniti
            dolores?
            Recusandae nemo delectus sint est veritatis tempore porro corrupti rerum ab
            architecto perspiciatis doloribus ratione autem quas, reiciendis rem, corporis
            iste officiis tenetur! Hic architecto totam quaerat, ut fugiat laborum?
            Libero eos dignissimos placeat vel ea fugit esse odit repellat, blanditiis
            perspiciatis vero aliquam alias nulla facere accusantium sequi. In, impedit
            maxime vero ex facilis dolore rerum quibusdam eum vel!
            Eaque molestiae cum praesentium rerum, consequuntur facilis ratione modi
            obcaecati possimus eius quo eum? Dolor rem nam autem repellendus similique
            perferendis porro delectus praesentium, vitae voluptatum, soluta cumque, ducimus
            architecto!</p>
            <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing
            elit. Molestiae voluptates officia expedita repudiandae quas ipsum, quod
            veritatis error est labore obcaecati neque autem! Obcaecati qui perspiciatis,
            delectus accusantium voluptate vitae.
            Ducimus officiis, at assumenda exercitationem eos sint doloribus odit, fugit,
            illum dolorum quisquam ipsa tempore porro perspiciatis hic soluta mollitia
            ipsum laboriosam voluptatum. Veritatis veniam odio repellendus debitis deleniti
            dolores?
            Recusandae nemo delectus sint est veritatis tempore porro corrupti rerum ab
            architecto perspiciatis doloribus ratione autem quas, reiciendis rem, corporis
            iste officiis tenetur! Hic architecto totam quaerat, ut fugiat laborum?
            Libero eos dignissimos placeat vel ea fugit esse odit repellat, blanditiis
            perspiciatis vero aliquam alias nulla facere accusantium sequi. In, impedit
            maxime vero ex facilis dolore rerum quibusdam eum vel!
            Eaque molestiae cum praesentium rerum, consequuntur facilis ratione modi
            obcaecati possimus eius quo eum? Dolor rem nam autem repellendus similique
            perferendis porro delectus praesentium, vitae voluptatum, soluta cumque, ducimus
            architecto!</p>
        </div>

        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost["tags"] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>        
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
        
    </aside>

    </main>
    
    

<?php
    include_once("templates/footer.php")
?>      
