<?php
// Available images:
// 000011290004.jpg   BIRDRIBS-40.jpg   BIRDRIBS-85.jpg         BIRDRIBS_FILM-25.webp      RIBS-19.jpg
// 000011290005.jpg   BIRDRIBS-44.jpg   BIRDRIBS-86.jpg         BIRDRIBS_FILM-26.webp      RIBS-23.jpg
// 000011290006.jpg   BIRDRIBS-52.jpg   BIRDRIBS-88.jpg         BIRDRIBS_FILM-32.webp      RIBS-27.jpg
// 000011290020.jpg   BIRDRIBS-54.jpg   BIRDRIBS_FILM-02.webp   BIRDRIBS_FILM-36.webp      RIBS-28.jpg
// 000011290021.jpg   BIRDRIBS-55.jpg   BIRDRIBS_FILM-03.webp   BIRDRIBS_FISHEYE-05.webp   RIBS-31.jpg
// BIRDRIBS-02.jpg    BIRDRIBS-58.jpg   BIRDRIBS_FILM-07.webp   BIRDRIBS_FISHEYE-06.webp   RIBS-35.jpg
// BIRDRIBS-04.jpg    BIRDRIBS-61.jpg   BIRDRIBS_FILM-09.webp   BIRDRIBS_FISHEYE-11.webp   RIBS-36.jpg
// BIRDRIBS-06.jpg    BIRDRIBS-66.jpg   BIRDRIBS_FISHEYE-17.webpRIBS-41.jpg
// BIRDRIBS-13.jpg    BIRDRIBS-72.jpg   BIRDRIBS_FILM-17.webp   RIBS-06.jpg                RIBS-45.jpg
// BIRDRIBS-16.jpg    BIRDRIBS-74.jpg   BIRDRIBS_FILM-18.webp  'RIBS-08 (1).jpg'
// BIRDRIBS-25.jpg    BIRDRIBS-78.jpg   BIRDRIBS_FILM-19.webp   RIBS-13.jpg
// BIRDRIBS-35.jpg    BIRDRIBS-84.jpg   BIRDRIBS_FILM-23.webp   RIBS-15.jpg

// Available videos:
// https://www.youtube-nocookie.com/embed/qji-m2F3kv0?si=_n8hsg053alvNgJc&amp;start=10

$available_images = [
  '000011290004.jpg',
  '000011290005.jpg',
  '000011290006.jpg',
  '000011290020.jpg',
  '000011290021.jpg',
  'BIRDRIBS-02.jpg',
  'BIRDRIBS-04.jpg',
  'BIRDRIBS-06.jpg',
  'BIRDRIBS-13.jpg',
  'BIRDRIBS-16.jpg',
  'BIRDRIBS-25.jpg',
  'BIRDRIBS-35.jpg',
  'BIRDRIBS-40.jpg',
  'BIRDRIBS-44.jpg',
  'BIRDRIBS-52.jpg',
  'BIRDRIBS-54.jpg',
  'BIRDRIBS-55.jpg',
  'BIRDRIBS-58.jpg',
  'BIRDRIBS-61.jpg',
  'BIRDRIBS-66.jpg',
  'BIRDRIBS-72.jpg',
  'BIRDRIBS-74.jpg',
  'BIRDRIBS-78.jpg',
  'BIRDRIBS-84.jpg',
  'BIRDRIBS-85.jpg',
  'BIRDRIBS-86.jpg',
  'BIRDRIBS-88.jpg',
  'BIRDRIBS_FILM-02.webp',
  'BIRDRIBS_FILM-03.webp',
  'BIRDRIBS_FILM-07.webp',
  'BIRDRIBS_FILM-09.webp',
  'BIRDRIBS_FILM-17.webp',
  'BIRDRIBS_FILM-18.webp',
  'BIRDRIBS_FILM-19.webp',
  'BIRDRIBS_FILM-23.webp',
  'BIRDRIBS_FILM-25.webp',
  'BIRDRIBS_FILM-26.webp',
  'BIRDRIBS_FILM-32.webp',
  'BIRDRIBS_FILM-36.webp',
  'BIRDRIBS_FISHEYE-05.webp',
  'BIRDRIBS_FISHEYE-06.webp',
  'BIRDRIBS_FISHEYE-11.webp',
  'BIRDRIBS_FISHEYE-17.webp',
  'RIBS-06.jpg',
  'RIBS-08 (1).jpg',
  'RIBS-13.jpg',
  'RIBS-15.jpg',
  'RIBS-19.jpg',
  'RIBS-23.jpg',
  'RIBS-27.jpg',
  'RIBS-28.jpg',
  'RIBS-31.jpg',
  'RIBS-35.jpg',
  'RIBS-36.jpg',
  'RIBS-41.jpg',
  'RIBS-45.jpg'
];

// $creditedImages
// this is the array that will be used to display the images, it will be populated with the images that have been credited
// example schema:
// [
//   'file' => 'BIRDRIBS_FILM-02.webp', // this is the filename of the image
//   'title' => 'BIRDRIBS_FILM-02', // this is the title of the image, it's the filename without the extension
//   'overlay-text' => 'Steven Tatlow', // this is always set to Steven Tatlow, but it's here for completeness
//   'url' => 'https://www.instagram.com/stevetatlow/' // this is always set to https://www.instagram.com/stevetatlow/, but it's here for completeness
// ],

$creditedImages = [
  [
    'file' => '000011290004-min.jpg',
    'title' => '000011290004',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => '000011290005-min.jpg',
    'title' => '000011290005',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => '000011290006-min.jpg',
    'title' => '000011290006',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => '000011290020-min.jpg',
    'title' => '000011290020',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => '000011290021-min.jpg',
    'title' => '000011290021',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-02-min.jpg',
    'title' => 'BIRDRIBS-02',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-04-min.jpg',
    'title' => 'BIRDRIBS-04',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-06-min.jpg',
    'title' => 'BIRDRIBS-06',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-13-min.jpg',
    'title' => 'BIRDRIBS-13',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-16-min.jpg',
    'title' => 'BIRDRIBS-16',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-25-min.jpg',
    'title' => 'BIRDRIBS-25',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-35-min.jpg',
    'title' => 'BIRDRIBS-35',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-40-min.jpg',
    'title' => 'BIRDRIBS-40',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-44-min.jpg',
    'title' => 'BIRDRIBS-44',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-52-min.jpg',
    'title' => 'BIRDRIBS-52',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-54-min.jpg',
    'title' => 'BIRDRIBS-54',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-55-min.jpg',
    'title' => 'BIRDRIBS-55',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-58-min.jpg',
    'title' => 'BIRDRIBS-58',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-61-min.jpg',
    'title' => 'BIRDRIBS-61',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-66-min.jpg',
    'title' => 'BIRDRIBS-66',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-72-min.jpg',
    'title' => 'BIRDRIBS-72',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-74-min.jpg',
    'title' => 'BIRDRIBS-74',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-78-min.jpg',
    'title' => 'BIRDRIBS-78',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-84-min.jpg',
    'title' => 'BIRDRIBS-84',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-85-min.jpg',
    'title' => 'BIRDRIBS-85',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-86-min.jpg',
    'title' => 'BIRDRIBS-86',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS-88-min.jpg',
    'title' => 'BIRDRIBS-88',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-02.webp',
    'title' => 'BIRDRIBS_FILM-02',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-03.webp',
    'title' => 'BIRDRIBS_FILM-03',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-07.webp',
    'title' => 'BIRDRIBS_FILM-07',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-09.webp',
    'title' => 'BIRDRIBS_FILM-09',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-17.webp',
    'title' => 'BIRDRIBS_FILM-17',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-18.webp',
    'title' => 'BIRDRIBS_FILM-18',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-19.webp',
    'title' => 'BIRDRIBS_FILM-19',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-23.webp',
    'title' => 'BIRDRIBS_FILM-23',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-25.webp',
    'title' => 'BIRDRIBS_FILM-25',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-26.webp',
    'title' => 'BIRDRIBS_FILM-26',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-32.webp',
    'title' => 'BIRDRIBS_FILM-32',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'BIRDRIBS_FILM-36.webp',
    'title' => 'BIRDRIBS_FILM-36',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-06-min.jpg',
    'title' => 'RIBS-06',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-08 (1)-min.jpg',
    'title' => 'RIBS-08 (1)',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-13-min.jpg',
    'title' => 'RIBS-13',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-15-min.jpg',
    'title' => 'RIBS-15',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-19-min.jpg',
    'title' => 'RIBS-19',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-23-min.jpg',
    'title' => 'RIBS-23',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-27-min.jpg',
    'title' => 'RIBS-27',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-28-min.jpg',
    'title' => 'RIBS-28',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-31-min.jpg',
    'title' => 'RIBS-31',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-35-min.jpg',
    'title' => 'RIBS-35',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-36-min.jpg',
    'title' => 'RIBS-36',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-41-min.jpg',
    'title' => 'RIBS-41',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ],
  [
    'file' => 'RIBS-45-min.jpg',
    'title' => 'RIBS-45',
    'overlay-text' => 'Steven Tatlow',
    'url' => 'https://www.instagram.com/stevetatlow/'
  ]
];

// shuffle images so there's no arguments about who's image is first
// we then slice the array to only include the first 40 images
shuffle($creditedImages);
// $creditedImages = array_slice($creditedImages, 0, 40);

$videos = [
  ['title' => '', 'url' => 'https://www.youtube-nocookie.com/embed/qji-m2F3kv0?si=_n8hsg053alvNgJc&amp;start=10']
];

// shuffle credits so there's no arguments about who's name is first
$artists = [
  ['name' => 'sean walker', 'role' => 'vocals/guitar'],
  ['name' => 'lloyd culpepper', 'role' => 'bass'],
  ['name' => 'george carey', 'role' => 'drums'],
  ['name' => 'tom ponting', 'role' => 'guitar']
];
shuffle($artists);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EPK | BIRDRIBS</title>
  <link rel="stylesheet" href="public/css/style.css" />
  <!-- SEO BULLSHIT -->
  <meta name="description" content="BIRDRIBS electronic press kit" />
  <meta property="og:title" content="EPK | BIRDRIBS" />
  <meta property="og:description" content="BIRDRIBS electronic press kit" />
  <meta property="og:image" content="https://epk.birdribs.uk/public/img/BIRDRIBS_FILM-26.webp" />
  <meta property="og:url" content="https://epk,birdribs.uk" />
  <meta property="og:type" content="website" />
  <!-- END SEO BULLSHIT -->
  <meta name=”robots” content="index, follow">
  <link rel="apple-touch-icon" sizes="180x180" href="/public/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon/favicon-16x16.png">
  <link rel="manifest" href="/public/favicon/site.webmanifest">
  <link rel="mask-icon" href="/public/favicon/safari-pinned-tab.svg" color="#111111">
  <link rel="shortcut icon" href="/public/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#111111">
  <meta name="msapplication-config" content="/public/favicon/browserconfig.xml">
  <meta name="theme-color" content="#111111">
</head>

<body>
  <div class="no-small-displays">
    <div class="message">
      <h1>this is best viewed on a larger screen</h1>
    </div>
  </div>
  <header class="flex-col displayable">
    <div class="logo">
      <h1 class="placeholder"><a href="https://birdibs.uk" target="_blank" rel="noreferrer noopener">birdribs</a></h1>
    </div>
    <div class="subheading">
      <h2 class="placeholder">electronic press kit</h2>
    </div>
    <div id="featured-images" class="flex-col">
      <div class="images flex-row scroller">
        <?php foreach ($creditedImages as $key => $image) : ?>
          <div class="featured-image scrollable">
            <img src="/public/img/<?php echo ($image['file']) ?>" alt="<?php echo ($image['title']) ?>" <?php echo ($key > 5 ? 'loading="lazy"' : '') ?> />
            <p>
              <a href="<?php echo ($image['url']) ?>" target="_blank" rel="noreferrer noopener">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <?php echo ($image['overlay-text']) ?>
              </a>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
      <a class=" download-button" href="https://drive.google.com/drive/folders/1j-LRzL3qPm0efdfrsvx2DiMQtaVG1SLK?usp=sharing" aria-label="high resolution images (opens in new tab)" target="_blank" rel="noopener noreferrer">
        <i class="fa-solid fa-cloud-arrow-down"></i> high res originals</a>
    </div>
  </header>
  <main class="displayable">
    <div class="flex-row about-section">
      <div class="flex-col">
        <section class="bio flex-col">
          <h2 class="placeholder">bio</h2>
          <p>Cheltenham-based post-grunge outfit BIRDRIBS came to life in late 2022 when long time friends Sean Walker (Guitar/Vocals) and Lloyd Culpepper (Bass/Vocals) met George Carey (Drums/Vocals) at the Frog & Fiddle in Cheltenham.</p>

          <p>Combining a blend of 90's influenced guitars with grungey bass lines and balls to the wall infectious drum grooves, BIRDRIBS have established a sound that they convey with ease.</p>

          <p>They released two singles "Sleep Clinic // Redundant Ave" in the summer of 2023, the band then came back in November 2023 with the release of a live album called "Live At The Sweaty Jazz Cafe" which encapsulates who they were as a band at that point in time.</p>

          <p>In November 2023 BIRDRIBS decided to enhance there sound by bringing in Tom Ponting on Guitar, The addition of Tommo really took the ribs to another level sonically bringing in another perspective to the band.</p>

          <p>With 2024 on the horizon, the boys will be doing many dates across the uk with some more releases pending as a newly appointed four piece.</p>
        </section>
        <section class="videos flex-col">
          <h2 class="title">videos</h2>
          <div class="flex-row scroller">
            <div class="scrollable flex-col">
              <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/qji-m2F3kv0?si=_n8hsg053alvNgJc&amp;start=10" title="birdribs @ vinestock 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <p>live @ vinestock 2023</p>
            </div>
          </div>
        </section>
      </div>
      <section class="music flex-col">
        <h2 class="title">music</h2>
        <div class="embed flex-col">
          <iframe style="border: 0; width: 350px; height: 786px;" src="https://bandcamp.com/EmbeddedPlayer/album=2813569206/size=large/bgcol=333333/linkcol=0f91ff/transparent=true/" seamless><a href="https://birdribs.bandcamp.com/album/at-the-sweaty-jazz-cafe">at the sweaty jazz cafe by BIRDRIBS</a></iframe>
          <iframe style="border: 0; width: 350px; height: 522px;" src="https://bandcamp.com/EmbeddedPlayer/album=1243833148/size=large/bgcol=333333/linkcol=0f91ff/transparent=true/" seamless><a href="https://birdribs.bandcamp.com/album/sleep-clinic-redundant-ave">Sleep Clinic // Redundant Ave by BIRDRIBS</a></iframe>
        </div>
      </section>
    </div>
    <div class="flex-row about-section">
      <section class="credits flex-col">
        <h2 class="title">credits</h2>
        <div class="flex-row">
          <div class="credits-details flex-col">
            <?php foreach ($artists as $artist) : ?>
              <span class="role">
                <?php echo ($artist['role']) ?>
              </span>
            <?php endforeach; ?>
          </div>
          <div class="credits-details flex-col">
            <?php foreach ($artists as $artist) : ?>
              <span class="person">
                <?php echo ($artist['name']) ?>
              </span>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="special-thanks flex-col">
          <h4 class="subheading">special thanks</h4>
          <div class="flex-row">
            <div class="credits-details flex-col">
              <!-- <span class="role">production</span>
              <span class="role">mastering</span> -->
              <span class="role">photography</span>
            </div>
            <div class="credits-details flex-col">
              <!-- <span class="person">future primate</span> -->
              <span class="person">steven tatlow</span>
            </div>
          </div>
        </div>
      </section>
      <section class="contact flex-col">
        <h2 class="title">all enquiries</h2>
        <div class="flex-row">
          <div class="contact-details flex-col">
            <p>
              <a class="download-button" href="mailto:bookings@birdribs.uk" aria-label="email bookings" target="_blank" rel="noopener noreferrer">
                <i class="fa-solid fa-envelope"></i>
                bookings@birdribs.uk
              </a>
            </p>
          </div>
        </div>
      </section>
    </div>
    <div class="flex-col about-section">
      <div class="links">
        <a class="bandcamp" href="https://birdribs.bandcamp.com/" target="_blank" rel="noopener noreferrer" aria-label="bandcamp">
          <i class="fa-brands fa-bandcamp"></i>
        </a>

        <a class="spotify" href="https://open.spotify.com/artist/2n1IIctLetLRqR28XNSVfz" target="_blank" rel="noopener noreferrer" aria-label="spotify">
          <i class="fa-brands fa-spotify"></i>
        </a>

        <a class="instagram" href="https://www.instagram.com/birdribsband/" target="_blank" rel="noopener noreferrer" aria-label="instagram">
          <i class="fa-brands fa-instagram"></i>
        </a>

        <a class="soundcloud" href="https://soundcloud.com/birdribs" target="_blank" rel="noopener noreferrer" aria-label="soundcloud">
          <i class="fa-brands fa-soundcloud"></i>
        </a>

        <a class="threads" href="https://www.threads.net/@birdribsband" target="_blank" rel="noopener noreferrer" aria-label="threads">
          <i class="fa-brands fa-threads"></i>
        </a>

        <a class="email" href="mailto:birdribsband@gmail.com" target="_blank" rel="noopener noreferrer" aria-label="email">
          <i class="fa-solid fa-envelope"></i>
        </a>
      </div>
    </div>
  </main>
  <footer>
    <div class="copyright">
      <a href="https://lloydculpepper.uk" rel="noopener noreferrer">© 2023 opvl</a>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/d83d45983d.js" crossorigin="anonymous"></script>
</body>

</html>