import './bootstrap';
import Echo from 'laravel-echo';
window.Pusher = require('pusher-js');

// Configurez Echo pour utiliser Pusher
const echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-pusher-app-key',
    cluster: 'your-pusher-app-cluster',
    forceTLS: true,
});

// Écoutez les événements sur le canal privé de la soumission
echo.channel('submission.' + submissionId)
    .listen('SubmissionEvaluated', (event) => {
        alert(event.message); // Affiche une notification en temps réel
    });
