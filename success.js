    // JavaScript to check for the success query parameter and display the message
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success') && urlParams.get('success') === '1') {
        var successAlert = document.createElement('div');
        successAlert.innerHTML = 'We\'ve received your message. Expect a response soon.';
        successAlert.style.backgroundColor = 'green';
        successAlert.style.color = 'white';
        successAlert.style.padding = '10px';
        successAlert.style.position = 'fixed';
        successAlert.style.top = '10px';
        successAlert.style.left = '50%';
        successAlert.style.transform = 'translateX(-50%)';
        successAlert.style.zIndex = '9999';
        document.body.appendChild(successAlert);

        setTimeout(function() {
            successAlert.style.display = 'none';
        }, 5000); // 5000 milliseconds = 5 seconds
    }