<?php
$mainLink = "main";
$blogLink = "blog"; /*4*/
class Page {
    protected $name = "page"; /*6*/
    protected $template = "<div><p>It is a default page</p></div>"; /*1*/
    
    public function render() {
        echo $this->template;
    } /*2*/
}

class BlogPage extends Page {
    public function __construct() {
        $this->name = "blog";
        $this->template = "
        <style>
            .blog-container {
                display: flex;
                gap: 20px;
                flex-wrap: wrap;
                padding: 20px;
                font-family: Arial, sans-serif;
            }
            .card {
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 15px;
                width: 250px;
                box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
                transition: transform 0.3s;
            }
            .card:hover {
                transform: scale(1.05);
            }
            .card h3 {
                color: #333;
                margin-top: 0;
            }
            .card p {
                color: #666;
                line-height: 1.4;
            }
        </style>
        <div class='blog-container'>
            <div class='card'>
                <h3>Post Title 1</h3>
                <p>Content of the first blog post.</p>
            </div>
            <div class='card'>
                <h3>Post Title 2</h3>
                <p>Content of the second blog post.</p>
            </div>
            <div class='card'>
                <h3>Post Title 3</h3>
                <p>Content of the third blog post.</p>
            </div>
        </div>";
    }
} /*3*/

echo "
<style>
    .nav-buttons {
        padding: 20px;
        text-align: center;
        background: #f0f0f0;
        margin-bottom: 20px;
    }
    .btn {
        padding: 10px 20px;
        margin: 0 10px;
        font-size: 16px;
        cursor: pointer;
        background: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        transition: background 0.3s;
    }
    .btn:hover {
        background: #0056b3;
    }
</style>
";

echo "<div class='nav-buttons'>";
echo "<a href='?page=main'><button class='btn'>Open Main Page</button></a>";
echo "<a href='?page=blog'><button class='btn'>Open Blog</button></a>";
echo "</div>";  /*7*/


$current_page = isset($_GET['page']) ? $_GET['page'] : $mainLink;

if($current_page == 'main'){
 $page = new Page();
 $page->render();
}

if($current_page == 'blog'){
 $blog = new BlogPage(); 
 $blog->render();
}
?>
