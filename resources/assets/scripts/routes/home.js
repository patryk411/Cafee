export default {
  init() {
    // JavaScript to be fired on the home page
    let isCounting = false;

    function countTo50(endValue, element) {
      let count = 0;

      const countInterval = setInterval(() => {
        if (count >= endValue) {
          clearInterval(countInterval);
        } else {
          count = count + 3;
          element.textContent = count;
        }
      }, 50);
    }

    function handleScroll() {
      const scrollPosition = window.scrollY;

      if (!isCounting && scrollPosition >= 2000) {
        countTo50(250, document.querySelector('#count1'));
        countTo50(50, document.querySelector('#count2'));
        countTo50(75, document.querySelector('#count3'));
        countTo50(100, document.querySelector('#count4'));
        isCounting = true;
        window.removeEventListener('scroll', handleScroll);
      }
    }

    window.addEventListener('scroll', handleScroll);

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
