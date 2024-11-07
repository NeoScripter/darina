import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function setupProgressVideos() {
    const videos = document.querySelectorAll('.progress__video');

    videos.forEach(video => {
        const svgElement = video.nextElementSibling;
        const progressCircle = svgElement.querySelector('.progress-ring__circle');

        const radius = progressCircle.r.baseVal.value;
        const circumference = 2 * Math.PI * radius;

        progressCircle.style.strokeDasharray = circumference;
        progressCircle.style.strokeDashoffset = circumference;

        video.addEventListener("timeupdate", () => {
            const progressPercent = (video.currentTime / video.duration) * 100;
            setProgress(progressPercent, progressCircle, circumference);
        });

        svgElement.addEventListener("click", () => {
            if (video.paused) {
                video.play();

                svgElement.querySelectorAll('line').forEach(line => {
                    line.classList.remove('hidden');
                });
                svgElement.querySelector('polygon').classList.add('hidden');

            } else {
                video.pause();

                svgElement.querySelectorAll('line').forEach(line => {
                    line.classList.add('hidden');
                });
                svgElement.querySelector('polygon').classList.remove('hidden');
            }
        })
    })
}

function setProgress(percent, progressCircle, circumference) {
    const offset = circumference - (percent / 100) * circumference;
    progressCircle.style.strokeDashoffset = offset;
}

setupProgressVideos();
