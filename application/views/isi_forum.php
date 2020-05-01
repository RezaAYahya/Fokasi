<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style_forum.css') ?>" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="top-forum">
        <div class="container">
            <div class="container-desktop-only">
                <h1>#TOPIK FORUM </h1>
            </div>
        </div>
    </div>

    <div class="section section-main">
        <div class="container">
            <div class="collection">
                <div class="columns is-base">
                    <div class="bagan cards-helper">
                        <div class="cards">
                            <div class="is-extra-top">
                                <div class="avatar-wrapper">
                                    <img class="side-avatar" src="<?= base_url('assets/img/avatar.png') ?>" alt="foto " width="150" />

                                    <span> <a class="link" href="#user"> NamaUser </a>
                                        <br> <span class="badge2"></span> Online
                                        <br> 12 jam yang lalu</span> </span>
                                </div>
                            </div>

                            <div class="is-article">
                                Isi forum (Pertanyaan)
                            </div>
                        </div>


                        <div class="cards" style="text-align: center;"><strong>JAWABAN</strong></div>
                        <div class="cards ">
                            <div class="is-extra-top">
                                <div class="avatar-wrapper">
                                    <img class="side-avatar" src="<?= base_url('assets/img/avatar.png') ?>" alt="foto " width="150" />

                                    <span> <a class="link" href="#user"> NamaUser </a>
                                        <br> <span class="badge2"></span> Online
                                        <br> 1 jam yang lalu</span> </span>
                                </div>
                            </div>

                            <div class="is-article"> Jawaban Forum
                            </div>
                        </div>


                        <form class="" action="#" method="post" id="forum_form" enctype="multipart/form-data">

                            <div class="form-input">
                                <label for="subject_textarea"> Jawaban untuk pertanyaan </label>
                                <div class="textarea_btn_wrapper">
                                    <div class="textarea_btn" id="code_btn"><img src="tag_code.png" width="20" alt="tag code icon" /></div>
                                    <div class="textarea_btn" id="img_btn"><img src="tag_img.png" width="20" alt="tag image icon" /></div>
                                    <div class="textarea_btn" id="link_btn"><img src="tag_link.png" width="20" alt="tag link icon" /></div>
                                </div>

                                <textarea name="subject" id="subject_textarea" rows="8" cols="40" placeholder="Tulis jawaban anda disini . . . "></textarea>

                            </div>

                            <input type="submit" class="button is-primary is-full is-medium" value="Submit Jawaban">
                        </form>
                        <a href="#"><u>
                                < Kembali Ke Forum</u> </a> </div> </div> </div> </div> </div> </div> <script src="/assets/js/thirdparty-min.js">
                                    </script>
                                    <script src="/assets/js/main-min.js"></script>
                                    <script type="text/javascript" src="/assets/js/text-editor.js"></script>
                                    <script type="text/javascript" src="/assets/js/forum-v1.js"></script>
                                    <!-- ____________________________________________ highlighting code ____________________________________________ -->
                                    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/styles/tomorrow-night.min.css">
                                    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/highlight.min.js"></script>
                                    <script>
                                        hljs.initHighlightingOnLoad();
                                    </script>
                                    <!-- __________________________________________end highlighting code ____________________________________________ -->



</body>

</html>