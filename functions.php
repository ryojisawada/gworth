<?php

// bodyにスラッグclassを追加
function pagename_class($classes = '')
{
  if (is_page()) {
    $page = get_post(get_the_ID());
    $classes[] = 'page-' . $page->post_name;
    if ($page->post_parent) {
      $classes[] = get_page_uri($page->post_parent) . '-child';
    }
  }
  return $classes;
}
add_filter('body_class', 'pagename_class');

// アーカイブページ
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'topics'; //任意のスラッグ名　←アーカイブページを有効に
    $args['label'] = 'お知らせ'; //管理画面左ナビに「投稿」の代わりに表示される
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

add_filter('post_type_archive_link', function ($link, $post_type) {
  if ('post' === $post_type) {
    $post_type_object = get_post_type_object('post');
    $slug = $post_type_object->has_archive;
    $link = get_home_url(null, '/' . $slug . '/');
  }
  return $link;
}, 10, 2);
function add_article_post_permalink($permalink)
{
  $permalink = '/topics' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');
function add_article_post_rewrite_rules($post_rewrite)
{
  $return_rule = array();
  foreach ($post_rewrite as $regex => $rewrite) {
    $return_rule['topics/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');



// ファイル読み込み
function add_files()
{

  //css
  wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css', '', '');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/common.css', '', filemtime(get_template_directory() . '/css/common.css'));

  if (is_front_page()) {
    wp_enqueue_style('top', get_template_directory_uri() . '/css/top.css', '', filemtime(get_template_directory() . '/css/top.css'));
  } else {
    wp_enqueue_style('top', get_template_directory_uri() . '/css/second.css', '', filemtime(get_template_directory() . '/css/second.css'));
  }

  //********script
  wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('jquery'), '', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/common.js', array('jquery'), '', true);
  // if (is_front_page()) {
  //   wp_enqueue_script('top', get_template_directory_uri() . '/js/top.js', array('jquery'), '', true);
  // } else {
  //   wp_enqueue_script('second', get_template_directory_uri() . '/js/second.js', array('jquery'), '', true);
  // }
}
add_action('wp_enqueue_scripts', 'add_files');
