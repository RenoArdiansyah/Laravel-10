<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    private static $post_contain = [
        [
            'title'     => 'judul pertama',
            'slug'      => 'pertama',
            'pembuat'   => 'renn',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ex? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ex? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, doloribus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere!'
        ],
        [
            'title'     => 'judul kedua',
            'slug'      => 'kedua',
            'pembuat'   => 'renn',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ex? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, doloribus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere!'
        ],
        [
            'title'     => 'judul ketiga',
            'slug'      => 'ketiga',
            'pembuat'   => 'rin',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ex? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, doloribus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere!'
        ],
        [
            'title'     => 'judul keempat',
            'slug'      => 'keempat',
            'pembuat'   => 'roy',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, ex? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, doloribus.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga tenetur placeat numquam. Pariatur, reprehenderit. Suscipit, deleniti eum saepe id repellat quam soluta, sunt sequi assumenda, itaque tempore enim consectetur. Quo inventore iure ad praesentium qui corporis earum voluptatem eius quos soluta, sunt eum animi molestias. Nulla maxime velit ipsum aliquid commodi, praesentium officiis blanditiis in culpa ab? Minus quibusdam maiores et vel tempora delectus temporibus asperiores non, repellat nobis enim eligendi, repudiandae odit dolore eius distinctio dolorem explicabo quo illum? Earum, eius unde distinctio ad optio recusandae hic pariatur ex sapiente molestias. Amet esse beatae ea aliquam ducimus deleniti facere!',

        ],
    ];
    public static function index() {
        
    }

    public static function full()
    {

        $posts = self::$post_contain;

        foreach ($posts as &$post) {
            if (array_key_exists('body', $post)) {
                $post['body'] = Str::limit($post['body'], $limit = 250, $end = '...');
            }
        }
        return $posts;
    }


    public static function single($slug)
    {
        $posts = \collect(self::$post_contain);
        // $post = [];
        // foreach ($posts as $key) {
        //     if ($key['slug'] == $slug) { 
        //         $post = $key;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
