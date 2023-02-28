function countdown(minutes, seconds) {
    var countdownElement = document.getElementById('countdown');
    var secondsLeft = (minutes * 60) + seconds;
  
    var interval = setInterval(function() {
      var minutesLeft = Math.floor(secondsLeft / 60);
      var remainingSeconds = secondsLeft % 60;
  
      countdownElement.innerHTML = minutesLeft + ":" + remainingSeconds;
  
      if (secondsLeft == 0) {
        clearInterval(interval);
        document.getElementById('myButton').style.display = "block";
      }
  
      secondsLeft--;
    }, 1000);
  }

