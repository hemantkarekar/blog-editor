<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php"; ?>
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="title" content="<?php echo $meta["title"]; ?>">
    <meta name="author" content="<?php echo $meta["author"]; ?>">
    <meta name="copyright" content="<?php echo $meta["copyright"]; ?>">
    <meta name="description" content="<?php echo $meta["description"]; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.min.css">
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <main class="index">
        <section class="intro-video">
            <div class="content-wrap">
                <div class="section text-content">
                    <div class="welcome">
                        <div class="text-wrap">
                            <div class="title">
                                <h1>Welcome</h1>
                            </div>
                            <div class="desc">
                                <p>
                                    This paragraph tells something about the company, it's community including the partners and clients they have helped till now.
                                </p>
                                <p>
                                    This paragraph tells something about the company, it's community including the partners and clients they have helped till now.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section media-content">
                    <div class="video-mask">
                        <video poster="/assets/images/banner6.jpg">
                            <source media="(min-width: )" srcset="" type="">
                            <source media="(min-width: )" srcset="" type="">
                            <source src="">
                        </video>
                    </div>
                    <div class="video-overlay">
                    </div>
                </div>
                <div class="section text-content">
                    <div class="links">
                        <div class="text-wrap">
                            <div class="link">
                                <div class="title">
                                    <p>Welcome</p>
                                </div>
                                <div class="desc">
                                    <p>
                                        This paragraph tells something about the company.
                                    </p>
                                    <a href="">Detailes</a>
                                </div>
                            </div>
                            <div class="link">
                                <div class="title">
                                    <p>Welcome</p>
                                </div>
                                <div class="desc">
                                    <p>
                                        This paragraph tells something about the company.
                                    </p>
                                    <a href="">Detailes</a>
                                </div>
                            </div>
                            <div class="link">
                                <div class="title">
                                    <p>Welcome</p>
                                </div>
                                <div class="desc">
                                    <p>
                                        This paragraph tells something about the company.
                                    </p>
                                    <a href="">Detailes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="content-wrap">
                <div class="text-wrap">
                    <div class="title">
                        <h1>About Elixir Communications</h1>
                    </div>
                    <div class="desc">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, eligendi. Magnam illum sequi dolores voluptatibus consequuntur facilis, delectus autem velit accusamus quis aut, cupiditate iusto voluptas animi optio officia quas!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="content-wrap">
                <div class="media-content"></div>
                <div class="text-content"></div>
            </div>
        </section>
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
</body>

</html>