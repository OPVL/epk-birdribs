import * as data from './images.json'
const images = data.default;

const getImages = () => {
    return images;
}

const shuffledImages = (() => {
    return images.sort(() => Math.random() - 0.5);
})

const drawShuffledImages = (target) => {
    const images = shuffledImages();
    const scroller = document.getElementById(target)

    images.forEach((image, index) => {
        const featuredImage = document.createElement('div');
        featuredImage.classList.add('featured-image', 'scrollable');
        featuredImage.innerHTML = `
            <img src="/img/${image.file}" alt="${image.title}" ${index > 5 ? 'loading="lazy"' : ''} />
            <p>
                <a href="${image.url}" target="_blank" rel="noreferrer noopener">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    ${image['overlay-text']}
                </a>
            </p>
        `;
        scroller.appendChild(featuredImage);
    });
}



export { getImages, drawShuffledImages };
