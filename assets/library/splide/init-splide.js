// Slider
class Slider {
	constructor(slider, sliderItems, sliderNum) {
		this.slider = slider;
		this.sliderItems = sliderItems;
		this.sliderNumber = sliderNum;
		this._initSlider();
	}

	_initSlider() {
		const splideSlider = document.querySelector(this.slider);
		const splideSliderItems = document.querySelectorAll(this.sliderItems);
		const splideSliderNumber = this.sliderNumber;
		// Existence checks
		if (splideSlider && splideSliderItems.length >= splideSliderNumber) {
			const mySplide = new Splide(splideSlider, {
				autoplay: true,
				interval: 5000,
				pauseOnHover: false,
				type: "loop",
				rewind: true,
				speed: 1500,
				pagination: true,
				arrows: false,
				drag: true,
				// important
				updateOnMove: true,
			});

			mySplide.mount();
		}
	}
}

// Main
class Main {
	constructor() {
		this._init();
	}

	_init() {
		// EN - If there are two or more .splide__slides in #splide
		// jp - #splideの中の.splide__slideが2以上ある場合
		new Slider("#fp-slider", ".splide__slide", "2");
		new Slider("#slide-banner-mobile", ".splide__slide__mobile", "2");
	}
}

// DOMContentLoaded event fires when DOM parsing is finished
document.addEventListener(
	"DOMContentLoaded",
	() => {
		const main = new Main();
	},
	false
);
