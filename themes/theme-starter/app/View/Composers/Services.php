<?php
namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;
use \Illuminate\View\View;

class Services extends Composer
{
    public function with()
    {
        $args = [
            'post_type'      => 'services-list',
            'posts_per_page' => 3,
        ];

        $servicesListings = new WP_Query($args);

        if ($servicesListings->have_posts()) {
            while ($servicesListings->have_posts()) {
                $servicesListings->the_post();
                $image = get_field('image_icon');
                echo $image;
            }
        }

        return [
            'servicesList' => $servicesListings,
        ];
    }

    public function compose(View $view)
    {
        $view->with('servicesList', $this->with()['servicesList']);
        $this->displayCategoryNames($view);
    }

   

    public function displayCategoryNames($service)
    {
        $categories = get_the_category($service->ID);
        if ($categories) {
            $category_names = array();
            foreach ($categories as $category) {
                $category_names[] = $category->name;
            }

            $icon_class = get_field('image_icon');

            if ($icon_class) {

                $image_url = $icon_class['url'];
                $image_alt = $icon_class['alt'];

                echo '<img src="' . $image_url . '" alt="' . $image_alt . '">';
            }
            


            echo implode(', ', $category_names);    
        }
    }
    




}
?>
