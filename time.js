function updateTimeElapsed() {
  const elapsedTimeElements = document.querySelectorAll('.elapsedTime');

  elapsedTimeElements.forEach((element) => {
    const publishedDate = new Date(element.dataset.published);
    const now = new Date();
    const diff = now - publishedDate;

    const seconds = Math.floor(diff / 1000);
    const minutes = Math.floor(seconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);

    if (days > 0) {
      element.textContent = `${days} ${days == 1 ? 'día' : 'días'}`;
    } else if (hours > 0) {
      element.textContent = `${hours} ${hours == 1 ? 'hr' : 'hrs'}`;
    } else if (minutes > 0) {
      element.textContent = `${minutes} ${minutes == 1 ? 'min' : 'mins'}`;
    } else {
      element.textContent = `${seconds} ${seconds == 1 ? 'seg' : 'segs'}`;
    }
  });
}

updateTimeElapsed();
setInterval(updateTimeElapsed, 1000);
