<?php
/**
 * Custom functions
 */

// add_action('template_redirect', 'inheritParentTemplate');
 
// function inheritParentTemplate() {
//     if (is_category()) {
//         $catid = get_query_var('cat'); //current category id
//         $category = get_category($catid);
//         $parent = $category->category_parent; //immediate parent
//         if ($parent){
//             $parentCategory = get_category($parent);
//             if("stores"==$parentCategory->name){
//                 if ( file_exists(TEMPLATEPATH . '/category-' . $parentCategory->slug . '.php') ) {
//                     include (TEMPLATEPATH . '/category-' . $parentCategory->slug . '.php');
//                 }
//                 return true;
//             }
//         }
//     }
// }



// $english_chinese = [

//                  "About" => ["About" => "关于我们", "Overview" => "公司介绍", ]
//                  "Business" => "/business/materials/products/",
//                  "News" => "/business/materials/uses/",
//                  "Culture" => "/business/materials/projects/",
//                  "Careers" => "/business/materials/projects/",
//                  "Contact" => "/business/materials/projects/",
//                  "OA Login" => "/business/materials/projects/",
//                  "Email Login" => "/business/materials/projects/",
//                  "OA Login" => "/business/materials/projects/",

//                 ];








function new_subcategory_hierarchy() {  
    $category = get_queried_object();
 
    $parent_id = $category->category_parent;
 
    $templates = array();
     
    if ( $parent_id == 0 ) {
        // Use default values from get_category_template()
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
        $templates[] = 'category.php';      
    } else {
        // Create replacement $templates array
        $parent = get_category( $parent_id );
 
        // Current first
        $templates[] = "category-{$category->slug}.php";
        $templates[] = "category-{$category->term_id}.php";
 
        // Parent second
        $templates[] = "category-{$parent->slug}.php";
        $templates[] = "category-{$parent->term_id}.php";
        $templates[] = 'category.php';  
    }
    return locate_template( $templates );
}
 
add_filter( 'category_template', 'new_subcategory_hierarchy' );


function nav_generator($nav_array) {

    while(list($name, $url)=each($nav_array)) {
        if ($_SERVER["REQUEST_URI"] == $url) {
            echo "\n<li class=\"active\"><a href=\"".$url."\">".mb_strtoupper($name, "UTF-8")."</a></li>";
        } else {
            echo "\n<li><a href=\"".$url."\">".mb_strtoupper($name, "UTF-8")."</a></li>";
        }
    }
}


function breadcrumb_generator($nav_array) {

    while(list($name, $url)=each($nav_array)) {
        if ($_SERVER["REQUEST_URI"] == $url) {
            echo "\n<li class=\"active\"><a href=\"".$url."\">".mb_strtoupper($name, "UTF-8")."</a></li>";
        } else {
            echo "\n<li><a href=\"".$url."\">".mb_strtoupper($name, "UTF-8")."</a></li>";
        }
    }
}

function my_login_logo() { ?>
    <style type="text/css">
        body.login {
        background: #008050;
        }
        body.login div#login h1 a {
            background-image: url(/images/ktlogin.png);
            padding-bottom: 30px;
            width: auto;
            background-size: auto;
            -webkit-background-size: auto;
        }
        body.login div#login .submit .button {
           background: #4BC970;
            border-color: #3AC162;
        }
        body.login #nav a {
            color: #fff;
        }
        body.login #backtoblog a {
            color: #fff;
        }



        
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );





