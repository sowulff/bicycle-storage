<?php

namespace App\Faker;

use Faker\Provider\Base;

class ImageProvider extends Base
{
    protected static $images = [
        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/o/c/ocruxvhugjdvae0awmlr_4_1.jpeg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/b/a/bassorubinredmrlite.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/l/d/ld702_bsb_n1_2.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/8/0/801.2021.28021_s7470_x-road_issue_matte_silver_black.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/l/d/ld102_rrr.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/l/d/ld302_sss_n1_1_1_5.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/l/d/ld70120zmd_1_2.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/2/8/286435_1.png',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/c/2/c21_c11651m_supersix_evo_crb_disc_ult_cas_pd_1.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/3/3/337-1729_1.jpg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/r/a/racercykel-sensa-romagna-disc-limited-105-2022_1.jpeg',

        'https://d13e00jhhwfpor.cloudfront.net/media/catalog/product/cache/1/image/2280x1460/c96a280f94e22e3ee3823dd0a1a87606/d/o/domaneplusalr_21_33341_a_primary_3.jpg'
    ];

    public function bikeImage(): string
    {
        return static::randomElement(static::$images);
    }
}
