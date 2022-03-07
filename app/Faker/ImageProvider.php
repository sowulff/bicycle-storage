<?php

namespace App\Faker;

use Faker\Provider\Base;

class ImageProvider extends Base
{
    protected static $images = [
        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/small_image/500x416/9df78eab33525d08d6e5fb8d27136e95/c/2/c21_c11651m_supersix_evo_crb_disc_ult_cas_pd_1.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/small_image/500x416/9df78eab33525d08d6e5fb8d27136e95/p/e/pehvxgnnow5doua3afpn_4_1.jpeg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/small_image/500x416/9df78eab33525d08d6e5fb8d27136e95/b/a/bassorubinredmrlite.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/small_image/500x416/9df78eab33525d08d6e5fb8d27136e95/l/d/ld702_bsb_n1_2.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/small_image/500x416/9df78eab33525d08d6e5fb8d27136e95/8/0/801.2021.28021_s7470_x-road_issue_matte_silver_black.jpg',
    ];

    public function bikeImage(): string
    {
        return static::randomElement(static::$images);
    }
}
