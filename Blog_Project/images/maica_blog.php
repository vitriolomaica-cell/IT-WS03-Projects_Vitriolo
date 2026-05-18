<?php
$title = "TWICE: A Global K-Pop Phenomenon";
$author = "Maica M. Vitriolo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TWICE Blog</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #eaeaea;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            background-color: #111;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 0 30px rgba(245, 111, 160, 0.62);
        }

        .header {
            background: linear-gradient(135deg, #ff5fa2, #ff9f43);
            text-align: center;
            padding: 45px 30px;
            color: #fff;
        }

        .header h1 {
            margin: 0;
            font-size: 34px;
            font-weight: 700;
        }

        .header p {
            margin-top: 8px;
            font-size: 14px;
            opacity: 0.9;
        }

        .content {
            padding: 35px;
        }

        .section {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
            margin-bottom: 40px;
        }

        h2 {
            color: #ff7aa2;
            margin-bottom: 10px;
            border-bottom: 2px solid #ff9f43;
            padding-bottom: 6px;
            font-weight: 600;
        }

        p {
            font-size: 15px;
            line-height: 1.8;
            color: #ddd;
            text-indent: 30px;
            text-align: justify;
        }

        .card {
            background-color: #0c0c0c;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(255, 120, 170, 0.15);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h3 {
            margin: 0 0 8px;
            font-size: 16px;
            color: #ff9fcb;
        }

        .card-body p {
            font-size: 13px;
            color: #ccc;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            padding: 15px;
            font-size: 13px;
            background-color: #0a0a0a;
            color: #aaa;
        }

        @media (max-width: 900px) {
            .section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1><?php echo $title; ?></h1>
        <p>Author: <?php echo $author; ?></p>
    </div>

    <div class="content">

        <div class="section">
            <div>
                <h2>Introduction</h2>
                <p>
                    TWICE is a South Korean girl group formed by JYP Entertainment and debuted in 2015.
                    The group consists of nine members and is known for their bright concepts,
                    catchy music, and strong connection with fans known as ONCE.
                </p>
                <p>
                    Since their debut, TWICE has become one of the most influential K-pop girl groups
                    in the global music industry. They are widely recognized for their catchy songs,
                    synchronized choreography, and visually engaging performances that appeal to
                    audiences of different ages and cultures.
                </p>
            </div>
            <div class="card">
                <img src="twice-group2.jpg" alt="TWICE Group">
                <div class="card-body">
                    <h3>TWICE</h3>
                    <p>
                        A globally recognized K-pop group known for their energetic performances
                        and record-breaking releases.
                    </p>
                </div>
            </div>
        </div>

        <div class="section">
            <div>
                <h2>Main Content</h2>
                <p>
                    TWICE’s music mainly falls under pop, dance-pop, and electronic pop.
                    Their early songs focused on cute and cheerful themes, while later releases
                    show a more mature and confident image.
                </p>
                <p>
                    Popular tracks such as <em>Cheer Up</em>, <em>TT</em>, <em>Fancy</em>,
                    and <em>Feel Special</em> helped establish TWICE as one of the most
                    successful girl groups in K-pop history.
                </p>
                <p>
                    As the group matured, their musical style also evolved. Later releases
                    such as <em>Fancy</em> and <em>Feel Special</em> highlight a more confident,
                    elegant, and emotionally expressive side of TWICE. This transition allowed
                    the group to grow with their audience while maintaining their identity.
                </p>
            </div>

            <div class="card">
                <img src="twice-era.jpg" alt="TWICE Era">
                <div class="card-body">
                    <h3>Musical Growth</h3>
                    <p>
                        TWICE evolved from bright concepts to elegant and empowering styles,
                        showcasing their versatility as artists.
                    </p>
                </div>
            </div>
        </div>

        <div class="section">
            <div>
                <h2>Why I Like TWICE</h2>
                <p>
                    TWICE inspires confidence and positivity through their music.
                    Their teamwork, dedication, and consistent growth make them
                    a group worth admiring.
                </p>
                <p>
                    Another reason I admire TWICE is their strong teamwork and dedication. As a group
                    with nine members, they consistently show unity, professionalism, and mutual
                    support during performances and public appearances. This teamwork reflects their
                    discipline and commitment as artists.
                </p>
                <p>
                    TWICE also stands out because of their continuous growth over the years. Instead
                    of staying with one style, they adapt to new musical trends while still maintaining
                    their identity. This ability to evolve shows maturity and creativity, which I find
                    inspiring.
                </p>
            </div>

            <div class="card">
                <img src="twice-once.jpg" alt="ONCE">
                <div class="card-body">
                    <h3>Connection with Fans</h3>
                    <p>
                        TWICE values their fans deeply, creating music and performances
                        that feel personal and meaningful.
                    </p>
                </div>
            </div>
        </div>

        <div class="section">
            <div>
                <h2>Conclusion</h2>
                <p>
                    TWICE continues to influence the global music scene with their talent,
                    passion, and creativity. They remain a powerful symbol of modern K-pop
                    success.
                </p>
                <p>
                    Their ability to evolve musically and visually while preserving their identity
                    demonstrates professionalism and adaptability. TWICE’s journey from bright and
                    youthful concepts to more mature and expressive styles reflects their growth as
                    artists and their understanding of audience expectations.
                </p>
            </div>

            <div class="card">
                <img src="twice-era2.jpg" alt="Global Impact">
                <div class="card-body">
                    <h3>Global Impact</h3>
                    <p>
                        TWICE’s achievements extend beyond Korea, reaching fans all around the world.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        © 2026 | Blog by <?php echo $author; ?> | Web Systems and Technologies 3
    </div>
</div>

</body>
</html>
