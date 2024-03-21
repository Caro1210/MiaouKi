//test
console.log("Les flowers vont tourner plus vite !");

document.addEventListener("DOMContentLoaded", function() {
    let last_known_scroll_position = 0;
    let ticking = false;
  
    function doSomething(scroll_pos) {
        let speed = scroll_pos / 150; 
        let elements = ['.orchid', '.sunflower'];
        elements.forEach((selector) => {
            let element = document.querySelector(selector);
            if (element) {
                element.style.animationDuration = `${speed}s`;
            }
        });
    }

    window.addEventListener('scroll', function(e) {
      last_known_scroll_position = window.scrollY;
      if (!ticking) {
        window.requestAnimationFrame(function() {
          doSomething(last_known_scroll_position);
          ticking = false;
        });
        ticking = true;
      }
    });
});
