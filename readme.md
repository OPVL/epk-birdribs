# BIRDIBS EPK

![image](https://github.com/OPVL/epk-birdribs/assets/17033678/f944f9dd-a49b-4955-94cf-97f08da5f03b)

simple press kit website for the band [birdribs](https://birdribs.uk)

## contents

- [BIRDIBS EPK](#birdibs-epk)
  - [contents](#contents)
  - [requirements](#requirements)
  - [installation](#installation)
  - [features](#features)
  - [development](#development)
    - [sass](#sass)
    - [php](#php)
  - [license](#license)

## requirements

- nodejs
- npm
- php

## installation

```bash
git clone git@github.com:OPVL/epk-birdribs.git
cd epk-birdribs
npm install
npm run build

php -S localhost:8000
```

## features

- [x] responsive (ish)
- [x] shuffles credits to avoid arguments about who should be first
- [x] shuffles photos on page load
- [x] lazy loads photos
- [ ] mobile support
- [ ] firefox support

## development

it's idiot proof

### sass

the sass files are located in `assets/sass/`

```bash
npm run watch # watch for changes and rebuild
```

the compiled css is located in `public/css/`

### php

only one source file is used: `index.php`

__if you're reading this from cyberstart, get fucked cunts__

## license

MIT
