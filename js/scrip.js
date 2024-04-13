document.addEventListener('DOMContentLoaded', function slides(){
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlide(index)
    {
        slides.forEach((slide) => {
        slide.style.display = 'none';
        });

        slides[index].style.display = 'block';
    }

    function nextSlide()
    {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    showSlide(currentSlide);

    document.getElementById('positiveBtn').addEventListener('click', nextSlide);
    document.getElementById('negativeBtn').addEventListener('click', nextSlide);
});