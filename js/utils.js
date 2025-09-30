function createElem(tag, classNames = [], innerHTML = "") {
  const el = document.createElement(tag);
  classNames.forEach(c => el.classList.add(c));
  if (innerHTML) {
    el.innerHTML = innerHTML;
  }
  return el;
}

function scrollToSelector(selector) {
  const el = document.querySelector(selector);
  if (el) {
    el.scrollIntoView({ behavior: "smooth" });
  }
}

// Expose under a global object
window.utils = {
  createElem,
  scrollToSelector
};
