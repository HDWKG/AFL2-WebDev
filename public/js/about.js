// Observer for `.hidden` elements
const hiddenObserver = new IntersectionObserver((entries) => {
  for (const entry of entries) {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    } else {
      entry.target.classList.remove('show');
    }
  }
},{
});
document.querySelectorAll('.hidden').forEach((item) => {
  hiddenObserver.observe(item);
});

// Observer for `.fade-up-element` elements
const fadeUpObserver = new IntersectionObserver((entries) => {
  for (const entry of entries) {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
    } else {
      entry.target.classList.remove('in-view');
    }
  }
}, {
});
document.querySelectorAll('.fade-up-element').forEach((item) => {
  fadeUpObserver.observe(item);
});