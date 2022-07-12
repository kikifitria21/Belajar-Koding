<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    use HasFactory;
    private static $blog_posts =[
                    [

                        "title" => "Judul Post Pertama",
                        "slug" =>"judul-post-pertama",
                        "author" => "Shin Mina",
                        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure earum cupiditate recusandae iste, doloribus iusto nihil deserunt consequatur sint ipsa animi soluta sit? Quos iusto delectus fugiat. Itaque ad quia, nulla similique eaque sunt. Totam esse commodi nulla similique inventore rem consequatur, consequuntur doloribus voluptatibus consectetur perferendis voluptatem omnis dicta numquam ea hic quidem libero earum explicabo adipisci ratione? Ipsum rem eaque rerum quas consectetur deserunt maxime vero dignissimos architecto quaerat esse aliquid odio obcaecati repellendus, quidem natus animi ipsam."

                    ],
                    [

                        "title" => "Judul Post Kedua",
                        "slug" => "judul-post-kedua",
                        "author" => "Kim Woo Bin",
                        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure earum cupiditate recusandae iste, doloribus iusto nihil deserunt consequatur sint ipsa animi soluta sit? Quos iusto delectus fugiat. Itaque ad quia, nulla similique eaque sunt. Totam esse commodi nulla similique inventore rem consequatur, consequuntur doloribus voluptatibus consectetur perferendis voluptatem omnis dicta numquam ea hic quidem libero earum explicabo adipisci ratione? Ipsum rem eaque rerum quas consectetur deserunt maxime vero dignissimos architecto quaerat esse aliquid odio obcaecati repellendus, quidem natus animi ipsam."
                    ],
];

    public static function all(){
        return collect (self::$blog_posts);
    }

public static function find($slug)
{
    $posts = static::all();

    return $posts->firstWhere('slug',$slug);
}


}
