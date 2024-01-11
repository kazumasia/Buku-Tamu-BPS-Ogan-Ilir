
const ratings = document.querySelectorAll('.rating')
const ratingsContainer = document.querySelector('.ratings-container')
const sendBtn = document.querySelector('#send')
const panel = document.querySelector('#panel')
let selectedRating = 'Satisfied'

ratingsContainer.addEventListener('click', (e) => {
    if(e.target.parentNode.classList.contains('rating')) {
        removeActive()
        e.target.parentNode.classList.add('active')
        selectedRating = e.target.nextElementSibling.innerHTML
    }
    if(e.target.classList.contains('rating')) {
        removeActive()
        e.target.classList.add('active')
        selectedRating = e.target.nextElementSibling.innerHTML
    }

})

sendBtn.addEventListener('click', (e) => {
    document.addEventListener('DOMContentLoaded', function () {
        const ratings = document.querySelectorAll('.rating');
        const ratingInput = document.getElementById('rating');
    
        ratings.forEach((rating) => {
            rating.addEventListener('click', () => {
                const selectedValue = rating.getAttribute('data-value');
                ratingInput.value = selectedValue;
    
                removeActive();
                rating.classList.add('active');
            });
        });
    
        document.getElementById('feedbackForm').addEventListener('submit', function (e) {
            const selectedRating = document.querySelector('.rating.active');
            if (!selectedRating) {
                alert('Please select your satisfaction level.');
                e.preventDefault();
            }
        });
    });
})
    
    function removeActive() {
        ratings.forEach((r) => r.classList.remove('active'));
    }
   

