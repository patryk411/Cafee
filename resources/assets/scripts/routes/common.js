export default {
  init() {
  const btn = document.querySelector('#product-btn')
  const imgs = document.querySelectorAll('.main__shop__single-product--img')
    
   const handleHidden = () => {
      btn.style.visibility = 'hidden';
    }
    
    const handleVisible = () => {
      btn.style.visibility = 'visible';
   }

   imgs.forEach(img => {
     img.addEventListener('mouseenter', handleVisible);
     img.addEventListener('mouseleave', handleHidden);
   })

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
