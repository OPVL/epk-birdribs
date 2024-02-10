
import '../scss/styles.scss'
import { drawShuffledImages } from './images'
import { drawCredits } from './credits';

window.addEventListener('DOMContentLoaded', () => {
    drawShuffledImages('featured-images-scroller');
    drawCredits('credits-wrapper');
});


