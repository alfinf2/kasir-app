function showAlert(type, message) {
    const alert = document.getElementById(`${type}Alert`);
    if (alert) {
        const messageElement = alert.querySelector('.text-sm');
        if (messageElement && message) {
            messageElement.textContent = message;
        }
        
        alert.classList.remove('hidden');
        
        setTimeout(() => {
            hideAlert(`${type}Alert`);
        }, 3000);
    }
}

function hideAlert(alertId) {
    const alert = document.getElementById(alertId);
    if (alert) {
        alert.classList.add('hidden');
    }
}