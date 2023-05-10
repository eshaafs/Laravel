<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Artikel Pertama',
            'slug' => 'judul-artikel-pertama',
            'author' => 'Esha Sajaka',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus fugiat hic quasi veritatis amet quas! Corrupti incidunt ratione, quos pariatur molestias praesentium doloremque! Omnis ducimus accusantium dolore fugit ipsam tempora sunt impedit tenetur culpa porro voluptatum velit soluta sapiente deserunt, eius esse facilis, ex voluptates nisi? Ratione porro, dolores animi enim, repudiandae consequuntur libero eaque labore hic nulla, odio eveniet nesciunt! Earum neque sit amet maiores ex at totam suscipit, quidem eius eaque molestias. Quos, dolores alias atque qui ipsum ullam quam aliquam facere assumenda, fugiat tenetur veritatis nesciunt maxime voluptas labore animi cum! Eos vitae sequi dolorum libero saepe.'
        ],
        [
            'title' => 'Judul Artikel Kedua',
            'slug' => 'judul-artikel-kedua',
            'author' => 'Bagus Satria',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi ipsa suscipit voluptatem aut nihil asperiores iusto debitis, doloribus accusantium molestias architecto laborum temporibus beatae nesciunt recusandae placeat! Aliquid, eveniet tenetur veritatis est a amet animi et non odit sit magni beatae magnam quis accusantium, laboriosam earum. Voluptate qui repudiandae dolore! Sunt accusamus perferendis repellendus! Dolores delectus ex iste eveniet velit ad enim, minima, sint maiores magnam, reprehenderit harum molestias dolor cumque tempore ea pariatur labore ratione nam voluptatum ab inventore explicabo praesentium suscipit. Laborum nulla veniam dolorum necessitatibus iste minima quo ullam nemo sint exercitationem et voluptatem quibusdam laudantium, ipsam possimus dolorem perspiciatis est accusantium omnis ab! Dignissimos ipsum nostrum aperiam delectus itaque dolorum recusandae molestias non porro, blanditiis deleniti nobis velit, sint, possimus vero obcaecati mollitia! Sapiente, harum quas quod itaque omnis, corporis odit esse, voluptates consequatur ratione quidem nesciunt explicabo quisquam accusantium quis consequuntur provident atque repudiandae minima ullam id nulla. Fuga non reiciendis, facilis dolore ratione laboriosam enim nesciunt sint itaque eum illo architecto velit cupiditate quidem. Ipsa, quisquam nisi animi perferendis dolore, optio porro est praesentium beatae mollitia repellat esse inventore sequi sunt deleniti repellendus quae fugit asperiores soluta vel at, ducimus consectetur quos in. Nihil?'
        ]
    ];

    public static function all(){
        return collect(Post::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = Post::all();
        return $posts->firstWhere('slug', $slug);
    }
}
