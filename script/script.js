import { trackProgress } from "https://esm.sh/@bramus/sda-utilities";

const model = document.querySelector("model-viewer");

function updateModel(progress) {
  // Rotate the model based on scroll progress
  model.orientation = `0deg -5deg ${progress * -720}deg`;

  // Add zoom functionality
  const maxZoom = 12; // Adjust the maximum zoom level as needed
  const minZoom = 0.29; // Adjust the minimum zoom level as needed
  const zoomRange = maxZoom - minZoom;
  const currentZoom = minZoom + progress * zoomRange;
  model.cameraOrbit = `0deg 95deg ${currentZoom}m`;
}
const stickyElement = document.querySelector('.sticky');
const stickyEnd = 900;

window.addEventListener('scroll', () => {
  if (window.scrollY > stickyEnd) {
    stickyElement.style.position = 'relative';
    stickyElement.style.top = 600 + 'px';
  } else {
    stickyElement.style.position = 'sticky';
    stickyElement.style.top = '60px';
  }
});

trackProgress(model.getAnimations()[0], (progress) => {
  updateModel(progress);
});
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
