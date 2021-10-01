function checkAnswer(answer) {
    function showConfetti() {
        let confetti = document.createElement("img")
        Object.assign(confetti,{
            src: "confetti.gif",
            width: 960,
            height: 600,
            frameBorder: 0,
            allowFullScreen: true
        })
        document.getElementById("celebration").appendChild(confetti)
        setTimeout(() => document.getElementById("celebration").removeChild(confetti),1000)
    }

    if(answer===1982) {
        showConfetti()
    }
}