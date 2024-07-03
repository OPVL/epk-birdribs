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

## installation

```bash
git clone git@github.com:OPVL/epk-birdribs.git
cd epk-birdribs
npm install
npm run start
```

## features

- [x] responsive (ish)
- [x] shuffles credits to avoid arguments about who should be first
- [x] shuffles photos on page load
- [x] lazy loads photos
- [ ] mobile support
- [ ] firefox support

## development

### vite

this project uses [vite](https://vitejs.dev/) for development

```bash
npm run start # start dev server
npm run build # build for production
```

### scss

the scss files are located in `src/scss/`

```bash
npm run watch # watch for changes and rebuild
```

the compiled css is located in `dist/assets/`

### html

main html file is `src/index.html`

## deployment

this project utilises github actions to deploy automatically generate a build and add the release files to the releases page

### flow

1. add changes to new branch
2. increment package version `npm version [major | minor | patch]`
3. push changes to github
4. create a pull request
5. merge pull request
6. github actions will build and update the release page

note: you may need to start the runner if it's not already running
  
  ```bash
  # on self-hosted

  cd /path/to/runner
  ./run.sh
  ```

## license

MIT
