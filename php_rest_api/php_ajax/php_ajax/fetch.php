<?php
require 'conn.php';

$output = '';

$query = '';

if (isset($_POST["text_search"])) {
    $search = str_replace(",", "|", $_POST["text_search"]);
    
    $post_search_keys = explode(",", trim($_POST["text_search"]));
    $sql = "";
    $sql1 ="";
    foreach ($post_search_keys as $k) {
      // $sql .= " `post_title` REGEXP '$k' AND";
         $sql .= " (`post_title` REGEXP '$k' OR `post_description` REGEXP '$k') AND";
      //   $sql1 .= " `post_description` REGEXP '$k' AND";
    }

    $new_str = preg_replace('/AND$/', '', $sql);
//     $new_str2 = preg_replace('/AND$/', '', $sql1);
//     $query = "SELECT * FROM posts
//         WHERE  ($new_str) OR ($new_str2) ";
    $query = "SELECT categories.category_name, sub_categories.sub_category_name, industries.industry_name, users.*,posts.* FROM `posts`
    INNER JOIN users
    ON users.u_id = posts.post_user_id
    INNER JOIN  categories
    ON posts.post_category = categories.category_id
    INNER JOIN  sub_categories
    ON posts.post_sub_category = sub_categories.sub_category_id
    INNER JOIN  industries
    ON posts.post_industry = industries.industry_id
    WHERE $new_str
    AND `post_category` = '1'
    AND `post_sub_category` = '13'
    AND `post_industry` = '1'"
    ;

} else {
    $query = "SELECT * FROM posts ";
}

$result = $con->query($query);
 $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
//    $output = $query;


$a = json_encode($output);
echo $a;
?>