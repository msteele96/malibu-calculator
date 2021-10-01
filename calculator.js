function checkAnswer(answer) {
    function showConfetti() {
        let confetti = document.createElement(<iframe src="https://giphy.com/embed/lPoOHG39XAlV4it61H" width="960" height="600" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>)
        document.appendChild(confetti)
        setTimeout(() => document.removeChild(confetti),1000)
    }

    if(answer===1982) {
        showConfetti()
    }
}